<header>
    <div class="headerbox d-flex justify-content-around">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="" href="{{route('homepage')}}">
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
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('characterspage')}}">Characters</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
    </div>
</div>
</header>