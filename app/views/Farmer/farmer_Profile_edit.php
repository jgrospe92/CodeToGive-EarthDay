<?php $this->view('Layout/Header'); ?>
<body>
    <?php $this->view('Layout/Navigation'); ?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <h3 class="p-3 text-primary font-italic text-center ">
         Edit your profile
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
            <h5 class="my-3 ">Smith Farms</h5>
            <div class="d-flex justify-content-center mb-2">
              <form>
                 <div class="form-group">
                   <label for="exampleFormControlFile1">select pictures of your farm</label>
                   <input type="file" class="form-control-file " id="exampleFormControlFile1">
                 </div>
              </form>
            </div>
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">FarmName</p>
              </div>
              <div class="col-sm-9">
                <input type"text" class="text-muted mb-0" placeholder="Smith Farms">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                  <input type"text" class="text-muted mb-0" placeholder="(097) 234-5678">
            
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                  <input type"text" class="text-muted mb-0" placeholder="San Francisco, CA">
               
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Type of produce</p>
              </div>
              <div class="col-sm-9">
                  <input type"text" class="text-muted mb-0" placeholder="Carrots, Corn">
             
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Produce Capacity</p>
              </div>
              <div class="col-sm-9">
                <input type"text" class="text-muted mb-0" placeholder="50 kg">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">availabilities</p>
              </div>
              <div class="col-sm-9">
                   <input type"text" class="text-muted mb-0" placeholder="Week Days">
              </div>
            </div>
          </div>
        </div>
        <button type="button"><a href="\Farmer\farmer_Profile">Cancel</a></button>
        <div class="row">
          <div class="col-md-6">
          </div>
          
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
            
              <button type="button" class="btn btn-primary">Save Changes</button>
              
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