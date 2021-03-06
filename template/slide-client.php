<!-- client slide section -->
<div class="container">
    <div class="col-md-12 slide-client-logo">

        <!--  -->
        <p class="quote-client text-center">Telah dipercaya oleh banyak instansi</p> 
        <!--  -->

        <div class="slider responsive-2">

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-google.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-gojek.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-tokped.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-bukalapak.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-tesla.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-google.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-gojek.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-tokped.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-bukalapak.png">
                </div>
            </div>

            <div class="img-tem">
                <div class="no-outline img-slide-client">
                    <img class="cont-img h-auto img-responsive no-outline" src="assets/img/logo-klien/logo-tesla.png">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- client slide section -->

<script>
    $(document).ready(function() {
     $('.responsive-2').slick({
        // dots: true,
        infinite: true,
        speed: 700,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2800,
        prevArrow: $('.prev-2'),
        nextArrow: $('.next-2'),
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                // centerMode: true,
            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                infinite: true,

            }

        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                infinite: true,

            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });
 });
</script>