<section id="Portfolio" class="content">
    <div class="container portfolio-title">
        <h2>Mẫu thiết kế</h2>
    </div>
    <div class="portfolio-top"></div>
    <div class="portfolio container">
        <div id="filters" class="sixteen columns">
            {{-- <ul class="clearfix">
                <li>
                    <a id="all" href="#" data-filter="*" class="active">
                        <h5>Tất cả</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".ecommercial">
                        <h5>Thương mai điện tử</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".company">
                        <h5>Doanh nghiệp</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".hotel">
                        <h5>Khách sạn</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".food">
                        <h5>Ẩm thực</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".tour">
                        <h5>Du lịch</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".technical">
                        <h5>Công nghệ</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".fashion">
                        <h5>Thời trang</h5>
                    </a>
                </li>
                <li>
                    <a class="" href="#" data-filter=".realestate">
                        <h5>Bất động sản</h5>
                    </a>
                </li>
            </ul> --}}
        </div>
        <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap">
            @include('layouts.home.templates.company')
            @include('layouts.home.templates.ecomercial')
            @include('layouts.home.templates.fashion')
        </div>
    </div>
    <div class="portfolio-bottom"></div>
    <div id="project-page-holder">
        <div class="clear"></div>
        <div id="project-page-data"></div>
    </div>
</section>