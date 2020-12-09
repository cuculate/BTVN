@extends('part.base')
@section('title','Home')
@section('main')
    <div class="row form">
        <div class="col-md-2 offset-5">
            <form method="post" action="{{ route('authenticate') }}">
                @csrf
                @if( session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Điền email...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Điền mật khẩu...">
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
@endsection
