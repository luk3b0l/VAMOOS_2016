<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<style type="text/css">
body {
	font-family: "Times New Roman";
	font-size: 22px;
}

.Content {
	text-align: top;
	font-size: 22px;
}
.Content2 {
	text-align: center;
	font-size: 22px;
	font-weight: bold;
}

.Content4 {
	font-size: 22px;
}
.Red {
	color: #F00;
}
.text {
	font-size: 48px;
}
.text {
	font-size: 50px;
}

.normal-text{
	font-size: 30px;
	font-family: Times New Roman;
	text-align: center;
}
.WebsiteTopic {
	font-size: large;
	font-style: normal;
	color: #000000;
}


body
{
	background-color: #FFFFFF;
}


</style>
</head>
<body>
<!--
	<font class="header">
	<h1><center>Welcome to the Venue Access Management for Olympic Officials System (VAMOOS) !</center></h1>


	<font class="normal-text">This system allows the admin staff at the Access and ID Department (AID) to manage the authorisations which allow Officials to enter RIO OLYMPIC venues for sports events.
	VAMOOS also helps to respond to and log resolts of requests to enter venues by Officials.</font>
-->
<h2 id="contact"><b>Contact us</b></h2>
<table border = 1>
	<tr>
	<td colspan = 2><h3><p><i>Find the most suitable way to keep in touch</i></p></h3></td>

	<tr>
	<td>
		<b>Technical support</b>
		<br>
		University of Hertfordshire
		<br>
		Hatfield
		<br>
		Hertfordshire, UK
		<br>
		AL10 9AB
	</td>

	<td valign="top">
		<b>Email: <font color = "blue">
		<a href = "mailto:csde.team27@gmail.com" target = "_self">
			csde.team27@gmail.com</a></font></b>

		<br>
		<b>Tel: </b>+44 (0) 1707 284800

		<br>
		<b>Fax: </b>+44 (0) 1707 284870
	</td>
	</tr>
</table>

<br>
<p><h2 id="top"><b>VAMOOS User Guide</b></h2>

<form>
	<fieldset>

		<legend><h3> System Functionality</h3></legend>

	<h3><ul>
		<li><a href="#part1"><font color = "blue"><b>Part 1</b></font></a></li>
		<li><a href="#part2"><font color = "blue"><b>Part 2</b></a></font></li>
		<li><a href="#part3"><font color = "blue"><b>Part 3</b></a></font></li>
		<li><a href="#part4"><font color = "blue"><b>Part 4</b></a></font></li>
		<li><a href="#part5"><font color = "blue"><b>Part 5</b></a></font></li>
	</h3>
	</ul>
	<p><b><u><div align="right"><a href="#contact"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
</fieldset>
</form>




<ol>
	<br>
	<b><p><li id="part1">Allows the display of details for venues, sports, officials, events and the editing of official data ¡V access data directly in the DB<br></li><br></p></b>
	<form>
	<fieldset>

		<ol>
			<li> view data already stored in the database <br></li><br>
			<table border = 1>
				<tr>
					<td>Sports</td>
					<td><a href='<?php echo site_url('main/sports')?>'><font color = "blue"><b><font color = "blue"><b>Link</b></font></b></font></a></td>
				</tr>

				<tr>
					<td>Venues</td>
					<td><a href='<?php echo site_url('main/venues')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>Events</td>
					<td><a href='<?php echo site_url('main/events')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>Officials</td>
					<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>Cards</td>
					<td><a href='<?php echo site_url('main/cards')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>Entry Logs</td>
					<td><a href='<?php echo site_url('main/entrylogs')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>Authorisations of Card</td>
					<td><a href='<?php echo site_url('main/authorise_card')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

			</table>

			<br>
			<br><li>view  and edit officials data by using the system interface <br></li><br>
			<table border = 1>
				<tr>
								<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Officials</td>
					<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p> Click on
					<img src="../../assets/images/button_edit.png" alt="Edit button"/></p></td>
					</td>
				</tr>
			</table>
		</ol>
		<br>
		<p><b><u><div align="right"><a href="#top"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
	</fieldset>
	</form>

