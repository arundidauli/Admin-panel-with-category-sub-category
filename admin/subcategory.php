
<?php
session_start();
include('includes/config.php');
if (!isset($_SESSION['alogin'])) {
  header ('location: login.php'); 
  exit;
}

if(isset($_POST['submit']))
{
//$catid=$_POST['cat_id'];
$category=$_POST['category'];
$subcategory=$_POST['subcategory'];

$file= $_FILES['pic']['name'];
$temp= $_FILES['pic']['tmp_name'];    
move_uploaded_file($temp,"uploads/".$file);

$sql=mysqli_query($connection,"insert into subcategory(category_name,subcategory_name,sub_cat_pic) values('".$category."','".$subcategory."','".$file."')");
if ($sql) {
$_SESSION['msg']="Subcategory Created !!";
}else{
	$_SESSION['msg']="Subcategory not create !!";
}
}

if(isset($_GET['del']))
{
mysqli_query($connection,"delete from subcategory where sub_cat_id = '".$_GET['sub_cat_id']."'");
$_SESSION['delmsg']="Subcategory deleted !!";
}

?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


<title>HOMER | WebApp admin theme</title>
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
<link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
<link rel="stylesheet" href="vendor/animate.css/animate.css" />
<link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

<!-- App styles -->
<link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
<link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
<link rel="stylesheet" href="styles/style.css">

</head>
<body class="fixed-navbar fixed-sidebar">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
<div class="color-line">
</div>
<div id="logo" class="light-version">
<span>
Admin
</span>
</div>
<nav role="navigation">
<div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
<div class="small-logo">
<span class="text-primary">HOMER APP</span>
</div>
<form role="search" class="navbar-form-custom" method="post" action="#">
<div class="form-group">
<input type="text" placeholder="Search something special" class="form-control" name="search">
</div>
</form>
<div class="mobile-menu">
<button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
<i class="fa fa-chevron-down"></i>
</button>
<div class="collapse mobile-navbar" id="mobile-collapse">
<ul class="nav navbar-nav">
<li>
<a class="" href="login.html">Login</a>
</li>
<li>
<a class="" href="login.html">Logout</a>
</li>
<li>
<a class="" href="profile.html">Profile</a>
</li>
</ul>
</div>
</div>
<div class="navbar-right">
<ul class="nav navbar-nav no-borders">
<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown">
<i class="pe-7s-speaker"></i>
</a>
<ul class="dropdown-menu hdropdown notification animated flipInX">
<li>
<a>
<span class="label label-success">NEW</span> It is a long established.
</a>
</li>
<li>
<a>
<span class="label label-warning">WAR</span> There are many variations.
</a>
</li>
<li>
<a>
<span class="label label-danger">ERR</span> Contrary to popular belief.
</a>
</li>
<li class="summary"><a href="#">See all notifications</a></li>
</ul>
</li>
<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown">
<i class="pe-7s-keypad"></i>
</a>

<div class="dropdown-menu hdropdown bigmenu animated flipInX">
<table>
<tbody>
<tr>
<td>
<a href="projects.html">
<i class="pe pe-7s-portfolio text-info"></i>
<h5>Projects</h5>
</a>
</td>
<td>
<a href="mailbox.html">
<i class="pe pe-7s-mail text-warning"></i>
<h5>Email</h5>
</a>
</td>
<td>
<a href="contacts.html">
<i class="pe pe-7s-users text-success"></i>
<h5>Contacts</h5>
</a>
</td>
</tr>
<tr>
<td>
<a href="forum.html">
<i class="pe pe-7s-comment text-info"></i>
<h5>Forum</h5>
</a>
</td>
<td>
<a href="analytics.html">
<i class="pe pe-7s-graph1 text-danger"></i>
<h5>Analytics</h5>
</a>
</td>
<td>
<a href="file_manager.html">
<i class="pe pe-7s-box1 text-success"></i>
<h5>Files</h5>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</li>
<li class="dropdown">
<a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
<i class="pe-7s-mail"></i>
<span class="label label-success">4</span>
</a>
<ul class="dropdown-menu hdropdown animated flipInX">
<div class="title">
You have 4 new messages
</div>
<li>
<a>
It is a long established.
</a>
</li>
<li>
<a>
There are many variations.
</a>
</li>
<li>
<a>
Lorem Ipsum is simply dummy.
</a>
</li>
<li>
<a>
Contrary to popular belief.
</a>
</li>
<li class="summary"><a href="#">See All Messages</a></li>
</ul>
</li>
<li>
<a href="#" id="sidebar" class="right-sidebar-toggle">
<i class="pe-7s-upload pe-7s-news-paper"></i>
</a>
</li>
<li class="dropdown">
<a href="login.html">
<i class="pe-7s-upload pe-rotate-90"></i>
</a>
</li>
</ul>
</div>
</nav>
</div>

<!-- Navigation -->
<aside id="menu">
<div id="navigation">


<ul class="nav" id="side-menu">
<li class="active">
<a href="deshboard.php"> <span class="nav-label">Dashboard</span> <span class="label label-success pull-right">v.1</span> </a>
</li>



<li>
<a href="change_password.php"><span class="nav-label">Change Password</span></span> </a>

</li>

<li>
<a href="create_category.php"><span class="nav-label">Category </span></span> </a>

</li>
<li>
<a href="subcategory.php"><span class="nav-label">Subcategory</span></span> </a>

</li>

<li>
<a href="logout.php"><span class="nav-label">Logout</span></span> </a>

</li>


</ul>
</div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

