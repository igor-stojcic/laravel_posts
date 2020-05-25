<footer>
    <h1 class="pink-text">Last 3 post</h1>
    <ul>
        @foreach ($latestPosts as $latestPost)
        <a href="/post/{{ $latestPost->id }}">Post by {{ $latestPost->user->name }} |</a>
        @endforeach
    </ul>
</footer>