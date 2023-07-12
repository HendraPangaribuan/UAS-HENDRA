@extends('layout.main')
@section('content')


<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('tahun/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $tahun->id ?>">
Nama Tahun  <input type="text" name="nama_tahun" value="<?php echo $tahun->nama_tahun ?>"><br>
Keterangan <input type="text" name="keterangan" value="<?php echo $tahun->keterangan ?>"><br>

<input type="submit" value="Simpan">
</form>     
@endsection