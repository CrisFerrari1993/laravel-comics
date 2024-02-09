<header>
    <div class="container mb-0 pb-0">
        <nav>
            <div class="nav-img">
                <a href="#">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </a>
            </div>
            <div class="nav-links">
                <ul>
                    @foreach ($links as $link)
                        @if ($link['selected'] == true)
                            <li class=" mx-2 fs-5 fw-bold"><a class="selected link" href="#">{{strtoupper($link['name'])}}</a></li>
                        @else
                            <li class=" mx-2 fs-5 fw-bold"><a class="link" href="#">{{strtoupper($link['name'])}}</a></li>
                        @endif
                        @if($link['dropdown'])
                            <div class="dropdown">
                                <i class="fa-solid fa-angel-down dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                          </div>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="nav_search">
                <div class="col-auto">
                    <div class="input-group border-bottom border-primary border-3">
                        <input type="text" class="form-control border-0" id="autoSizingInputGroup" placeholder="Search">
                        <div class="input-group-text border-0 bg-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </div>
                    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                </div>
        </nav>
    </div>
</header>
