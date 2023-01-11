<div class="table-responsive" style="overflow-y:auto; height-max:450px;">
    <table class="table">
        <thead>
            <tr class="table-info">
                <th>ID</th>
                <th>FECHA</th>
                <th>MEDICAMENTO</th>
                <th>DOSIS</th>
                <th>PROXIMA DOSIS</th>
            </tr>
        </thead>
        <tbody>
            @if (count($anticonceptivos) > 0)
                @foreach ($anticonceptivos as $anticonceptivo)
                <tr>
                    <td>{{$anticonceptivo->id}}</td>
                    <td>{{$anticonceptivo->created_at}}</td>
                    <td>{{$anticonceptivo->medicamento}}</td>
                    <td>{{$anticonceptivo->numdosis}}</td>
                    <td>{{$anticonceptivo->proxdosis}}</td>
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
