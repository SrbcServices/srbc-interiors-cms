@extends('layouts.frontend')
@section('content')
    <section id="about-banner">

        <h2>Portfolio</h2>

    </section>
    <div class="portfolio">

        <div class="uk-container">

            <div class="portfolio-wrapper">

                @foreach ($portfolio as $port)

                    <div class="port-one">

                        @foreach ($port as $index => $item)
                        
                            <?php
                            $in = $index;
                            ?>

                            <div class="port-ind">
                                <img src="{{ asset('/uploads/gallery_images/' . $port->gallery_image . '') }}" alt=""
                                    srcset="">

                            </div>

                            <div class="port-ind">
                                <img src="{{ asset('/uploads/gallery_images/' . $port->gallery_image . '') }}"
                                    alt="" srcset="">

                            </div>

                        @endforeach

                    </div>

                @endforeach

                {{-- <div class="port-one">
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt=""
                            srcset="">

                    </div>
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt=""
                            srcset="">

                    </div>
                </div>
                <div class="port-one">
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service1.png') }}" alt=""
                            srcset="">

                    </div>
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt=""
                            srcset="">

                    </div>
                </div>
                <div class="port-one">
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service1.png') }}" alt=""
                            srcset="">

                    </div>
                    <div class="port-ind">
                        <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt=""
                            srcset="">

                    </div>
                </div> --}}

            </div>

        </div>

    </div>
@endsection
