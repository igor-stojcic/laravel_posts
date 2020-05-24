<footer>
    <h1 class="pink-text">Last 3 post</h1>
    <ul>
        @foreach ($latestPosts as $latestPost)
        <a href="/post/{{ $latestPost->id }}">Post by {{ $latestPost->author }} |</a>
        @endforeach
    </ul>
</footer>