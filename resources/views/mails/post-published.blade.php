<h2>Dear {{ $user->name }}</h2>
<h3>A new post published on {{ env('APP_NAME') }}</h3>
<hr>
<h1>{{ $post->title }}</h1>

<div>
    {{ Str::words($post->content, 40) }}
</div>
<br>
<a href="{{ route('post', $post) }}" style="display: block;
        width: 200px;
        height: 30px;
        background-color: rgb(5, 134, 172);
        color: white;
        text-decoration: none;
        cursor: pointer;
        text-align: center;
        padding: 5px;
        font-size: 24px;
        font-family: inherit;
        border-radius: 4px;">
    Read the post
</a>
