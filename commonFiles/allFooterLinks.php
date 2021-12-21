<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="asstes/js/test.js"></script>
<script src="asstes/js/carousal.js"></script>
<script src="asstes/js/custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(".tabRowOne").slick({
        slidesToShow: 6,
        centerPadding: '0px',
        autoplay: false,
        infinite: false,
        speed: 2000,
        dots: false,
        arrows: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    centerPadding: '0px',
                    autoplay: false,
                    infinite: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '0px',
                    autoplay: false,
                    infinite: false,
                }
            }
        ]
    });
</script>
<script>
    function openNavBar() {
        document.getElementById('navbarTogglerDemo01').classList.toggle('show')
    }
    AOS.init();
</script>