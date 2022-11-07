
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <link rel="stylesheet" href="/resources/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/styles/foodbank_dashboard.css">
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
      .text-color h1, .text-color p{
            color: white;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
<body class=" m-t-3">
    <?php $this->view('Layout/Navigation'); ?>
    <section class="user-page p-5 section-padding ">
        <div class="container m-t-3">
            <div class="row align-items-stretch">
                <div class="col-lg-4 col-md-5 col-xs-12">
                    <div class="user-profile-box">
                        <div class="header clearfix d-flex flex-column align-items-center">
                            <h2>FoodBank Name</h2>
                            <img id="g-profile-img" class="img-fuid mb-3" width="80" height="80" alt="avatar" src="/resources/images/food-bank-logo.png">
                        </div>
                        <div class="mt-1 d-flex justify-content-center">
                            <button class="btn btn-primary btn-sm mt-3"><a style="color:white" href="\FoodBank\foodBank_Profile">Profile Page</a></button>
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
                <div class="col-md-8">
                 <div class="dashborad-box">
                        <h4 class="title">Your Events</h4>
                        <div class="section-body">
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
                   
               
                    <div class="dashborad-box">
                        <h4 class="title">Farms List</h4>
                        
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Capacity</th>
                                        <th>Products </th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Yellow Harvest</td>
                                            <td><span>322 Chem. du Ruisseau N, Saint-Clet, QC J0P 1S0 </span></td>
                                            <td>
                                                <span class="g-auteur">250kg</span>
                                              
                                            </td>
                                            <td>Orange,Apple</td>
                                            <td>
                                                <div class="d-flex justify-content-center mb-2 " >
                                                <button type="button" class="btn btn-primary btn-sm" style="width: 6rem;">Farmer Page</button>
                                                </div>
                                                 <div class="d-flex justify-content-center mb-2 ">
                                                <button type="button" class="btn btn-primary btn-sm" style="width: 6rem;">delivery</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Queen Farm</td>
                                            <td><span>322 Chem. du Ruisseau N, Saint-Clet, QC J0P 1S0 </span></td>

                                            <td>
                                                <span class="g-auteur">350kg</span>
                                               
                                            </td>
                                            <td>Potato</td>
                                            <td>
                                               <div class="d-flex justify-content-center mb-2">
                                                <button type="button" class="btn btn-primary btn-sm" style="width: 6rem;">Farmer Page</button>
                                                </div>
                                                 <div class="d-flex justify-content-center mb-2">
                                                <button type="button" class="btn btn-primary btn-sm" style="width: 6rem;">delivery</button>
                                                </div>
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
        </div>
    </section>
 
      <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
</body>

<!-- </html> -->