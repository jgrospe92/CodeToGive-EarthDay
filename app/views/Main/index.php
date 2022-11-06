<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <title>U Glean</title>
</head>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<body>
    <?php $this->view('Layout/Navigation'); ?>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/resources/images/miletsone.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Milestone Achieved! </h1>
                            <p>
                                Over the past year, UGlean has helped rescue over 85% of the leftover crops and has helped feed over 200 people in need.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/resources/images/safety.png" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption" style="color: black;">
                            <h1>Safety Measures When Gleaning</h1>
                            <p>
                                What are some of the safety measures to take when gleaning? Click to learn more!
                            </p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/resources/images/team.png" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Pictures are in!</h1>
                            <p>
                                View pictures form last year's events below!
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="/resources/images/volunteer.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <h2 class="fw-normal">Volunteers</h2>
                    <p>Looking to become a volunteer gleaner? Click here to sign up!</p>
                    <p>
                        <a class="btn btn-secondary" href="/Register/gleaner">Sign Up &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="/resources/images/farm.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <h2 class="fw-normal">Farmers</h2>
                    <p>
                        Are you recruiting volunteers to help you on your farm? Sign up
                        here!
                    </p>
                    <p>

                        <a class="btn btn-secondary" href="/Register/account">Sign In &raquo;</a>

                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="/resources/images/food.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">


                    <h2 class="fw-normal">Foodbanks</h2>
                    <p>
                        Are you a foodbank representative and looking to join our network?
                        Click here!
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="/Register/foodbank">Sign Up &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">
                        LAUNCH OF THE PROGRAM TOMORROW’S FOREST
                        <span class="text-muted">GREEN INFRASTRUCTURE</span>
                    </h2>
                    <p class="lead">
                        With a grant from the Government of Quebec, Earth Day Canada will be implementing several
                        pilot projects on agricultural corridors to document the climate benefits of developments
                        and practices in agricultural settings 🌾 Click to learn more!
                    </p>
                </div>
                <div class="col-md-5">
                <img  class="bd-placeholder-img featurette-image  mx-auto" src="/resources/images/art1.jpeg" height="400" width="500" style="border-radius: 10px;box-shadow:inset 30px;">
                        <title>Green</title>
                        <rect width="100%" height="100%" fill="#eee" />
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">FOR APRIL 22, JOIN THE MOVEMENT!<span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Check out our suggestions for activities and initiatives to join near you in our online calendar!</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="bd-placeholder-img featurette-image  mx-auto" width="400" height="400" src="/resources/images/art2.jpg" style="border-radius: 10px;box-shadow:inset 30px;">
                        <title>Event</title>
                        <rect width="100%" height="100%" fill="#eee" />
                    </i>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"> CALL IN SICK FOR EARTH DAY <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead"> Discover the 2022 edition of the Earth Day campaign that highlights eco-anxiety, produced by the creative agency Sid Lee.
                        #CallinSickforEarthDay #RemedyTogether #EarthDay2022</p>
                </div>
                <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image  mx-auto" width="500" height="400" src="/resources/images/art3.jpg" role="img" style="border-radius: 10px;box-shadow:inset 30px;">
                        <title>What's new</title>
                        <rect width="100%" height="100%" fill="#eee" />
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->
        </div>
        <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
    </main>
</body>

</html>