<br>
	<b><p><li id="part2"> Allows the registration of a new official, a new sport, and the addition of new authorisations ¡V using VAMOOS implementation<br></li><br></p></b>
	<form>
	<fieldset>
		<ol>
			<li>add an official belonging to an existing sport<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Officials</td>
					<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p> Click on
					<img src="../../assets/images/button_add_official.png" alt="Issue Card button"/></p></td>
				</tr>

			</table>

			<br>
			<br><li>register a card for that official<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Officials</td>
					<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_issue_card.png" alt="Issue Card button"/></p></td>
				</tr>

				<tr>
					<td>3. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_save_and_go_back.png" alt="Save and Go back button"/></p>
					</td>
				</tr>

				<tr>
					<td>3. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_give_authorisation.png" alt="Give authorisation button"/></p>
					</td>
				</tr>

			</table>

			<br>
			<br><li>ensure that the dates of validity for that card are set appropriately<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Ways </div></b></td>
				</tr>
				<tr>
					<td>(a) </td>
					<td colspan = 2> The default value of card start date is 3rd August 2016 and its end date is 21st August 2016.
						<p><img src="../../assets/images/card_default_date.png" alt="Default date of cards"/></p>
					</td>
				</tr>
				<tr>
					<td>(b) </td>
					<td colspan = 2> Enter correct date, otherwise you will receive this message
						<br>
						<p><img src="../../assets/images/card_valid_date.png" alt="Valid date of cards"/></p>
					</td>
				</tr>
			</table>

			<br>
			<br><li>ensure that the card state is ¡§valid¡¨<br></li><br>
			<table border = 1>
				<tr>
					<td>View the column of <b>Authorised ID</b>
					<p>The card state is set as "valid" authomatically.</p>
						<p><img src="../../assets/images/card_state.png" alt="State of cards"/></p>
					</td>
				</tr>
			</table>

			<br>
			<br><li>display and authorise access to venues for events<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Authorisations of Card</td>
					<td><a href='<?php echo site_url('main/authorise_card')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
						<img src="../../assets/images/button_add_authorisation.png" alt="Add authorisation button"/></p>
					</td>
				</tr>
			</table>
			</table>

			<br>
			<br><li>expire a card for a team member (on leaving the olympics)<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Expire Individual</td>
					<td><a href='<?php echo site_url('main/individual_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_expire_individual_card.png" alt="Expire individual card button"/></p>
					</td>
				</tr>
			</table>

			<br>
			<br><li>cancel authorisations for an expired card<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Expire Individual</td>
					<td><a href='<?php echo site_url('main/individual_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_cancel_authorisation_individual_card.png" alt="Cancel authorisation of individual card button"/></p>
					</td>
				</tr>
			</table>

			<br>
			<br><li>add an official belonging to a new sport<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Sports</td>
					<td><a href='<?php echo site_url('main/sports')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
						<img src="../../assets/images/button_add_sport.png" alt="Add sport button"/></p></td>
				</tr>

				<tr>
					<td>3. </td>
					<td>Officials</td>
					<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>4. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_add_official.png" alt="Add official button"/></p>
					</td>
				</tr>
			</table>

	</ol>
	<br>
	<p><b><u><div align="right"><a href="#top"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
	</fieldset>
	</form>

<br>
	<b><p><li id="part3"> Allows a batch of authorisations to be edited<br></li><br></p></b>
	<form>
	<fieldset>
		<ol>
			<li>add authorisation for a event after an event venue is changed<br></li><br>
			<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Update Venue</td>
					<td><a href='<?php echo site_url('main/adjust_venue')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_adjust_venue.png" alt="Update venue button"/></p>
					</td>
				</tr>

				<tr>
					<td>3. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_adjust_authorisation.png" alt="Give authorisation button"/></p>
					</td>
				</tr>
			</table>

			<br>
			<br><li>expire cards for all officials when events are finished<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>
				<tr>
					<td>1. </td>
					<td>Expire/ Cancel All Cards </td>
					<td><a href='<?php echo site_url('main/all_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_expire_all_cards.png" alt="Expire all cards button"/></p></td>
				</tr>
			</table>
		</ol>
		<br>
		<p><b><u><div align="right"><a href="#top"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
		</fieldset>
		</form>

