@php
    $navItems = [
        [
            'text' => 'Characters',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Comics',
            'active' => true,
            'url' => 'comics',
        ],
        [
            'text' => 'Movies',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Tv',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Games',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Collectibles',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Videos',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Fans',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'News',
            'active' => false,
            'url' => '',
        ],
        [
            'text' => 'Shop',
            'active' => false,
            'url' => '',
        ],
    ];
@endphp

<header class="bg-white">
    <div class="container d-flex flex-lg-nowrap flex-wrap justify-content-between align-items-center">
        <div class="mx-auto">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Small Logo" />
        </div>

        <ul class="nav nav-underline text-uppercase flex-lg-nowrap justify-content-center" id="navBar">
            @foreach ($navItems as $item)
                <li class="nav-item px-1">
                    <a aria-current="page" href="@php echo $item['url'] ? $item['url'] : '#' @endphp"
                        @class([
                            'nav-link',
                            'text-black',
                            'fw-bold',
                            'active' => Route::currentRouteName() == $item['url'],
                        ])>{{ $item['text'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</header>
