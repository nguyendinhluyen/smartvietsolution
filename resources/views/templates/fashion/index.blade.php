@extends('templates.fashion.master')
@section('title', 'Fashion: HTML5/CSS3 Template')
@section('content')
<!-- MAIN SECTION -->
<section id="home-section" class="line">
    <div class="margin">
        <!-- ARTICLES -->
        <div class="s-12 m-7 l-9">
            <!-- ARTICLE 1 -->
            <article class="post-1 line">
            <!-- image -->
            <div class="s-12 l-6 post-image">
                <a href="{{ route('temp.fashion.post') }}">
                <img class="full-img" src="/templates/fashion/img/post1.jpg" alt="Fashion 1">
                </a>
            </div>
            <!-- text -->
            <div class="s-12 l-5 post-text">
                <a href="{{ route('temp.fashion.post') }}">
                    <h2>Free responsive template</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.
                </p>
            </div>
            <!-- date -->
            <div class="s-12 l-1 post-date">
                <p class="date">07</p>
                <p class="month">mar</p>
            </div>
            </article>

            <!-- ARTICLE 2 -->
            <article class="post-2 right-align line">
            <!-- image -->
            <div class="s-12 l-6 post-image">
                <a href="{{ route('temp.fashion.post') }}">
                <img class="full-img" src="/templates/fashion/img/post2.jpg" alt="Fashion 2">
                </a>
            </div>
            <!-- text -->
            <div class="s-12 l-5 post-text">
                <a href="{{ route('temp.fashion.post') }}">
                    <h2>Amazing fashion blog</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.
                </p>
            </div>
            <!-- date -->
            <div class="s-12 l-1 post-date">
                <p class="date">06</p>
                <p class="month">mar</p>
            </div>
            </article>

            <!-- ARTICLE 3 -->
            <article class="post-3 line">
            <!-- image -->
            <div class="s-12 l-6 post-image">
                <a href="{{ route('temp.fashion.post') }}">
                <img class="full-img" src="/templates/fashion/img/post3.jpg" alt="Fashion 3">
                </a>
            </div>
            <!-- text -->
            <div class="s-12 l-5 post-text">
                <a href="{{ route('temp.fashion.post') }}">
                    <h2>Nice minimalist design</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.
            </div>
            <!-- date -->
            <div class="s-12 l-1 post-date">
                <p class="date">04</p>
                <p class="month">mar</p>
            </div>
            </article>

            <!-- ARTICLE 4 -->
            <article class="post-4 right-align line">
            <!-- image -->
            <div class="s-12 l-6 post-image">
                <a href="{{ route('temp.fashion.post') }}">
                <img src="/templates/fashion/img/post4.jpg" alt="Fashion 4">
                </a>
            </div>
            <!-- text -->
            <div class="s-12 l-5 post-text">
                <a href="{{ route('temp.fashion.post') }}">
                    <h2>With advertising regions</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim.
            </div>
            <!-- date -->
            <div class="s-12 l-1 post-date">
                <p class="date">01
                </p>
                <p class="month">mar
                </p>
            </div>
            </article>

            <!-- ARTICLE 5 -->
            <article class="post-5 line">
            <!-- text -->
            <div class="s-12 l-11 post-text">
                <a href="{{ route('temp.fashion.post') }}">
                    <h2>And again - it's totally free!</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
            </div>
            <!-- date -->
            <div class="s-12 l-1 post-date">
                <p class="date">27
                </p>
                <p class="month">feb
                </p>
            </div>
            </article>
        </div>
        <!-- SIDEBAR -->
        <div class="s-12 m-5 l-3">
            <aside>
            <!-- NEWS 1 -->
            <img src="/templates/fashion/img/news1.jpg" alt="News 1">
            <div class="aside-block margin-bottom">
                <h3>This is the first news on blog</h3>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
            </div>
            <!-- NEWS 2 -->
            <img src="/templates/fashion/img/news2.jpg" alt="News 2">
            <div class="aside-block margin-bottom">
                <h3>Second news on the fashion blog</h3>
                <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
            </div>
            </aside>
        </div>
    </div>
</section>
@endsection