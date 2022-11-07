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
                                    <input id="password" type="text" name="password" placeholder="Enter Password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input id="confirm" type="text" name="password" placeholder="confirm password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div id="password_error" style="color:red; visibility: hidden;" role="alert">
                                    passwords do not match!
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="https://images.unsplash.com/photo-1551649001-7a2482d98d05?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Gleaner Registration</h3>
                            </div>
                            <p>Gleaner details</p>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="first name" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="last name"  name="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Phone number" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="/resources//images/gleaner_farmer.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Gleaner Registration</h3>
                            </div>
                            <p>Additional details</p>
                            <div class="form-row">
								<div class="form-holder w-100">
									<textarea name="bio" id="" placeholder="Bio" class="form-control" style="height: 99px;"></textarea>
								</div>
							</div>
                            <div class="checkbox-circle mt-24">
                                <label>
                                    <input type="checkbox" checked> Please accept <label for="modal-1" style="color:black">terms and conditions ?</label>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>
<!-- MODAL -->
<input class="modal-state" id="modal-1" type="checkbox" />
<div class="modal" style="z-index: 99;">
  <label class="modal__bg" for="modal-1"></label>
  <div class="modal__inner">
    <label class="modal__close" for="modal-1"></label>
    <h2>TERMS & CONDITION</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis molestiae, aut minima atque mollitia possimus! Nostrum eum dolorem possimus dolore atque voluptatum velit aspernatur mollitia modi nesciunt ad veritatis, tenetur quas! Sit libero quia voluptate ipsum iure dignissimos dolorem aliquam dolor mollitia facere, ratione repudiandae cumque fugiat ea deleniti sunt. Libero vel laboriosam perspiciatis praesentium ipsum nesciunt veritatis dolore? Placeat aliquam est dolor odio, cupiditate sequi deleniti culpa tenetur, tempore ipsa asperiores? At voluptatem, architecto deleniti modi velit corporis quae amet quaerat fugit possimus dolorem nisi officiis eaque porro quis eveniet praesentium doloremque, quisquam saepe voluptatibus dolore laboriosam minus. Eum.</p>
  </div>
</div>
<!-- MODAL END -->
    <?php
    $this->view('Layout/Scripts');
    ?>
    <!-- JQUERY -->
    <script src="/resources/scripts/jquery-3.3.1.min.js"></script>
    <!-- JQUERY STEP -->
    <script src="/resources//scripts/jquery.steps.js"></script>
    <script src="/resources//scripts/main.js"></script>
    <script src="/resources//scripts/script.js"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>