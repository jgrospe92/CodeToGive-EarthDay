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
         Gleaner Profile
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
              <button type="button" class="btn btn-primary"><a style="color:white" href="\Gleaner\gleaner_Profile_edit">Edit Profile</a></button>
            </div>
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
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
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
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
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Your Groups</span>
                </p>
               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
               
                 <button type="button" class="btn btn-primary ml-4">leave the group</button>
                </div> 
                  <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
               
                 <button type="button" class="btn btn-primary ml-4">leave the group</button>
                </div> 
             
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Your Events</span>
                </p>
               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
               
                 <button type="button" class="btn btn-primary ml-4">cancel event</button>
                </div> 
                <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
               
                 <button type="button" class="btn btn-primary ml-4">cancel event</button>
                </div> 

               <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
            
                 <button type="button" class="btn btn-primary ml-4">cancel event</button>
               </div> 

                <div class="mb-3" >
                <p class="mb-1" style="font-size: .77rem; display:inline-block;">Web Design</p>
            
                 <button type="button" class="btn btn-primary ml-4">cancel event</button>
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