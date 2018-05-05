<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
@if($posts->count())
    @foreach($posts as $post)
        <h4>{{ $post->title }}</h4>
        <p> {{ str_limit($post->body,10) }}</p>
    @endforeach

    {{ $posts->appends(Request::only('order', 'per-page'))->render() }}
@else
    <p>No Posts</p>
@endif
</body>
</html>