@extends('template')

@section('content')
    <h1>Crud Data Siswa</h1>
    <a href="/crud/create" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>JK</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @foreach ($siswas as $key => $siswa)
        <tbody>
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->kelas}}</td>
                <td>{{$siswa->jk}}</td>
                <td>
                    <a href="/crud/{{$siswa->id}}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="/crud/{{$siswa->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <form action="/crud/{{$siswa->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>