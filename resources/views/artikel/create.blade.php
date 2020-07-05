
@section('title')
    Buat Artikel Baru
@endsection

@extends('layouts.master')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Buat Artikel Baru</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                
                <div class="card-body">
                    <form action="{{ url('/artikel') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Artikel</label>
                            <textarea name="isi" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" name="tag">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Buat Artikel!</button>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection