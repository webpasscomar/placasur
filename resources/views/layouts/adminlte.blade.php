@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

@stop


@section('content')
    {{ $slot }}
@stop



@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
@stop

@section('js')
    @stack('modals')
    @livewireScripts
    {{-- <script>
        console.log('Hi!');
    </script> --}}
    <script src="sweetalert2.all.min.js"></script>

    <script>
        Livewire.on('alertDelete', id => {
            Swal.fire({
                title: '¿Confirma la eliminación?',
                text: "La acción no podrá ser revertida!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('delete', id);
                    //    Swal.fire(
                    //        'Borrado!',
                    //        'Ha sido eliminado con éxito.',
                    //        'success'
                    //    )
                }
            })
        })



        //emit mensaje negativo
        Livewire.on('mensajeNegativo', function(mensaje) {
            Swal.fire({
                title: 'Atencion',
                text: mensaje['mensaje'],
                icon: 'warning',
                showCloseButton: true
            })
        });


        //emit mensaje positivo
        Livewire.on('mensajePositivo', function(mensaje) {
            Swal.fire({
                title: 'Excelente!',
                text: mensaje['mensaje'],
                icon: 'success',
                showCloseButton: true
            })
        });

        // $('#rolesTable').DataTable();
        // $(document).ready(function() {
        $('#rolesTable, #usersTable, #servicesTable').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando _START_ al _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 al 0 de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

        });
        // });

        // $('#usersTable').DataTable();
    </script>

@stop

@section('plugins.Datatables', true)
