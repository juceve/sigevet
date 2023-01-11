<div class="table-responsive" style="overflow-y:auto; height-max:450px;">
    <table class="table">
        <thead>
            <tr class="table-warning">
                <th>ID</th>
                <th>FECHA VACUNACION</th>
                <th>MEDICAMENTO</th>
                <th>DOSIS</th>
                <th>PROXIMA DOSIS</th>
            </tr>
        </thead>
        <tbody>
            @if (count($vacunaciones) > 0)
                @foreach ($vacunaciones as $vacuna)
                <tr>
                    <td>{{$vacuna->id}}</td>
                    <td>{{$vacuna->created_at}}</td>
                    <td>{{$vacuna->medicamento}}</td>
                    <td>{{$vacuna->numdosis}}</td>
                    <td>{{$vacuna->proxdosis}}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5">
                    <small>No se encontraron registros...</small>
                </td>
            </tr>                
            @endif
            
        </tbody>

    </table>
</div>
