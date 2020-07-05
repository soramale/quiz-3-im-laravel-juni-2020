
@section('title')
    Edit Artikel 
@endsection

@extends('layouts.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Artikel</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <form action="/artikel/{{ $artikel->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" name="judul" value=" {{ $artikel->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <textarea name="isi" class="form-control" id="" cols="30" rows="10">{{ $artikel->isi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" value="{{ $artikel->tag }}" class="form-control" name="tag">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Artikel!</button>
                </form>
                <form method="POST" action="/artikel/{{ $artikel->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Artikel</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>
@endsection