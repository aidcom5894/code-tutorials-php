<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="icon" type="image/png" href="assets/images/favicon.png">

<link rel="stylesheet" type="text/css" href="assets/css/shortHeight.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<title>PHP Code Tutorials</title>
</head>

<body>

<?php 

$hostname = 'localhost';
$username = 'u445536153_semesterexam';
$password = 'RobinR2204#@';
$dbname = 'u445536153_bcaexam';


// $hostname = 'localhost';
// $username = 'root';
// $password = 'Admin1234#@';
// $dbname = 'code_tutorials';





$config = mysqli_connect($hostname,$username,$password,$dbname);

		if(!$config)
		{
			echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
			echo "<symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>";
			echo "</symbol>";
			echo "<symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>";
			echo "<path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>";
			echo "</symbol>";
			echo "<symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
			echo "</symbol>";
			echo "</svg>";

			echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
			echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
			echo "<div>";
			echo "Database Connection Failed with Error:&nbsp;".mysqli_connect_error();
			echo "</div>";
			echo "</div>";

		}
		else
		{
			echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
			echo "<symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>";
			echo "</symbol>";
			echo "<symbol id='info-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>";
			echo "<path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z'/>";
			echo "</symbol>";
			echo "<symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
			echo "</symbol>";
			echo "</svg>";

			echo "<div class='alert alert-success d-flex align-items-center' role='alert'>";
			echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>";
			echo "<div>";
			echo "Welcome,"."<strong>&nbsp;".gethostbyaddr($_SERVER['REMOTE_ADDR'])."</strong>,&nbsp;&nbsp;". "Database Connection Established Successfully";
			echo "</div>";
			echo "</div>";

		}


?>

 

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>