@include('layout.header')
        <h3>edit kategori</h3>
        <form action="{{route('kategori.update', $kategori->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Kategori</label>
                <input type="text" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}">
            </div>
            <button type="submit" class="tombol">ubah</button>

        </form>

       
@include('layout.footer')
