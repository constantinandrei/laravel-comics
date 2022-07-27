<a href="{{ route('comicdetail', $comic['id']) }}">
    <div class="my-card">
        <div class="img-container">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="text-white text-uppercase py-2">
            {{ $comic['series'] }}
        </div>
    </div>
</a>