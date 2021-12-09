<?php include 'commonFiles/allHeaderLinks.php' ?>
<link rel="stylesheet" href="asstes/css/sideMeun.css">
<main id="">
    <section>
        <div class="row">
            <div class="col-lg-2 p-0">
                <div class="sideMenu p-3">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="index.php"> <img class="scrollLogo" src="asstes/Imgs/logos/scrollLogo.png" alt=""> <img class="staticLogo" src="asstes/Imgs/logos/Logo.png" alt=""></a>
                        </li>
                        <li>
                            <a class="formBackBtn" href="javascript:void(0)" onclick="history.back()"><i class="fas fa-long-arrow-alt-left me-2"></i> Back to homepage</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 p-0 m-auto mt-5">
                <div class="container">
                    <div class="card signInCards">
                        <div class="card-body">
                            <div class="col-lg-2 col-12 m-auto text-center">
                                <div class="card-title">
                                    <img class="w-100 mb-4" src="asstes/Imgs/logos/login-img.jpg" alt="">
                                    <h3><b>Sign in</b></h3>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-4 m-auto">
                                <form action="">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="password">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Keep me logged in
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a class="btn btnLogin" href="javascript:void(0)">Log in <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                        </div>
                                        <div class="col-lg-6 col-12 m-auto">
                                            <a class="forgotMyPassword" href="reset-password.php">I forgot my password…</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'commonFiles/allFooterLinks.php' ?>

</body>

</html>