
<li class="nav-item menu-is-opening {{ Request::is('*categories') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('*categories') ? 'active' : '' }}">
    <i class="nav-icon fas fa-users"></i>
    <p>
        Master
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview" >
        <li class="nav-item">
            <a href="#"
               class="nav-link {{ Request::is('*categories') ? 'categories' : '' }}">
               
               <i class="far {{ Request::is('*categories') ? 'fa-dot-circle' : 'fa-circle' }}  nav-icon"></i>
                <p>Categories</p>
            </a>
        </li>

    </ul>
</li>


