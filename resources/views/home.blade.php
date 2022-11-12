<h1>DoiTwitter</h1>
<form action="/tweet" method='POST'>
    {{ csrf_field() }}
    <textarea name='content' placeholder='今どうしてる？'></textarea>
    <button>ツイートする</button>
</form>

@foreach($posts as $post)
    <p>{{ $post->id }} {{ $post->content }} {{ $post->created_at }}</p>
@endforeach