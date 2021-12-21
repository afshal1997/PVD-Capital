<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r122/three.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<?php include 'commonFiles/allHeaderLinks.php' ?>
<?php include 'commonFiles/header.php' ?>
<?php include 'commonFiles/slideNav.php' ?>
<main id="">
    <section class="section01 position-relative" id="section01">
        <div id="particles-js"></div>
        <div class="container">
            <div class="col-lg-5 m-auto position-absolute worldMap">
                <div id="worldMapImg" class="worldMapImg"  data-aos="zoom-in-up" data-aos-duration="2000"></div>
            </div>
            <div class="verticallyCenter">
                <div class="col-lg-8">
                    <h1 data-aos="flip-up">Reshape Finance. Together.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section02" id="section02">
        <div class="container-fluid">
            <div class="col-6 m-auto text-center text-light mt-5">
                <div class="haimHeading">
                    <h2><b>Our portfolio</b></h2>
                </div>
            </div>
            <?php include 'commonFiles/ourPotfolio.php' ?>
        </div>
    </section>

    <section class="section03" id="section03">
        <div class="container">
            <div class="col-6 mb-5 m-auto text-center text-light mt-5">
                <div class="haimHeading text-dark">
                    <h2><b>OUR INVESTMENT THESIS</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center mb-3">
                    <h1 class="mb-0"><b>€1-15m</b></h1>
                    <div class="haimHeading">
                        <h6><b>initial ticket</b></h6>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-3">
                    <h1 class="mb-0"><b>Series A/B</b></h1>
                    <div class="haimHeading">
                        <h6><b>maturity</b></h6>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-3">
                    <h1 class="mb-0"><b>3-digit</b></h1>
                    <div class="haimHeading">
                        <h6><b>growth</b></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mt-5 mb-5 position-relative">
                    <div class="earthImg">
                        <div id="worldMapImg05" class="worldMapImg05"></div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5 mt-5 pt-5 pb-5 m-auto ms-0 text-center side-text-bbg">
                    <div class="haimHeading">
                        <h6><b>Our portfolio</b></h6>
                        <h1>
                            Powering European Fintechs and Insurtechs to
                            <strong>
                                transform financial services on a global scale
                            </strong>
                        </h1>
                    </div>
                    <a class="seeMore" href="javascript:void(0)"><i class="fas fa-long-arrow-alt-right ms-0"></i></a>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="col-6 mb-5 m-auto text-center">
                <div class="haimHeading text-dark">
                    <h2 class="mb-0"><b>WE LOVE</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5 text-center">
                    <h3 class="mb-0"><b>Vision</b></h3>
                </div>
                <div class="col-lg-4 mb-5 text-center">
                    <h3 class="mb-0"><b>Execution</b></h3>
                </div>
                <div class="col-lg-4 mb-5 text-center">
                    <h3 class="mb-0"><b>3-digit</b></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section04" id="section04">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mb-3 text-center">
                    <h3 class="mb-0"><b>News</b></h3>
                </div>
                <div class="col-lg-4 mb-3 m-auto">
                    <a class="btnViewMore" href="javascript:void(0)">View all news <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3 m-auto">
                    <div class="card newsCards">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mb-0 textTitle"><b>Oct 5, 2021</b> <span class=""><b>Portfolio</b></span></h6>
                            </div>
                            <h4><b>Willkommen Finlex!</b></h4>
                            <p>
                                Or why we invested in the leading German wholesale broker for Financial Lines.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 m-auto">
                    <div class="card newsCards">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mb-0 textTitle"><b>Jul 13, 2021</b> <span class=""><b>Thoughts</b></span></h6>
                            </div>
                            <h4><b>What are the most promising trends in BtoB Payment?</b></h4>
                            <p>
                                A current overview of one of the hottest sector in Fintech
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'commonFiles/homeFooter.php' ?>
</main>


<script src="asstes/js/custom.js"></script>
<?php include 'commonFiles/allFooterLinks.php' ?>
<script src="asstes/js/dots.js"></script>

</body>

</html>