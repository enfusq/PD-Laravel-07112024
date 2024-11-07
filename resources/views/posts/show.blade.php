<x-app-layout>
    <a href="/posts">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <h4>Published at: {{ $post->published_at }}</h4>
</x-app-layout>
