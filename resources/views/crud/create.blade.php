@extends('template')

@section('content')
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <form action="/crud" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas">
        </div>
        <div class="mb-3">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis">
        </div>
        <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jk" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Hobi</label>
            <input type="text" class="form-control" name="hobi">
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
    </form>