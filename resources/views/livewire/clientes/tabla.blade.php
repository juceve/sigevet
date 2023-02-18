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
        <table class="table table-bordered table-hover" id="">
            <thead class="thead">
                <tr style="background-color: #417ca3" class="text-white" align="center">
                    <th style="width: 50px">ID</th>
                    <th>NOMBRE</th>
                    <th>TELEFONO</th>
                    <th style="width: 250px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td style="background-color: #fad157" align="center"><strong>{{ $cliente->id }}</strong></td>
                    <td class="table-primary"><strong>{{ $cliente->nombre }}</strong></td>
                    <td class="table-info"><strong>{{ $cliente->telefono }}</strong></td>

                    <td class="text-center">
                        <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i
                                class="fa fa-fw fa-eye"></i> Ver</a>
                        <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i
                                class="fa fa-fw fa-edit"></i> Editar</a>
                        <a href="nuevo-paciente/{{$cliente->id}}" class="btn btn-sm btn-info" title="Nuevo paciente">
                            <i class="fas fa-plus-circle"></i><i class="fas fa-paw"></i> Nuevo
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="float-right">
        {{ $clientes->links() }}
    </div>
   
</div>