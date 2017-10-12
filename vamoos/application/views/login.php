<!DOCTYPE html>
<html>
<head>
<SCRIPT language="JavaScript">
   function check() {      
	if  (myform.username.value=="f.lampard@vamoos.com" && myform.password.value=="frank"){
	     document.cookie = "name=" + myform.username.value + " ;expires=Sun, 1 Dec 2016 12:00:00 GMT";
		var mycookie = document.cookie;
		var myname = mycookie.substr(mycookie.search(/=/)+1, mycookie.length-"name=".length);
		window.alert("Hello, welcome to VAMOOS,  Mr. Lampard !");		 
		window.location="<?php echo site_url('main/frameset1')?>";
	}
	else if  (myform.username.value=="j.scribbler@vamoos.com" && myform.password.value=="jo"){
	     document.cookie = "name=" + myform.username.value + " ;expires=Sun, 1 Dec 2016 12:00:00 GMT";
		var mycookie = document.cookie;
		var myname = mycookie.substr(mycookie.search(/=/)+1, mycookie.length-"name=".length);
		window.alert("Hello, welcome to VAMOOS,  Ms. Scribbler !");		 
		window.location="<?php echo site_url('main/frameset1')?>";
	}
	else if  (myform.username.value=="m.jones@vamoos.com" && myform.password.value=="maryj"){
	     document.cookie = "name=" + myform.username.value + " ;expires=Sun, 1 Dec 2016 12:00:00 GMT";
		var mycookie = document.cookie;
		var myname = mycookie.substr(mycookie.search(/=/)+1, mycookie.length-"name=".length);
		window.alert("Hello, welcome to VAMOOS,  Ms. Jones !");		 
		window.location="<?php echo site_url('main/frameset1')?>";
	}
	else if  (myform.username.value=="m.cancler@vamoos.com" && myform.password.value=="maryc"){
	     document.cookie = "name=" + myform.username.value + " ;expires=Sun, 1 Dec 2016 12:00:00 GMT";
		var mycookie = document.cookie;
		var myname = mycookie.substr(mycookie.search(/=/)+1, mycookie.length-"name=".length);
		window.alert("Hello, welcome to VAMOOS,  Ms. Cancler !");		 
		window.location="<?php echo site_url('main/frameset1')?>";
	}
	else {
		window.alert("Sorry, the username or password is incorrect. Please enter again.");
	}
}
</SCRIPT>
<style type="text/css">
body,td,th {
	font-family: "Times New Roman";
	font-size: 28px;
	text-align: center;
	font-weight: bold;
}
.Topic {
	font-size: 36px;
	color: #000000;
	text-align: center;
}


.Content {
	font-size: 26px;
	font-family: "Times New Roman", Times, serif;
}


.Content1 {
	text-align: left;
}


Red {
	color: #E80000;
}


.Content2 {
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 22px;
	font-weight: bold;
	color: #000000;
}

.Content3{
	color: #FFFFFF;
	text-align: left;
}
body {
	background-color: #FFFFFF;
}


.text {
	font-size: 35px;
	color: #FFFFFF;
	

}
.WebsiteTopic {
	font-size: large;
	font-style: normal;
	color: #000;
}

.Login-border {
	border-top-leftradius: 25px;
}

.shadow {
    box-shadow: 5px 20px 25px #888888;   
    border-radius: 15px;    
    border: 5px solid white;
    border-style: double;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VAMOOS</title>
</head>

<body>
<table class="shadow" align="center" width="100%" border="0" cellpadding="0" cellspacing="0"  bgcolor="#134785" >
    <tr>
    <!--Image credits: http://keepernotes.com/wp-content/uploads/2015/08/Rio2016-LogoFORMATTED.jpg -->
    <td width="15%" border="0" height="30" colspan="2" align="center" valign="top" bgcolor="#FFFFFF" ><img src="assets/images/rio2016logo.jpg" width="200" height="95" alt="Rio 2016 Logo"/>
      <td width="75%" align="centre" valign="middle" hspace="0" vspace="0" >
	
	<div class="text">
		
			<font>Venue Access Management for Olympic Officials System</font>
		
	</div>
	
	</td>
      <td width="194" align="left" valign="top" hspace="0" vspace="0"></td>
  </tr>
</table>


<table class="shadow" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="myform">
  
 <br><br><br><br>
  <tr>
  
  
  
  <td class="Content1" bgcolor="#F9A91F" >
  <p><strong>&nbsp;&nbsp;&nbsp;Login:&nbsp;</strong></p>
  </td>
  <td class="Content" bgcolor="#F9A91F" ><p>
    <input name="username" type="text" class="Content" size="25" />
</p></td>
<td class="Content1" bgcolor="#F9A91F" ><p><strong>&nbsp;&nbsp;&nbsp;</strong></p>
  </td>
  </tr>
  
  <tr>
 <td class="Content1" bgcolor="#F9A91F" ><p><strong>&nbsp;&nbsp;&nbsp;Password:&nbsp;</strong></p>
 </td>
 <td class="Content" bgcolor="#F9A91F" ><p>
   <input name="password" type="password" class="Content" size="25" />
</p></td>
<td class="Content1" bgcolor="#F9A91F" ><p><strong>&nbsp;&nbsp;&nbsp;</strong></p>
  </td>
 </tr>
  <tr>
    <td colspan="2" bgcolor="#F9A91F">&nbsp;
	  <input type="button" class="Content2"  value="Login" onClick="check();"/>
      &nbsp;
      <input name="Reset" type="reset" class="Content2"  value="Reset">
      </td>
      <td class="Content1" bgcolor="#F9A91F" ><p><strong>&nbsp;&nbsp;&nbsp;</strong></p>
  </td>
    </tr>
  </td>
    </tr>
  </form>
</table>


</body>
</html>