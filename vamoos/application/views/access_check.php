<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script>
		function validateForm() {
		    var x = document.forms["Form"]["search_cardID"].value;
		    var y = document.forms["Form"]["search_venue"].value;
		    var z = document.forms["Form"]["search_date"].value;
		    if ((x == null || x == "") && (y == null || y== "")&& (z == null || z== "")){
			alert("Card ID, Venue name, Date must be filled out.");
			return false;
		    }
		     else if ((x == null || x == "") && (y == null || y== "")){
			alert("Card ID, Venue name must be filled out.");
			return false;
		    }
		     else if ((y == null || y == "") && (z == null || z== "")){
			alert("Venue name, Date must be filled out.");
			return false;
		    }
		    else if ((x == null || x == "") && (z == null || z== "")){
			alert("Card ID, Date must be filled out.");
			return false;
		    }
		    else if (x == null || x == "") {
			alert("Card ID must be filled out.");
			return false;
		    }
		    else if (y == null || y== "") {
			alert("Venue name must be filled out.");
			return false;
		    }
		     else if (z == null ||z== "") {
			alert("Date must be filled out.");
			return false;
		    }
		}
	</script>
<style type="text/css">

body,td,th {
	font-family: "Times New Roman";
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
	<div class ="Title"><p><u>CARD READER</u></p></div>
	<?php
	$output = NULL;
	if(isset($_POST['submit']))
	{
		// Connect to the database
		$mysqli = NEW MySQLi("localhost", "root", "", "vamoos");
		
		if (!$mysqli)
		{
			print "CONNECTION ERROR!";
			exit;
		}
		
		$search_cardID = $mysqli->real_escape_string($_POST['search_cardID']);
		$search_venue = $mysqli->real_escape_string($_POST['search_venue']);
		$search_date = $mysqli->real_escape_string($_POST['search_date']);
		
		
		//Query the database:
		$resultSet = $mysqli->query(
		"SELECT * 
		FROM authorise_card
		LEFT JOIN venues
		ON authorise_card.venueID = venues.venueID
		WHERE cardID = '$search_cardID' 
		and venues.venue = '$search_venue' 
		and '$search_date' BETWEEN valid_from AND valid_to
		and authorise_card.authorisedID = 1");
		
		// CHECK AUTHORISATION OF A CARD ===================
		if($resultSet->num_rows > 0)
		{
			$output =  "<center><strong><font size=25px color = 'green'>ACCESS GRANTED!</font></strong></center><br /><br />";
			$valid = 'ACCESS GRANTED';
		}
		else
		{
			$output =  "<center><strong><font size=25px color = 'red'>ACCESS DENIED!</font></strong></center><br /><br />";
			$valid = 'ACCESS DENIED';
		}
		
		
		// INSERT DATA into ENTRYLOGS =======================
		$cardID = $this->input->post('search_cardID');
		$venue = $this->input->post('search_venue');
		$date = $this->input->post('search_date');
		
		
		$data = array(
		'entryLogID' => NULL,
		'entryDate' => $date,
		'venue' => $venue,
		'cardID' => $cardID,
		'access_status' => $valid
		);
		$this->db->insert('entrylogs', $data);	
	}
	?>
	
	<?php echo $output; ?>
	<center>
	
	<form name="Form" method="POST" onsubmit="return validateForm()">
		<table width="80%" border =" 0" cellspacing = "0" cellpadding = "0" align="center">
		      <tr>
			<td class ="Title" colspan = 4 ></td>
		      </tr>
                     <tr>
		     <td width="18%"></td>
		     <td class="Content1"width="20%"><p>Card ID: </p></td>
		    <td class="Content2"><p>&nbsp;&nbsp; 
			<input type="text"  name="search_cardID" class="Content2"></p></td>
		     <td> </td>
		    </tr>
		     <tr>
		     <td></td>
                        <td class="Content1"><p>Venue: </p></td>
			<td class="Content2"><p>&nbsp;&nbsp; 
				<input type="text"  name="search_venue" class="Content2"></p>
			</td>
			<td> </td>
		      </tr>
		      <tr>
		       <td></td>
                           <td class="Content1"><p>Date:</p></td>
		        <td class="Content2"><p>&nbsp;&nbsp;
				<input type="date"  name="search_date"class="Content2"></p></td>
			<td> </td>
		         </tr>
			<tr>
			<td> </td>
			<td class="Content3" colspan = 2><p>
				<input type="submit" name="submit" value="Search"class="Content3"> &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset" class="Content3">
				</p>
			</td>
		     <td width="20%"> </td>
                     </tr>
	</form> 
	</center>
</body>
</html>

















