<header>
    <div class="headerbox d-flex justify-content-around">
            <div class="logo">
                <a href="{{route('homepage')}}">
                    <img src="{{ asset('img/logo.png') }}" alt="" >
                </a>
            </div>
            <div class="main-menu">
                
                        {{-- <li> <a class="text-uppercase" href="{{route('comicspage')}}">Comics</a></li>
                        <li> <a class="text-uppercase" href="{{route('moviespage')}}">Movies</a></li>
                        <li> <a class="text-uppercase" href="{{route('tvpage')}}">Tv</a></li>
                        <li> <a class="text-uppercase" href="{{route('gamespage')}}">Games</a></li>
                        <li> <a class="text-uppercase" href="{{route('videospage')}}">Videos</a></li>
                        <li> <a class="text-uppercase" href="{{route('newspage')}}">News</a></li>
                        <li> <a class="text-uppercase" href="{{route('shoppage')}}">Shop</a></li> --}}
                    <ul class="nav justify-content-center">
                        @foreach ($nav as $link)
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" aria-current="page" href="{{route($link['url'])}}">{{ $link['text']}}</a>
                            </li>
                            
                        
                        @endforeach
                {{-- <ul class="nav justify-content-center">
                    <li class="nav-item">
                    <a class="nav-link active text-uppercase" aria-current="page" >Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" href="{{route('comicspage')}}">Comics</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase" aria-current="page" >Shop</a>
                    </li>
                </ul> --}}
            </div>
            <div class="search d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
    </div>
</div>
</header>