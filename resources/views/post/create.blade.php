@extends('part.base')
@section('title','Home')
@section('main')

    @include('part.header')

    <div class="row form p-2" style="background-color: rgba(77,77,77,0.2)">
        <div class="col-md-6 offset-3">
            <h1 class="mt-4">Đăng bài</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('post.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" name="title" id="title" value="" placeholder="Điền tiêu đề....">
                </div>
                <div class="form-group">
                    <label for="content">Nội dung</label>
                    <textarea name="content" class="form-control" id="content" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Đăng bài</button>
            </form>
        </div>
    </div>
    <script src="{{asset('./ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('./ckfinder/ckfinder.js')}}"></script>
    <script>

        CKEDITOR.replace( 'content', {
            uiColor: '#14B8C4',
            toolbar: [
                [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                [ 'FontSize', 'TextColor', 'BGColor' ]
            ]
        });

    </script>
@endsection
