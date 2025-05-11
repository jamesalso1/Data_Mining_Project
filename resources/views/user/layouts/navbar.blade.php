<div class="navbar-container">
    <div class="navbar-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('asset/images/logo_coffee_1.png') }}" alt="Logo" class="logo">
        </a>
    </div>
    <div class="navbar-list">
        <ul class="list-ul">
            <li class="list-item"><a class="list-link" href="{{route('product.index',["type" => "coffee"])}}">Cà phê</a></li>
            <li class="list-item"><a class="list-link" href="{{route('product.index',["type" => "tea"])}}">Trà</a></li>
            <li class="list-item"><a class="list-link" href="{{route('product.index',["type" => "latte"])}}">Latte</a></li>
            <li class="list-item"><a class="list-link" href="{{route('product.index',["type" => "cake"])}}">Khai vị</a></li>
            <li class="list-item"><a class="list-link" href="#">Cửa hàng</a></li>
        </ul>
    </div>
</div>
