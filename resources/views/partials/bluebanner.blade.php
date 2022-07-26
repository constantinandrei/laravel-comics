@php
    $imgList = [[
                    'link'=> 'img/buy-comics-digital-comics.png',
                    'text'=> 'DIGITAL COMICS'
                ],
                    [
                    'link'=> 'img/buy-comics-merchandise.png',
                    'text'=> 'DC MERCHANDISE'
                    ],
                    [
                    'link'=> 'img/buy-comics-subscriptions.png',
                    'text'=> 'SUBSCRIPTIONS'
                    ],
                    [
                    'link'=> 'img/buy-comics-shop-locator.png',
                    'text'=> 'COMIC SHOP LOCATOR'
                    ],
                    [
                    'link'=> 'img/buy-dc-power-visa.svg',
                    'text'=> 'DC POWER VISA'
                    ]
                ]
@endphp

<div id="bluebanner">
    <div class="section py-5">
        <div class="container">
            <div class="row row-cols-5 gx-1">
                @foreach ($imgList as $image)
                <div class="col gap-3 d-flex align-items-center justify-content-start">
                    <div class="my-col-1">
                        <img src="{{ $image['link'] }}" alt="">
                        
                    </div>
                    <div class="my-col">
                        <div class="div">
                            {{ $image['text'] }}
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>