@extends('adminlte::page')

@section('title', 'Vacunaciones | ')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-warning mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de vacunaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.index') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                  {{ __('Nueva Vacunación') }}
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
                        @livewire('vacunas.tabla')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@if(session('success') == 'create'){
    <script>
        Swal.fire(
            'Excelente!',
            'La vacunación se atendió correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'update'){
    <script>
        Swal.fire(
            'Excelente!',
            'La vacunación se actualizó correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'delete'){
    <script>
        Swal.fire(
            'Excelente!',
            'La vacunación se eliminó correctamente.',
            'success'
        );
    </script>
}
@endif
    <script>
        $('.eliminar-vacuna').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Esta seguro de eliminar la vacunación?',
                text: "La vacunación eliminada no se podrá recuperar",
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
    <script>
        $(document).ready( function () {
           $('#dataTable').DataTable({
               "language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
               },
               order: [[0, 'desc']],
           });
       });
   </script>
@endsection
