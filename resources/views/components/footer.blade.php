<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="d-flex py-4">
                    <ul>
                        <h4><strong>DC COMICS</strong></h4>
                        @foreach($dcComicsLinks as $link)
                            <li><a href="#">{{$link}}</a></li>
                        @endforeach
                        <h4><strong>SHOP</strong></h4>
                        @foreach ($shopLinks as $link)
                            <li><a href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <h4><strong>DC</strong></h4>
                        @foreach ($dcLinks as $link)
                            <li><a href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <h4><strong>SITES</strong></h4>
                        @foreach ($sitesLinks as $link)
                            <li><a href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.<br><a href="#">Cookies Settings</a></p>
            </div>
            <div class="col-sm-12 col-md-6 dc-img">
                
            </div>
        </div>
    </div>
    <div class="footer-icon">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="my-btn footer">
                <h6 class="m-0 "><strong>SIGN-UP NOW!</strong></h6>
            </button>
            <div class="social d-flex justify-content-around align-items-center">
                <h4 class="m-0 mx-2">
                    <strong>
                    FOLLOW US
                    </strong>
                </h4>
                <a href="#"><img src="{{asset('img/footer-facebook.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/footer-twitter.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/footer-youtube.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/footer-pinterest.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('img/footer-periscope.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</footer>
