<?php
//Program created by David Burcovschi no explicit or implicit waranty copyright 2014-2015 C 
//Developer: David Burcovschi
//By deleting this lines doesn't make you programmer or developer of this software!
//Please respect me!




session_start();




$con=mysqli_connect("localhost","root","dumnezeuetariamea");

        $_POST['2']=implode(';',$_POST['2']);
		$_POST['14']=implode(';',$_POST['14']);
		$_POST['16']=implode(';',$_POST['16']);
		$_POST['28']=implode(';',$_POST['28']);
		$_POST['37']=implode(';',$_POST['37']);
mysqli_query($con,"USE ceac");
$_POST['1']=htmlspecialchars($_POST['1']);
$_POST['2']=htmlspecialchars($_POST['2']);
$_POST['3']=htmlspecialchars($_POST['3']);
$_POST['4']=htmlspecialchars($_POST['4']);
$_POST['5']=htmlspecialchars($_POST['5']);
$_POST['6']=htmlspecialchars($_POST['6']);
$_POST['7']=htmlspecialchars($_POST['7']);
$_POST['8']=htmlspecialchars($_POST['8']);
$_POST['9']=htmlspecialchars($_POST['9']);
$_POST['10_1']=htmlspecialchars($_POST['10_1']);
$_POST['10_2']=htmlspecialchars($_POST['10_2']);
$_POST['10_3']=htmlspecialchars($_POST['10_3']);
$_POST['11_1']=htmlspecialchars($_POST['11_1']);
$_POST['11_2']=htmlspecialchars($_POST['11_2']);
$_POST['11_3']=htmlspecialchars($_POST['11_3']);
$_POST['11_4']=htmlspecialchars($_POST['11_4']);
$_POST['11_5']=htmlspecialchars($_POST['11_5']);
$_POST['12_1']=htmlspecialchars($_POST['12_1']);
$_POST['12_2']=htmlspecialchars($_POST['12_2']);
$_POST['13']=htmlspecialchars($_POST['13']);
$_POST['14']=htmlspecialchars($_POST['14']);
$_POST['15']=htmlspecialchars($_POST['15']);
$_POST['16']=htmlspecialchars($_POST['16']);
$_POST['17']=htmlspecialchars($_POST['17']);
$_POST['18']=htmlspecialchars($_POST['18']);
$_POST['19']=htmlspecialchars($_POST['19']);
$_POST['20']=htmlspecialchars($_POST['20']);
$_POST['21']=htmlspecialchars($_POST['21']);
$_POST['22']=htmlspecialchars($_POST['22']);
$_POST['23']=htmlspecialchars($_POST['23']);
$_POST['24']=htmlspecialchars($_POST['24']);
$_POST['25']=htmlspecialchars($_POST['25']);
$_POST['26']=htmlspecialchars($_POST['26']);
$_POST['27']=htmlspecialchars($_POST['27']);
$_POST['28']=htmlspecialchars($_POST['28']);
$_POST['29']=htmlspecialchars($_POST['29']);
$_POST['30']=htmlspecialchars($_POST['30']);
$_POST['31']=htmlspecialchars($_POST['31']);
$_POST['32']=htmlspecialchars($_POST['32']);
$_POST['33']=htmlspecialchars($_POST['33']);
$_POST['34']=htmlspecialchars($_POST['34']);
$_POST['35']=htmlspecialchars($_POST['35']);
$_POST['36']=htmlspecialchars($_POST['36']);
$_POST['37']=htmlspecialchars($_POST['37']);
$_POST['38']=htmlspecialchars($_POST['38']);
$_POST['39_1']=htmlspecialchars($_POST['39_1']);
$_POST['39_2']=htmlspecialchars($_POST['39_2']);
$_POST['39_3']=htmlspecialchars($_POST['39_3']);
$_POST['39_4']=htmlspecialchars($_POST['39_4']);
$_POST['39_5']=htmlspecialchars($_POST['39_5']);
$_POST['39_6']=htmlspecialchars($_POST['39_6']);
$_POST['40_1']=htmlspecialchars($_POST['40_1']);
$_POST['40_2']=htmlspecialchars($_POST['40_2']);
$_POST['40_3']=htmlspecialchars($_POST['40_3']);
$_POST['41']=htmlspecialchars($_POST['41']);
$_POST['42']=htmlspecialchars($_POST['42']);


       

