<?php
	session_start();
	require_once("connect/connect.php");
	require_once("bin/group.php");

	if($_SESSION['username'] == ""){
		header("location: login.php");
	}else{
		$username = $_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Research Assistant File Hosting - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<table style="color:white">
					<tr>
						<td valign="middle">
							<img src="img/header-footer/idec.png" width="200px" height="50px">
						</td>
					</tr>
				</table>            
			</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="bin/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
            <div class="col-md-3" >
                <div class="list-group">
                    <a href="admin.php" class="list-group-item">Group List</a>
					<a href="GroupManagement.php" class="list-group-item">Group Management</a>
					<a href="UserList.php" class="list-group-item">UserList</a>
                    <a href="UserManagement.php" class="list-group-item">User Management</a>
                    <a href="account.php" class="list-group-item">Account Information</a>

                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9" id="content">
                <h2>Group Management</h2>
				<a href="admin.php?act=add">Add</a> | 
				<a href="admin.php?act=delete">Delete</a> |
				<a href="admin.php?act=edit">Edit</a>

				<hr/>
                <?php
					if(!isset($_GET['act'])){
						$groupHandler = new Group();
						$query = $groupHandler->getList();
						print '<div class="row">';
						print '<div class="col-md-3" style="border-style:solid;">Group ID</div>';
						print '<div class="col-md-3" style="border-style:solid;">Nama</div>';
						print '</div>';

						while($data = mysql_fetch_array($query)){
							print '<div class="row">';
							print '<div class="col-md-3">'.$data['gid'].'</div>';
							print '<div class="col-md-3">'.$data['nama'].'</div>';
							print '</div>';
						}
					}else{
						switch ($_GET['act']){
							case 'delete': 
								break;
							case 'add':
								echo'
									<form class="form-horizontal" method="post" action="bin/mgroup.php?id=1">
										<div class="form-group">
											<div class="col-xs-4">
												<input type="text" class="form-control" id="inputNama" placeholder="Nama" name="nama">
											</div>
										</div>
										<div class="form-group">
											<div class="col-xs-3">
												<input type="submit" value="Add Group" name="submit">
											</div>
										</div>
									</form>
								';
								break;
						}
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

	<!-- Manipulator js -->
    <script src="js/manipulator.js"></script>

</body>

</html>
