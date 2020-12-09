@extends('part.base')
@section('main')
    @include('part.header')
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div>
                <a style="margin: 19px;" href="{{ route('post.create')}}" class="btn btn-primary">Đăng bài</a>
            </div>
            <h1 class="display-3">Bài viết</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ session('success') }}</li>
                    </ul>
                </div>
                <br/>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Tiêu đề</td>
                    <td>Nội dung</td>
                    <td>Hành động</td>
                </tr>
                </thead>
                <tbody>
                @foreach($post as $post)
                    <tr class="">
                        <td>{{$post->id}}</td>
                        <td>
                            <a href="{{ route('post.edit',$post->id)}}">{{$post->title}}</a>
                        </td>
                        <td>{!! $post->content !!}</td>
                        <td>
                            <form action="{{ route('post.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
