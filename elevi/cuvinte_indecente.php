<?php

session_start();
?>

<!doctype html>
<head></head>
<title>::LIIS::CEAC::</title>
<html>
 <body bgcolor="#FFFFDA">
  <hr>
  <center>
   <img src="poze/sigla.png">
   <hr>
   <h1>EROARE 500!</h1>
   <h2>Ai pus un text nevalid sau un caracter special nesuportat!!! Mai jos ai lista cu textele nevalid pe care l-ai pus sau a cuvintelor cu caractere speciale!!!</h2>
   <h3><font color="#FF0000">Powered by David Burcovschi!</font></h3>
   <br>
   <table align="center" border="0">
    <tr>
	 <td>
	  <table border="1" align="center">
	   <tr>
	    <td>
		 Nr. intrebare
		</td>
		<td>
		 Text nevalid
		</td>
	   </tr>
	   <?php
	   
	   if($_SESSION['10_1']==1){
	      echo"<tr><td>10.1</td><td> ".$_SESSION['prefix10_1_continut']." </td></tr>";
	   }
	   if($_SESSION['10_2']==1){
	      echo"<tr><td>10.2</td><td> ".$_SESSION['10_2_continut']." </td></tr>";
	   }
	   if($_SESSION['10_3']==1){
	      echo"<tr><td>10.3</td><td> ".$_SESSION['10_3_continut']." </td></tr>";
	   }
	   if($_SESSION['11_1']==1){
	      echo"<tr><td>11.1</td><td> ".$_SESSION['11_1_continut']." </td></tr>";
	   }
	   if($_SESSION['11_2']==1){
	      echo"<tr><td>11.2</td><td> ".$_SESSION['11_2_continut']." </td></tr>";
	   }
	   if($_SESSION['11_3']==1){
	      echo"<tr><td>11.3</td><td> ".$_SESSION['11_3_continut']." </td></tr>";
	   }
	   if($_SESSION['11_4']==1){
	      echo"<tr><td>11.4</td><td> ".$_SESSION['11_4_continut']." </td></tr>";
	   }
	   if($_SESSION['11_5']==1){
	      echo"<tr><td>11.5</td><td> ".$_SESSION['11_5_continut']." </td></tr>";
	   }
	   if($_SESSION['12_1']==1){
	      echo"<tr><td>12.1</td><td> ".$_SESSION['12_1_continut']." </td></tr>";
	   }
	   if($_SESSION['12_2']==1){
	      echo"<tr><td>12.2</td><td> ".$_SESSION['12_2_continut']." </td></tr>";
	   }
	   

	   if($_SESSION['treizeci']==1){
	      echo"<tr><td>30</td><td> ".$_SESSION['30_continut']." </td></tr>";
	   }
	   
	   if($_SESSION['39_1']>0){
	      echo"<tr><td>39.1</td><td> ".$_SESSION['39_1_continut']." </td></tr>";
	   }
	   if($_SESSION['39_2']>0){
	      echo"<tr><td>39.2</td><td> ".$_SESSION['39_2_continut']." </td></tr>";
	   }
	   if($_SESSION['39_3']>0){
	      echo"<tr><td>39.3</td><td> ".$_SESSION['39_3_continut']." </td></tr>";
	   }
	   if($_SESSION['39_4']>0){
	      echo"<tr><td>39.4</td><td> ".$_SESSION['39_4_continut']." </td></tr>";
	   }
	   if($_SESSION['39_5']>0){
	      echo"<tr><td>39.5</td><td> ".$_SESSION['39_5_continut']." </td></tr>";
	   }
	   if($_SESSION['39_6']>0){
	      echo"<tr><td>39.6</td><td> ".$_SESSION['39_6_continut']." </td></tr>";
	   }
	   if($_SESSION['40_1']>0){
	      echo"<tr><td>40.1</td><td> ".$_SESSION['40_1_continut']." </td></tr>";
	   }
	   if($_SESSION['40_3']>0){
	      echo"<tr><td>40.3</td><td> ".$_SESSION['40_3_continut']." </td></tr>";
	   }
	   session_unset(); 
	  session_destroy();
	   ?>
	   </table>
	  </table>
	 </center>
	</body>
</html>
		  
		  
