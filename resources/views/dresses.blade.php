@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')
    <div class="container">
        <h1>Questa è la parte dedicata ai vestiti</h1>

    <div class="row-box">
        @foreach ($vestiti as $vestito)
            <div class="box">
                <h2>{{ $vestito['model']}} </h2>
                <p>{{ $vestito['collection']}}</p>
                <p>{{ $vestito['color']}}</p>
                <p>{{ $vestito['size']}}</p>
            </div>
         @endforeach
    </div>
    </div>

@endsection