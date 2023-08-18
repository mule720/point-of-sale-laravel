<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none text-truncate">
        <i class='bi bi-shop me-3 fs-4'></i>
        <span class="fs-4">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                <i class='bi bi-house me-2'></i>
                Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class='bi bi-speedometer2 me-2'></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class='bi bi-table me-2'></i>
                Orders
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class='bi bi-grid me-2'></i>
                Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class='bi bi-person-circle me-2'></i>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Mr User</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
