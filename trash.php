<?php
	session_start();
	require_once("connect/connect.php");
	require_once("bin/file.php");

	if($_SESSION['username'] == ""){
		header("location: login.php");
	}else{
		$username = $_SESSION['username'];
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
                <h2>My Trash</h2>
                <?php
					$fileHandler = new File();
					$query = $fileHandler->getList($username,0);
					print '<div class="row">';
					print '<div class="col-md-3" style="border-style:solid;">File ID</div>';
					print '<div class="col-md-3" style="border-style:solid;">File Name</div>';
					print '<div class="col-md-3" style="border-style:solid;">Action</div>';
					print '</div>';

					while($data = mysql_fetch_array($query)){
						print '<div class="row">';
						print '<div class="col-md-3">'.$data['fileid'].'</div>';
						print '<div class="col-md-3">'.$data['filename'].'</div>';
						print '<div class="col-md-1"><a href="bin/mfile.php?recover='.$data['fileid'].'">Recover</a></div>';
						print '<div class="col-md-1"><a href="bin/mfile.php?pdelete='.$data['fileid'].'">Delete</a></div>';

						print '</div>';
					}
				?>
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
