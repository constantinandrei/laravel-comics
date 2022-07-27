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
                    <div class="row row-cols-2 gx-5">
                        <div class="col">
                            <h4 class="mb-4">Talent</h4>
                            <div class="border-top my-2"></div>
                            <div class="row">
                                <div class="col col-4">
                                    Art by:
                                </div>
                                <div class="col col-8">
                                    @foreach ($comic['artists'] as $link)
                                        <a href="#">{{ $link }}</a>
                                        @if (!$loop->last)
                                            , 
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <div class="row">
                                <div class="col col-4">
                                    Written by:
                                </div>
                                <div class="col col-8">
                                    @foreach ($comic['writers'] as $link)
                                        <a href="#">{{ $link }}</a>
                                        @if (!$loop->last)
                                            , 
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                        </div>
                        <div class="col">
                            <h4 class="mb-4">Specs</h4>
                            <div class="border-top my-2"></div>
                            <div class="row">
                                <div class="col col-4">
                                    Series:
                                </div>
                                <div class="col col-8">
                                    <a class="text-uppercase" href="#">{{ $comic['series'] }}</a>
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <div class="row">
                                <div class="col col-4">
                                    U.S. Price:
                                </div>
                                <div class="col col-8">
                                    {{ $comic['price'] }}
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <div class="row">
                                <div class="col col-4">
                                    On Sale Date:
                                </div>
                                <div class="col col-8">
                                    {{ $comic['sale_date'] }}
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                        </div>
                    </div>
                </div>
                <div class="py-5"></div>
            </div>
        </div>
    </div>
    
    
@include('partials.graybanner')
@endsection