<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        @if(\Illuminate\Support\Facades\Auth::user())
        @if(\Illuminate\Support\Facades\Auth::user()->username === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post.create') }}">Đăng bài</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('post') }}">Quản lý bài đăng</a>
        </li>
        @endif
        <li class="nav-item">
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="text-capitalize">{{ \Illuminate\Support\Facades\Auth::user()->username }}</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('logout') }}">Thoát</a>
                </div>
            </div>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @endif
    </ul>
</div>
