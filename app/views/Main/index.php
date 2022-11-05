<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <title>U Glean</title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                ></button>
                <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                ></button>
                <button
                        type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                            class="bd-placeholder-img"
                            src="/resources/images/miletsone.jpg"
                            width="100%"

                    >

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
                    <img
                            class="bd-placeholder-img"
                            src="/resources/images/safety.png"
                            width="150%"
                            height="100%"

                    >
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
                    <img
                            class="bd-placeholder-img"
                            src="/resources/images/musk.jpg"
                            width="100%"

                    >

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Will Elon Musk buyout UGlean?</h1>
                            <p>
                                The billionaire is looking to purchase the UGlean platform. Read more about this fake article below.
                            </p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#">Browse gallery</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img
                            src="/resources/images/volunteer.png"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                    >

                    <h2 class="fw-normal">Volunteers</h2>
                    <p>Looking to become a volunteer gleaner? Click here to sign up!</p>
                    <p>
                        <a class="btn btn-secondary" href="#">Sign In &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img
                            src="/resources/images/farm.png"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                    >

                    <h2 class="fw-normal">Farmers</h2>
                    <p>
                        Are you recruiting volunteers to help you on your farm? Sign up
                        here!
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="#">Sign In &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img
                            src="/resources/images/food.png"
                            width="140"
                            height="140"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                    >


                    <h2 class="fw-normal">Foodbanks</h2>
                    <p>
                        Are you a foodbank representative and looking to join our network?
                        Click here!
                    </p>
                    <p>
                        <a class="btn btn-secondary" href="#">Sign In &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" />

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
                    <img
                            src="/resources/images/art1.jpeg"
                            height="400"
                            width="500"
                            style="border-radius: 10px;box-shadow:inset 30px;"
                    >
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">
                        FOR APRIL 22, JOIN THE MOVEMENT!
                        <span class="text-muted">See for yourself.</span>
                    </h2>
                    <p class="lead">
                        Check out our suggestions for activities and initiatives to join near you in our online calendar!
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img
                            src="/resources/images/art2.jpg"
                            height="400"
                            width="500"
                            style="border-radius: 10px;box-shadow:inset 30px;"
                    >
                    </img>
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">
                        CALL IN SICK FOR EARTH DAY <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">
                        Discover the 2022 edition of the Earth Day campaign that highlights eco-anxiety, produced by the creative agency Sid Lee.
                        #CallinSickforEarthDay #RemedyTogether #EarthDay2022
                    </p>
                </div>
                <div class="col-md-5">
                    <img
                            src="/resources/images/art3.jpg"
                            height="400"
                            width="500"
                            style="border-radius: 10px;box-shadow:inset 30px;"
                    >
                </div>
            </div>

            <hr class="featurette-divider" />

            <!-- /END THE FEATURETTES -->
        </div>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>