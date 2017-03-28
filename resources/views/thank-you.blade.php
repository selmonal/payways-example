@extends('layout')

@section('content')
    <h3 class="text-center text-uppercase card-form-title">
        Гүйлгээ амжилттай
    </h3>

    <div class="card card-inverse card-success mb-3 text-center">
        <div class="card-block">
            <strong>{{ $response->getStatus() }}</strong>
            <p>{{ $response->getMessage() }}</p>
        </div>
    </div>
@stop