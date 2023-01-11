@extends('adminlte::page')

@section('title', 'LISTA CONSULTAS |')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-success mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Consultas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                    Nueva Consulta
                                </a>
                              </div>
                        </div>
                    </div>
                    {{-- @if ($message = Session::get('success'))

                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>                   
                                                    
                    @endif --}}

                    <div class="card-body">
                        
                        @livewire('consultas.tabla')
                    </div>
                </div>
                {{-- {!! $consultas->links() !!} --}}
            </div>
        </div>
    </div>
@endsection

@section('js')
@if(session('success') == 'create'){
    <script>
        Swal.fire(
            'Excelente!',
            'La consulta se atendió correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'update'){
    <script>
        Swal.fire(
            'Excelente!',
            'La consulta se actualizó correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'delete'){
    <script>
        Swal.fire(
            'Excelente!',
            'La consulta se eliminó correctamente.',
            'success'
        );
    </script>
}
@endif
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                order: [[0, 'desc']],
            });

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert-success").slideUp(500);
            });

            
        });
        

        $('.eliminar-consulta').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Esta seguro de eliminar el cliente seleccionado?',
                text: "El cliente eliminado no se podrá recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {                    
                    this.submit();
                }
            })
        });
    </script>
@endsection
