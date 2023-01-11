@extends('adminlte::page')

@section('title', 'Unidad de medida | ')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-yellow mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidades de medida para Medicamentos') }}
                            </span>

                              <div class="float-right">
                                <a href="{{ route('unimedidas.create') }}" class="btn btn-yellow float-right"  data-placement="left">
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
                                        
										<th>Descripcion</th>
                                        <th>Abreviatura</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unimedidas as $unimedida)
                                        <tr>
                                            <td>{{ $unimedida->id }}</td>
                                            
											<td>{{ $unimedida->descripcion }}</td>
                                            <td>{{ $unimedida->abreviatura }}</td>

                                            <td>
                                                <form action="{{ route('unimedidas.destroy',$unimedida->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('unimedidas.show',$unimedida->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('unimedidas.edit',$unimedida->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
                order: [[0, 'desc']],
            });

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
        });
    </script>
@endsection