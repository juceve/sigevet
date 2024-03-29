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
        <table class="table table-hover table-bordered" id="">
            <thead class="thead">
                <tr style="background-color: #417ca3" class="text-white" align="center">
                    <th>Nro.</th>
                    <th>Paciente</th>
                    <th>Propietario</th>
                    <th>Fecha Consulta</th>										
                    <th>Fecha Reconsulta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($consultas->count() > 0)
                @foreach ($consultas as $consulta)
                    <tr>
                        <td style="background-color: #fad157" align="center"><strong>{{ $consulta->id }}</strong></td>
                        <td class="iVerde"><strong>{{ $consulta->paciente }}</strong></td>
                        <td class="table-primary"><a href="../clientes/{{$consulta->cliente_id}}" title="Ver Cliente"><strong>{{$consulta->cliente}}</strong></a></td>
                        <td class="table-warning"><strong>{{ substr($consulta->dateConsulta,0,10) }}</strong></td>
                        
                        <td class="table-danger"><strong>{{ substr($consulta->fecreconsulta,0,10) }}</strong></td>
                        

                        <td class="text-right" style="width: 150px;">
                            <form action="{{ route('consultas.destroy',$consulta->id) }}" method="POST" class="eliminar-consulta">
                                <a class="btn btn-sm btn-primary " href="{{ route('consultas.show',$consulta->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                <a class="btn btn-sm btn-success" href="{{ route('consultas.edit',$consulta->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="6" align="center"><span>No se encontraron registros</span></td>
                    </tr>
                @endif
                
            </tbody>
        </table>        
    </div>
    <div class="float-right">
        {{ $consultas->links() }}
    </div>
</div>
