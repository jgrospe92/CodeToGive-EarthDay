<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $this->view('Layout/Head');
    ?>
    <title>Foodbank Registration</title>
</head>
<body>
    <?php $this->view('Layout/Navigation'); ?>
    <main class="container mt-5">
        <fieldset>
            <h2>Foodbank Profile</h2>
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Province</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Postal Code</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </fieldset>
    </main>
    <?php $this->view('Layout/Footer'); ?>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/ajax.js"></script>

    <input type="hidden" name="registerPage" value="foodbank">
</body>
</html>