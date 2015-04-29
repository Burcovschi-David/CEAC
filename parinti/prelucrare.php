<?php


		

        $_POST['2']=implode(';',$_POST['2']);
		//echo $_POST['2']."<br>";
		$_POST['14']=implode(';',$_POST['14']);
		//echo $_POST['14']."<br>";
		$_POST['16']=implode(';',$_POST['16']);
		//echo $_POST['16']."<br>";
		$_POST['treizeci']=implode(';',$_POST['treizeci']);
		//echo $_POST['treizeci']."<br>";
		$_POST['38']=implode(';',$_POST['38']);
		//echo $_POST['38']."<br>";
		
		
		
		//echo $_POST['clasa'].",".$_POST['1'].",".$_POST['2'].",".$_POST['3'].",".$_POST['4'].",".$_POST['5'].",".$_POST['6'].",".$_POST['7'].",".$_POST['8'].",".$_POST['9'].",".$_POST['10_1'].",".$_POST['10_2'].",".$_POST['10_3'].",".$_POST['11_1'].",".$_POST['11_2'].",".$_POST['11_3'].",".$_POST['11_4'].",".$_POST['11_5'].",".$_POST['12_1'].",".$_POST['12_2'].",".$_POST['13'].",".$_POST['14'].",".$_POST['15'].",".$_POST['16'].",".$_POST['17'].",".$_POST['18'].",".$_POST['19'].",".$_POST['20'].",".$_POST['21'].",".$_POST['22'].",".$_POST['23'].",".$_POST['24'].",".$_POST['25'].",".$_POST['26'].",".$_POST['27'].",".$_POST['28'].",".$_POST['29'].",".$_POST['treizeci'].",".$_POST['31'].",".$_POST['32'].",".$_POST['33'].",".$_POST['34'].",".$_POST['35'].",".$_POST['36'].",".$_POST['37'].",".$_POST['38'].",".$_POST['39'].",".$_POST['40'].",".$_POST['41_1'].",".$_POST['41_2'].",".$_POST['41_3'].",".$_POST['41_4'].",".$_POST['41_5'].",".$_POST['41_6'].",".$_POST['42_1'].",".$_POST['42_2'].",".$_POST['42_3'].",".$_POST['43'].",".$_POST['44'];
$con=mysqli_connect("localhost","root","dumnezeuetariamea");

mysqli_query($con,"USE ceac");

