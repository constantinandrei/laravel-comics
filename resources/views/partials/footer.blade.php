@php
    $linkList = [
                'dcComics' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
                'shop' => ['Shop DC', 'Shop DC Collectibles'],
                'dc' => ['Terms of Use', 'Privacy policy(New)', 'Ad Choises', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC certificates', 'Ratings', 'Shop Help', 'Contact Us'],
                'sites' => ['DC', 'Mad Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
    ]
@endphp

<div class="section py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex">
                <div class="col">
                    <ul class="list-group mb-3">
                        <h4>DC COMICS</h4>
                        @foreach ($linkList['dcComics'] as $item)
                        <li class="list-group-item">
                            <a class="" href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="list-group mb-3">
                        <h4>SHOP</h4>
                        @foreach ($linkList['shop'] as $item)
                        <li class="list-group-item">
                            <a class="" href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col">
                    <ul class="list-group mb-3">
                        <h4>DC</h4>
                        @foreach ($linkList['dc'] as $item)
                        <li class="list-group-item">
                            <a class="" href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col">
                    <ul class="list-group mb-3">
                        <h4>SITES</h4>
                        @foreach ($linkList['sites'] as $item)
                        <li class="list-group-item">
                            <a class="" href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute">
        <img src="/img/dc-logo-bg.png" alt="">
    </div>
</div>