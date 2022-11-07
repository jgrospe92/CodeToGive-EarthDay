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
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Farm Registration</title>
        <style>
            .dropdown-menu {
                max-height: 100px;
                overflow-y: auto;
            }
            @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
            body {
                background: #f9f9f9;
                font-family: "Roboto", sans-serif;
            }

            .main-content {
                padding-top: 100px;
                padding-bottom: 100px;
            }

            .leaderboard-card {
                background: #fff;
                margin-bottom: 30px;
                border-radius: 5px;
                overflow: hidden;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            .leaderboard-card.leaderboard-card--first {
                transform: scale(1.05);
            }
            .leaderboard-card.leaderboard-card--first .leaderboard-card__top {
                background: linear-gradient(45deg, #05a098, #1bbac5);
                color: #fff;
            }
            .leaderboard-card__top {
                background: #f9f6ff;
                padding: 20px 0 30px 0;
            }
            .leaderboard-card__body {
                padding: 15px;
                margin-top: -40px;
            }

            img.circle-img {
                height: 70px;
                width: 70px;
                border-radius: 70px;
                border: 3px solid #fff;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            img.circle-img.circle-img--small {
                height: 55px;
                width: 55px;
                border-radius: 55px;
            }

            .table {
                border-spacing: 0 15px;
                border-collapse: separate;
            }
            .table thead tr th,
            .table thead tr td,
            .table tbody tr th,
            .table tbody tr td {
                vertical-align: middle;
                border: none;
            }
            .table thead tr th:nth-last-child(1),
            .table thead tr td:nth-last-child(1),
            .table tbody tr th:nth-last-child(1),
            .table tbody tr td:nth-last-child(1) {
                text-align: center;
            }
            .table tbody tr {
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
            }
            .table tbody tr td {
                background: #fff;
            }
            .table tbody tr td:nth-child(1) {
                border-radius: 5px 0 0 5px;
            }
            .table tbody tr td:nth-last-child(1) {
                border-radius: 0 5px 5px 0;
            }

        </style>
    </head>

    <body>
        <?php $this->view('Layout/Navigation'); ?>
        <main>
        <section class="main-content">
		<div class="container">
			<h1>Top Gleaner - Most Kg collected</h1>
			<p>It always seems impossible until it's done</p>
			<hr>
			<br>
			<br>

			<div class="row">
				<div class="col-sm-4">
					<div class="leaderboard-card">
						<div class="leaderboard-card__top">
							<h3 class="text-center">88Kg</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="/resources/images/user2.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">Ricky Harmon</h5>
								<p class="text-muted mb-0">@ricky</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Quebec</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="leaderboard-card leaderboard-card--first">
						<div class="leaderboard-card__top">
							<h3 class="text-center">102Kg</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="/resources/images/user1.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">Evan Simard</h5>
								<p class="text-muted mb-0">@evansimard</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Montreal</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="leaderboard-card">
						<div class="leaderboard-card__top">
							<h3 class="text-center">74Kg</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="/resources/images/user3.jpg" class="circle-img mb-2" alt="User Img">
								<h5 class="mb-0">Érica Beaudoin</h5>
								<p class="text-muted mb-0">@erica</p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-map-marker"></i> Toronto</span>
									<button class="btn btn-outline-success btn-sm">Congratulate</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<h4>All Users</h4>

			<table class="table">
				<thead>
					<tr>
						<th>User</th>
						<th>Status</th>
						<th>Location</th>
						<th>Email</th>
						<th>Congratulate</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="/resources/images/user1.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Evan Simard</h5>
									<p class="text-muted mb-0">@evansimard</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">102Kg</h4><small class="text-success"><i class="fa fa-arrow-up"></i>10Kg</small>
							</div>
						</td>
						<td>Montreal</td>
						<td>topguy@gmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="/resources/images/user2.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Ricky Harmon</h5>
									<p class="text-muted mb-0">@ricky</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">88Kg</h4><small class="text-success"><i class="fa fa-arrow-up"></i>7Kg</small>
							</div>
						</td>
						<td>Quebec</td>
						<td>yes@gmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="/resources/images/user3.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Érica Beaudoin</h5>
									<p class="text-muted mb-0">@erica</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">74Kg</h4><small class="text-success"><i class="fa fa-arrow-up"></i>4Kg</small>
							</div>
						</td>
						<td>Toronto</td>
						<td>hello@gmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="/resources/images/user4.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Jessie Lavigne </h5>
									<p class="text-muted mb-0">@jesslavigne</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">70Kg</h4><small class="text-success"><i class="fa fa-arrow-up"></i>1Kg</small>
							</div>
						</td>
						<td>Vancouver</td>
						<td>goodbye@gmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="/resources/images/user5.jpg" class="circle-img circle-img--small mr-2" alt="User Img">
								<div class="user-info__basic">
									<h5 class="mb-0">Erik Gaudet</h5>
									<p class="text-muted mb-0">@erikgaudet</p>
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1">57Kg</h4><small class="text-success"><i class="fa fa-arrow-up"></i>2kg</small>
							</div>
						</td>
						<td>Montreal</td>
						<td>maybe@gmail.com</td>
						<td>
							<button class="btn btn-success btn-sm">Congratulate</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	        <button type= "submit" value="Back" class="btn btn-primary">Back to Profile</button>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </main>
    </body>
</html>
