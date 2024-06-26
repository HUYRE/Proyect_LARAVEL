<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{url('/static/images/logo.png')}}" class="img-fluid">
        </div>
        <div class="user">
            <span class="subtitle">Bienvenido</span>
            <div class="name">
                {{Auth::user()->name}} {{Auth::user()->lastname}}
                <a href="{{url('/logout')}}" 

                 

                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Salir">
                <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
            <div class="email">{{Auth::user()->email}}</div>
        </div>
    </div>
    <div class="main">
        <ul>
            @if(kvfj(Auth::user()->permissions, 'dashboard'))
            <li>
                <a href="{{url('/admin')}}" class="lk-dashboard"> <i class="fa-solid fa-house-user"></i> Dashboard </a>
            </li>
            @endif
            
            @if(kvfj(Auth::user()->permissions, 'products'))
            <li>
                <a href="{{url('/admin/products/1')}}" class="lk-products lk-product_add lk-product_edit lk-product_gallery_add lk-product_search" > <i class="fa-solid fa-store"></i>Productos</a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'categories'))
            <li>
                <a href="{{url('/admin/categories/0')}}" class="lk-categories lk-category_add lk-category_edit lk-category_delete" >
                     <i class="fa-regular fa-folder"></i>  Categorias
                </a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'user_list'))
            <li>
                <a href="{{url('/admin/users/all')}}" class="lk-user_list lk-user_edit lk-user_permissions"><i class="fa-solid fa-users-line"></i>Usuarios</a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions,'settings'))
            <li>
                <a href="{{url('/admin/settings')}}" class="lk-settings"><i class="fa-solid fa-gears"></i>Configuraciónes

                </a>
            </li>
            @endif

            @if(kvfj(Auth::user()->permissions,'orders_list'))
            <li>
                <a href="{{url('/admin/orders/all')}}" class="lk-orders_list"> <i class="fa-solid fa-list-check"></i>Ordenes

                </a>
            </li>
            @endif
        </ul>
    </div>
</div>