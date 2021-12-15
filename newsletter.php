<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asstes/css/newsletter.css">

    <title>PVD | Capital</title>
</head>

<body>

    <main class="newsletterForm" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto mt-5 mb-5">
                    <h3><b>Receive PVD Capital posts straight into your inbox</b></h3>
                    <div class="card shadow mt-5">
                        <form action="mailar.php" enctype="multipart/form-data" method="post">
                            <div class="card-body p-0">
                                <div class="card-title p-3 mb-0 newsletter">
                                    <p>
                                        We're happy you find this information useful. Please subscribe to our weekly newsletter and you will not miss the next issue... or the next... or the next after that... or... well, you get it ;)
                                    </p>
                                    <div class="mb-4">
                                        <label for="exampleFormControlInput1" class="form-label"><b>Email address</b></label>
                                        <input type="email" name="userEmail" value='' class="form-control" id="exampleFormControlInput1" placeholder="jane.doe@email.com">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlInput2" class="form-label"><b>First Name</b></label>
                                        <input type="text" name="firstName" class="form-control" id="exampleFormControlInput2" placeholder="Jane">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlInput3" class="form-label"><b>Last Name </b></label>
                                        <input type="text" name="lastName" class="form-control" id="exampleFormControlInput3" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="marketing-permissions p-4">
                                    <h6><b>Marketing Permissions</b></h6>
                                    <p>
                                        Please select all the ways you would like to hear from PVD Capital Partners:
                                    </p>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Email
                                        </label>
                                    </div>
                                    <p>
                                        You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website
                                    </p>
                                </div>
                            </div>
                            <div class="newsletter card-footer pt-4 pb-4">
                                <input type="submit" name="send" value="Subscribe" class="btn btn-secondary" />
                            </div>
                            <div id="statusMessage">
                                <?php
                                if (!empty($message)) {
                                ?>
                                    <p class='<?php echo $type; ?>Message'>
                                        <?php echo $message; ?>
                                    </p>
                                <?php
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>