@extends('layout.main')
@section('content')



<h1>Tambah Data Tahun</h1>
<form action="{{ asset('tahun/tambah_proses') }}" method="POST">
@csrf
nama Tahun <input type="text" name="nama_tahun"><br>
Keterangan <input type="text" name="keterangan"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection