<?php

Namespace App\Http\Controllers;

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
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
            'asunto' => 'required|numeric',
            'telefono' => 'nullable|string',
            'rubro' => 'nullable|numeric',
            'mensaje' => 'required|string',
        ]);

        // Configurar destinatarios de correo basados en el asunto seleccionado
        $to = '';
        switch ($validatedData['asunto']) {
            case 1:
                $to = 'correo1@example.com'; // Correo para consulta general
                break;
            case 2:
                $to = 'correo2@example.com'; // Correo para soporte técnico
                break;
            case 3:
                $to = 'correo3@example.com'; // Correo para reporte de problema
                break;
            default:
                $to = 'correo@example.com'; // Correo de respaldo
                break;
        }

        // Envía el correo
        Mail::send('contacto', ['data' => $validatedData], function ($message) use ($validatedData, $to) {
            $message->to($to);
            $message->asunto('Nuevo mensaje de contacto: ' . $validatedData['asunto']);
        });

        // Redirige de vuelta al formulario con un mensaje de éxito
        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
    }
}
