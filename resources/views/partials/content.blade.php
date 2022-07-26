<div class="text-white py-5">
    <div class="container text-center">
        <div class="row row-cols-6 gy-5">
            @foreach ($comics as $comic)
            <div class="col">
                @include('partials.mycard', [
                    'comic'=> $comic
                ])
            </div>
            @endforeach
            
        </div>
        <div class="load-more">
            LOAD MORE
        </div>
    </div>
</div>