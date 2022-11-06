<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $this->view('Layout/Head');
        ?>
        <title>Gleaner Registration</title>
    </head>
    <body>
    <?php
    $this->view('Layout/Navigation');
    ?>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="card-title text-center">Register to be a Gleaner</a></h2>
                            <hr >
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1" action='' method='post'>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>                            
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <button class="btn btn-primary">Create Account</button>
                                            <a href="/Login/gleaner">Already have an account?</a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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