<br>
	<b><p><li id="part4"> Allows to retrieve and display details of authorisations and entry log data<br></li><br></p></b>
	<form>
	<fieldset>
		<ol>
				<li>search by card for authorisation to access a venue for a event <br></li><br>
				<table border = 1>
				<tr>
					<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
					<td>1. </td>
					<td>Authorisations of Card</td>
					<td><a href='<?php echo site_url('main/authorise_card')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
					<td>2. </td>
					<td colspan = 2><br>Input card ID into search fields
						<p><img src="../../assets/images/search_field_card.png" alt="Search by card"/></p></td>
				</tr>
				</table>

			<br>
			<br><li>display all the officials who have access to a given venue for an event <br></li><br>
				<table border = 1>
					<tr>
					<td>Entry Logs</td>
					<td><a href='<?php echo site_url('main/entrylogs')?>'><font color = "blue"><b>Link</b></font></a></td>
					</tr>
				</table>

			<br>
			<br><li>display all the venues accessible by a given official/card<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Authorisations of Card</td>
				<td><a href='<?php echo site_url('main/authorise_card')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2 (a) </td>
				<td colspan = 2><br>Input official ID into search fields
				<p><img src="../../assets/images/search_field_official.png" alt="Search by official"/></p></td>
				</tr>

				<tr>
				<td>2 (b) </td>
				<td colspan = 2><br>Input card ID into search fields
				<p><img src="../../assets/images/search_field_card.png" alt="Search by card"/></p></td>
				</tr>
			</table>

			<br>
			<br><li>allow a card  to enter a venue because they have authorisation for a event<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Access Check</td>
				<td><a href='<?php echo site_url('main/access_check')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2(a) </td>
				<td colspan =2><p> If you are using the the <i><b>Firefox</b></i> as your web browser,
									<br>you should enter the <b>Date</b>
									in this format: <b>yyyy/mm/dd</b>.</p> ie. To enter <b>2016/08/17</b> as a date.<br>

					<p> <img src="../../assets/images/access_check_date_format1.png" alt="Date format of Access Check"/></p>
				</td>
				</tr>

				<tr>
				<td>2(b) </td>
				<td colspan =2><p> If you are using the the <i><b>Internet Explorer</b></i> or <i><b>Google Chrome</b></i> as your web browser,
					<br>you should enter the <b>Date</b> in this format: <b>dd/mm/yyyy</b>.</p>
					<p>ie. To enter <b>17/08/2016</b> as a date.</p>

				</td>
				</tr>

				<tr>
				<td>3. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_access_check.png" alt="Access Check"/></p>
				</td>
				</tr>

				<tr>
				<td>4. </td>
				<td colspan =2> If the <b>card ID</b> and <b>venue name</b> and <b>date of authorisation</b> are correct, you will receive a respond of allowing access.
					<p>This result of entry attempt made by official will be loaded into the entrylogs automatically.</p>
					<p><img src="../../assets/images/message1_access_check.png" alt="Message of allow access"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>prevent a card from entering a venue because they do not have authorisation for a event<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Access Check</td>
				<td><a href='<?php echo site_url('main/access_check')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_access_check.png" alt="Access Check"/></p>
				</td>
				</tr>

				<tr>
				<td>3. </td>
				<td colspan =2> If the <b>card ID</b> and <b>venue name</b> and <b>date of authorisation</b> are incorrect, you will receive a respond of preventing access.
					<p>This result of entry attempt made by official will be loaded into the entrylogs automatically.</p>
					<p><img src="../../assets/images/message_access_check.png" alt="Message of prevent access"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>display all the entry attempts made by a official<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Entry Logs</td>
				<td><a href='<?php echo site_url('main/entrylogs')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><br> Input official ID into search fields<p>
					<img src="../../assets/images/search_field_officialID.png" alt="Search field of official ID"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>display the log all entries to a venue<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Entry Logs</td>
				<td><a href='<?php echo site_url('main/entrylogs')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><br> Input venue ID into search fields<p>
					<img src="../../assets/images/search_field_venueID.png" alt="Search field of venue ID"/></p>
				</td>
				</tr>
			</table>
		</ol>
		<br>
		<p><b><u><div align="right"><a href="#top"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
		</fieldset>
		</form>

