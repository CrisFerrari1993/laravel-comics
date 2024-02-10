<section class='blue'>
    <div class="container">
        <div class="thumb">
            @if(isset($comics[0]['thumb']))
                <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['type'] }}">
                <span class="type">
                    {{strtoupper($comics[0]['type'])}}
                </span>
                <span class="gallery">
                    <a href="#">VIEW GALLERY</a>
                </span>
            @endif
        </div>
    </div>
</section>
<section id="info">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-xl-8">
                <h1>{{strtoupper($comics[0]['title']) }}</h1>
                <div class="row mb-3">
                    <div class="col-8 border border-dark bg-success d-flex justify-content-between px-4 py-2 ">
                        <span class="price">U.S Price: <span class="total">{{$comics[0]['price']}}</span></span>
                        <span class='price'>AVIABLE</span>
                    </div>
                    <div class="col-4 border border-dark d-flex bg-success justify-content-center">
                        <span class="d-flex align-items-center total">
                            Check Aviability 
                            <div class="dropdown">
                                <i class="fa-solid fa-angel-down dropdown-toggle mx-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Still 4 in storage</a></li>
                                </ul>
                      </div></span>
                    </div>
                </div>
                <p class="my-1">
                    {{$comics[0]['description']}}
                </p>
            </div>
            <div class="col-sm-12 col-md-4 col-xl-4 adv">
                <h6 class="m-0"><strong>ADVERTISEMENT</strong></h6>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bg-light" id="comic-info">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="bg-light" scope="col"><h4><strong>Talent</strong></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-light">Arts by:</td>
                        <td class="bg-light">
                            @foreach ($comics[0]['artists'] as $item)
                                <a href="#">{{$item}}, </a>
                            @endforeach
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light">Written by:</td>
                        <td class="bg-light">
                            @foreach ($comics[0]['writers'] as $item)
                                <a href="#">{{$item}}, </a>
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-sm-12 col-md-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th class="bg-light" scope="col"><h4><strong>Specs</strong></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-light">Series: </td>
                        <td class="bg-light">
                            {{strtoupper($comics[0]['series'])}}
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light">U.S. Price:</td>
                        <td class="bg-light">
                            {{$comics[0]['price']}}
                        </td>
                      </tr>
                      <tr>
                        <td class="bg-light">On Sale Date: </td>
                        <td class="bg-light">
                            {{$comics[0]['sale_date']}}
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="cards">
            <div class="row">
                <div class="col-sm-3 col-xl-3 border px-3 py-2">
                    <a class="d-flex justify-content-between" href="#">
                        <h6>
                            <strong>
                                DIGITAL COMICS
                            </strong>
                        </h6>
                        <img src="{{asset('img/buy-comics-digital-comics - Copia.png')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-3 col-xl-3 border px-3 py-2">
                    <a class="d-flex justify-content-between" href="#">
                        <h6>
                            <strong>
                                SHOP DC
                            </strong>
                        </h6>
                        <img src="{{asset('img/buy-comics-subscriptions - Copia.png')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-3 col-xl-3 border px-3 py-2">
                    <a class="d-flex justify-content-between" href="#">
                        <h6>
                            <strong>
                                COMIC SHOP LOCATION
                            </strong>
                        </h6>
                        <img src="{{asset('img/buy-comics-shop-locator - Copia.png')}}" alt="">
                    </a>
                </div>
                <div class="col-sm-3 col-xl-3 border px-3 py-2">
                    <a class="d-flex justify-content-between" href="#">
                        <h6>
                            <strong>
                                SUBSCRIPTIONS
                            </strong>
                        </h6>
                        <img src="{{asset('img/buy-comics-merchandise - Copia.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>