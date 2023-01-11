@extends('adminlte::page')

@section('title', 'RAZAS |')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-olive mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Razas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('razas.create') }}" class="btn btn-olive float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="dataTable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 150px;">Animal</th>
										<th style="width: 150px;">Nombre Raza</th>
										<th>Descripcion</th>
										

                                        <th style="width: 250px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($razas as $raza)
                                        <tr>
                                            <td>{{ $raza->id }}</td>
                                            <td>{{ $raza->animale->nombre }}</td>
											<td>{{ $raza->nombre }}</td>
											<td>{{ $raza->descripcion }}</td>
											

                                            <td class="text-center">
                                                <form action="{{ route('razas.destroy',$raza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('razas.show',$raza->id) }}"><i class="fa fa-fw fa-eye" title="Ver detalles"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('razas.edit',$raza->id) }}"><i class="fa fa-fw fa-edit" title="Editar"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash" title="Eliminar"></i></button>
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
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                order: [[1, 'asc']],
            });

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
        });
    </script>
@endsection