<div>
    <form action="{{route('postform')}}" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">

        <label for="profesi">Profesi</label>
        <input type="text" id="profesi" name="profesi">

        <button type="submit">Oke</button>
    </form>
</div>