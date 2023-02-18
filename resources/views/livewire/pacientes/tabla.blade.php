<div>
    <div class="row">
        <div class="col-12 col-md-6 mb-2">
            <form class="form-inline float-left">
                <span for="">Mostrar:</span>
                <select class="form-control ml-2 mr-2" wire:model="paginate">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="100">50</option>
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
                    <th>No</th>                                        
                    <th>Nombre</th>										
                    <th>Raza</th>                                        
                    <th>Sexo</th>
                    <th>Propietario</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
               
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td style="background-color: #fad157" align="center"><strong>{{ $paciente->id }}</strong></td>
                        
                        <td class="iVerde"><strong>{{ $paciente->nombre }}</strong></td>
                        
                        <td class="table-info"><strong>{{ $paciente->raza }}</strong></td>
                        
                        <td class="table-warning"><strong>{{ $paciente->sexo }}</strong></td>
                        <td class="table-primary "><a href="../clientes/{{$paciente->clienteid}}" class="text-dark"><strong>{{$paciente->cliente}}</strong></a> </td>

                        <td class="text-right" width="220">
                            <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                <a class="btn btn-sm btn-success" href="atencion-consulta/{{$paciente->id}}" title="Atender consulta"><i class="fas fa-hand-holding-medical"></i> </a>
                                <a class="btn btn-sm btn-warning" href="vacunacion/{{$paciente->id}}" title="Realizar Vacunación"><i class="fas fa-syringe"></i> </a>
                                <a class="btn btn-sm btn-info" href="nuevo-anticonceptivo/{{$paciente->id}}" title="Aplicar anticonceptivo"><i class="fas fa-vial"></i> </a>
                                <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show',$paciente->id) }}" title="Ver datos del paciente"><i class="fa fa-fw fa-eye"></i></a>
                                <a class="btn btn-sm btn-secondary" href="{{ route('pacientes.edit',$paciente->id) }}" title="Editar datos"><i class="fa fa-fw fa-edit"></i></a>                                                    
                                @csrf
                                @method('DELETE')
                                {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> --}}
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="float-right">
        {{ $pacientes->links() }}
    </div>
   
</div>