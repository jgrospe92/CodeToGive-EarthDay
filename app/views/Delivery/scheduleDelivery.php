<!DOCTYPE html>
<html lang="en">
    <?php $this->view('Layout/Header'); ?>
    <body>
        <?php $this->view('Layout/Navigation'); ?>
        <main>
        <div class="container">
            <<h2 class="card-title text-center">Creating your event</a></h2>
             <hr >
            <form _lpchecked="1" action='' method='post'>
                <div class="d-flex">
                <form action="" method="">
                <div class="form-group">
                    <input type="text" class="form-control" id="farmername" placeholder="Farmer Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="timeslot" placeholder="Timeslot">
                </div>
                <p>
                    <!-- Farmer address goes here-->
                </p> 
                <p>
                    <!-- Estimated delivery time goes here-->
                </p>
                <div class="d-flex flex-row align-items-center justify-content-between">
                    <a href="\app\views\Login\gleaner_feed.php">Cancel</a>
                    <button type= "submit" class="btn btn-primary">Schedule this Delivery</button>
                </div>
            </form>            
        </main>
        <?php $this->view('Layout/Footer'); ?>
        <?php $this->view('Layout/Scripts'); ?>
    </body>
</html>