@extends('layout')

@section('content')
    <h3 class="text-center text-uppercase card-form-title">
        Гүйлгээ амжилтгүй
    </h3>

    <div class="card card-inverse card-danger mb-3 text-center">
        <div class="card-block">
            <strong>{{ $response->getStatus() }}</strong>
            <p>{{ $response->getMessage() }}</p>
        </div>
    </div>
@stop