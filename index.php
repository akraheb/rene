<!DOCTYPE html>
<html>
<body>
<?
include "php.php";

if(strlen($_GET['list'])<1)
$list=0;
else
$list=$_GET['list'];
?>
<p align=center>
<a href="index.php?list=0">Prva</a>
 ,   
<a href="index.php?list=<? echo $_GET['list']-10; ?> ">DOZADU -10</a>
/
<a href="index.php?list=<? echo $_GET['list']-1; ?> ">DOZADU -1</a>
 - 
<a href="index.php?list=<?echo $_GET['list']+1;?> ">DOPREDU +1</a>
<a href="index.php?list=<?echo $_GET['list']+10;?> ">DOPREDU +10</a>
 , 
<a href="index.php?list=41">Posledna</a>
</p>
<p align=center>
<a id="download" href="5.php?list=<?echo $_GET['list'];?>&dpi=300" download="list<?echo $_GET['list'];?>.jpg">STIAHNI V 300dpi</a>
<a href="5.php?list=<? echo $list; ?>&dpi=300">AKTUAL</a>
<p align=center>
<a id="download" href="vzor.tsv" download="vzor.tsv">STIAHNI VZOR</a>
<a href="nahraj.php">NAHRAJ</a>
</p>
<p align=center>
<img src="5.php?list=<? echo $list."&rand=".rand(1234,6789); ?>"  width=<? echo $pix;?> height=<? echo $piy;?> border="1" scrolling="no" allowfullscreen="true">
</p>


</body>
</html>