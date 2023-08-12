<header class="ltn__header-area ltn__header-8 section-bg-6">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area top-area-color-white d-none">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="ltn__top-bar-menu">
              <ul>
                <li>
                  <a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you">
                    <i class="icon-mail"></i> info@webmail.com </a>
                </li>
                <li>
                  <a href="locations.html">
                    <i class="icon-placeholder"></i> 15/A, Nest Tower, NYC </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-5">
            <div class="top-bar-right text-right">
              <div class="ltn__top-bar-menu">
                <ul>
                  <li>
                    <!-- ltn__language-menu -->
                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                      <ul>
                        <li>
                          <a href="#" class="dropdown-toggle">
                            <span class="active-currency">English</span>
                          </a>
                          <ul>
                            <li>
                              <a href="#">Arabic</a>
                            </li>
                            <li>
                              <a href="#">Bengali</a>
                            </li>
                            <li>
                              <a href="#">Chinese</a>
                            </li>
                            <li>
                              <a href="#">English</a>
                            </li>
                            <li>
                              <a href="#">French</a>
                            </li>
                            <li>
                              <a href="#">Hindi</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <!-- ltn__social-media -->
                    <div class="ltn__social-media">
                      <ul>
                        <li>
                          <a href="#" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#" title="Twitter">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#" title="Instagram">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#" title="Dribbble">
                            <i class="fab fa-dribbble"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ltn__header-top-area end -->
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--5">
      <div class="container-fluid">
        <div class="row">
          <div class="col logo-column">
            <div class="site-logo">
              <a href="{{route('home')}}">
                <img src="{{asset('clients_assets/images/logo4.png')}}" style="max-width:120px" alt="Logo">
              </a>
            </div>
          </div>
          <div class="col header-menu-column">
            <div class="header-menu d-none d-xl-block">
              <nav>
                <div class="ltn__main-menu">
                  <ul>
                    <li class="menu-icon">
                      <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-icon">
                        <a href="{{route('about-us')}}">About Us</a>
                    </li>
                    <li class="menu-icon">
                      <a href="#">Shop</a>
                      <ul>
                        <li>
                          <a href="{{route('Accessories')}}">Shop</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-icon">
                      <a href="{{route('blog')}}">News</a>
                      <ul>
                        <li>
                          <a href="blog.html">News</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                        <a href="{{route('contact-us')}}">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <div class="col">
            <div class="ltn__header-options">
              <ul>
                <li class="d-none">
                  <!-- ltn__currency-menu -->
                  <div class="ltn__drop-menu ltn__currency-menu">
                    <ul>
                      <li>
                        <a href="#" class="dropdown-toggle">
                          <span class="active-currency">USD</span>
                        </a>
                        <ul>
                          <li>
                            <a href="login.html">USD - US Dollar</a>
                          </li>
                          <li>
                            <a href="{{route('wishlist')}}">CAD - Canada Dollar</a>
                          </li>
                          <li>
                            <a href="register.html">EUR - Euro</a>
                          </li>
                          <li>
                            <a href="account.html">GBP - British Pound</a>
                          </li>
                          <li>
                            <a href="{{route('wishlist')}}">INR - Indian Rupee</a>
                          </li>
                          <li>
                            <a href="{{route('wishlist')}}">BDT - Bangladesh Taka</a>
                          </li>
                          <li>
                            <a href="{{route('wishlist')}}">JPY - Japan Yen</a>
                          </li>
                          <li>
                            <a href="{{route('wishlist')}}">AUD - Australian Dollar</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <!-- header-search-1 -->
                  <div class="header-search-wrap">
                    <div class="header-search-1">
                      <div class="search-icon">
                        <i class="icon-magnifier  for-search-show"></i>
                        <i class="icon-magnifier-remove  for-search-close"></i>
                      </div>
                    </div>
                    <div class="header-search-1-form">
                      <form id="#234" method="get" action="#">
                        <input type="text" name="search" value="" placeholder="Search here..." />
                        <button type="submit">
                          <span>
                            <i class="icon-magnifier"></i>
                          </span>
                        </button>
                      </form>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- user-menu -->
                  <div class="ltn__drop-menu user-menu">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="icon-user"></i>
                        </a>
                        <ul>
                        @if (session()->has('id'))
                            <li>
                                <a href="/logout">Log Out</a>
                            </li>
                            <li>
                                <a href="account.html">My Account</a>
                            </li>
                            <li>
                                <a href="{{route('wishlist')}}">Wishlist</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('login')}}">Sign in</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">Register</a>
                            </li>
                        @endif
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <!-- header-wishlist -->
                  <div class="header-wishlist">
                    <a href="{{route('wishlist')}}">
                      <i class="icon-heart"></i>
                    </a>
                  </div>
                </li>
                <li>
                  <!-- mini-cart 2 -->
                  @if (session()->has('id')!=null)
                  <div class="mini-cart-icon mini-cart-icon-2">
                    <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                      <span class="mini-cart-icon">
                        <i class="icon-handbag"></i>
                        <sup>
                         {{session()->get('total_count')}}
                        </sup>
                      </span>
                      <h6>
                        <span>Your Cart</span>

                      </h6>
                    </a>
                  </div>
                  @else
                  @endif
                </li>
                <li>
                  <!-- Mobile Menu Button -->
                  <div class="mobile-menu-toggle d-xl-none">
                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                      <svg viewBox="0 0 800 600">
                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                        <path d="M300,320 L540,320" id="middle"></path>
                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                      </svg>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ltn__header-middle-area end -->
  </header>
  <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
      <div class="ltn__utilize-menu-head">
        <span class="ltn__utilize-menu-title">Cart</span>
        <button class="ltn__utilize-close">×</button>
      </div>
      <div class="mini-cart-product-area ltn__scrollbar">
        @if (session()->has('id'))

          @if (session()->get('cart')!=null)
                @foreach ( session()->get('cart') as $item)
                  <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                      <a href="{{URL::to('single/accessory/'.$item->accessory_id)}}">
                        <img src="{{$item->image}}" alt="Image">
                      </a>
                      <span class="mini-cart-item-delete">
                        <a href="{{URL::to('deleteCartItem/'.$item->id)}}"><i class="icon-trash"></i></a>
                      </span>
                    </div>
                    <div class="mini-cart-info">
                      <h6>
                        <a href="{{URL::to('single/accessory/'.$item->accessory_id)}}">{{substr($item->name,0,30)}}</a>
                      </h6>
                      <span class="mini-cart-quantity">{{$item->quanity. ' x $'. $item->price}}</span>
                    </div>
                  </div>
                @endforeach
            @else
          @endif

        @else

        @endif



      </div>
      <div class="mini-cart-footer">
        <div class="mini-cart-sub-total">
          <h5>Subtotal:
            <span>$
              {{session()->get('total')}}
            </span>
          </h5>
        </div>
        <div class="btn-wrapper">
          <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
          <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
        </div>
        <p>Free Shipping on All Orders Over $100!</p>
      </div>
    </div>
  </div>
  <!-- Utilize Cart Menu End -->
  <!-- Utilize Mobile Menu Start -->
@include('clients.blocks.mobilenav')
  <div class="ltn__utilize-overlay"></div>
