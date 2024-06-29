<div class="sidebar p-3">
    <div>
        <h3>RskInventory</h3>
        <span>{{ Auth::user()->email }}</span>
        <br>
        <span>{{ Auth::user()->role }}</span>
    </div>
    <ul class="nav flex-column mt-4">

        @if(Auth::user()->role == "user")
        <li class="nav-item">
            <a class="nav-link" href="/products">
                <i class="fas fa-tags"></i> Products
            </a>
        </li>

        @endif
        <li class="nav-item">
            <a class="nav-link" href="#orders">
                <i class="fas fa-box"></i> Orders
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#customers">
                <i class="fas fa-users"></i> Customers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#purchases">
                <i class="fas fa-shopping-cart"></i> All Purchases
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#stock-alerts">
                <i class="fas fa-exclamation-triangle"></i> Stock Alerts
            </a>
        </li>
       
        <li class="nav-item mb-2">
            <a class="btn btn-danger w-100" href="/signout">Log Out</a>
        </li>
    </ul>
</div>