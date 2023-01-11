<div>
    <div id="accordion" style="overflow-y:auto; height-max:450px;">
        @if (count($consultas) <= 0)
            <small>No se encontraron registros...</small>
        @endif
        @foreach ($consultas as $consulta)
           <div class="card" >
            <div class="card-header" style="background-color: powderblue">
                <h4 class="card-title w-100">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#c{{$consulta->id}}" aria-expanded="false">
                        {{$consulta->dateConsulta}}
                    </a>
                </h4>
            </div>
            <div id="c{{$consulta->id}}" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <td style="width:150px;"><strong>NRO. CONSULTA</strong></td>
                            <td>{{$consulta->id}}</td>      
                            <td style="width:150px;"><strong>Atendido por:</strong></td>
                            <td>{{$consulta->user->name}}</td>                       
                        </tr>
                        <tr>
                            <td><strong>ANAMNESIS</strong></td>
                            <td colspan="3">{{$consulta->anamnesis}}</td>
                        </tr>
                        <tr>
                            <td><strong>DIAG. PRESUNTIVO</strong></td>
                            <td colspan="3">{{$consulta->diagpresuntivo}}</td>
                        </tr>
                        <tr>
                            <td><strong>DIAG.CONCLUSIVO</strong></td>
                            <td colspan="3">{{$consulta->diagconclusivo}}</td>
                        </tr>
                        <tr>
                            <td><strong>RECONSULTA</strong></td>
                            <td colspan="3">{{substr($consulta->fecreconsulta,0,10)}}</td>
                        </tr>
                        <tr>
                            <td><strong>RECOMENDACIOES</strong></td>
                            <td colspan="3">{{$consulta->recomendaciones}}</td>
                        </tr>
                        <tr>
                            <td><strong>IMPORTE</strong></td>
                            <td colspan="3">{{$consulta->importe}}</td>
                        </tr>
                        @if (count($consulta->tratamientos) > 0)
                        <tr >
                            <td colspan="4">
                                <strong>TRATAMIENTO</strong>                                
                                   <table class="table table-warning">
                                    <thead>
                                        <tr>
                                            <th>Medicamento</th>
                                            <th>Indicaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($consulta->tratamientos as $item)
                                        <tr >
                                            <td>{{$item->medicacion}}</td>                                            
                                            <td>{{$item->indicaciones}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table> 
                                
                                
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div> 
        @endforeach
        
    </div>
</div>