<div class="small-header transition animated fadeIn">
<div class="hpanel">
<div class="panel-body">

<h2 class="font-light m-b-xs text-center" style="font-size: 20px">
Sub Category
</h2>
</div>
</div>
</div>

<div class="content animate-panel">

<div>
<div class="row">
<div class="col-lg-12">
<div class="hpanel">

</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="hpanel">
<?php if(isset($_POST['submit']))
{?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">??</button>
<strong></strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
</div>
<?php } ?>
<?php if(isset($_GET['del']))
{?>
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">??</button>
<strong></strong><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
<?php } ?>

<br />


<div class="panel-body " >
<form method="post" action="subcategory.php" class="form-horizontal"enctype="multipart/form-data">
<div class="form-group"><label class="col-sm-2 control-label">Category</label>
<div class="col-sm-10">
<select class="form-control m-b" name="category">

<option>Select Category</option>
<?php $query=mysqli_query($connection,"select * from category");
while($row=mysqli_fetch_array($query))
{?>
<option value="<?php echo $row['cat_id'];?>"><?php echo $row['category_name'];?></option>
<?php } ?>

</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">SubCategory Name</label>

<div class="col-sm-10"><input type="text" name="subcategory" class="form-control"></div>
</div>
 <div class="form-group"><label class="col-sm-2 control-label">Image </label>

<div class="col-sm-10"><input type="file" name="pic" class="form-control"></div>
</div> 
<div class="hr-line-dashed"></div>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
<button class="btn btn-default" type="submit">Cancel</button>
<button class="btn btn-primary" name="submit" type="submit">Save</button>
</div>
</div>
</form>
</div>
</div>
</div>


<!-- ////////// -->

</div>

</div>

<div class="row">
<div class="col-lg-12">
<div class="hpanel">
<div class="panel-body">
<table id="example2" class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>Id</th>
<th>Category</th>
<th>Subcategory</th>
<th>Creation Date</th>
<th>Image</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<?php $query=mysqli_query($connection,"select * from subcategory");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
<tr>
<td><?php echo htmlentities($cnt);?></td>
<td><?php echo htmlentities($row['category_name']);?></td>
<td><?php echo htmlentities($row['subcategory_name']);?></td>
<td> <?php echo htmlentities($row['creationDate']);?></td>
<td><img src="uploads/<?php echo htmlentities($row['sub_cat_pic']);?>" height="30px" width="60px"></a></td>
<td>
<a class = "btn btn-danger btn-xs " href="subcategory.php?sub_cat_id=<?php echo $row['sub_cat_id']?>&del=delete"><span class="glyphicon glyphicon-trash"></a></td>
</tr>
<?php $cnt=$cnt+1; } ?>
</tbody>
</table>

</div>
</div>
</div>

</div>
</div>

<!-- Right sidebar -->
<div id="right-sidebar" class="animated fadeInRight">

<div class="p-m">
<button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
</button>
<div>
<span class="font-bold no-margins"> Analytics </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
</div>
<div class="row m-t-sm m-b-sm">
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">300,102</h3>

<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
<div class="col-lg-6">
<h3 class="no-margins font-extra-bold text-success">280,200</h3>

<div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
</div>
</div>
<div class="progress m-t-xs full progress-small">
<div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
class=" progress-bar progress-bar-success">
<span class="sr-only">35% Complete (success)</span>
</div>
</div>
</div>
<div class="p-m bg-light border-bottom border-top">
<span class="font-bold no-margins"> Social talks </span>
<br>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
<div class="m-t-md">
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a1.jpg" alt="profile-picture">
</a>

<div class="media-body">
<span class="font-bold">John Novak</span>
<small class="text-muted">21.03.2015</small>
<div class="social-content small">
Injected humour, or randomised words which don't look even slightly believable.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a3.jpg" alt="profile-picture">
</a>

<div class="media-body">
<span class="font-bold">Mark Smith</span>
<small class="text-muted">14.04.2015</small>
<div class="social-content">
Many desktop publishing packages and web page editors.
</div>
</div>
</div>
</div>
<div class="social-talk">
<div class="media social-profile clearfix">
<a class="pull-left">
<img src="images/a4.jpg" alt="profile-picture">
</a>

<div class="media-body">
<span class="font-bold">Marica Morgan</span>
<small class="text-muted">21.03.2015</small>

<div class="social-content">
There are many variations of passages of Lorem Ipsum available, but the majority have
</div>
</div>
</div>
</div>
</div>
</div>
<div class="p-m">
<span class="font-bold no-margins"> Sales in last week </span>
<div class="m-t-xs">
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
<div class="row">
<div class="col-xs-6">
<small>Today</small>
<h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
</div>
<div class="col-xs-6">
<small>Last week</small>
<h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
</div>
</div>
</div>
<small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
Many desktop publishing packages and web page editors.
</small>
</div>

</div>

<!-- Footer-->
<footer class="footer">
<span class="pull-right">
Example text
</span>
Company 2015-2020
</footer>

</div>



<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<!-- DataTables -->
<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables buttons scripts -->
<script src="vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<!-- App scripts -->
<script src="scripts/homer.js"></script>


<script>

$(function () {

// Initialize Example 1
$('#example1').dataTable( {
"ajax": 'api/datatables.json',
dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
buttons: [
{extend: 'copy',className: 'btn-sm'},
{extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
{extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
{extend: 'print',className: 'btn-sm'}
]
});

// Initialize Example 2
$('#example2').dataTable();

});

</script>

</body>
</html>