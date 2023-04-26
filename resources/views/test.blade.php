<table>
    <thead>
        <tr>
            <th>Quốc gia</th>
            <th>Số lượng</th>
            
        </tr>
        @foreach ($data['Countries'] as $item) 
        <tr>
            
            <td>{{$item['Country']}} </td>
            <td>{{$item['TotalConfirmed']}}</td>
        </tr>
        @endforeach
    </thead>
</table>