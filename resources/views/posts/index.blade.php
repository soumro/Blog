@props(['post'])
<x-layout>
    
        @include('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                <x-post-grid :posts="$posts" />
                {{ $posts->links() }}
            @else
            <p>No posts yet. Please Check BAck Later</p>  
            @endif
            

            {{-- <div class="lg:grid lg:grid-cols-3">
                
                <x-post-card />
                <x-post-card />
                <x-post-card />
            </div> --}}
        </main>
</x-layout>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    
</head>
<body>
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {!! $post->title !!}
            </a>
        </h1>
        <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in 
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $post->excerpt !!}
        </div>
    </article>
@endforeach
</body>
</html> --}}