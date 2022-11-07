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
    <title>Farm Registration</title>
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
                            <img src="https://images.unsplash.com/photo-1492496913980-501348b61469?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                        </div>

                        <div class="form-content">
                            <div class="form-header">
                                <h3>Farm Registration</h3>
                            </div>
                            <p>Account</p>
                            <div class="form-row d-flex justify-content-center">
                                <div class="form-holder">
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="name" placeholder="Full name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                                </div>
                                <div class="form-holder">
                                    <input type="tel" placeholder="Phone number" class="form-control" name="phone_number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="password" name="confirm_password" placeholder="Confirm password" class="form-control" required>
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
                            <img src="/resources//images/form-wizard-1.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Farm Registration</h3>
                            </div>
                            <p>Farm details</p>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Address" name="address" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="City" name="city" class="form-control" required>
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Postal Code" name="postal_code" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Municipality" class="form-control" name="municipality" required>
                                </div>
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control">Province</div>
                                        <i class="zmdi zmdi-caret-down"></i>
                                    </div>

                                    <ul class="dropdown">
                                        <li rel="AB">Alberta</li>
                                        <li rel="BC">British Columbia</li>
                                        <li rel="MB">Manitoba</li>
                                        <li rel="NB">New Brunswick</li>
                                        <li rel="NL">Newfoundland and Labrador</li>
                                        <li rel="NT">Northwest Territories</li>
                                        <li rel="NS">Nova Scotia</li>
                                        <li rel="NU">Nunavut</li>
                                        <li rel="ON">Ontario</li>
                                        <li rel="PE">Prince Edward Island</li>
                                        <li rel="QC">Quebec</li>
                                        <li rel="SK">Saskatchewan</li>
                                        <li rel="YT">Yukon</li>
                                    </ul>

                                </div>
                                <div class="form-holder">
                                    <input type="text" name="region" placeholder="Region" class="form-control" autocomplete="none">
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
                            <img src="https://images.unsplash.com/photo-1558818498-28c1e002b655?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Farm Registration</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <textarea name="info" id="" placeholder="Farm Info/Description" class="form-control" style="height: 50px;"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="url" name="website" placeholder="Website" class="form-control">
                                </div>

                            </div>
<!--                            commented this since we'll move it to events-->
<!--                            <div class="form-row">-->
<!--                                <div class="form-holder w-10"><span>Availabilities start:</span>-->
<!--                                    <input type="date" id="availabilities" data-toggle="tooltip" title="Available from" placeholder="start date" name="start_date" class="form-control">-->
<!--                                </div>-->
<!--                                <div class="form-holder w-10"><span>Availabilities end:</span>-->
<!--                                    <input type="date" placeholder="end date" name="end_date" class="form-control">-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="checkbox-circle mt-24">
                                <label>
                                    <input type="checkbox">Do you accept the <label for="modal-1" style="color:black">terms and conditions?</label>
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
    <script src="/resources/scripts/ajax.js"></script>
    <!-- Template created and distributed by Colorlib -->
</body>

</html>