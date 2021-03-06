@extends('common.layout')
@section('title', 'メモ編集')
@section('content')
    <!-- 見出し -->
    <h1 class="text-success text-center">メモ編集画面</h1>

    <div class="container">
        <div class="row">
            <div class="col col-lg-10 mx-auto">
                <nav class="card">
                    <div class="card-header text-center">メモを編集する</div>
                    <div class="card-body">
                        <form
                            action="{{ route('memos.edit', ['memo' => $memo->id]) }}"
                            method="POST"
                        >
                        @csrf
                        <div class="form-group">
                            <label for="book">著書名</label>
                            <input type="text" class="form-control" name="book" id="book"
                                value="{{ old('book') ?? $memo->book }}" />
                            @if($errors->has('book'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('book') }}
                                </div>
                            @endif
                            <label for="author">作者名</label>
                            <input type="text" class="form-control" name="author" id="author"
                                value="{{ old('author') ?? $memo->author }}" />
                            @if($errors->has('author'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('author') }}
                                </div>
                            @endif
                            <label for="title">メモのタイトル</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title') ?? $memo->title }}" />
                            @if($errors->has('title'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <label for="content">内容</label>
                            <br>
                            <textarea rows="3" class="form-control" name="content" id="content">{{ old('content') ?? $memo->content }}
                            </textarea>
                            @if($errors->has('content'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">送信</button>
                        </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection