<!DOCTYPE html>
<html>
<head>
<SCRIPT language="JavaScript">
    function connect(){
	window.location="<?php echo site_url('main/authorise_card/add')?>";
    }

	function validateForm() {
	    var x = document.forms["Form"]["eventName"].value;
	    var y = document.forms["Form"]["venueName"].value;
	    if ((x == null || x == "") && (y == null || y=="")) {
		alert("Event name, Venue name must be filled out.");
		return false;
	    }
	    else if (x == null || x == ""){
		alert("Event name must be filled out.");
		return false;
	    }
	    else if (y == null || y == ""){
		alert("Venue name must be filled out.");
		return false;
	    }
	}
</SCRIPT>
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

<!------------------UAT Part 3 (1) Add authorisation for a  event after an event venue is changed------------------>
<?php
     if(isset($_POST['update'])) {
	$mysqli = new mysqli("localhost", "root", "", "vamoos");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$eventName = $_POST["eventName"];
	$venueName = $_POST["venueName"];
            
	$sql = "UPDATE event_has_venue
		     SET venueID = 
			(SELECT venueID
			 FROM venues
			 WHERE venue='$venueName')
		     WHERE eventID =
			(SELECT eventID
			 FROM events
			 WHERE event='$eventName')";

	if ($mysqli->query($sql) === TRUE){
		echo '<script language="javascript">';
		echo 'alert("Venue of the event is updated successfully!")';
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
                        <td class="Content1"width="22%"><p>Event Name: </p></td>
                        <td class="Content2"><p>&nbsp;&nbsp;<input name = "eventName" type = "text" 
                           id = "eventName" class="Content2"></p></td>
		     <td width="20%"> </td>
                     </tr>
                  
                     <tr>
		     <td></td>
                        <td class="Content1"><p>Venue Name: </p></td>
                        <td class="Content2"><p>&nbsp;&nbsp;<input name = "venueName" type = "text" 
                           id = "venueName" class="Content2"></p></td>
		     <td width="20%"> </td>
                     </tr>
                  
                     <tr>
		      <td> </td>
                        <td class="Content3" colspan = 2><p>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update Venue" class="Content3">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" value="Add Authorisations" onclick="connect();" class="Content3">  
			</p>
                        </td>
		     <td> </td>
                     </tr>
		  
                  </table>
               </form>

    
</body>
</html>
