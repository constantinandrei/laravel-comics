@php
    $navLinks = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP']
@endphp

<nav>
    <div class="py-3 bg-black"></div>
    <div class="container">
        <div class="row">
            <div class="col flex-grow-0 flex-shrink-1 d-flex align-items-center justify-content-between">
                <div class="p-3">
                    <a href="/"><img src="/img/dc-logo.png" alt=""/></a>
                </div>
            </div>
            <div class="col d-flex align-items-center justify-content-end">
                <ul class="nav">
                    @foreach ($navLinks as $link)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>