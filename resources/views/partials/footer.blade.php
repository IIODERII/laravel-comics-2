@php
    $dcComics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];

    $shop = ['Shop DC', 'Shop DC Collectibles'];

    $DC = ['Terms Of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];

    $sites = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];

    $links = ['resources/img/socials/footer-facebook.png', 'resources/img/socials/footer-twitter.png', 'resources/img/socials/footer-youtube.png', 'resources/img/socials/footer-pinterest.png', 'resources/img/socials/footer-periscope.png'];
@endphp

<footer>
    <div id="footTop">
        <div class="wrapper text-white">
            <div class="container">
                <div class="row w-100 py-5">
                    <div class="col-sm-4 col-6">
                        <h3 class="text-uppercase fw-bold">dc comics</h3>
                        <ul class="list-unstyled">
                            @foreach ($dcComics as $item)
                                <li>
                                    <a href="#" class="text-decoration-none">{{ $item }}</a>
                                </li>
                            @endforeach

                        </ul>

                        <h3 class="text-uppercase fw-bold">Shop</h3>
                        <ul class="list-unstyled">
                            @foreach ($shop as $item)
                                <li>
                                    <a href="#" class="text-decoration-none">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-sm-4 col-6">
                        <h3 class="text-uppercase fw-bold">dc</h3>
                        <ul class="list-unstyled">
                            @foreach ($DC as $item)
                                <li>
                                    <a href="#" class="text-decoration-none">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-sm-4 col-12">
                        <h3 class="text-uppercase fw-bold">sites</h3>
                        <ul class="list-unstyled">
                            @foreach ($sites as $item)
                                <li>
                                    <a href="#" class="text-decoration-none">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footBot">
        <div class="my-bg">
            <div class="container py-5 d-flex justify-content-between align-items-center">
                <div>
                    <button class="text-uppercase btn btn-outline-primary border-3 text-white fw-bold rounded-0">
                        sign-up now
                    </button>
                </div>

                <div class="d-flex flex-wrap justify-content-end">
                    <h3 class="text-primary text-uppercase px-3 fw-bold py-2 text-end">
                        follow us
                    </h3>
                    <ul class="d-flex flex-wrap justify-content-center list-unstyled">
                        @foreach ($links as $item)
                            <li class="p-2">
                                <img src="{{ Vite::asset($item) }}" alt="item" />
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
