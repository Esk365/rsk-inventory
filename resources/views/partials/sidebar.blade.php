
<ul class="menu-inner py-1">
            @auth
                @if (Auth::user()->role == 'user')
                    <li class="menu-item mt-1">
                        <a class="menu-link" href="/products">
                            <i class="fas fa-tags menu-icon"></i>
                            <div>Products</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/customers">
                            <i class="fas fa-users menu-icon"></i>
                            <div>Customers</div>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->role == 'admin')
                    <li class="menu-item">
                        <a class="menu-link" href="/categories">
                            <i class="fas fa-box menu-icon"></i>
                            <div>Category</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="/suppliers">
                            <i class="fas fa-users menu-icon"></i>
                            <div>Supplier</div>
                        </a>
                    </li>
                @endif

                <li class="menu-item">
                    <a class="menu-link" href="/orders">
                        <i class="fas fa-box menu-icon"></i>
                        <div>Orders</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="#purchases">
                        <i class="fas fa-shopping-cart menu-icon"></i>
                        <div>All Purchases</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="/stockalerts">
                        <i class="fas fa-exclamation-triangle menu-icon"></i>
                        <div>Stock Alerts</div>
                    </a>
                </li>

                <li class="menu-item mb-2">
                    <a class="btn btn-danger w-100" href="/signout">Log Out</a>
                </li>
            @endauth
</ul>


