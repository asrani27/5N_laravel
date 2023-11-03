<!doctype html>
<html lang="en">
  <head>
  	<title>Login 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/login5N/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">APLIKASI SISTEM KEPEGAWAIAN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(/login5N/images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Login</h3>
		      	<p class="text-center">Silahkan Masukkan Username dan Password</p>
                    <form method="POST" action="/login">
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn form-control btn-primary rounded submit px-3">Masuk</button>
                        </div>

                    </form>
              
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/login5N/js/jquery.min.js"></script>
  <script src="/login5N/js/popper.js"></script>
  <script src="/login5N/js/bootstrap.min.js"></script>
  <script src="/login5N/js/main.js"></script>

	</body>
</html>

