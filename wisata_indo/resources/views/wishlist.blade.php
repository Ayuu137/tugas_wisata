@section('title','Wishlist')

<x-app-layout>
    <x-slot name="slot">
    {{-- @method('PUT') --}}
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($tempatlist as $data)
            <tr>
                <td>{{$loop->iteration + $data -> firstItem()-1}}</td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>
    </x-slot>
</x-app-layout>