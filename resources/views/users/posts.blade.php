@section('title')
    Posts    
@endsection

@extends('master')

@section('main')


<div class="container">
    <div class="row">
        @foreach ($allPosts as $post)
        <div class="col s4">
          <a href="{{ route('post.single',['id'=>$post->id]) }}}}">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">{{ substr($post->title,0,20) }}</span>
                <p>{{ substr($post->body,0,30) }}</p>
              </div>
              <div class="card-action">
                <a href="#">{{ substr($post->user->name,0,10) }}</a>
                <a href="#" class="right">{{ convert($post->created_at) }}</a>
              </div>
            </div>
          </a>
        </div>
        @endforeach
    </div>
</div>
    
@endsection