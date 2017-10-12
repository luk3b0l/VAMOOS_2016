<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script>
		function validateForm() {
		    var x = document.forms["Form"]["sportID"].value;
		    if (x == null || x == "") {
			alert("Sport ID must be filled out.");
			return false;
		    }
		}
	</script>
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
	font-size: 22px;
}

.Content2 {
	text-align: left;
	font-family: "Times New Roman";
	font-size: 22px;
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

<!-------------------------UAT Part 5 (5) Extra functionality: Expire all cards of ONE sport------------------------->
<?php
     if(isset($_POST['update'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sportID = $_POST["sportID"];

	$sql = "UPDATE cards
		    SET authorisedID = '2'
		    WHERE cardID IN
			(SELECT cardID
			FROM authorise_card
			WHERE sportID = '$sportID')";

	$sql2 = "UPDATE authorise_card
		    SET authorisedID = '2'
		    WHERE sportID = '$sportID'";

	if (($mysqli->query($sql) === TRUE) && ($mysqli->query($sql2) === TRUE)){
		echo '<script language="javascript">';
		echo 'alert("Cards are expired and authorisations are updated successfully!")';
		echo '</script>';
	} else {
		echo "Error updating record: " . $mysqli->error;
	}

	$mysqli->close();
    }
?>

<!-------------------------UAT Part 5 (5) Extra functionality: Cancel Authorisations for expired cards of ONE sport------------------------->
<?php
     if(isset($_POST['delete'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sportID = $_POST["sportID"];

	$sql = "UPDATE cards
		    SET authorisedID = '2'
		    WHERE cardID IN
			(SELECT cardID
			FROM authorise_card
			WHERE sportID = '$sportID')";

	$sql2 = "UPDATE authorise_card
		    SET authorisedID = '2'
		    WHERE sportID = '$sportID'";

	$sql3 = "DELETE FROM authorise_card
		    WHERE sportID = '$sportID'";

	if (($mysqli->query($sql) === TRUE) && $mysqli->query($sql2) === TRUE && $mysqli->query($sql3) === TRUE) {
		echo '<script language="javascript">';
		echo  'alert("Cards are expired and authorisations are deleted successfully!")';
		echo '</script>';
	} else {
		echo "Error deleting record: " . $mysqli->error;
	}
	$mysqli->close();
    }
?>
               <form name="Form" method = "post" action = "<?php $_PHP_SELF ?>" onsubmit="return validateForm()">
                  <table width="80%" border =" 0" cellspacing = "0" cellpadding = "0" align="center">
                     <tr>
		     <td class ="Title" colspan = 4 ></td>
		  </tr>
                     <tr>
		     <td width="20%"></td>
                        <td class="Content1"width="20%"><p>Sport ID: </p></td>
                        <td class="Content2"><p>&nbsp;&nbsp;&nbsp;&nbsp;<input name = "sportID" type = "text"
                           id = "sportID" class="Content2"></p></td>
		     <td width="20%"> </td>
                     </tr>

                     <tr>
		      <td> </td>
                        <td class="Content3" colspan = 2><p>
                           <input name = "update" type = "submit"
                              id = "update" value = "Expire Cards" class="Content3">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input name = "delete" type = "submit"
                              id = "delete" value = "Expire card & Delete authorisation" class="Content3">
			</p>
                        </td>
		     <td> </td>
                     </tr>

                  </table>
               </form>


</body>
</html>
