<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRBC | Interiors</title>
    <link rel="stylesheet" href="{{asset('/assets/frontent/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- UIkit JS -->
    <link rel="stylesheet" href="{{asset('/assets/frontent/css/style.css')}}">
</head>

<body>

    <header>


        <div class="logo">
            <img src="{{asset('/assets/frontent/images/logo/logo.png')}}" alt="" srcset="">
        </div>

        <div class="call">
            <h4>CALL US : (+91) 9544 395 580</h4>
        </div>

        <div class="social">

            <div class="social-icons">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="social-icons">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </div>
            <div class="social-icons">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <div class="social-icons">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
            <div class="social-icons">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>

        </div>

        <div class="hamburger" id="open">

            <i class="fa fa-bars" aria-hidden="true"></i>

        </div>

        <div class="menu">
            <div class="menu-items">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/service">Services</a></li>
                    <li><a href="/blogs">Blogs</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/contact">Contact</a></li>

                </ul>
            </div>
        </div>



    </header>

    @yield('content')


    <footer id="contact">
        <div class="footer-page" data-aos="fade-down"
        data-aos-duration="2000">
            <h3>CONTACT</h3>
        </div>

        <div class="uk-container footer">

            <div class="footer-logo" data-aos="flip-down" data-aos-duration="2500">
                <img src="{{asset('/assets/frontent/images/logo/WHITE LOGO.png')}}" alt="" srcset="">
            </div>

            <div class="footer-head" data-aos="zoom-in-right" data-aos-duration="1500">
                <h2><span>SRBC</span> INTERIORS</h2>
            </div>


            <div class="visit"  data-aos="zoom-in-left" data-aos-duration="1500">
                <div class="visit-head">
                    <h2>VISIT US</h2>
                </div>
                <div class="rose">
                    <h4>ROSE CHALISSERY</h4>
                    <p>Managing Director</p>
                    <p>rose@srbcs.com</p>
                    <p>+91 8590 603 814</p>
                </div>
                <div class="rose">
                    <h4>ASHOK CHALISSERY</h4>
                    <p>Business Director</p>
                    <p>ashok@srbcs.com</p>
                    <p>+91 9544 395 580</p>
                </div>
            </div>


        </div>


    </footer>





</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).on("click", "#open", function (e) {
        e.preventDefault();

        console.log('Hello');

        $('.menu').toggleClass('active');

    });
</script>
<script>
    window.addEventListener("scroll", function(){
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 500);
      })
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>  
<script>
    var typed = new Typed('.type', {
strings: ["We Created perfection by undertaking projects in"],
typeSpeed: 100,
loop: true,
loopCount: Infinity,
showCursor: false,
});
    </script>


</html>