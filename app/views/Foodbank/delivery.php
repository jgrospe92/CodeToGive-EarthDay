<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->view('Layout/Head');
  ?>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />
  <link rel="stylesheet" href="/resources/styles/carousel.css">
  <link rel="stylesheet" href="/resources/styles/bootstrap.min.css">
  <link rel="stylesheet" href="/resources/styles/delivery.css">
  <title>U Glean</title>
</head>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .text-color h1,
  .text-color p {
    color: white;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<body>
  <?php $this->view('Layout/Navigation'); ?>
  <div class="container">
    <div style="height: 800px">
      <div class="card border-0 shadow my-5">
        <div class="card-header">
          <h3 class="text-center">schedule your delivery</h3>
        </div>
        <div class="card-body p-5">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <th>Farm Name</th>
                <th>delivery date</th>
                <th>delivery time</th>
                <th>estimated delivery time</th>
                <th>Action</th>
              </thead>
              <tbody>
                <tr>
                  <form class="form-inline">
                    <td><input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Queen Farm"></td>
                    <td> <input type="date" class="form-control"></td>
                    <td>
                      <input type="time" class="form-control">
                    </td>
                    <td> <input type="time" class="form-control"></td>
                    <td>
                      <button type="submit" class="btn btn-primary mb-2">Confirm</button>

                    </td>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<?php $this->view('Layout/Scripts'); ?>
<?php $this->view('Layout/Footer'); ?>