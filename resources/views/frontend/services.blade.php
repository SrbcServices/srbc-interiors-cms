@extends('layouts.frontend')
@section('content')
    <section id="about-banner">

        <h2>SERVICES</h2>

    </section>

    <section id="wedo">

        <div class="uk-container">

            <h2>WHAT WE DO</h2>

            <div class="do-wrapper">
                <div class="do-ind">
                    <img src="{{ asset('/assets/frontent/images/services/service1.png') }}" alt="" srcset="">
                    <div class="do-h4">
                        <h4>Interior Designing</h4>
                    </div>
                </div>
                <div class="do-ind">
                    <img src="{{ asset('/assets/frontent/images/services/service2.png') }}" alt="" srcset="">
                    <div class="do-h4">
                        <h4>3D Designing</h4>
                    </div>
                </div>
                <div class="do-ind">
                    <img src="{{ asset('/assets/frontent/images/services/service3.png') }}" alt="" srcset="">
                    <div class="do-h4">
                        <h4>3D Walkthrough</h4>
                    </div>
                </div>
                <div class="do-ind">
                    <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt="" srcset="">
                    <div class="do-h4">
                        <h4>Turnkey Projects</h4>
                    </div>
                </div>
            </div>

        </div>
        <div class="uk-container">

            <h2>OUR FOCUS</h2>


            <div class="focus-wrapper">

                <div class="focus-ind">
                    <div class="focus-img">
                        <img src="{{ asset('/assets/frontent/images/services/service5.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h4>1.Villas</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, illo. Aperiam vel possimus
                            explicabo ea doloremque necessitatibus quod labore dignissimos hic aut eum rerum, quis dolores
                            animi
                            numquam dolor illo.</p>
                    </div>
                </div>
                <div class="focus-ind">
                    <div class="focus-img">
                        <img src="{{ asset('/assets/frontent/images/services/service4.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h4>2.Apartments</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, illo. Aperiam vel possimus
                            explicabo ea doloremque necessitatibus quod labore dignissimos hic aut eum rerum, quis dolores
                            animi
                            numquam dolor illo.</p>
                    </div>
                </div>
                <div class="focus-ind">
                    <div class="focus-img">
                        <img src="{{ asset('/assets/frontent/images/services/service5.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h4>3.Office</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, illo. Aperiam vel possimus
                            explicabo ea doloremque necessitatibus quod labore dignissimos hic aut eum rerum, quis dolores
                            animi
                            numquam dolor illo.</p>
                    </div>
                </div>
                <div class="focus-ind">
                    <div class="focus-img">
                        <img src="{{ asset('/assets/frontent/images/services/service5.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <h4>4.Showrooms</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, illo. Aperiam vel possimus
                            explicabo ea doloremque necessitatibus quod labore dignissimos hic aut eum rerum, quis dolores
                            animi
                            numquam dolor illo.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
