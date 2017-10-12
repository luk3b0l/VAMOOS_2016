<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script>
		function validateForm() {
		    var x = document.forms["Form"]["cardID"].value;
		    if (x == null || x == "") {
			alert("Card ID must be filled out.");
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

<!-------------------------UAT Part 2 (6) Expire a card for a team member------------------------->
<?php
     if(isset($_POST['update'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$cardID = $_POST["cardID"];

	$sql = "UPDATE cards
		    SET authorisedID= '2'
		    WHERE cardID='$cardID' ";

	$sql2 = "UPDATE authorise_card
		    SET authorisedID=  '2'
		    WHERE cardID='$cardID' ";

	if (($mysqli->query($sql) === TRUE)&&$mysqli->query($sql2) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Card is expired and authorisation is updated successfully!")';
		echo '</script>';
	} else {
		echo "Error updating record: " . $mysqli->error;
	}

	$mysqli->close();
    }
?>

<!-------------------------UAT Part 2 (7) Cancel authorisations for an expired card------------------------->
<?php
     if(isset($_POST['update2'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$cardID = $_POST["cardID"];

	$sql = "UPDATE cards
		    SET authorisedID=  '2'
		    WHERE cardID='$cardID' ";
	//$sql2 = "DELETE FROM authorise_card WHERE cardID = '$cardID'";

	$sql2 = "UPDATE authorise_card
		    SET authorisedID=  '3'
		    WHERE cardID='$cardID' ";

	if (($mysqli->query($sql) === TRUE) && $mysqli->query($sql2) === TRUE) {
		echo '<script language="javascript">';
		echo  'alert("Card is expired and authorisation is canceled successfully!")';
		echo '</script>';
	} else {
		echo "Error updating record: " . $mysqli->error;
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
		     <td width="22%"></td>
                        <td class="Content1" width="20%"><p>Card ID: </p></td>
                        <td class="Content2"><p>&nbsp;&nbsp;<input name = "cardID" type = "text"
                           id = "cardID" class="Content2"></p></td>
		     <td width="20%"> </td>
                     </tr>

                     <tr>
		      <td> </td>
                        <td class="Content3" colspan = 2><p>
                           <input name = "update" type = "submit"
                              id = "update" value = "Expire Card" class="Content3">&nbsp;&nbsp;&nbsp;&nbsp;
                           <input name = "update2" type = "submit"
                              id = "update2" value = "Expire card & Cancel authorisation" class="Content3">
			</p>
                        </td>
		     <td> </td>
                     </tr>

                  </table>
               </form>
</body>
</html>
