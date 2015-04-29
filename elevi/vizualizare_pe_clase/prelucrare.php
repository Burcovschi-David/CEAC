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
  <h2>Aici aveti tabelul cu statistica raspunsurilor la formularul CEAC!</h2>
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

if(!($con=mysqli_connect("localhost","root","dumnezeuetariamea"))){//a se modifica username al root la ceac
echo"Nu ma pot conecta la baza de date!";
}
mysqli_query($con,"USE ceac");
echo"<h2>Rezultate pentru clasa ". $_POST['clasa_de_vazut'] ."</h2><br>";
echo "<table border='1' align='center' bgcolor='#FFFFF2' height='300'><tr><td>Intrebare</td><td>Raspuns</td><td>Numar de raspunsuri</td>";
while($a!=42){


    if($a==10 || $a==11 || $a==12 || $a==2 || $a==14 || $a==15 || $a==16 || $a==30 || $a== 37 || $a==28 || $a==39 || $a==40 ){
	
	    if($a==10){
		    
			$result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare10_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare10_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare10_3']." </td><td></td></tr>";
		    }
	    }else if($a==11){
		    
			$result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare11_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare11_2']." </td><td></td></tr>";
			    echo "<tr><td>$a.3</td><td>". $row['intrebare11_3']." </td><td></td></tr>";
				echo "<tr><td>$a.4</td><td>". $row['intrebare11_4']." </td><td></td></tr>";
				echo "<tr><td>$a.5</td><td>". $row['intrebare11_5']." </td><td></td></tr>";
		    }
	    }else if($a==12){
		    
			$result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare11_1']." </td><td></td></tr>";
			    echo "<tr><td>$a.2</td><td>". $row['intrebare11_2']." </td><td></td></tr>";
		    }
	    }else if($a==30){
		    
			$result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        while($row=mysqli_fetch_assoc($result)){
		        echo "<tr><td>$a.1</td><td>". $row['intrebare30']." </td><td></td></tr>";
		    }
	    }else if($a==39){
		    
		    $result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
		    $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	        while($row=mysqli_fetch_assoc($result)){
			    $nr_a_init=substr_count($row['intrebare39_1'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_1'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_1'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_1'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_1'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_1</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_1</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_1</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_1</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_1</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	       $result2=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	       $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result2)){
			    $nr_a_init=substr_count($row['intrebare39_2'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_2'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_2'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_2'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_2'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_2</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_2</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_2</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_2</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_2</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	        
	       $result3=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	       $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result3)){
			    $nr_a_init=substr_count($row['intrebare39_3'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_3'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_3'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_3'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_3'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_3</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_3</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_3</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_3</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_3</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	        
	        $result4=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result4)){
			    $nr_a_init=substr_count($row['intrebare39_4'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_4'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_4'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_4'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_4'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_4</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_4</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_4</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_4</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_4</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	        
	       $result5=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	       $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result5)){
			    $nr_a_init=substr_count($row['intrebare39_5'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_5'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_5'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_5'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_5'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_5</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_5</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_5</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_5</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_5</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	       $result6=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result6)){
			    $nr_a_init=substr_count($row['intrebare39_6'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare39_6'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare39_6'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_6'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare39_6'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>39_6</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>39_6</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>39_6</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>39_6</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>39_6</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	        
	        
	        
	    }else if($a==40){
		    
			$result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
			$nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	        while($row=mysqli_fetch_assoc($result)){
			    $nr_a_init=substr_count($row['intrebare40_1'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare40_1'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare40_1'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare40_1'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare40_1'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>40_1</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>40_1</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>40_1</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>40_1</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>40_1</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	       $result2=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	       $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result2)){
			    $nr_a_init=substr_count($row['intrebare40_2'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare40_2'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare40_2'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare39_2'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare40_2'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>40_2</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>40_2</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>40_2</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>40_2</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>40_2</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
	       $result3=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	       $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	       while($row=mysqli_fetch_assoc($result3)){
			    $nr_a_init=substr_count($row['intrebare40_3'],"1");
	            $nr_a=$nr_a+$nr_a_init;
	            $nr_b_init=substr_count($row['intrebare40_3'],"2");
	            $nr_b=$nr_b+$nr_b_init;
	            $nr_c_init=substr_count($row['intrebare40_3'],"3");
	            $nr_c=$nr_c+$nr_c_init;
	            $nr_d_init=substr_count($row['intrebare40_3'],"4");
	            $nr_d=$nr_d+$nr_d_init;
	            $nr_e_init=substr_count($row['intrebare40_3'],"5");
	            $nr_e=$nr_e+$nr_e_init;
	        }
	        echo "<tr><td>40_3</td><td> </td><td>Sunt ". $nr_a." note de 1</td></tr>";
	        echo "<tr><td>40_3</td><td> </td><td>Sunt ". $nr_b." note de 2</td></tr>";
	        echo "<tr><td>40_3</td><td> </td><td>Sunt ". $nr_c." note de 3</td></tr>";
	        echo "<tr><td>40_3</td><td> </td><td>Sunt ". $nr_d." note de 4</td></tr>";
	        echo "<tr><td>40_3</td><td> </td><td>Sunt ". $nr_e." note de 5</td></tr>";
	        
	        
		}else{
		    $nr_a=0;
		    $nr_b=0;
		    $nr_c=0;
		    $nr_d=0;
		    $nr_e=0;
		    $nr_f=0;
	        $result=mysqli_query($con,"SELECT * FROM copii where clasa='".$_POST['clasa_de_vazut']."'");
	        while($row=mysqli_fetch_assoc($result)){
	            $nr_a_init=substr_count($row['intrebare'.$a],"a");
	            $nr_a=$nr_a+$nr_a_init;
	            //$nr_a=$nr_a+1;
	            $nr_b_init=substr_count($row['intrebare'.$a],"b");
	            $nr_b=$nr_b+$nr_b_init;
	            //$nr_b=$nr_b+1;
	            $nr_c_init=substr_count($row['intrebare'.$a],"c");
	            $nr_c=$nr_c+$nr_c_init;
	            //$nr_c=$nr_c+1;
	            $nr_d_init=substr_count($row['intrebare'.$a],"d");
	            $nr_d=$nr_d+$nr_d_init;
	            //$nr_d=$nr_d+1;
	            $nr_e_init=substr_count($row['intrebare'.$a],"e");
	            $nr_e=$nr_e+$nr_e_init;
	            //$nr_e=$nr_e+1;
	            $nr_f_init=substr_count($row['intrebare'.$a],"f");
	            $nr_f=$nr_f+$nr_f_init;
	            //$nr_f=$nr_f+1;
		        
		    }
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_a." raspunsuri de A</td></tr>";
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_b." raspunsuri de B</td></tr>";
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_c." raspunsuri de C</td></tr>";
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_d." raspunsuri de D</td></tr>";
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_e." raspunsuri de E</td></tr>";
		    echo "<tr><td>$a</td><td> </td><td>Sunt ". $nr_f." raspunsuri de F</td></tr>";
		    
		    
		}
	}else if($a==3 || $a==8){
	     $result1=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='a' && clasa='".$_POST['clasa_de_vazut']."'");
		 $result2=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='b' && clasa='".$_POST['clasa_de_vazut']."'");		 
		 $varianta1=mysqli_num_rows($result1);
		 $varianta2=mysqli_num_rows($result2);
		 echo"<tr><td>$a</td><td></td><td> $varianta1 de raspunsuri A!</td></tr>";
		 echo"<tr><td>$a</td><td></td><td> $varianta2 de raspunsuri B!</td></tr>";

	}else{
		$result1=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='a' && clasa='".$_POST['clasa_de_vazut']."'");
		$result2=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='b' && clasa='".$_POST['clasa_de_vazut']."'");
		$result3=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='c' && clasa='".$_POST['clasa_de_vazut']."'");
		$result4=mysqli_query($con,"SELECt * FROM copii WHERE intrebare".$a."='d' && clasa='".$_POST['clasa_de_vazut']."'");
		$result5=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='e' && clasa='".$_POST['clasa_de_vazut']."'");
		$result6=mysqli_query($con,"SELECT * FROM copii WHERE intrebare".$a."='f' && clasa='".$_POST['clasa_de_vazut']."'");

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
