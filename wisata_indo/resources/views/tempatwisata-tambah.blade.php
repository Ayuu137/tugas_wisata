@section('title','Tempat Wisata')

<x-app-layout>
    <x-slot name="slot">
        <form action="tempatwisata" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_tempat">Judul</label>
                <input type="text" class="form-control" name="nama_tempat" id="nama_tempat">
            </div>

            {{-- <div class="mb-3">
                <label for="gambar">Gambar</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
            </div> --}}

            <div class="mb-3">
                <label for="deskrisi">Deskripsi</label>
                <input type="text" class="form-control" name="deskrisi" id="deskrisi">
            </div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </x-slot>
</x-app-layout>