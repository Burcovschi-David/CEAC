<!doctype html>
<head></head>
<title>LIIS::Elevi Validare::</title>
<html>
 <body bgcolor="#FFFFDA">
  <hr>
  <center>
   <img src="poze/sigla.png">
   <hr>
   <h1><font color="#FF0000">EROARE 501: Ai spatii libere la chestionar!!!</h1></font>
   <hr>
   <h2><font color="#FF0000">Mai jos ai o lista cu intrebarile necompletate! Intoarce-te inapoi pe sageata de la browser si completeaza unde nu ai completat!</font></h2>
   <hr>
   
   <table border="0" align="center" bgcolor="#FFFFF2">
    <tr>
	 <td>
	 <table border="1" align="center" bgcolor="#FFFFF2">
	  <tr><td>Intrebare</td></tr>
	 <?php
	 session_start();
	 
	   if($_SESSION["al1"]==" "){
	      echo"<tr><td> 1 </td></tr>";
	   }
	   	   if($_SESSION["al2"]==" "){
	      echo"<tr><td> 2 </td></tr>";
	   }
	   	   if($_SESSION["al3"]==" "){
	      echo"<tr><td> 3 </td></tr>";
	   }
   	   if($_SESSION["al4"]==" "){
	      echo"<tr><td> 4 </td></tr>";
	   }
	   if($_SESSION["al5"]==" "){
	      echo"<tr><td> 5 </td></tr>";
	   }
	   if($_SESSION["al6"]==" "){
	      echo"<tr><td> 6 </td></tr>";
	   }
	   if($_SESSION["al7"]==" "){
	      echo"<tr><td> 7 </td></tr>";
	   }
	   if($_SESSION["al8"]==" "){
	      echo"<tr><td> 8 </td></tr>";
	   }
	   if($_SESSION["al9"]==" "){
	      echo"<tr><td> 9 </td></tr>";
	   }
	   if($_SESSION["al10_1"]==" "|| $_SESSION['al10_1']==""){
	      echo"<tr><td> 10.1 </td></tr>";
	   }
	   if($_SESSION["al10_2"]==" "|| $_SESSION['al10_2']==""){
	      echo"<tr><td> 10.2 </td></tr>";
	   }
	   if($_SESSION["al10_3"]==" "|| $_SESSION['al10_3']==""){
	      echo"<tr><td> 10.3 </td></tr>";
	   }
	   if($_SESSION["al11_1"]==" "|| $_SESSION['al11_1']==""){
	      echo"<tr><td> 11.1 </td></tr>";
	   }
	   if($_SESSION["al11_2"]==" "|| $_SESSION['al11_2']==""){
	      echo"<tr><td> 11.2 </td></tr>";
	   }
	   if($_SESSION["al11_3"]==" "|| $_SESSION['al11_3']==""){
	      echo"<tr><td> 11.3 </td></tr>";
	   }
	   if($_SESSION["al11_4"]==" "|| $_SESSION['al11_4']==""){
	      echo"<tr><td> 11.4 </td></tr>";
	   }
	   if($_SESSION["al11_5"]==" "|| $_SESSION['al11_5']==""){
	      echo"<tr><td> 11.5 </td></tr>";
	   }
	   if($_SESSION["al12_1"]==" "|| $_SESSION['al12_1']==""){
	      echo"<tr><td> 12.1 </td></tr>";
	   }
	   if($_SESSION["al12_2"]==" "|| $_SESSION['al12_2']==""){
	      echo"<tr><td> 12.2 </td></tr>";
	   }
	   if($_SESSION["al13"]==" "){
	      echo"<tr><td> 13 </td></tr>";
	   }
	   if($_SESSION["al14"]==" "){
	      echo"<tr><td> 14 </td></tr>";
	   }
	   if($_SESSION["al15"]==" "){
	      echo"<tr><td> 15 </td></tr>";
	   }
	   if($_SESSION["al16"]==" "){
	      echo"<tr><td> 16 </td></tr>";
	   }
	   if($_SESSION["al17"]==" "){
	      echo"<tr><td> 17 </td></tr>";
	   }
	   if($_SESSION["al18"]==" "){
	      echo"<tr><td> 18 </td></tr>";
	   }
	   if($_SESSION["al19"]==" "){
	      echo"<tr><td> 19 </td></tr>";
	   }
	   if($_SESSION["al20"]==" "){
	      echo"<tr><td> 20 </td></tr>";
	   }
	   if($_SESSION["al21"]==" "){
	      echo"<tr><td> 21 </td></tr>";
	   }
	   if($_SESSION["al22"]==" "){
	      echo"<tr><td> 22 </td></tr>";
	   }
	   if($_SESSION["al23"]==" "){
	      echo"<tr><td> 23 </td></tr>";
	   }
	   if($_SESSION["al24"]==" "){
	      echo"<tr><td> 24 </td></tr>";
	   }
	   if($_SESSION["al25"]==" "){
	      echo"<tr><td> 25 </td></tr>";
	   }
	   if($_SESSION["al26"]==" "){
	      echo"<tr><td> 26 </td></tr>";
	   }
	   if($_SESSION["al27"]==" "){
	      echo"<tr><td> 27 </td></tr>";
	   }
	   if($_SESSION["al28"]==" "){
	      echo"<tr><td> 28 </td></tr>";
	   }
	   if($_SESSION["al29"]==" "){
	      echo"<tr><td> 29 </td></tr>";
	   }
	   if($_SESSION["al30"]=="" || $_SESSION['al30']==" "){
	      echo"<tr><td> 30 </td></tr>";
	   }
	   if($_SESSION["al31"]==" "){
	      echo"<tr><td> 31 </td></tr>";
	   }
	   if($_SESSION["al32"]==" "){
	      echo"<tr><td> 32 </td></tr>";
	   }
	   if($_SESSION["al33"]==" "){
	      echo"<tr><td> 33 </td></tr>";
	   }
	   if($_SESSION["al34"]==" "){
	      echo"<tr><td> 34 </td></tr>";
	   }
	   if($_SESSION["al35"]==" "){
	      echo"<tr><td> 35 </td></tr>";
	   }
	   if($_SESSION["al36"]==" "){
	      echo"<tr><td> 36 </td></tr>";
	   }
	   if($_SESSION["al37"]==" "){
	      echo"<tr><td> 37 </td></tr>";
	   }
	   if($_SESSION["al38"]==" "){
	      echo"<tr><td> 38 </td></tr>";
	   }
	   if($_SESSION["al39_1"]==" "){
	      echo"<tr><td> 39.1 </td></tr>";
	   }
	   if($_SESSION["al39_2"]==" "){
	      echo"<tr><td> 39.2 </td></tr>";
	   }
	   if($_SESSION["al39_3"]==" "){
	      echo"<tr><td> 39.3 </td></tr>";
	   }
	   if($_SESSION["al39_4"]==" "){
	      echo"<tr><td> 39.4 </td></tr>";
	   }
	   if($_SESSION["al39_5"]==" "){
	      echo"<tr><td> 39.5 </td></tr>";
	   }
	   if($_SESSION["al39_6"]==" "){
	      echo"<tr><td> 39.6 </td></tr>";
	   }
	   if($_SESSION["al40_1"]==" "){
	      echo"<tr><td> 40.1 </td></tr>";
	   }
	   if($_SESSION["al40_2"]==" "){
	      echo"<tr><td> 40.2 </td></tr>";
	   }
	   if($_SESSION["al40_3"]==" "){
	      echo"<tr><td> 40.3 </td></tr>";
	   }
	   	   if($_SESSION["al41"]==" "){
	      echo"<tr><td> 41 </td></tr>";
	   }
	   	   	   if($_SESSION["al42"]==" "){
	      echo"<tr><td> 42 </td></tr>";
	   }


	   //session_destroy();
	  ?>
	  </table>
	 </table>
	</body>
   </html>
