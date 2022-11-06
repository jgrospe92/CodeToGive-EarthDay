<!DOCTYPE html>
<html lang="en">
<?php $this->view('Layout/Header'); ?>   

    <body>
        <header>
            <nav class="navbar" style="background-color: #50c2d1">
              <div class="container">
                <a href="https://earthday.ca">
                  <img src="../assets/earthday_white.png" width="40" height="40" />
                </a>
                <a href="/">
                  <img src="../assets/ugleen.png" width="80" height="80" />
                </a>
                <a href="/">
                  <img src="../assets/ugleen_txt.png" width="40" height="40" />
                </a>
              </div>
            </nav>
          </header>
          <br>
          
          <main>                
                <center><div class="foodbankprofile">
                    <div>
                        <hr>
                        <h3> <i class="bi bi-info-circle-fill"></i> Food Bank Profile</h3>
                        <hr>
                    </div>

                    <label>Name:</label>
                    <p></p>
                    <br>

                    <label>Link:</label>
                    <p></p>
                    <br>

                    <label>Capacity:</label>
                    <p></p>
                    <br>

                    <label>Availability:</label>
                    <p></p>
                    <br>
                </div></center>

                <center><div class="foodbankcontactinfo">
                    <br>
                    <div>
                        <hr>
                        <h3><i class="bi bi-telephone-fill"></i> Contact Information</h3>
                        <hr >
                    </div>   

                    <label>Email:</label>
                    <p></p>
                    <br>

                    <label>Phone Number:</label>
                    <p></p>
                    <br>
                </div></center>

                <center><div class="foodbankaddress">
                    <br>
                    <div>
                        <hr >
                        <h3> <i class="bi bi-person-lines-fill"></i> Address</h3>
                        <hr >
                    </div>

                    <label>Street:</label>
                    <p></p>
                    <br>

                    <label>City:</label>
                    <p></p>
                    <br>

                    <label>Province:</label>
                    <p></p>
                    <br>

                    <label>Postal Code:</label>
                    <p></p>
                    <br>

                    <label>Street:</label>
                    <p></p>
                    <br>

                </div></center>

          </main>

          <?php $this->view('Layout/Footer'); ?>
          <?php $this->view('Layout/Scripts'); ?>
    </body>
</html>