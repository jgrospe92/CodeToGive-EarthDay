<!doctype html>
<html lang="en">
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <link rel="stylesheet" href="/resources/styles/style.css">
    <link rel="stylesheet" href="/resources/styles/mainStyles.css">
    <link rel="stylesheet" href="/resources/styles/modal.css">
    <link rel="stylesheet" href="/resources/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <title>Gleaner Registration</title>
</head>

<body>
    <?php $this->view('Layout/Navigation'); ?>
    <main class="container-fluid">
        <div class="wrapper">
            <!-- FORM STARTS -->
            <form method="POST" action="" id="wizard">
                <!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder ">
                            <img src="https://images.unsplash.com/photo-1578357078586-491adf1aa5ba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                        </div>

                        <div class="form-content">
                            <div class="form-header">
                                <h3>Gleaner Registration</h3>
                            </div>
                            <p>Account</p>
                            <div class="form-row d-flex justify-content-center">
                                <div class="form-holder">
                                    <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="password" placeholder="Enter Password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" name="password" placeholder="confirm password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>