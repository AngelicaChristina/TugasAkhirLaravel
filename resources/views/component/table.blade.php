<table class="table" style="text-align:center">
    <thead>
        <tr>
            @foreach ($thead as $head)
            <th>{{$head}}</th>
            @endforeach
        </tr> 
        {{-- baris header --}}
    </thead>
    <tbody>
    @foreach ($data as $row)
    <tr>
        @foreach ($column as $col)
        <td>{{$row->$col}}</td>
    @endforeach
    </tr>
    @endforeach
    </tbody>
</table>