@extends('layouts.frontend')
@section('content')
    <section id="blogs-banner">

        <h2>Blogs</h2>

    </section>
    <section id="insight-discription">

        <div class="uk-container">
            <div class="insight-banner-image">
                <img src="{{ asset('uploads/blog_images/' . $blogss->Image_name . '') }}" alt="" srcset="">
            </div>
            <div class="heading-insight">
                <h2>{{ $blogss->Heading }}</h2>

            </div>
            <div class="insight-content">
                <p>{!!$blogss->blog !!}</p>

            </div>


        </div>

    </section>
@endsection