if($_POST['1']!=" " && $_POST['2']!=" " && $_POST['3']!=" " && $_POST['4']!=" " && $_POST['5']!=" " && $_POST['6']!=" " && $_POST['7']!=" " && $_POST['8']!=" " && $_POST['9']!=" " && $_POST['10_1']!="" && $_POST['10_2']!="" && $_POST['10_3']!="" && $_POST['11_1']!="" &&  $_POST['11_2']!="" &&   $_POST['11_3']!="" &&  $_POST['11_4']!="" &&  $_POST['11_5']!="" &&  $_POST['12_1']!="" &&  $_POST['12_2']!="" &&   $_POST['13']!=" " &&   $_POST['14']!=" " &&   $_POST['15']!=" " &&   $_POST['16']!=" " &&   $_POST['17']!=" " &&   $_POST['18']!=" " &&   $_POST['19']!=" " &&   $_POST['20']!=" " &&   $_POST['21']!=" " &&   $_POST['22']!=" " &&   $_POST['23']!=" " &&   $_POST['24']!=" " &&   $_POST['25']!=" " &&   $_POST['26']!=" " &&   $_POST['27']!=" " &&   $_POST['28']!=" " &&   $_POST['29']!=" " &&   $_POST['treizeci']!=" " &&   $_POST['31']!=" " &&   $_POST['33']!=" " &&   $_POST['34']!=" " &&   $_POST['35']!=" " &&   $_POST['36']!=" " &&   $_POST['37']!=" " &&   $_POST['38']!=" " &&   $_POST['39']!=" " &&   $_POST['40']!=" " &&   $_POST['41_1']!=" " &&   $_POST['41_2']!=" " &&   $_POST['41_3']!=" " &&   $_POST['41_4']!=" " &&   $_POST['41_5']!=" " &&   $_POST['41_6']!=" " &&   $_POST['42_1']!=" " &&   $_POST['42_2']!=" " &&   $_POST['42_3']!=" " &&    $_POST['43']!=" " &&   $_POST['44']!=" "){
    if(mysqli_query($con,"INSERT INTO parinte(clasa,intrebare1,intrebare2,intrebare3,intrebare4,intrebare5,intrebare6,intrebare7,intrebare8,intrebare9,intrebare10_1 ,intrebare10_2 ,intrebare10_3 ,intrebare11_1 ,intrebare11_2 ,intrebare11_3 ,intrebare11_4,intrebare11_5,intrebare12_1 ,intrebare12_2 ,intrebare13 ,intrebare14 ,intrebare15 ,intrebare16 ,intrebare17 ,intrebare18 ,intrebare19 ,intrebare20 ,intrebare21 ,intrebare22 ,intrebare23 ,intrebare24 ,intrebare25 ,intrebare26 ,intrebare27 ,intrebare28 ,intrebare29 ,intrebare30 ,intrebare31 ,intrebare32 ,intrebare33 ,intrebare34 ,intrebare35 ,intrebare36 ,intrebare37 ,intrebare38 ,intrebare39 ,intrebare40 ,intrebare41_1 ,intrebare41_2 ,intrebare41_3 ,intrebare41_4 ,intrebare41_5 ,intrebare41_6 ,intrebare42_1 ,intrebare42_2 ,intrebare42_3 ,intrebare43,intrebare44) VALUES ('".$_POST['clasa']."','".$_POST['1']."','".$_POST['2']."','".$_POST['3']."','".$_POST['4']."','".$_POST['5']."','".$_POST['6']."','".$_POST['7']."','".$_POST['8']."','".$_POST['9']."','".$_POST['10_1']."','".$_POST['10_2']."','".$_POST['10_3']."','".$_POST['11_1']."','".$_POST['11_2']."','".$_POST['11_3']."','".$_POST['11_4']."','".$_POST['11_5']."','".$_POST['12_1']."','".$_POST['12_2']."','".$_POST['13']."','".$_POST['14']."','".$_POST['15']."','".$_POST['16']."','".$_POST['17']."','".$_POST['18']."','".$_POST['19']."','".$_POST['20']."','".$_POST['21']."','".$_POST['22']."','".$_POST['23']."','".$_POST['24']."','".$_POST['25']."','".$_POST['26']."','".$_POST['27']."','".$_POST['28']."','".$_POST['29']."','".$_POST['treizeci']."','".$_POST['31']."','".$_POST['32']."','".$_POST['33']."','".$_POST['34']."','".$_POST['35']."','".$_POST['36']."','".$_POST['37']."','".$_POST['38']."','".$_POST['39']."','".$_POST['40']."','".$_POST['41_1']."','".$_POST['41_2']."','".$_POST['41_3']."','".$_POST['41_4']."','".$_POST['41_5']."','".$_POST['41_6']."','".$_POST['42_1']."','".$_POST['42_2']."','".$_POST['42_3']."','".$_POST['43']."','".$_POST['44']."')")){
	    header("Location: after_complete.php");
    }else{
	    echo"Nu am reusit sa inserez in baza de date!!";
    }
}else{
session_start();
$_SESSION["al1"]=$_POST["1"];
$_SESSION["al2"]=$_POST["2"];
$_SESSION["al3"]=$_POST["3"];
$_SESSION["al4"]=$_POST["4"];
$_SESSION["al5"]=$_POST["5"];
$_SESSION["al6"]=$_POST["6"];
$_SESSION["al7"]=$_POST["7"];
$_SESSION["al8"]=$_POST["8"];
$_SESSION["al9"]=$_POST["9"];
$_SESSION["al10_1"]=$_POST["10_1"];
$_SESSION["al10_2"]=$_POST["10_2"];
$_SESSION["al10_3"]=$_POST["10_3"];
$_SESSION["al11_1"]=$_POST["11_1"];
$_SESSION["al11_2"]=$_POST["11_2"];
$_SESSION["al11_3"]=$_POST["11_3"];
$_SESSION["al11_4"]=$_POST["11_4"];
$_SESSION["al11_5"]=$_POST["11_5"];
$_SESSION["al12_1"]=$_POST["12_1"];
$_SESSION["al12_2"]=$_POST["12_2"];
$_SESSION["al13"]=$_POST["13"];
$_SESSION["al14"]=$_POST["14"];
$_SESSION["al15"]=$_POST["15"];
$_SESSION["al16"]=$_POST["16"];
$_SESSION["al17"]=$_POST["17"];
$_SESSION["al18"]=$_POST["18"];
$_SESSION["al19"]=$_POST["19"];
$_SESSION["al20"]=$_POST["20"];
$_SESSION["al21"]=$_POST["21"];
$_SESSION["al22"]=$_POST["22"];
$_SESSION["al23"]=$_POST["23"];
$_SESSION["al24"]=$_POST["24"];
$_SESSION["al25"]=$_POST["25"];
$_SESSION["al26"]=$_POST["26"];
$_SESSION["al27"]=$_POST["27"];
$_SESSION["al28"]=$_POST["28"];
$_SESSION["al29"]=$_POST["29"];
$_SESSION["altreizeci"]=$_POST["treizeci"];
$_SESSION["al31"]=$_POST["31"];
$_SESSION["al32"]=$_POST["32"];
$_SESSION["al33"]=$_POST["33"];
$_SESSION["al34"]=$_POST["34"];
$_SESSION["al35"]=$_POST["35"];
$_SESSION["al36"]=$_POST["36"];
$_SESSION["al37"]=$_POST["37"];
$_SESSION["al38"]=$_POST["38"];
$_SESSION["al39"]=$_POST["39"];
$_SESSION["al40"]=$_POST["40"];
$_SESSION["al41_1"]=$_POST["41_1"];
$_SESSION["al41_2"]=$_POST["41_2"];
$_SESSION["al41_3"]=$_POST["41_3"];
$_SESSION["al41_4"]=$_POST["41_4"];
$_SESSION["al41_5"]=$_POST["41_5"];
$_SESSION["al41_6"]=$_POST["41_6"];
$_SESSION["al42_1"]=$_POST["42_1"];
$_SESSION["al42_2"]=$_POST["42_2"];
$_SESSION["al42_3"]=$_POST["42_3"];
$_SESSION["al43"]=$_POST["43"];
$_SESSION["al44"]=$_POST["44"];


   header("Location: validation.php");
}

?>

