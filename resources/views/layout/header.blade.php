
<header id="custom-header" class="site-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper hide-on-scroll">
                    <ul class="icon-list sec-menu">
                        <li class="li-wrapper">
                            <a href="https://.com/" title="English" class="lang-item lang-item-7 lang-item-en lang-item-first menu-item menu-item-type-custom menu-item-object-custom nav-link" target=""></a>
                        </li>
                        <li class="li-wrapper">
                            <a href="{{ url('contact') }}" title="إتصل بنا" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">إتصل بنا</a>
                        </li>
                    </ul>
                    <ul class="icon-list">
                        <li class="hide-desktop">
                            <a href="#" id="menuToggle">
                                <span class="burger-menu"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="logo-wrapper">
                        <a href="https://.com/ar">
                            <img alt="Petromin Logo" src="{{ asset('uploads/logo-01.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-section hide-mobile">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="header-wrapper">
                        <ul class="nav-list main-list-wrapper">
                            <li class="li-wrapper">
                                <a href="{{ url('news') }}" title="اخبارنا" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">اخبارنا</a>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('lead') }}" title="الإنجازات والجوائز" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">الإنجازات والجوائز</a>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('complain') }}" title="فريق القادة" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">فريق القادة</a>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('offers') }}" title="المنتجات" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">المنتجات</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">الفروع</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('complain') }}">فریق الإدارة</a>
                                    <a class="dropdown-item" href="{{ url('Sustainability') }}">المبادرات</a>
                                </div>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('about') }}" title="من نحن" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-55 current_page_item nav-link" target="">من نحن</a>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('services') }}" title="  كلمة رئيس مجلس الإدارة" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">   كلمة رئيس مجلس الإدارة</a>
                            </li>
                            <li class="li-wrapper">
                                <a href="{{ url('/') }}" title="الرئيسية" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">الرئيسية</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hide-desktop side-menu" id="sideMenu">
        <div class="side-menu-header">
            <div class="side-menu-header-logo">
                <a href="https://.com/ar">
                    <img alt="Petromin Logo" src="{{ asset('uploads/logo-01.png') }}">
                </a>
            </div>
            <div class="side-menu-header-options">
                <div class="header-lang">
                    {{-- <li class="lang-item lang-item-7 lang-item-en lang-item-first"><a lang="en-US" hreflang="en-US" href="https://.com/">English</a></li> --}}
                </div>
            </div>
        </div>
        <div class="tab-container" id="headerTabs">
            <div class="active" id="menu">
                <ul class="nav-list main-list-wrapper">
                    <li class="li-wrapper">
                        <a href="{{ url('/') }}" title="الرئيسية" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">الرئيسية</a>
                    </li>
                    <li class="li-wrapper">
                        <a href="{{ url('about') }}" title="من نحن" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-55 current_page_item nav-link" target="">من نحن</a>
                    </li>
                    <li class="li-wrapper">
                        <a href="{{ url('services') }}" title="  كلمة رئيس مجلس الإدارة" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">   كلمة رئيس مجلس الإدارة</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">الفروع</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('complain') }}">فریق الإدارة</a>
                            <a class="dropdown-item" href="{{ url('Sustainability') }}>المبادرات</a>
                        </div>
                    </li>
                    <li class="li-wrapper">
                        <a href="{{ url('offers') }}" title="المنتجات" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">المنتجات</a>
                    </li>
                    {{-- <li class ="li-wrapper">
                        <a href="{{ url('complain') }}" title="فريق القادة" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">فريق القادة</a>
                    </li> --}}
                    <li class="li-wrapper">
                    </li>
                    <li class="li-wrapper">
                        <a href="{{ url('lead') }}" title="الإنجازات والجوائز" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">الإنجازات والجوائز</a>
                    </li>
                    <li class="li-wrapper">
                        <a href="{{ url('news') }}" title="اخبارنا" class="menu-item menu-item-type-post_type menu-item-object-page nav-link" target="">اخبارنا</a>
                    </li>
                </ul>
                <div class="social-icons">
                    <div class="facebook">
                        <a href="https://www.facebook.com/" target="_blank">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="#3f4954" xmlns="http://www.w3.org/2000/svg">
                                <rect width="28" height="28" fill="#3f4954"></rect>
                                <path d="M17.4777 15L17.8926 12.1044H15.2987V10.2253C15.2987 9.43313 15.6611 8.66094 16.8228 8.66094H18.002V6.19563C18.002 6.19563 16.9319 6 15.9087 6C13.7726 6 12.3764 7.38688 12.3764 9.8975V12.1044H10.002V15H12.3764V22H15.2987V15H17.4777Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="insta">
                        <a href="https://www.instagram.com/" target="_blank">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="#3f4954" xmlns="http://www.w3.org/2000/svg">
                                <rect width="28" height="28" fill="#3f4954"></rect>
                                <path d="M14.0018 9.8978C11.7316 9.8978 9.9005 11.7293 9.9005 14C9.9005 16.2707 11.7316 18.1022 14.0018 18.1022C16.2719 18.1022 18.1031 16.2707 18.1031 14C18.1031 11.7293 16.2719 9.8978 14.0018 9.8978ZM14.0018 16.667C12.5347 16.667 11.3354 15.4709 11.3354 14C11.3354 12.5291 12.5312 11.333 14.0018 11.333C15.4724 11.333 16.6682 12.5291 16.6682 14C16.6682 15.4709 15.4688 16.667 14.0018 16.667ZM19.2274 9.73C19.2274 10.262 18.7991 10.6868 18.2708 10.6868C17.739 10.6868 17.3142 10.2584 17.3142 9.73C17.3142 9.20161 17.7426 8.77318 18.2708 8.77318C18.7991 8.77318 19.2274 9.20161 19.2274 9.73ZM21.9438 10.7011C21.8831 9.41939 21.5904 8.28406 20.6516 7.34866C19.7165 6.41325 18.5814 6.1205 17.2999 6.05623C15.9793 5.98126 12.0207 5.98126 10.7001 6.05623C9.4222 6.11693 8.28712 6.40968 7.34835 7.34509C6.40959 8.28049 6.12047 9.41582 6.05622 10.6975C5.98126 12.0185 5.98126 15.9779 6.05622 17.2989C6.1169 18.5806 6.40959 19.7159 7.34835 20.6513C8.28712 21.5867 9.41863 21.8795 10.7001 21.9438C12.0207 22.0187 15.9793 22.0187 17.2999 21.9438C18.5814 21.8831 19.7165 21.5903 20.6516 20.6513C21.5868 19.7159 21.8795 18.5806 21.9438 17.2989C22.0187 15.9779 22.0187 12.0221 21.9438 10.7011ZM20.2376 18.7163C19.9592 19.416 19.4202 19.9551 18.717 20.2372C17.664 20.6549 15.1654 20.5585 14.0018 20.5585C12.8381 20.5585 10.336 20.6513 9.28656 20.2372C8.58695 19.9587 8.04796 19.4196 7.76598 18.7163C7.34835 17.6631 7.44473 15.1639 7.44473 14C7.44473 12.8361 7.35192 10.3334 7.76598 9.28372C8.04439 8.58396 8.58338 8.04485 9.28656 7.7628C10.3395 7.34509 12.8381 7.44148 14.0018 7.44148C15.1654 7.44148 17.6676 7.34866 18.717 7.7628C19.4166 8.04128 19.9556 8.58039 20.2376 9.28372C20.6552 10.3369 20.5588 12.8361 20.5588 14C20.5588 15.1639 20.6552 17.6666 20.2376 18.7163Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                    <div class ="twitter">
                        <a href="https://twitter.com/ " target="_blank">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="#3f4954" xmlns="http://www.w3.org/2000/svg">
                                <rect width="28" height="28" fill="#3f4954"></rect>
                                <path d="M20.3554 10.9906C20.3655 11.1219 20.3655 11.2531 20.3655 11.3844C20.3655 15.3875 17.066 20 11.0356 20C9.17767 20 7.45179 19.5031 6.35894 8.66094H18.002V6.19563C18.002 6.19563 16.9319 6 15.9087 6C13.7726 6 12.3764 7.38688 12.3764 9.8975V12.1044H10.002V15H12.3764V22H15.2987V15H17.4777Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                    <div class ="youtube">
                        <a href="https://www.youtube.com/ " target="_blank">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="#3f4954" xmlns="http://www.w3.org/2000/svg">
                                <rect width="28" height="28" fill="#3f4954"></rect>
                                <path d="M21.6657 9.87759C21.4817 9.13853 20.9395 8.55647 20.2511 8.35894C19.0033 8 14 8 14 8C14 8 8.99669 8 7.7489 8.35894C7.06052 8.5565 6.51835 9.13853 6.33434 9.87759C6 11.2172 6 14.0121 6 14.0121C6 14.0121 6 16.8071 6.33434 18.1467C6.51835 18.8857 7.06052 19.4435 7.7489 19.6411C8.99669 20 14 20 14 20C14 20 19.0033 20 20.2511 19.6411C20.9395 19.4435 21.4817 18.8857 21.6657 18.1467C22 16.8071 22 14.0121 22 14.0121C22 14.0121 22 11.2172 21.6657 9.87759ZM12.3636 16.5497V11.4745L16.5454 14.0122L12.3636 16.5497Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



