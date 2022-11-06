<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $this->view('Layout/Head');
    ?>
        <title>Login</title>
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
                            <h2 class="card-title text-center">Login as Gleaner</a></h2>
                            
                            <div class="navbar">
                                <a class="active" href="\Login\gleaner">Gleaner</a>
                                <a href="\Login\farmer">Farmer</a>
                                <a href="\Login\foodBank">Food Bank</a>
                            </div>

                            <hr >
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1" action='' method='post'>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>                            
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a href="\Register\gleaner">Register</a>
                                            <button class="btn btn-primary">Login</button>
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

        /* Style the navigation menu */
        .navbar {
            width: 100%;
            background-color: rgb(255, 255, 255);
            overflow: auto;
        }

        /* Navigation links */
        .navbar a {
            float: left;
            padding: 10px;
            color: black;
            text-decoration: none;
            font-size: 17px;
            width: 33.33%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
            text-align: center; /* If you want the text to be centered */
        }

        /* Add a background color on mouse-over */
        .navbar a:hover {
            background-color: rgb(240, 240, 240);
        }

        /* Style the current/active link */
        .navbar a.active {
            background-color: rgb(230, 230, 230);
        }

        /* Add responsiveness - on screens less than 500px, make the navigation links appear on top of each other, instead of next to each other */
        @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
            width: 100%;
            text-align: left; /* If you want the text to be left-aligned on small screens */
        }
        }

    </style>
</html>



