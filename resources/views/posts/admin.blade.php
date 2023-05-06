@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Admin Panel</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="body-content ">

    <div class="page-content">
        <div class="container">
            <div class="clearfix toolbox">
                <a href="/posts/create" class="btn btn-primary pull-right">create post</a>
            </div>
            <div class="list-group">
                @foreach ($posts as $key => $post)
                    <a href="/posts/show/{{ $post->id }}" class="list-group-item">
                        {{ $post->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</section>
@endsection
