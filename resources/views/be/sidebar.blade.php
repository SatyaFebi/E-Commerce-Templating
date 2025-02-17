<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fas fa-utensils"></i> DELICIOUS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('be/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Satya Febi</h6>
                        <span>{{ $title }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="@if ($title === 'Admin') {{route('admin.index')}} @elseif($title === 'Courier') {{route('courier.index')}} @else{{route('owner.index')}} @endif" class="nav-item nav-link @if(!@isset($menu)) active @endif"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @if ($title === 'Admin')
                    <a href="{{route('paket.index')}}" class="nav-item nav-link @if(@isset($menu) and $menu === 'Food Package') active @endif"><i class="fas fa-box-open "></i> Food Package</a>
                    <a href="/order" class="nav-item nav-link @if(@isset($menu) and $menu === 'Orders') active @endif"><i class="fas fa-shopping-cart"></i> Orders</a>
                    <a href="{{route('payment_method.index')}}" class="nav-item nav-link @if(@isset($menu) and $menu === 'Payment Method') active @endif"><i class="fab fa-cc-amazon-pay"></i> Payment Method</a>
                    
                    @elseif($title === 'Courier')
                    <a href="" class="nav-item nav-link"><i class="fas fa-shipping-fast"></i> Shipping</a>
                    @else 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chart-bar"></i> Reports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="r-order" class="dropdown-item"><i class="fas fa-shopping-cart"></i> Orders</a>
                            <a href="r-shipping" class="dropdown-item"><i class="fas fa-shipping-fast"></i> Shipping</a>
                        </div>
                    </div>
                    @endif
                </div>
            </nav>
</div>
        <!-- Sidebar End -->