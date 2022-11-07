<!DOCTYPE html>
<html lang="en">
<?php $this->view('Layout/Header'); ?> 
    <head>
        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/5.2/examples/carousel/"
            />
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
            /> 
        <link href="../styles/bootstrap.min.css" rel="stylesheet" />
        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            }
    
            * {
            box-sizing: border-box;
            }
    
            /* Style inputs  */
            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            }
    
            input[type=submit] {
            background-color: #1bbac5;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            }
    
            input[type=submit]:hover {
            background-color: #05a098;
            }
    
            /* Style the container/contact section  */
            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
            }
    
            /* Create two columns that float next to eachother  */
            .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
            }
    
            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
    
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other  */
            @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
        </style>
    </head>
    <body>
    <?php $this->view('Layout/Navigation'); ?>
        <main>
            <div class="container">
                <div style="text-align:center">
                <br>
                    <h2 class="card-title text-center">Editing your group</a></h2>
                  <p>Team work makes the dream work</p>
                  <hr>
                </div>
                <div class="row">
                  <div class="column">
                    <img src="https://img.freepik.com/premium-photo/working-together-helps-us-all-grow-shot-group-unrecognizable-people-holding-plants-growing-out-soil_590464-47748.jpg?w=2000" style="width:100%">
                  </div>
                  <div class="column">
                    <form _lpchecked="1" action='' method='post'>
                        <div class="form-group">
                            <label for="groupName">Group Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <input type="text" class="form-control" id="bio" placeholder="Bio">
                        </div>     
                        <div class="form-group">
                        <label for="status">Status</label>
                            <select id="status" class="form-control">
                                <option selected>Choose...</option>
                                <option>public</option>
                                <option>private</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="region" placeholder="Region">
                        </div>  
                        <div class="form-group">
                            <label for="municipality">Municipality</label>
                            <input type="text" class="form-control" id="municipality" placeholder="Municipality">
                        </div>  
                        <div class="form-group">
                            <label for="inputState">Province</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>ON</option>
                                <option>QC</option>
                                <option>NS</option>
                                <option>NB</option>
                                <option>MB</option>
                                <option>BC</option>
                                <option>PE</option>
                                <option>SK</option>
                                <option>AB</option>
                                <option>NL</option>
                                <option>NT</option>
                                <option>YT</option>
                                <option>NU</option>

                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="maximumDistance">Maximum Distance</label>
                            <select id="maximumDistance" class="form-control">
                                <option selected>Choose...</option>
                                <option>10km</option>
                                <option>25km</option>
                                <option>50km</option>
                                <option>75km</option>
                                <option>100km</option>
                            </select>
                        </div>                      
                        <div class="form-group">
                            <label for="availabilities">Availabilities</label>
                            <input type="text" class="form-control" id="availabilities" placeholder="Availabilities">
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <button type= "submit" value="Cancel" class="btn btn-primary">Cancel</button>
                            <!-- <a href="\app\views\Login\gleaner_feed.php">Cancel</a> -->
                            <button type= "submit" value="Submit" class="btn btn-primary">Update gleaning group</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
        </main>
        <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
    </body>
</html>