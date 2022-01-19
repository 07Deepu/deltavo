<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/signin.css" rel="stylesheet">

</head>

<body>
    <div class="bottom text-center mb-5">
        <p href="#" class="sm-text mx-auto mb-3"></p>
    </div>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo"
                                    src="https://i.imgur.com/PSXxjNY.png"> </div>
                            <h3 class="mb-5 text-center heading">We are Deltavo</h3>

                            <?php
                                 if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                              {
                                 echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                                 unset($_SESSION['status']);
                                }
                               ?>
                                

                            <form  action="db/redirect.php" method="post" enctype="multipart/form-data" >

                                <h6 class="msg-info">Please login to your account</h6>
                                <div class="form-group"> 
                                    <label class="form-control-label text-muted">EmailID</label>
                                    <input type="email" id="email" name="email" placeholder=" email id" class="form-control">
                                </div>

                                <div class="form-group"> 
                                    <label class="form-control-label text-muted">Password</label>
                                    <input type="text" id="mobile_number" name="password" placeholder="password" class="form-control">
                                </div>
                                <div class="row justify-content-center my-3 px-3">
                                     <button type="submit" name="login_btn"  class="btn-block btn-color">Login
                                        as Super Admin</button> </div>

                            </form>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="#" class="sm-text mx-auto mb-3"></p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">We are more than just a company</h3>
                        <small class="text-white">Deltavo Private Limited is a Private incorporated on 23 October 2020.
                            It is classified as Non-govt company and is registered at Registrar of Companies, Cuttack.
                            Its authorized share capital is Rs. 100,000 and its paid up capital is Rs. 100,000. It is
                            inolved in Retail trade not in stores
                            .</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="assets/js/sign.js"></script>
</body>

</html>