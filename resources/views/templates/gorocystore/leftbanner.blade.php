<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li><a href="{{ route('temp.gorocystore.products') }}">Branded Foods</a></li>
                <li><a href="{{ route('temp.gorocystore.household') }}">Households</a></li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.vegetables') }}">Vegetables</a></li>
                                <li><a href="{{ route('temp.gorocystore.vegetables') }}">Fruits</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.kitchen') }}">Kitchen</a></li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.drinks') }}">Soft Drinks</a></li>
                                <li><a href="{{ route('temp.gorocystore.drinks') }}">Juices</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.pet') }}">Pet Food</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Snacks</a></li>
                                <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Nonveg</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.bread') }}">Bread & Bakery</a></li>
            </ul>
        </div>        
    </nav>
</div>