@extends('layouts.app')

@section('page_title', $comic['title'])

@section('page_content')
    <div id="comic-detail"  class="section">
        @include('partials.detailjumbo')
        <div class="container">
            
            <div class="py-5">
                <div class="row">
                    <div class="col col-8">
                        <h4 class="text-uppercase fs-2 mb-3">{{ $comic['title'] }}</h4>
                        <div class="bg-success mb-3">
                            <div class="row">
                                <div class="col col-8">
                                    <div class="p-3">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <div class="text-white-50">U.S Price: <span class="text-white bg-transparent">{{$comic['price']}}</span></div>
                                            </div>
                                            <div class="col">
                                                <div class="text-end text-white-50">AVAILABLE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-4">
                                    <div class="text-white bg-transparent p-3">Check Availability</div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                    <div class="col col-4">
                        <div class="text-end">
                            <h6 class="text-uppercase">advertisment</h6>
                            <img class="img-fluid" src="{{ asset('img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="gray-section">
            <div class="container">
                <div class="py-3">
                    hola
                </div>
                <div class="py-5"></div>
            </div>
        </div>
    </div>
    
    
@include('partials.graybanner')
@endsection