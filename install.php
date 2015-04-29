<?php

$con=mysqli_connect("localhost","root","dumnezeuetariamea");

mysqli_query($con,"CREATE DATABASE ceac");

mysqli_query($con,"USE ceac");

if(mysqli_query($con,"CREATE TABLE copii(id int(4) primary key NOT NULL auto_increment,clasa text(4),intrebare1 text(200),intrebare2 text(200),intrebare3 text(200),intrebare4 text(200),intrebare5 text(200),intrebare6 text(200),intrebare7 text(200),intrebare8 text(200),intrebare9 text(200),intrebare10_1 text(200),intrebare10_2 text(200),intrebare10_3 text(200),intrebare11_1 text(200),intrebare11_2 text(200),intrebare11_3 text(200),intrebare11_4 text(200),intrebare11_5 text(200),intrebare12_1 text(200),intrebare12_2 text(200),intrebare13 text(200),intrebare14 text(200),intrebare15 text(200),intrebare16 text(200),intrebare17 text(200),intrebare18 text(200),intrebare19 text(200),intrebare20 text(200),intrebare21 text(200),intrebare22 text(200),intrebare23 text(200),intrebare24 text(200),intrebare25 text(200),intrebare26 text(200),intrebare27 text(200),intrebare28 text(200),intrebare29 text(200),intrebare30 text(200),intrebare31 text(200),intrebare32 text(200),intrebare33 text(200),intrebare34 text(200),intrebare35 text(200),intrebare36 text(200),intrebare37 text(200),intrebare38 text(200),intrebare39_1 text(200),intrebare39_2 text(200),intrebare39_3 text(200),intrebare39_4 text(200),intrebare39_5 text(200),intrebare39_6 text(200),intrebare40_1 text(200),intrebare40_2 text(200),intrebare40_3 text(200),intrebare41 text(200),intrebare42 text(200))")){

    if(mysqli_query($con,"CREATE TABLE parinte(id int(4) primary key NOT NULL auto_increment,clasa text(4),intrebare1 text(200),intrebare2 text(200),intrebare3 text(200),intrebare4 text(200),
intrebare5 text(200),intrebare6 text(200),intrebare7 text(200),intrebare8 text(200),intrebare9 text(200),intrebare10_1 text(200),intrebare10_2 text(200),intrebare10_3 text(200),intrebare11_1 text(200),intrebare11_2 text(200),intrebare11_3 text(200),intrebare11_4 text(200),intrebare11_5 text(200),
intrebare12_1 text(200),intrebare12_2 text(200),intrebare13 text(200),intrebare14 text(200),intrebare15 text(200),intrebare16 text(200),intrebare17 text(200),
intrebare18 text(200),intrebare19 text(200),intrebare20 text(200),intrebare21 text(200),intrebare22 text(200),intrebare23 text(200),
intrebare24 text(200),intrebare25 text(200),intrebare26 text(200),intrebare27 text(200),intrebare28 text(200),intrebare29 text(200),
intrebare30 text(200),intrebare31 text(200),intrebare32 text(200),intrebare33 text(200),intrebare34 text(200),intrebare35 text(200),
intrebare36 text(200),intrebare37 text(200),intrebare38 text(200),intrebare39 text(200),intrebare40 text(200),intrebare41_1 text(200),intrebare41_2 text(200),intrebare41_3 text(200),intrebare41_4 text(200),intrebare41_5 text(200),intrebare41_6 text(200),intrebare42_1 text(200),intrebare42_2 text(200),intrebare42_3 text(200),intrebare43 text(200),intrebare44 text(200))")){
        header("Location: index.php");
}
    }
else{
   echo "nu s-a putut instala!";
}

?>
