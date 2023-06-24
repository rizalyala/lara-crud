
<div>
    <table>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>profesi</th>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['nama']}}</td>
            <td>{{$data['profesi']}}</td>
        </tr>
        @endforeach
    </table>
</div>
