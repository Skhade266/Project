
<html>
<head>
		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
		
</head>
<style>
*{padding:0px;margin:0px;}
.main{
   width:100%;height:100%;background-color:white;
   margin:auto;
}
.header{
   width:100%;height:100px;
   background-color:#990000;
   position:absolute;
   <!-- border: 5px solid gold; -->
}
.header h3{
color:white;
font-size:80px;
text-align:center;
position:relative;
float:right;
 right:500px;
 
   }
.header img{
position:relative;
} 
.header input{position:relative;
left:1100px;}  
.branches{width:95%;height:70px;
padding-top:20px;
background-color:#990000;
color:white;
position:relative;
left:30px;
top:110px;
text-align:center;
font-size:25px;
<!-- border: 5px solid gold; -->}
  
</style>
<?php
// session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_GET['del']))
{

$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();

}



 ?>

<!doctype html>
<html lang="en" class="no-js">

<head>

	
	<title>Registered Employee details   </title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
 
</head>

<body>
<div class="main">
	<div class="header">
		<img src="ongc logo.png" height="100px" width="100px">
		<h3>ONGC MUMBAI</h3>
		<a href="logout.php"> <input type="submit" value="logout" 
		style="width:50px;height:30px;background-color:#990000;color:white"></input></a>
	</div>
	<div class="branches">
		NBP Green Heights,11 High,Vasudhara Bhavan,Helibase,Maker Tower,Panvel,Nhava & Uran
	</div><br>
	<?php include('includes/header.php');?>
	<div class="margin">

	<div class="ts-main-content">
		
		<div class="content-wrapper">
			<div class="container-fluid"style="margin:left;>

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Registered Users</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default" ">
							<div class="panel-heading">Reg Users</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table align="left" id="zctb"class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th> Employee Name</th>
											<th>Gender </th>
											<th>Designation</th>
										<th>CPF</th>
										<th>Email</th>
										<th>Level</th>
										<th>Landline</th>
										<th>Mobile</th>
										<th>Seat</th>
										<th>Building</th>
										<th>Office</th>
										<th>Registration Date</th>
										
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<th> Employee Name</th>
											<th>Gender </th>
											<th>Designation</th>
										<th>CPF</th>
										<th>Email</th>
										<th>Level</th>
										<th>Landline</th>
										<th>Mobile</th>
										<th>Seat</th>
										<th>Building</th>
										<th>Office</th>
										<th>Registration Date</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT * from registration ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->Ename);?></td>
											<td><?php echo htmlentities($result->Gender);?></td>
											<td><?php echo htmlentities($result->Designation);?></td>
											<td><?php echo htmlentities($result->CPF);?></td>
											<td><?php echo htmlentities($result->Email);?></td>
											<td><?php echo htmlentities($result->Level);?></td>
											<td><?php echo htmlentities($result->Landline);?></td>
											<td><?php echo htmlentities($result->Mobile);?></td>
											<td><?php echo htmlentities($result->Seat);?></td>
											<td><?php echo htmlentities($result->Building);?></td>
											<td><?php echo htmlentities($result->Office);?></td>
											<td><?php echo htmlentities($result->Updation_Date);?></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php 
 ?>
