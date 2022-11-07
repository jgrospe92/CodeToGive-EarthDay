<!DOCTYPE html>
<html lang="en">
<?php $this->view('Layout/Header'); ?>
    <body>
    <?php $this->view('Layout/Navigation'); ?>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Creating your group</a></h2>
                            <hr >
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1" action='' method='post'>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
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
                                            <input type="text" class="form-control" id="region" placeholder="Region">
                                        </div>  
                                        <div class="form-group">
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
                                            <label for="inputState">Maximum Distance</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>10km</option>
                                                <option>25km</option>
                                                <option>50km</option>
                                                <option>75km</option>
                                                <option>100km</option>
                                            </select>
                                        </div>                      
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="availabilities" placeholder="Availabilities">
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a href="\app\views\Login\gleaner_feed.php">Cancel</a>
                                            <button type= "submit" class="btn btn-primary">Create gleaning group</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
    </body>

    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');

        body{
            background: #fff;
            font-family: 'PT Sans', sans-serif;
        }
        h2{
            padding-top: 1.5rem;
        }
        .card{
            border: 0.40rem solid #f8f9fa;
            top: 10%;
        }
        .form-control{
            background-color: #f8f9fa;
            padding: 20px;
            padding: 25px 15px;
            margin-bottom: 1.3rem;
        }

        .form-control:focus {
            color: #000000;
            background-color: #ffffff;
            border: 3px solid #da5767;
            outline: 0;
            box-shadow: none;
        }
        .btn{
            padding: 0.6rem 1.2rem;
            background: #50c2d1;
            border: 2px solid #50c2d1;
        }
        .btn-primary:hover {
            background-color: #00D100;
            border-color: #00D100;
            transition: .3s;
        }
    </style>
</html>