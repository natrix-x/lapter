{{-- HEADER MOBILE --}}
<div id="mob-menu">
    <div class="mob-nav-list">
        @foreach($navs as $nav)
            <li><a href="/{{$nav->url}}">{{$nav->name}}</a></li>
        @endforeach
    </div>
    <div class="mob-socials-container">
        <div class="container">
            <h4>СОЦИАЛЬНЫЕ СЕТИ</h4>
            <div class="flex-center">
                <a href="#" class="social-link-round">
                    <img src="img/fb_w.svg" alt="Facebook" />
                </a>
                <a href="#" class="social-link-round">
                    <img src="img/tw_w.svg" alt="Twitter" />
                </a>
                <a href="#" class="social-link-round">
                    <img src="img/vk_w.svg" alt="Вконтакте" />
                </a>
                <a href="#" class="social-link-round">
                    <img src="img/ig_w.svg" alt="Instagram" />
                </a>
                <a href="#" class="social-link-round">
                    <img src="img/yt_w.svg" alt="YouTube" />
                </a>
            </div>
        </div>
    </div>
</div>
<div class="nav">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-10">
                <ul class="nav-list">
                    @foreach($navs as $nav)
                        <li><a href="/{{$nav->url}}">{{$nav->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-3 col-lg-2">
                <div class="mini-cart">
                    <div class="cart-btn">
                        <span>КОРЗИНА</span>
                        <div class="basket">
                            <div class="basket-quantity">0</div>
                        </div>
                    </div>
                    <div class="search-btn"></div>
                </div>
            </div>
        </div>

    </div>
</div>