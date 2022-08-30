@extends('layouts.frontend')
@section('content')
    <section id="blogs-banner">

        <h2>Blogs</h2>

    </section>

    <section id="blogs">

        <div class="uk-container">
            @foreach ($blogs as $blog)
                <div class="blog-wrapper">

                    <h4>{{ $blog->Heading }}</h4>
                    <div class="blog-image">
                        {{-- <img src="{{ asset('/assets/frontent/images/services/service3.png') }}" alt=""> --}}
                        @if ($blog->Image_name != 'undefined')
                            <label for="blog-title"><img
                                    src="{{ asset('uploads/blog_images/' . $blog->Image_name . '') }}"
                                    style="width: 400px"></label>
                        @else
                            <label for="blog-title"><img src="{{ asset('/assets/admin/images/dummy-img.png') }}"
                                    alt="" style="width: 400px" id="preview"></label>
                        @endif
                    </div>

                    <p>{{ $blog->Subheading }}</p>

                    <button class="read"><a href="/blogs/{{$blog->Heading}}">Readmore</a></button>
                </div>
            @endforeach


        </div>

    </section>
@endsection
