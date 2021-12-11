@extends('product::layouts.master')

@section('content')
    <h1>Hello World</h1>
    @php
        dd($code);
    @endphp
    <p>
        This view is loaded from module: {!! config('product.name') !!}
    </p>
@endsection
