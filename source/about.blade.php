@extends('_layouts.master')

@section('body')
    <!-- Navigation -->
    @include('_partials.navigation')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/assets/images/backgrounds/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1>2016. My year of change!</h1>

                <p>In 2016 i made one of the biggest decisions in my life to date. I made the transition from Plumber to Web Developer.</p>

                <p>After 12 years as a Plumbing &amp; Heating Engineer, i swapped my blow lamp and pipe bender for a keyboard and mouse!</p>

                <p>I'm Rick, a Web Developer from Sheffield, England. It still seems strange introducing myself as a Web Developer. What was once a seemingly unreachable dream is now a reality! How lucky am i!</p>

                <p>I started learning to code in 2015 after fitting a boiler for a software developer. <a href="http://rickwest.co.uk/why-programming">He gave me some advice that day that i will never forget</a>. I will be forever grateful to him for his inspiration and making me believe that anything is possible. Thank you Karl!</p>

                <p>After teaching myself to code for about 9 months, last year i got my first job as a PHP developer at small software company in Sheffield. The progress i have made is unbelievable, i'm learning so much every day and thoroughly enjoying the journey so far.</p>

                <p>Outside of work and coding, I have a beautiful wife and two amazing children.  I enjoy boxing (watching from the comfort of my armchair),  Game of Thrones, The Walking Dead but especially spending time with my wife, son and daughter. Family is everything.</p>

                <p>This blog started out as an account of my journey from plumber to programmer and now my goal is to share as much helpful information, tips, tricks and resources as possible to help any other aspiring developers or career changes out there.</p>

                <p>I love to hear from like minded people so please feel free to <a href="http://rickwest.co.uk/contact">contact</a> me if you want to talk code, career changing, or just to say hi :-)</p>

                <p>Rick x</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('_partials/footer')
@endsection
