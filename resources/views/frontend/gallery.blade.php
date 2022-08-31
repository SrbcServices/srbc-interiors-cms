@extends('layouts.frontend')
@section('content')
    <section id="about-banner">

        <h2>Portfolio</h2>

    </section>
    <div class="portfolio">

        <div class="uk-container">

            <div class="portfolio-wrapper">

                @foreach ($portfolio as $port)

                    @foreach ($port as $item)

                        <div class="port-one">

                            @foreach ($item as $img)

                                <div class="port-ind">
                                    <img src="{{ asset('/uploads/gallery_images/' . $img . '') }}"
                                        alt="" srcset="">

                                </div>

                            @endforeach


                        </div>
                    @endforeach

                @endforeach


            </div>

        </div>

    </div>
@endsection
