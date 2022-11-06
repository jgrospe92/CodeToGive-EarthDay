

    <link rel="stylesheet" href="/resources/styles/farmer_dashboard.css">

<?php $this->view('Layout/Header'); ?>
 <?php $this->view('Layout/Navigation'); ?>
<body class=" m-t-3">
    <section class="user-page section-padding ">
        <div class="container m-t-3">
            <div class="row align-items-stretch">
                <div class="col-lg-4 col-md-5 col-xs-12">
                    <div class="user-profile-box">
                        <div class="header clearfix d-flex flex-column align-items-center">
                            <h2>My Farm</h2>
                            <img id="g-profile-img" class="img-fuid mb-3" width="80" height="80" alt="avatar" src="https://profiles.stanford.edu/proxy/api/cap/profiles/65672/resources/profilephoto/350x350.1509500008416.jpg">
                        </div>
                        <div class="mt-1 d-flex justify-content-center">
                            <button class="btn btn-primary btn-sm mt-3">Profile Page</button>
                        </div>
                        <div class="detail clearfix">
                            <ul class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <strong>Groups List</strong>
                                    <span class="badge badge-light badge-pill">17</span>
                                </a>
                                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <strong>FoodBanks List</strong>
                                    <span class="badge badge-light badge-pill">9</span>
                                </a>
                            
                                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <strong>All Events</strong>
                                    <span class="badge badge-light badge-pill">7</span>
                                </a>
                           
                        </div><!-- Détail-->
                    </div><!-- User profile box-->
                </div>
                <div class="col-lg-8 col-md-7 col-xs-12">
                    <div class="dashborad-box">
                        <h4 class="title">Your Products and remained level</h4>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="item">
                                        <div class="icon"><span class="g-atteint fa fa-check-circle"></span></div>
                                        <div class="info">
                                            <h6 class="number">90%</h6>
                                            <p class="type">Apple</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item">
                                        <div class="icon"><span class="g-alerte fa fa-check-circle"></span></div>
                                        <div class="info">
                                            <h6 class="number">40%</h6>
                                            <p class="type">Orange</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item">
                                        <div class="icon"><span class="g-non-atteint fa fa-check-circle"></span></div>
                                        <div class="info">
                                            <h6 class="number">20%</h6>
                                            <p class="type">Vegtable</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- sbody -->
                    </div><!-- dashbox -->
                    <div class="dashborad-box">
                        <h4 class="title">Your Events</h4>
                        <div class="section-body">
                            <div class="dropdown mr-1">
                                <button type="button" class="btn btn-sm btn-primary " id="dropdownMenuOffset" data-toggle="dropdown" data-offset="10,20">
                                    Create New Event
                                </button>
                          
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Statut</th>
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
            </div>
        </div>
    </section>
 
      <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
</body>

<!-- </html> -->