<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>
    <li class="nav-item  open ">
        <a href="{{ route('categories') }}"><i class="la la-home"></i>
            <span class="menu-title" data-i18n="nav.dash.main"
                  class="menu-title" data-i18n="nav.add_on_drag_drop.main">قايمه انواع البطاريات  </span></a>        </span>
            <span
                class="badge badge badge-info badge-pill float-right mr-2"> </span>
        </a>

    </li>
    <li class="nav-item"><a href=""><i class="la la-group"></i>
        <span class="menu-title" data-i18n="nav.dash.main">البطاريات  </span>
        <span
            class="badge badge badge-danger badge-pill float-right mr-2">400</span>
    </a>
    <ul class="menu-content">
        <li class="active"><a class="menu-item" href="{{ route('products.index') }}"
                              data-i18n="nav.dash.ecommerce"> عرض الكل </a>
        </li>
        <li><a class="menu-item" href="{{ route('products.create') }}" data-i18n="nav.dash.crypto">أضافة
                 بطاريه جديده</a>
        </li>
    </ul>
</li>
<li class="nav-item"><a href=""><i class="la la-group"></i>
    <span class="menu-title" data-i18n="nav.dash.main">فريق القاده   </span>
    <span
        class="badge badge badge-danger badge-pill float-right mr-2">400</span>
</a>
<ul class="menu-content">
    <li class="active"><a class="menu-item" href="{{ route('team.index') }}"
                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
    </li>
    <li><a class="menu-item" href="{{ route('team.create') }}" data-i18n="nav.dash.crypto">أضافة
           فريق  جديد</a>
    </li>
</ul>
</li>
              <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاخبار  </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('Blogs.index') }}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('Blogs.create') }}" data-i18n="nav.dash.crypto">أضافة
                           خبر جديد</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{ route('Admin') }}"><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">قايمه المتحكمين </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2"> </span>
                </a>

            </li>
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">الانجازات والجوايز  </span>
                <span
                    class="badge badge badge-danger badge-pill float-right mr-2">400</span>
            </a>
            <ul class="menu-content">
                <li class="active"><a class="menu-item" href="{{  route('prizes.index') }}"
                                      data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                </li>
                <li><a class="menu-item" href="{{ route('prizes.create') }}" data-i18n="nav.dash.crypto">  اضافه انجاز او جوايز</a>
                </li>
            </ul>
        </li>
            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاخبار  </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">400</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('Blogs.index') }}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('Blogs.create') }}" data-i18n="nav.dash.crypto">أضافة
                           خبر جديد</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">التواصل  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2"> </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('Contactu.index') }}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('Contactu.create') }}" data-i18n="nav.dash.crypto">أضافة
                            تواصل جديد  </a>
                    </li>
                </ul>
            </li>




        </ul>
    </div>
</div>
