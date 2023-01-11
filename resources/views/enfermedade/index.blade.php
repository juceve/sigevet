@extends('adminlte::page')

@section('title', 'Enfermedades | ')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Enfermedades') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('enfermedades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dataTable">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enfermedades as $enfermedade)
                                        <tr>
                                            <td>{{ $enfermedade->id }}</td>
                                            
											<td>{{ $enfermedade->nombre }}</td>
											<td>{{ $enfermedade->descripcion }}</td>

                                            <td width="120px">
                                                <form action="{{ route('enfermedades.destroy',$enfermedade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('enfermedades.show',$enfermedade->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('enfermedades.edit',$enfermedade->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
            'Se registró correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'update'){
    <script>
        Swal.fire(
            'Excelente!',
            'Registro actualizado correctamente.',
            'success'
        );
    </script>
}
@endif
@if(session('success') == 'delete'){
    <script>
        Swal.fire(
            'Excelente!',
            'El registro se eliminó correctamente.',
            'success'
        );
    </script>
}
@endif
    <script>
        $(document).ready( function () {
            $('.dataTable').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                order: [[0, 'desc']],
            });

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert-success").slideUp(500);
            });

            
        });
    </script>
@endsection