@extends('layouts.app')

@section('page_title', 'DC Comics | Home')

@section('jumbo')

    @include('partials.header')

@endsection

@section('page_content')

    @include('partials.content')
    @include('partials.bluebanner')

@endsection