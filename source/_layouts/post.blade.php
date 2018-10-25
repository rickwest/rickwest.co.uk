@extends('_layouts.master')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ $page->image }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $page->title }}</h1>
                        <h2 class="subheading">{{ $page->subtitle }}</h2>
                        <span class="meta">Posted on {{ date('F jS, Y', $page->date) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @yield('content')
                    <hr>
                    @if ($page->getNext())
                        <p>
                            <strong>
                                If you enjoyed this post and are interested in similar stuff, check out my next post:
                                <a href="{{ $page->getNext()->getPath() }}">{{ $page->getNext()->title }}.</a>
                            </strong>
                        </p>
                        <p>
                            <strong>
                                Want this and other exclusive content delivered straight to your inbox? <a href="{{ $page->newsletter }}">Sign up for my newsletter</a> 📰.
                            </strong>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </article>

    <!-- Footer -->
    @include('_partials/footer')
@endsection
