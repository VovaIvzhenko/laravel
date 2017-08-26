<div>
    {!! link_to_route('posts', 'published') !!} &nbsp;&nbsp;&nbsp;{!! link_to_route('posts.unpublished', 'unpublished') !!}
</div>
<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
        <li>{!! $post->excerpt !!}</li>
        <li>{{ $post->published_at }}</li>
        <hr>
    @endforeach
</ul>
