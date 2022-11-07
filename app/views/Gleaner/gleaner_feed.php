<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />

    <link href="/resources/styles/bootstrap.min.css" rel="stylesheet" />
    <link href="/resources/styles/gleaner_feed.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/resources/styles/mainStyles.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
    

    <link rel="stylesheet" href="/resources/styles/farmer_dashboard.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" > 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
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

    .text-color h1,
    .text-color p {
        color: white;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    .container {
        border: 1 solid black;
        padding: 5rem;
    }
</style>

<body>
    <?php $this->view('Layout/Navigation'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="user-profile-box">
                    <div class="header clearfix d-flex flex-column align-items-center">
                        <h2>My Name</h2>
                        <img id="g-profile-img" class="img-fuid mb-3" width="80" height="80" alt="avatar" src="https://profiles.stanford.edu/proxy/api/cap/profiles/65672/resources/profilephoto/350x350.1509500008416.jpg">
                    </div>
                    <div class="mt-1 d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm mt-3">Profile Page</button>
                    </div>
                    <div class="detail clearfix">
                        <ul class="list-group list-group-flush">
                            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <strong class="text-primary">Groups List</strong>
                                <span class="badge badge-light badge-pill">17</span>
                            </a>

                            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <strong class="text-primary">All Events</strong>
                                <span class="badge badge-light badge-pill">7</span>
                            </a>

                    </div><!-- Détail-->
                </div><!-- User profile box-->
            </div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <div class="dashborad-box">
                        <h4 class="title">Currently Joined</h4>
                        <div class="section-body">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Group name</th>
                                        <th>Date </th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Haloween Harvest</td>
                                            <td><span class="badge badge-pill badge-danger">finished</span></td>
                                            <td>
                                                <span class="g-auteur">Walter White</span>
                                                <br />
                                                <span><em><a class="g-lien" href="#">Greenpeace</a></em></span>
                                            </td>
                                            <td>22 October 2022</td>
                                            <td>
                                                <a href=""><span class="g-action bi bi-pencil-fill"> </span></a>
                                                <a href=""><span class="g-action fa fa-eye"></span></a>
                                                <a href=""><span class="g-action fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Fall Harvest</td>
                                            <td><span class="badge badge-pill badge-success">coming</span></td>
                                            <td>
                                                <span class="g-auteur">Jean Eudes</span>
                                                <br />
                                                <span><em><a class="g-lien" href="#">GreenEarth</a></em></span>
                                            </td>
                                            <td>10 November 2022</td>
                                            <td>
                                                <a href=""><span class="g-action bi bi-pencil-fill"> </span></a>
                                                <a href=""><span class="g-action fa fa-eye"></span></a>
                                                <a href=""><span class="g-action fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </h4>
                    </div>
                </div>
                <h4 class="title" style="position:relative;left: 18px;margin-bottom: 3%;">Available Gleaning Opportunites</h4>

                <div class="row">
                    <div class="feed">
                        <div class="event_card">
                            <div id="farmName">Farm Name</div>
                            <div id="location">Location: Outremont</div>

                            <div id="spots">
                                <img id="spots_img" src="/resources/images/card_1.png" />
                                Spots Available: 20/40
                            </div>
                            <div id="harvested">
                                <img id="harvested_img" src="/resources/images/card_2.png" />
                                Harvested:30/50
                            </div>
                            <div id="days">
                                <img id="days_img" src="/resources/images/card_3.png" />
                                Days:MWF
                            </div>
                            <div id="need">
                                <img id="need_img" src="/resources/images/card_4.png" />
                                Need: Urgent
                            </div>
                            <button class="mk_group" id="mk_group">
                                Make Group
                                <img id="mk_group_img" src="/resources/images/card_6.png" />
                            </button>
                            <button class="j_group" id="jn_group">
                                Join Group
                                <img id="jn_group_img" src="/resources/images/card_5.png" />
                            </button>
                        </div>
                        <div class="event_card">
                            <div id="farmName">Farm Name</div>
                            <div id="location">Location: Outremont</div>

                            <div id="spots">
                                <img id="spots_img" src="/resources/images/card_1.png" />
                                Spots Available: 20/40
                            </div>
                            <div id="harvested">
                                <img id="harvested_img" src="/resources/images/card_2.png" />
                                Harvested:30/50
                            </div>
                            <div id="days">
                                <img id="days_img" src="/resources/images/card_3.png" />
                                Days:MWF
                            </div>
                            <div id="need">
                                <img id="need_img" src="/resources/images/card_4.png" />
                                Need: Urgent
                            </div>
                            <button class="mk_group" id="mk_group">
                                Make Group
                                <img id="mk_group_img" src="/resources/images/card_6.png" />
                            </button>
                            <button class="j_group" id="jn_group">
                                Join Group
                                <img id="jn_group_img" src="/resources/images/card_5.png" />
                            </button>
                        </div>
                        <div class="event_card">
                            <div id="farmName">Farm Name</div>
                            <div id="location">Location: Outremont</div>

                            <div id="spots">
                                <img id="spots_img" src="/resources/images/card_1.png" />
                                Spots Available: 20/40
                            </div>
                            <div id="harvested">
                                <img id="harvested_img" src="/resources/images/card_2.png" />
                                Harvested:30/50
                            </div>
                            <div id="days">
                                <img id="days_img" src="/resources/images/card_3.png" />
                                Days:MWF
                            </div>
                            <div id="need">
                                <img id="need_img" src="/resources/images/card_4.png" />
                                Need: Urgent
                            </div>
                            <button class="mk_group" id="mk_group">
                                Make Group
                                <img id="mk_group_img" src="/resources/images/card_6.png" />
                            </button>
                            <button class="j_group" id="jn_group">
                                Join Group
                                <img id="jn_group_img" src="/resources/images/card_5.png" />
                            </button>
                        </div>
                        <div class="event_card">
                            <div id="farmName">Farm Name</div>
                            <div id="location">Location: Outremont</div>

                            <div id="spots">
                                <img id="spots_img" src="/resources/images/card_1.png" />
                                Spots Available: 20/40
                            </div>
                            <div id="harvested">
                                <img id="harvested_img" src="/resources/images/card_2.png" />
                                Harvested:30/50
                            </div>
                            <div id="days">
                                <img id="days_img" src="/resources/images/card_3.png" />
                                Days:MWF
                            </div>
                            <div id="need">
                                <img id="need_img" src="/resources/images/card_4.png" />
                                Need: Urgent
                            </div>
                            <button class="mk_group" id="mk_group">
                                Make Group
                                <img id="mk_group_img" src="/resources/images/card_6.png" />
                            </button>
                            <button class="j_group" id="jn_group">
                                Join Group
                                <img id="jn_group_img" src="/resources/images/card_5.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </main>
</body>