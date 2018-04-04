<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
        <a href="{{ route('temp.eleganter.index') }}" class="logo">
                <!-- Logo White Version -->
                <img class="logo-white" src="/templates/eleganter/img/logo.png" alt="">
                <!-- Logo Dark Version -->
                <img class="logo-dark" src="/templates/eleganter/img/logo-dark.png" alt="">
            </a>
        </div>
        <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
                <li><a href="{{ route('temp.eleganter.index') }}">Home</a></li>
                <li><a href="{{ route('temp.eleganter.products') }}">Products</a></li>
                <li><a>Services</a>
                    <ul>
                        <li><a>Service 1</a>
                            <ul>
                                <li><a>Service 1 A</a></li>
                                <li><a>Service 1 B</a></li>
                            </ul>
                        </li>
                        <li><a>Service 2</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('temp.eleganter.about') }}">About</a></li>
                <li><a href="{{ route('temp.eleganter.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('temp.eleganter.contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>