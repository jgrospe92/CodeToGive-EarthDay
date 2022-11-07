
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"/>
    <link rel="stylesheet" href="/resources/styles/carousel.css">
    <link rel="stylesheet" href="/resources/styles/bootstrap.min.css">
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

      .checked {
        color:orange
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<body>
    <?php $this->view('Layout/Navigation'); ?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <h3 class="p-3 text-primary font-italic text-center ">
          Farmer profile
        <h3> 
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="/resources/images/user-profile-icon.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3 ">John Smith</h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary"><a style="color:white" href="\Famer\farmer_Profile_edit">Edit Profile</a></button>
            </div>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary"><a style="color:white" href="\Farmer\farmer_dashboard">Dashboard</a></button>
            </div>
          </div>
        </div>
        
        <h5 class="my-3 ">Info</h5>
        <div class="card mb-4">
          <div class="col-sm-9">
            <p class="text-muted mb-0">the Smith farms have been providing fresh carrots and corn to the community the past 3 generations.</p>
          </div>
        </div>

        <h5>Star Rating
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        </h5>

        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">John</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Look forward to working with them again</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Sammy</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Very friendly people</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Bob</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Fun environment.</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Julie</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star chacked"></span>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Best farm we've worked with!</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Farm</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Smith Farms</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Type of produce</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Carrots, Corn</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Produce Capacity</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">50 kg</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Availability</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Week Days</p>
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Events in Progress</span>
                </p>
               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 1</p>
               
                 <button type="button" class="btn btn-primary ml-4">Details</button>
                 <button type="button" class="btn btn-primary ml-4">Cancel Event</button>
                </div> 
                  <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 2</p>
               
                 <button type="button" class="btn btn-primary ml-4">Details</button>
                 <button type="button" class="btn btn-primary ml-4">Cancel Event</button>
                </div> 
             
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Past Events</span>
                </p>
               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 1</p>
               
                 <button type="button" class="btn btn-primary ml-4">Details</button>
                </div> 
                <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 2</p>
               
                 <button type="button" class="btn btn-primary ml-4">Details</button>
                </div> 

               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 3</p>
            
                 <button type="button" class="btn btn-primary ml-4">Details</button>
               </div> 

                <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Event 4</p>
            
                 <button type="button" class="btn btn-primary ml-4">Details</button>
               </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
   
</body>
</html>
