<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>

td,th {
	font-family: "Times New Roman";
	font-size: 26px;
	text-align: center;
}

h1 {
	text-align: center;
	font-family: Times New Roman;
	color: #FFFFFF;
}

.Title{
	font-size: 28px;
	text-align: center;
	font-weight: bold;
}

.Content1 {
	text-align: right;
	font-weight: bold;
}

.Content2 {
	text-align: left;
	font-family: "Times New Roman";
}

.Content3 {
	text-align: center;
	font-family: "Times New Roman";
	font-size: 22px;
}
	</style>
</head>
<body>
<br><br><br><br><br>

<!-------------------------UAT Part 3 (2) Expire cards for all officials when events are finished------------------------->
<?php
     if(isset($_POST['update'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "UPDATE authorise_card
		    SET authorisedID=  '2'";

	$sql2 = "UPDATE cards
		    SET authorisedID= '2'";

	if (($mysqli->query($sql) === TRUE)&&$mysqli->query($sql2) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("All cards are expired and authorisations are updated successfully!")';
		echo '</script>';
	} else {
		echo "Error updating record: " . $mysqli->error;
	}

	$mysqli->close();
    }
?>

<!-------------------------UAT Part 5 (5) Extra Functionality: Cancel all cards at the end of Olympics------------------------->
<?php
     if(isset($_POST['update2'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "UPDATE authorise_card
		    SET authorisedID=  '3'";

	$sql2 = "UPDATE cards
		    SET authorisedID= '3'";
	if (($mysqli->query($sql) === TRUE)&&$mysqli->query($sql2) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("All cards are cancelled and authorisations are updated successfully!")';
		echo '</script>';
	} else {
		echo "Error updating record: " . $mysqli->error;
	}

	$mysqli->close();
    }
?>

               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width="80%" border =" 0" cellspacing = "0" cellpadding = "0" align="center">
                     <tr>
		     <td class ="Title" colspan = 4 ></td>
		  </tr>
                     <tr>
		     <td></td>
                        <td> </td>
                        <td> </td>
                     </tr>
                     <tr>
		      <td> </td>
                        <td class="Content3" colspan = 2><p>
                           <input name = "update" type = "submit"
                              id = "update" value = "Expire All" class="Content3">&nbsp;&nbsp;&nbsp;&nbsp;
			<input name = "update2" type = "submit"
                              id = "update2" value = "Cancel All" class="Content3">
			</p>
                        </td>
		     <td> </td>
                     </tr>

                  </table>
               </form>


</body>
</html>
