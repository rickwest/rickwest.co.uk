---
extends: _layouts.page
pagination:
    collection: posts
image: /assets/images/backgrounds/home-bg.jpg
title: Rick West
subtitle: Dad. Husband. Developer. Heating Engineer. Human.
---
@section('content')
    @foreach ($pagination->items as $post)
    <div class="post-preview">
        <a href="{{ $post->getPath() }}">
            <h2 class="post-title">
                {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
                {{ $post->excerpt ? $post->excerpt : strip_tags(substr($post, 0, 125)) . '...' }}
            </h3>
        </a>
        <p class="post-meta">Posted on {{ date('F jS, Y', $post->date) }}</p>
    </div>
    <hr>
    @endforeach

    <!-- Pager -->
    <div class="clearfix">
        @if ($previous = $pagination->previous)
            <a class="btn btn-primary float-left" href="{{ $page->baseUrl }}{{ $previous }}">&larr; Newer Posts</a>
        @endif
        @if ($next = $pagination->next)
            <a class="btn btn-primary float-right" href="{{ $page->baseUrl }}{{ $next }}">Older Posts &rarr;</a>
        @endif
    </div>
@endsection