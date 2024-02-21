@extends('template')

@section('content')
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <form action="/crud/{{$siswa->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">
        </div>
        <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}">
        </div>
        <div class="mb-3">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis" value="{{$siswa->nis}}">
        </div>
        <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option value="L" @if ($siswa->jk == 'L')selected @endif>Laki-laki</option>
                <option value="P" @if ($siswa->jk == 'P')selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" rows="4">{{$siswa->alamat}}</textarea>
        </div>
        <div class="mb-3">
            <label for="">Hobi</label>
            <input type="text" class="form-control" name="hobi" value="{{$siswa->hobi}}">
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
    </form>