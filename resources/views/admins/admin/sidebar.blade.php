<li class="nav-item">
    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ getRequest('admin/dashboard', 'active') }}">
        <i class="nav-icon fa fa-tachometer-alt"></i>
        <p>
            {{ __('Dashboard') }}
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('categories') }}" class="nav-link {{ getRequest('admin/categories', 'active') }}">
        <i class="fas fa-th nav-icon"></i>
        <p>{{ __('Categories List') }}</p>
    </a>
</li>

<li class="nav-item {{ getRequest('admin/products*', 'menu-open') }}">
    <a href="#" class="nav-link {{ getRequest('admin/products*', 'active') }}">
        <i class="nav-icon fas fa-tags"></i>
        <p>
            {{ __('Products') }}
            <i class="right fas fa-angle-right"></i> <!-- RTL left -->
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link {{ getRequest('admin/products', 'active') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Products List') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.create') }}"
                class="nav-link {{ getRequest('admin/products/create', 'active') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add Product') }}</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('Admin') }}" class="nav-link {{ getRequest('admin/Admin', 'active') }}">
        <i class="fas fa-th nav-icon"></i>
        <p>{{ __('Admin List') }}</p>
    </a>
</li>

<li class="nav-item {{ getRequest('admin/Blogs*', 'menu-open') }}">
    <a href="#" class="nav-link {{ getRequest('admin/Blogs*', 'active') }}">
        <i class="nav-icon fas fa-store-alt"></i>
        <p>
            {{ __('Blog') }}
            <i class="right fas fa-angle-right"></i> <!-- RTL left -->
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('Blogs.index') }}" class="nav-link {{ getRequest('admin/Blogs', 'active') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Blog List') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('Blogs.create') }}"
                class="nav-link {{ getRequest('admin/Blogs/create', 'active') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add Blog') }}</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ getRequest('admin/Contactu*', 'menu-open') }}">
    <a href="#" class="nav-link {{ getRequest('admin/Contactu*', 'active') }}">
        <i class="nav-icon fas fa-tags"></i>
        <p>
            {{ __('Contactu') }}
            <i class="right fas fa-angle-right"></i> <!-- RTL left -->
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('Contactu.index') }}" class="nav-link {{ getRequest('admin/Contactu', 'active') }}">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Contactu List') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('Contactu.create') }}" class="nav-link {{ getRequest('admin/Contactu/create', 'active') }}"
                class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>{{ __('Add Contactu') }}</p>
            </a>
        </li>
    </ul>
</li>


