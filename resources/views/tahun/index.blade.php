@extends('layout.main')
@section('content')

<h1>Daftar Tahun </h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('tahun/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>nama tahun</td>
    <td>Keterangan</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($tahun as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->nama_tahun }}</td>
    <td>{{ $rows->keterangan }}</td>
    
    <td>
        <a href="{{ asset('tahun/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('tahun/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection