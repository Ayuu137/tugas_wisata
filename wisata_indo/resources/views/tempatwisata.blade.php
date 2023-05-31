@section('title','Tempat Wisata')

<x-app-layout>
    <x-slot name="slot">
        <a href="tempatwisata-tambah" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($tempatlist as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama_tempat}}</td>
                    <td>{{$item->gambar}}</td>
                    <td>{{$item->alamat}}</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">| Delete | </a></td>
                    <td><a href="/wishlist/{{$item->id}}">Add</a></td>
                    {{-- <td><a href="teacher/{{$item->id}}">detail</a></td> --}}
                </tr>
                @endforeach
            </tbody>
        </tbody>
    </table>
    </x-slot>
</x-app-layout>