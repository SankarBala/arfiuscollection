@foreach ($posts as $post)
    <tr>
        <td>Post id: {{ $post->id }}</td><br>
        <td>Post body: {{ $post->body }}</td><br>
        @foreach ($post->comments as $comment)
            @include('layouts.partials.comment', [
                'children' => $comment->comments,
            ])
        <br> 
        <br> 
        @endforeach
        <br> 

    </tr>
    <hr>
    <br>
@endforeach
