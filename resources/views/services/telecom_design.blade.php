@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="website"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('main')

@endsection

@section('canonical')
    @if($service->canonical)
        <link rel="canonical" href="{{ $service->canonical }}">
    @endif
@endsection
