@php
    $images = ['facebook', 'twitter', 'youtube', 'pinterest', 'periscope']
@endphp

<div id="signup">
    <div class="section-signup py-4">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="my-btn">SING-UP NOW!</div>
                </div>
                <div class="col row justify-content-end gx-3 align-items-center">
                    <div class="col d-flex align-items-center justify-content-end flex-grow-1 text-end">
                        <h3 class="m-0">FOLLOW US</h3>
                    </div>
                    @foreach ($images as $image)
                    <div class="my-col flex-grow-0">
                        <img src="/img/footer-{{$image}}.png" alt="">
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>