<br>
	<b><p><li id="part5"> Supports some advanced features<br></li><br></p></b>
		<form>
		<fieldset>
		<ol>
			<li>provides efficient workflow for registering/authorising groups of officials<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Officials</td>
				<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_add_official.png" alt="Add official button"/></p>
				</td>
				</tr>

				<tr>
				<td>3. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_save.png" alt="Save button"/></p>
				</td>
				</tr>

				<tr>
				<td>4. </td>
				<td colspan =2> If all fields are in correct format, you will receive this message:
					<p><img src="../../assets/images/message_official_save.png" alt="Message of save button"/></p>
				</td>
				</tr>

				<tr>
				<td>5. </td>
				<td colspan =2> After registering groups of officials, then click on
					<p><img src="../../assets/images/button_save_and_go_back.png" alt="Save and go back button"/></p>
				</td>
				</tr>

				<tr>
				<td>6. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_issue_card.png" alt="Issue card button"/></p>
				</td>
				</tr>

				<tr>
				<td>7. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_save.png" alt="Save button"/></p>
				</td>
				</tr>

				<tr>
				<td>8. </td>
				<td colspan =2> If all fields are in correct format, you will receive this message:
					<p><img src="../../assets/images/message_card_save.png" alt="Message of save button"/></p>
				</td>
				</tr>

				<tr>
				<td>9. </td>
				<td colspan =2> After issuing cards to groups of officials, then click on
					<p><img src="../../assets/images/button_save_and_go_back.png" alt="Save and go back button"/></p>
				</td>
				</tr>

				<tr>
				<td>6. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_give_authorisation.png" alt="Give authorisation button"/></p>
				</td>
				</tr>

				<tr>
				<td>7. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_save.png" alt="Save button"/></p>
				</td>
				</tr>

				<tr>
				<td>8. </td>
				<td colspan =2> If all fields are in correct format, you will receive this message:
					<p><img src="../../assets/images/message_authorisation_save.png" alt="Message of save button"/></p>
				</td>
				</tr>

				<tr>
				<td>9. </td>
				<td colspan =2> After authorising cards to groups of officials, then click on
					<p><img src="../../assets/images/button_save_and_go_back.png" alt="Save and go back button"/></p>
				</td>
				</tr>
			</table>


			<br>
			<br><li>prevents registering the same official more than once<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Officials</td>
				<td><a href='<?php echo site_url('main/officials')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_add_official.png" alt="Add official button"/></p>
				</td>
				</tr>

				<tr>
				<td>3. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_save.png" alt="Save button"/></p>
				</td>
				</tr>

				<tr>
				<td>4. </td>
				<td colspan =2><br>If the name of official has been entered in the database, you will receive this message:
					<p><img src="../../assets/images/message_duplicate_official.png" alt="Message of duplicate official"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>prevents adding a duplicate authorisation<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Authorisations of Card</td>
				<td><a href='<?php echo site_url('main/authorise_card')?>'><font color = "blue"><b>Link</b></font></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_add_authorisation.png" alt="Add authorisation button"/></p>
				</td>
				</tr>

				<tr>
				<td>3. </td>
				<td colspan =2><p> Click on
					<img src="../../assets/images/button_save.png" alt="Save button"/></p>
				</td>
				</tr>

				<tr>
				<td>4. </td>
				<td colspan =2><br>If the same <b>Card ID and Official name and Event ID</b> have been entered in the database, this record will not be saved.
							   <br>Also, it will not allow you to proceed to the next page.
					<p><img src="../../assets/images/message_duplicate_authorisation.png" alt="Message of duplicate authorisation"/></p>
				</td>
				</tr>
			</table>

			<!--<br><li>allows for replacement of lost/stolen/damaged card (with authorisations) - cancel old card, add new valid card<br></li><br>-->

			<br>
			<br><li>allows different user to login and logout on system<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Login page</td>
				<td><a href='<?php echo site_url('')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td rowspan = 3>2. (a)</td>
				<td colspan = 2>If you are <b>Mary Jones (AID Manager)</b>, you will need to enter<br>

					<p><img src="../../assets/images/login_mary_jones.png" alt="Login by Mary Jones"/></p>

				<tr>
				<td colspan = 2><p> Click on
					<img src="../../assets/images/button_login.png" alt="Login button"/></p>
				</td>
				</tr>

				<tr>
				<td colspan = 2>If you have enter the correct name and password, you will receive a greeting message.
				<p><img src="../../assets/images/message_login_mary_jones.png" alt="Greeting message to Mary Jones"/></p>
				</td>
				</tr>

				<tr>
				<td rowspan = 3>2. (b)</td>
				<td colspan = 2>If you are <b>Frank Lampard (AID administrator)</b>, you will need to enter<br>

					<p><img src="../../assets/images/login_frank.png" alt="Login by Frank Lampard"/></p>

				<tr>
				<td colspan = 2><p> Click on
					<img src="../../assets/images/button_login.png" alt="Login button"/></p>
				</td>
				</tr>

				<tr>
				<td colspan = 2>If you have enter the correct name and password, you will receive a greeting message.
				<p><img src="../../assets/images/message_login_frank.png" alt="Greeting message to Frank Lampard"/></p>
				</td>
				</tr>

				<tr>
				<td rowspan = 3>2. (c)</td>
				<td colspan = 2>If you are <b>Jo Scribbler (AID administrator)</b>, you will need to enter<br>

					<p><img src="../../assets/images/login_jo.png" alt="Login by Joe Scribbler"/></p>

				<tr>
				<td colspan = 2><p> Click on
					<img src="../../assets/images/button_login.png" alt="Login button"/></p>
				</td>
				</tr>

				<tr>
				<td colspan = 2>If you have enter the correct name and password, you will receive a greeting message.
				<p><img src="../../assets/images/message_login_jo.png" alt="Greeting message to Joe Scribbler"/></p>
				</td>
				</tr>

				<tr>
				<td rowspan = 3>2. (d)</td>
				<td colspan = 2>If you are <b>Mary Cancler (AID administrator)</b>, you will need to enter<br>

					<p><img src="../../assets/images/login_mary_cancler.png" alt="Login by Mary Cancler"/></p>

				<tr>
				<td colspan = 2><p> Click on
					<img src="../../assets/images/button_login.png" alt="Login button"/></p>
				</td>
				</tr>

				<tr>
				<td colspan = 2>If you have enter the correct name and password, you will receive a greeting message.
				<p><img src="../../assets/images/message_login_mary_cancler.png" alt="Greeting message to Mary Cancler"/></p>
				</td>
				</tr>

				<tr>
				<td>3.</td>
				<td colspan = 2><p> To log out, click on
					<img src="../../assets/images/button_logout.png" alt="Logout button"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>expires all cards of one sport<br></li><br>
			<table border = 1>
			<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Expire Group</td>
				<td><a href='<?php echo site_url('main/group_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan = 2><p>click on
					<img src="../../assets/images/button_expire_group_card.png" alt="Expire card button"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>cancels authorisations of one sport<br></li><br>
			<table border = 1>
			<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>

				<tr>
				<td>1. </td>
				<td>Expire Group</td>
				<td><a href='<?php echo site_url('main/group_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
				<td colspan = 2><p>click on
					<img src="../../assets/images/button_cancel_authorisation_group_card.png" alt="Cancel authorisation button"/></p>
				</td>
				</tr>
			</table>

			<br>
			<br><li>cancels all cards<br></li><br>
			<table border = 1>
				<tr>
				<td colspan = 3><b><div align="center">Steps </div></b></td>
				</tr>
				<tr>
					<td>1. </td>
					<td>Expire/ Cancel All Cards </td>
					<td><a href='<?php echo site_url('main/all_card_status')?>'><font color = "blue"><b>Link</b></font></a></td>
				</tr>

				<tr>
				<td>2. </td>
					<td colspan = 2><p>Click on
					<img src="../../assets/images/button_cancel_all_cards.png" alt="Cancel all cards button"/></p></td>
				</tr>
			</table>
		</ol>
		<br>
		<p><b><u><div align="right"><a href="#top"><img src="../../assets/images/return_to_top.gif" alt="Return button"/><br><font color = "blue">Return to the top</font></a></div></u></b></p>
		</fieldset>
		</form>
</ol>


</body>
</html>