<!doctype html>
<title>::LIIS::CEAC::</title>
<head></head>
<html>
 <body bgcolor="#FFFFDA">>
 <center>
 <hr>
 <center><img src="poze/sigla.png"></center>
  <hr>
   <h1>CEAC - Vizualizare</h1>
  <hr>
  <h2>Aici aveti tabelul cu statistica raspunsurilor la formularul CEAC pentru parinti!</h2>
  <br>

<?php
$a=1;
$prag;
$b=1;

/*

intrebari neregulate: 

10:3
11:5
12:2
30:1
39:6
40:3

*/

if(!($con=mysqli_connect("localhost","root","dumnezeuetariamea"))){
echo"Nu ma pot conecta la baza de date!";
}
mysqli_query($con,"USE ceac");

echo "<table border='1' align='center' bgcolor='#FFFFF2' height='300'><tr><td>Intrebare</td><td>Raspuns</td><td>Numar de raspunsuri</td>";
while($a!=42){


    if($a==10 || $a==11 || $a==12 || $a==2 || $a==14 || $a==15 || $a==16 || $a==30 || $a== 38 || $a==32 || $a==41 || $a==42 ){
	
	    if($a==10){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare10_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare10_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare10_3']." </td><td></td></tr>";
		    }
	    }else if($a==11){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare11_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare11_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare11_3']." </td><td></td></tr>";
				echo "<tr><td>$a.4</td><td>". $row['intrebare11_4']." </td><td></td></tr>";
				echo "<tr><td>$a.5</td><td>". $row['intrebare11_5']." </td><td></td></tr>";
		    }
	    }else if($a==12){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare11_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare11_2']." </td><td></td></tr>";
		    }
	    }else if($a==32){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare32']." </td><td></td></tr>";
		    }
	    }else if($a==41){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare41_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare41_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare41_3']." </td><td></td></tr>";
				echo "<tr><td>$a.4</td><td>". $row['intrebare41_4']." </td><td></td></tr>";
				echo "<tr><td>$a.5</td><td>". $row['intrebare41_5']." </td><td></td></tr>";
				echo "<tr><td>$a.6</td><td>". $row['intrebare41_6']." </td><td></td></tr>";
		    }
	    }else if($a==42){
		    
			$result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare42_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare42_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare42_3']." </td><td></td></tr>";
		    }
	    }else{
	        $result=mysqli_query($con,"SELECT * FROM parinte");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a</td><td>". $row['intrebare'.$a]." </td><td></td></tr>";
		    }
		}
	}else{
		$result1=mysqli_query($con,"SELECT * FROM parinte WHERE intrebare".$a."='a'");
		$result2=mysqli_query($con,"SELECT * FROM parinte WHERE intrebare".$a."='b'");
		$result3=mysqli_query($con,"SELECT * FROM parinte WHERE intrebare".$a."='c'");
		$result4=mysqli_query($con,"SELECt * FROM parinte WHERE intrebare".$a."='d'");
		$result5=mysqli_query($con,"SELECT * FROM parinte WHERE intrebare".$a."='e'");
		$result6=mysqli_query($con,"SELECT * FROM parinte WHERE intrebare".$a."='f'");

		$varianta1=mysqli_num_rows($result1);
		$varianta2=mysqli_num_rows($result2);
		$varianta3=mysqli_num_rows($result3);
		$varianta4=mysqli_num_rows($result4);
		$varianta5=mysqli_num_rows($result5);
		$varianta6=mysqli_num_rows($result6);


		echo"<tr><td>$a</td><td></td><td> $varianta1 de raspunsuri A!</td></tr>";
		echo"<tr><td>$a</td><td></td><td> $varianta2 de raspunsuri B!</td></tr>";
		echo"<tr><td>$a</td><td></td><td> $varianta3 de raspunsuri C!</td></tr>";
		echo"<tr><td>$a</td><td></td><td> $varianta4 de raspunsuri D!</td></tr>";
		echo"<tr><td>$a</td><td></td><td> $varianta5 de raspunsuri E!</td></tr>";
		echo"<tr><td>$a</td><td></td><td> $varianta6 de raspunsuri F!</td></tr>";

		
	}
	$a++;
}
echo"</table>";
?>
</center>
 </body>
</html>
