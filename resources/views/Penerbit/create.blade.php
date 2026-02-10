@include('layout.header')
        <h3>Buat Penerbit</h3>
        <form action="{{route('penerbit.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Penerbit</label>
                <input type="text" name="nama_penerbit" id="" placeholder="masukan nama penerbit">
            </div>
            <button type="submit" class="tombol">submit</button>

        </form>

       
@include('layout.footer')
