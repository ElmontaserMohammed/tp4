<?php
$jour =array("الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت","الأحد");

$mois = array("يناير","فبراير","مارس","أبريل","يونيو","يوليو","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر");
$jour=array_reverse($jour);

$datear = getdate();
?>
<header>
     <img src=../Images/fsdm.jpg alt="logo of FSDM"></a> 
        <p>SMI6 <br>Faculte des Sciences Dhar Mehraz,Fes</p>
    <div style="height: 20px;background-color:brown;">
    <h4 style="text-align:right;margin-right:40px"><?=$jour[$datear['wday']].' '.$datear['mday'].' '.$mois[$datear['mon']-1].' '.$datear['year'] ?></h4>

    </div>
   </header>
