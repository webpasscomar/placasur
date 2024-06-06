<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contacto');
    }

    public function submit(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|min:3|max:50|regex:/^[\pL\s\-]+$/u|not_regex:/^[\s]*$/u',
            'apellido' => 'required|string|min:3|max:50|regex:/^[\pL\s\-]+$/u|not_regex:/^[\s]*$/u',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'asunto' => 'required',
            'telefono' => 'nullable|regex:/^[0-9]+$/|digits_between:7,15',
            'rubro' => 'nullable',
            'mensaje' => 'required|string|min:10|max:500',
        ], [
            'nombre.required' => 'Debe ingresar un nombre',
            'nombre.min' => 'Ingrese al menos 3 caracteres',
            'nombre.max' => 'No puede ingresar más de 50 caracteres',
            'nombre.regex' => 'Ingrese un nombre válido',
            'nombre.not_regex' => 'Ingrese un nombre válido',
            'apellido.required' => 'Debe ingresar el apellido',
            'apellido.min' => 'Ingrese al menos 3 caracteres',
            'apellido.max' => 'No puede ingresar más de 50 caracteres',
            'apellido.regex' => 'Ingrese un apellido válido',
            'apellido.not_regex' => 'Ingrese un apellido válido',
            'email.required' => 'Debe ingresar un correo electronico',
            'email.email' => 'Ingrese un correo electronico válido',
            'email.regex' => 'Ingrese un correo electronico válido',
            'asunto.required' => 'Debe seleccionar un asunto',
            'telefono.regex' => 'Ingrese un telefono válido',
            'telefono.digits_between' => 'El teléfono debe tener entre 7 y 15 dígitos',
            'mensaje.required' => 'Debe escribir un mensaje',
            'mensaje.min' => 'Ingrese al menos 10 caracteres',
            'mensaje.max' => 'No puede escribir más de 500 caracteres',
            'mensaje.regex' => 'Ingrese un mensaje válido',
        ]);

        // Configurar destinatarios de correo basados en el asunto seleccionado
        $to = '';
        switch ($validatedData['asunto']) {
            case 1:
                $to = 'info@placasur.com.ar'; // Correo para consulta general
                break;
            case 2:
                $to = 'rjbellingeri@placasur.com.ar'; // Correo para soporte técnico
                break;
            case 3:
                $to = 'anahigomez.eh@gmail.com'; // Correo para reporte de problema
                break;
            default:
                $to = 'anahigomez.eh@gmail.com'; // Correo de respaldo
                break;
        }

        // Envía el correo
        Mail::send('contacto-email', ['data' => $validatedData], function ($message) use ($validatedData, $to) {
            $message->to($to);
            $message->subject('Nuevo mensaje de contacto: ' . $validatedData['asunto']);
        });

        // Redirige de vuelta al formulario con un mensaje de éxito
        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
    }
}
