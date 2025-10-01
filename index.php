<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&display=swap" rel="stylesheet">
	<style>
		html{
			background-color:#DDE8F0;
		}
		body{
			font-family: Cairo Play, sans-serif;
			font-size: 20px;

		}
		h1{
			text-align: center;
		}

		h3{
			padding-left:30px;
		}
	</style>
</head>
<body>
	<h1>Welcome to my first php website</h1>

	<?php 
		class fruit{
			public $name;
			public $color;

			function set_name($name){
				$this->name = $name;
			}
			function get_name(){
				return $this->name;
			}
		}
		



		$zname="Zairen Lapid";
		$studentID="23-8510-248";
		$course="Web Information System";
		$section="3K- Group A";
		$attendance=true;
		$age=20;
		$height=1.49;
		$weight=39;
		$bmi=round($weight/ pow($height, 2), 2);
		$subject_load=array ("CIT5", "CIT6", "CIT17","CC17","SOCSCI103N", "CC6");
		$degree=null;
		$mango=new fruit();
		$mango->set_name('Mango');
		


		echo "<h3> Student Name: $zname</h3>";
		echo "<h3> Student Id Number: $studentID</h3>";
		echo "<h3> Course: $subject_load[2] : $course</h3>";
		echo "<h3> Section: $section</h3>";
		echo "<h3> Attendance: $attendance</h3>";
		echo "<h3> Age: $age</h3>";
		echo "<h3> Degree: $degree</h3>";
		echo  $mango->get_name();


		echo "<h3> BMI: $bmi</h3>"
	?>

</body>
</html>