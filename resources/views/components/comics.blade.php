<section id="comics" class="py-4">
    <div class="container">
        <div class="label my-btn">
            <h3 class="m-0"><strong>CURRENT SERIES</strong></h3>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-sm-6 col-md-3 col-xl-2 mb-5">
                    <a href="#">
                        <div class="comic-img">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <div class="comic-txt">
                            <span>{{strtoupper($comic['series']) }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="my-btn m-auto border border-0">
            <h6 class="m-0"><strong>LOAD MORE</strong></h6>
        </button>
    </div>
</section>
<section id="cards">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#">
                    <img class="stretch" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <span>DIGITAL COMICS</span>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <span>DC MERCHANDISE</span>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <span>SUBSCRIPTIONS</span>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img class="stretch" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <span>DC POWER VISA</span>
                </a>
            </div>
        </div>
    </div>
</section>
