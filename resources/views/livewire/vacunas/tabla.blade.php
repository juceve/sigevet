<div>
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <form class="form-inline float-left">
                <span for="">Mostrar:</span>
                <select class="form-control ml-2 mr-2" wire:model="paginate">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="100">100</option>
                </select>
                <span>registros</span>
            </form>
        </div>
        <div class="col-12 col-md-6 mb-2">
            <form class="form-inline float-right">
                <span for="">Buscar:</span>
                <input type="search" class="form-control ml-2" wire:model="busqueda">
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover" id="">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>PACIENTE</th>
                    <th>MEDICAMENTO</th>
                    <th>FECHA APLICACION</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacunas as $vacuna)
                    <tr>
                        <td>{{ $vacuna->id }}</td>
                        <td>{{ $vacuna->paciente }}</td>
                        <td>{{ $vacuna->medicamento }}</td>
                        <td>{{ Str::substr($vacuna->created_at, 0, 10) }}</td>

                        <td align="right">
                            <form action="{{ route('vacunas.destroy',$vacuna->id) }}" method="POST" class="eliminar-vacuna">
                                <a class="btn btn-sm btn-primary " href="{{ route('vacunas.show',$vacuna->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                <a class="btn btn-sm btn-success" href="{{ route('vacunas.edit',$vacuna->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
    <div class="float-right">
        {{ $vacunas->links() }}
    </div>
</div>
