@extends('layouts.layout')

@section('content')
<div>
	<form action="/tambahbarang" method="POST">
		<label>ID Kategori</label>
		<select>
			@foreach($tbKat as $tb)
			<option>{{ $tb->id }}{{ $tb->nm_kategori }}</option>
			@foreach
		</select>
		<label>Nama Barang</label>
		<input type="text" name="nm_kategori" placeholder="nama kategori">
		<input type="submit" value="Simpan">
	</form>
</div>
@endsection