@extends('admin.layout')

@section('title', 'Dashboard')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Blogs</div>
                <div class="card-body">
                    <h5 class="card-title">{{$blogs}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Blogs Translated to Polish</div>
                <div class="card-body">
                    <h5 class="card-title">{{$polish}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Blogs Translated to Icelandic</div>
                <div class="card-body">
                    <h5 class="card-title">{{$islandic}}</h5>
                </div>
            </div>
        </div>
    </
@endsection