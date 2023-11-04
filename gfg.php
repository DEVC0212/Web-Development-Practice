<?php 

$username = 'root';
$password = '';
$server = 'localhost';
$database = 'dev';
$con = mysqli_connect($server,$username,$password,$database);

if($con){
?>
	<!-- <script>
		alert("Connection Successful");
	</script> -->
<?php
}
 else {
?>
	<script>
		alert("Connection faild");
	</script>
<?php
}?>
<!-- PHP START -->
<?php
    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Age = $_POST['age'];
        $Profession = $_POST['profession'];
        $Friend = $_POST['friend'];
        $Languages = $_POST['Languages'];

        // $usrnm = $_SESSION['Username'];

        $insertquery = "insert into geeksform(Name,Email,Age,Profession,Friend,Languages) values('$Name','$Email','$Age','$Profession','$Friend','$Languages')";
         $query = mysqli_query($con, $insertquery);
		 if($query)
		 {
			?>
				<script>
					alert("submitted");
				</script>
			<?php
		}
		else 
		{
			?>
				<script>
					alert("failed");
				</script>
			<?php
			}
}
?>