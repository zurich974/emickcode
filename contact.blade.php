<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=" X-UA-Compatible" content="ie=edge">
    <title>e-comm</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="emick5.css">
    <link rel="stylesheet" href="emick6.css">
    <link rel="stylesheet" href="emick9.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/756f04bc01.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-lg-9">
                    <div class="header1 ">

                        <i class="fas fa-clock"></i> SAT: 6.00 am - 10.00 pm
                    </div>

                </div>
                <div class=" col-12  col-lg-3  ">
                    <div class="header-social ">
                        <a class="fb1" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="fb1" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a class="fb1" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="fb1" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img
                    src="https://preview.colorlib.com/theme/consultingbiz/assets/img/logo/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" m navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/emick5">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="http://127.0.0.1:8000/services">Services</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="http://127.0.0.1:8000/blog" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://127.0.0.1:8000/blog">Blog</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/blog">Blog Detail</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/blog">Blog Detail</a>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/blog">Element</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/contact#">contact</a>
                    </li>

            </div>
    </nav>
    <section>
        <div class="abt">
            <img clas="abt1" src="https://preview.colorlib.com/theme/consultingbiz/assets/img/hero/hero2.jpg" alt="">
            <div class="centered">Contact US</div>
        </div>
    </section>
    <section>
        <div class="contact_sec">
            <div class="container">
                <div class="contact_section text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.386557056418!2d85.29965871493016!3d27.674445082805594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19936e9fe119%3A0x431089638fb31ad4!2sEratech%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1610086846424!5m2!1sen!2snp"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Get in Touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 col-sm-6">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <div class="message">
                                <textarea class="form-control" rows="5" id="comment" name="text"
                                    placeholder="Enter Message"></textarea>
                            </div>
                            <div class="kin1">
                                <div class="d-flex">

                                    <input type="name" class="form-control" placeholder="Enter your name" id="name">


                                    <input type="email" class="form-control" placeholder="Enter email" id="email" style="
                                    margin-left: 1rem;
                                ">
                                </div>
                            </div>
                            <div class="king">
                                <div class="kin1">
                                    <textarea class="form-control" id="comment" name="text"
                                        placeholder="Enter Subject"></textarea>
                                </div>
                            </div>
                            <div class="kin1">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="home">
                        <div class="d-flex ">
                            <div class="med ">
                                <i class="lo fa fa-home" aria-hidden="true"></i>
                            </div>
                            <div class="media-body1">
                                <h5>Buttonwood, California.</h5>
                                <p>Rosemead, CA 91770</p>
                            </div>

                        </div>
                        <div class="d-flex ">

                            <div class="med1">
                                <i class=" lo fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="media-body2">

                                <h5>+9779845563699</h5>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>


                        </div>
                        <div class="d-flex ">
                            <div class="med1">
                                <i class=" lo fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body3">
                                <h5>support@colorlib.com</h5>
                                <p>Send us your query anytime!</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="foot5">
            <img class="ing" src="https://preview.colorlib.com/theme/consultingbiz/assets/img/gallery/footer_bg.jpg">
        </div>
        <div class="footer">
            <div class='container'>
                <div class="row">
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="po">
                            <a class=" py-4" href="#"><img
                                    src="https://preview.colorlib.com/theme/consultingbiz/assets/img/logo/logo2_footer.png"
                                    alt=""></a>
                            <P class="py-4">Receive updates and latest news direct from Simply enter.</P>
                            <h4><span>+977 </span>9845563699</h4>
                            <p class="py-2">emick.ghimire@gmail.com</p>

                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="second">
                            <h4 class="py-4">LOCATION</h4>
                            <p>Advanced</p>
                            <p>Management</p>
                            <p>Corporate</p>
                            <p>Customer</p>
                            <p>Information</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="second">
                            <h4 class="py-4">EXPLORE</h4>
                            <p>Cookies</p>
                            <p>About</p>
                            <p>Privacy Policy</p>
                            <p>Proparties</p>
                            <p>Licenses</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6">
                        <div class="second">
                            <h4 class="py-4">LOCATION</h4>
                            <p>Subscribe now to get daily updates</p>
                            <form action="/action_page.php">
                                <label for="email">Enter your email:</label>
                                <input type="email" id="email" name="email" placeholder="your email ">
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>
