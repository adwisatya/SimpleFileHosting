<?php 
	if(isset($_SESSION['username'])){
		header("location: dashboard.php");
	}
    include("template/header.php");
?>

    <!-- Page Content -->
    <div class="container">
        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-md-12">
				<hr/>

                <h2>Login</h2>
				<form class="form-horizontal" method="post" action="bin/mlogin.php">
					<div class="form-group">
						<div class="col-xs-4">
							<input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-4">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-3">
							<input type="submit" value="Login" name="submit"> <a href="register.php">Register</a>
						</div>
					</div>
				</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; filehosting.bangsatya.com 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
