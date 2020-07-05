
@extends('layouts.master')

@section('title')
    Artikel
@endsection

@section('content')

    <h1 class="h3 mb-4 text-gray-800">Artikel</h1>
    <p class="mb-4">Untuk membuat artikel baru, klik <a href="/artikel/create">disini</a></p>

    <div class="row">
        <div class="col-md-12">

            @foreach ($artikel as $artikel)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/artikel/{{ $artikel->id }}">
                        <h3 class="m-0 font-weight-bold text-primary">{{ $artikel->judul }}</h3>
                    </a>
                </div>
                <div class="card-body">
                    {{ $artikel->isi }}
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush