
@extends('layouts.master')

@section('title')
    contoh aja
@endsection

@section('content')
    

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Entity Relationship Database</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ERD</h6>
            </div>
            <div class="card-body">
                <img src="{{ asset('erd.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@endsection