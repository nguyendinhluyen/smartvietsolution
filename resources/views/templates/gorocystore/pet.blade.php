@extends('templates.gorocystore.master')
@section('title', '')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Home</a><span>|</span></li>
            <li>Pet Food</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner9 w3l_banner_nav_right_banner_pet">
            <h4>Your Pet Favourite Food</h4>
            <p>Sint occaecat cupidatat non proident</p>
            <a href="{{ route('temp.gorocystore.single') }}">Shop Now</a>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
            <h3 class="w3l_fruit">Pet Food</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/57.png" alt=" " class="img-responsive" /></a>
                                        <p>can - tuna for cats (400 gm)</p>
                                        <h4>$8.00 <span>$10.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="can - tuna for cats" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/58.png" alt=" " class="img-responsive" /></a>
                                        <p>junior pet food (90 gm)</p>
                                        <h4>$5.00 <span>$6.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="junior pet food" />
                                                <input type="hidden" name="amount" value="5.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/4.png" alt=" " class="img-responsive" /></a>
                                        <p>dogs food - junior (4 Kg)</p>
                                        <h4>$9.00 <span>$11.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dogs food - junior" />
                                                <input type="hidden" name="amount" value="9.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/59.png" alt=" " class="img-responsive" /></a>
                                        <p>gravy food for dogs (20 kg)</p>
                                        <h4>$15.00 <span>$18.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="gravy food for dogs" />
                                                <input type="hidden" name="amount" value="15.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/60.png" alt=" " class="img-responsive" /></a>
                                        <p>meat for dogs (100 gm)</p>
                                        <h4>$8.00 <span>$10.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="meat for dogs" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/61.png" alt=" " class="img-responsive" /></a>
                                        <p>weekly pack (200 gm)</p>
                                        <h4>$5.00 <span>$8.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="weekly pack" />
                                                <input type="hidden" name="amount" value="5.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/62.png" alt=" " class="img-responsive" /></a>
                                        <p>dog munchies (500 gm)</p>
                                        <h4>$6.00 <span>$8.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dog munchies" />
                                                <input type="hidden" name="amount" value="6.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/63.png" alt=" " class="img-responsive" /></a>
                                        <p>nutrition for cats (90 gm)</p>
                                        <h4>$6.00 <span>$8.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nutrition for cats" />
                                                <input type="hidden" name="amount" value="6.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/25.png" alt=" " class="img-responsive" /></a>
                                        <p>food for adult dogs (80 gms)</p>
                                        <h4>$3.00 <span>$4.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="food for adult dogs" />
                                                <input type="hidden" name="amount" value="3.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/26.png" alt=" " class="img-responsive" /></a>
                                        <p>young adult dogs (1.2 kg)</p>
                                        <h4>$6.00 <span>$10.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="young adult dogs" />
                                                <input type="hidden" name="amount" value="6.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/27.png" alt=" " class="img-responsive" /></a>
                                        <p>cat food ocean fish (1.4 kg)</p>
                                        <h4>$6.00 <span>$7.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="cat food ocean fish" />
                                                <input type="hidden" name="amount" value="6.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/28.png" alt=" " class="img-responsive" /></a>
                                        <p>chicken in jelly can (400 gm)</p>
                                        <h4>$7.00 <span>$9.00</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="chicken in jelly can" />
                                                <input type="hidden" name="amount" value="7.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
@endsection