<?php
	session_start();
	require_once("connect/connect.php");
	require_once("bin/file.php");
	require_once("bin/register.php");
	
	
	if($_SESSION['username'] == ""){
		header("location: login.php");
	}else{
		$username = $_SESSION['username'];
		$Registrator = new Register();
	}
    include("template/header.php");

?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                    <small>Hello, <?php echo $_SESSION['username']; ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="dashboard.php" class="list-group-item">File List</a>
					<a href="upload.php" class="list-group-item">Upload</a>
					<a href="trash.php" class="list-group-item">Trash</a>
                    <a href="account.php" class="list-group-item">Account Information</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>Change Account Information</h2>
                <form method="post" action="bin/mregister.php?id=3">
					<label>Username: <?php echo $_SESSION['username']; ?></label><input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>"><br/>
					<label>Password:</label><input type="text" name="password" value="<?php print $Registrator->getData($_SESSION['username'],"password"); ?>"></br>
					<label>Email:</label><input type="text" name="email" value=<?php echo $Registrator->getData($_SESSION['username'],"email"); ?>></br>
					<input type="submit" name="submit" value="Update">
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