//validare
$_SESSION['al1']=$_POST['1'];
$_SESSION['al2']=$_POST['2'];
$_SESSION['al3']=$_POST['3'];
$_SESSION['al4']=$_POST['4'];
$_SESSION['al5']=$_POST['5'];
$_SESSION['al6']=$_POST['6'];
$_SESSION['al7']=$_POST['7'];
$_SESSION['al8']=$_POST['8'];
$_SESSION['al9']=$_POST['9'];
$_SESSION['al10_1']=$_POST['10_1'];
$_SESSION['al10_2']=$_POST['10_2'];
$_SESSION['al10_3']=$_POST['10_3'];
$_SESSION['al11_1']=$_POST['11_1'];
$_SESSION['al11_2']=$_POST['11_2'];
$_SESSION['al11_3']=$_POST['11_3'];
$_SESSION['al11_4']=$_POST['11_4'];
$_SESSION['al11_5']=$_POST['11_5'];
$_SESSION['al12_1']=$_POST['12_1'];
$_SESSION['al12_2']=$_POST['12_2'];
$_SESSION['al13']=$_POST['13'];
$_SESSION['al14']=$_POST['14'];
$_SESSION['al15']=$_POST['15'];
$_SESSION['al16']=$_POST['16'];
$_SESSION['al17']=$_POST['17'];
$_SESSION['al18']=$_POST['18'];
$_SESSION['al19']=$_POST['19'];
$_SESSION['al20']=$_POST['20'];
$_SESSION['al21']=$_POST['21'];
$_SESSION['al22']=$_POST['22'];
$_SESSION['al23']=$_POST['23'];
$_SESSION['al24']=$_POST['24'];
$_SESSION['al25']=$_POST['25'];
$_SESSION['al26']=$_POST['26'];
$_SESSION['al27']=$_POST['27'];
$_SESSION['al28']=$_POST['28'];
$_SESSION['al29']=$_POST['29'];
$_SESSION['al30']=$_POST['30'];
$_SESSION['al31']=$_POST['31'];
$_SESSION['al32']=$_POST['32'];
$_SESSION['al33']=$_POST['33'];
$_SESSION['al34']=$_POST['34'];
$_SESSION['al35']=$_POST['35'];
$_SESSION['al36']=$_POST['36'];
$_SESSION['al37']=$_POST['37'];
$_SESSION['al38']=$_POST['38'];
$_SESSION['al39_1']=$_POST['39_1'];
$_SESSION['al39_2']=$_POST['39_2'];
$_SESSION['al39_3']=$_POST['39_3'];
$_SESSION['al39_4']=$_POST['39_4'];
$_SESSION['al39_5']=$_POST['39_5'];
$_SESSION['al39_6']=$_POST['39_6'];
$_SESSION['al40_1']=$_POST['40_1'];
$_SESSION['al40_2']=$_POST['40_2'];
$_SESSION['al40_3']=$_POST['40_3'];
$_SESSION['al41']=$_POST['41'];
$_SESSION['al42']=$_POST['42'];
if($_POST['1']!=" " && $_POST['2']!=" " && $_POST['3']!=" " && $_POST['4']!=" " && $_POST['5']!=" " && $_POST['6']!=" " && $_POST['7']!=" " && $_POST['8']!=" " && $_POST['9']!=" " && $_POST['10_1']!="" && $_POST['10_2']!="" && $_POST['10_3']!="" && $_POST['11_1']!="" && $_POST['11_2']!="" && $_POST['11_3']!="" && $_POST['11_4']!="" && $_POST['11_5']!="" && $_POST['12_1']!="" && $_POST['12_2']!="" && $_POST['13']!=" " && $_POST['14']!=" " && $_POST['15']!=" " &&  $_POST['16']!=" " && $_POST['17']!=" " && $_POST['18']!=" " && $_POST['19']!=" " && $_POST['20']!=" " && $_POST['21']!=" " && $_POST['22']!=" " && $_POST['23']!=" " && $_POST['24']!=" " && $_POST['25']!=" " &&  $_POST['26']!=" " && $_POST['27']!=" " && $_POST['28']!=" " && $_POST['29']!=" " && $_POST['30']!="" && $_POST['31']!=" " &&  $_POST['32']!=" " && $_POST['33']!=" " && $_POST['34']!=" " && $_POST['35']!=" " && $_POST['36']!=" " && $_POST['37']!=" " && $_POST['38']!=" " && $_POST['39_1']!="" &&  $_POST['39_2']!="" && $_POST['39_3']!="" &&  $_POST['39_4']!="" &&  $_POST['39_5']!="" && $_POST['39_6']!="" &&  $_POST['40_1']!=" " && $_POST['40_2']!=" " && $_POST['40_3']!=" " &&  $_POST['41']!=" " &&  $_POST['42']!=" "){


//$result1 = mysqli_query($con,"SELECT *FROM copii WHERE nume_copil = '".$_POST['nume']."' && clasa='".$_POST['clasa']."'");
//if (!$result1) {
    //die(mysqli_error($con));
//}

//if(mysqli_num_rows($result1)>0) {
    //header("Location: already_complete.php");
//}    else {
        
        if(mysqli_query($con,"INSERT INTO copii(clasa,intrebare1,intrebare2,intrebare3,intrebare4,intrebare5,intrebare6,intrebare7,intrebare8,intrebare9,intrebare10_1,intrebare10_2,intrebare10_3,intrebare11_1,intrebare11_2,intrebare11_3,intrebare11_4,intrebare11_5 ,intrebare12_1,intrebare12_2 ,intrebare13 ,intrebare14 ,intrebare15 ,intrebare16 ,intrebare17 ,intrebare18 ,intrebare19 ,intrebare20 ,intrebare21 ,intrebare22 ,intrebare23 ,intrebare24 ,intrebare25 ,intrebare26 ,intrebare27 ,intrebare28 ,intrebare29 ,intrebare30 ,intrebare31 ,intrebare32 ,intrebare33 ,intrebare34 ,intrebare35 ,intrebare36 ,intrebare37 ,intrebare38 ,intrebare39_1,intrebare39_2,intrebare39_3,intrebare39_4,intrebare39_5,intrebare39_6 ,intrebare40_1,intrebare40_2,intrebare40_3 ,intrebare41,intrebare42) VALUES ('".$_POST['clasa']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['5']."','".$_POST['6']."','".$_POST['7']."','".$_POST['8']."','".$_POST['9']."','".$_POST['10_1']."','".$_POST['10_2']."','".$_POST['10_3']."','".$_POST['11_1']."','".$_POST['11_2']."','".$_POST['11_3']."','".$_POST['11_4']."','".$_POST['11_5']."','".$_POST['12_1']."','".$_POST['12_2']."','".$_POST['13']."','".$_POST['14']."','".$_POST['15']."','".$_POST['16']."','".$_POST['17']."','".$_POST['18']."','".$_POST['19']."','".$_POST['20']."','".$_POST['21']."','".$_POST['22']."','".$_POST['23']."','".$_POST['24']."','".$_POST['25']."','".$_POST['26']."','".$_POST['27']."','".$_POST['28']."','".$_POST['29']."','".$_POST['30']."','".$_POST['31']."','".$_POST['32']."','".$_POST['33']."','".$_POST['34']."','".$_POST['35']."','".$_POST['36']."','".$_POST['37']."','".$_POST['38']."','".$_POST['39_1']."','".$_POST['39_2']."','".$_POST['39_3']."','".$_POST['39_4']."','".$_POST['39_5']."','".$_POST['39_6']."','".$_POST['40_1']."','".$_POST['40_2']."','".$_POST['40_3']."','".$_POST['41']."','".$_POST['42']."')")){
        
	    header("Location: after_complete.php");
	    }else{
	        echo"ERROR TO INSERT DATA IN DATABASE!";
	     }
    //}
}else{
header("Location: validation.php");

	}

?>
