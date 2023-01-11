@extends('adminlte::page')

@section('template_title')
    Tratamientopred
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-secondary mt-3">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                TRATAMIENTOS PREDETERMINADOS
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tratamientos') }}" class="btn btn-secondary float-right"  data-placement="left">
                                    <i class="fas fa-plus-circle"></i>
                                  Nuevo
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
                            <table class="table table-striped table-hover dataTable">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

                                        <th>NOMBRE</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tratamientopreds as $tratamientopred)
                                        <tr>
                                            <td>{{ $tratamientopred->id }}</td>

                                            <td>{{ $tratamientopred->name }}</td>

                                            <td>
                                                <form action="{{ route('tratamientopreds.destroy', $tratamientopred->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('tratamientopreds.show', $tratamientopred->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Ver</a>
                                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('tratamientopreds.edit',$tratamientopred->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Eliminar</button>
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
    @if (session('success') == 'create')
        {
        <script>
            Swal.fire(
                'Excelente!',
                'Registro exitoso.',
                'success'
            );
        </script>
        }
    @endif
    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                order: [
                    [0, 'desc']
                ],
            });

            $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
            });
        });
    </script>
@endsection
