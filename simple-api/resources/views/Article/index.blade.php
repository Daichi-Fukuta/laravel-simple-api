<h2>記事一覧</h2>
@foreach ($articles as $article)
    <p>{{ $article->author }}</p>
    <p>{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <hr>
@endforeach