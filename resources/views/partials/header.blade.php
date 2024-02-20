
    <header class="py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                     <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
                </div>
                <div class="col-10 text-end">
                    <ul class="list-unstyled d-inline-block">
                        <li class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">characters</li>
                        <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"><a href="{{ route('comics.index') }}">comics</a></li>
                        <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">movies</li>
                        <li class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">tv</li>
                        <li class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">games</li>
                        <li class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">collectibles</li>
                        <li class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">videos</li>
                        <li class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">fans</li>
                        <li class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">news</li>
                        <li class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">shop</li>
                    </ul>
                    search...
                </div>
            </div>
        </div>
    </header>
