@extends('layouts.master')

@section('title')
    {{ $artikel->judul }}
@endsection

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $artikel->judul }}</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="m-0"></div>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                   
                    <a class="dropdown-item" href="/artikel/{{ $artikel->id }}/edit"><span class="fas fa-edit"></span> Edit artikel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            {{ $artikel->isi }}
        </div>

        
        <div class="card-footer">
            <span class="tags">{{ $artikel->tag }}</span>
        </div>
    </div>
@endsection

@push('scripts')
<script>
$('.tags').html($('.tags').html().split(', ').map(function(el) {
    return '<button type="button" class="btn btn-warning btn-sm">' + el + '</button>   '}))
</script>
@endpush