<?php
//$n=substr(basename(__FILE__),0,2);
$kontr=$_GET['list'];
$kont=1;
include "php.php";


$odsadXX=$pix."(".$pix."-".$sizeX."*(round(".$pix."/".$sizeX.")-1))/3=".$pocX." , ".$pomer." , ".$right." , ".$sizeX;
$odsadYY=$piy."(".$piy."-".$sizeY."*(round(".$piy."/".$sizeY.")-1))/3=".$pocY;


if (($open = fopen("test2.tsv", "r")) !== FALSE) 
	{
	while (($data = fgetcsv($open, 1000, "\t")) !== FALSE) 
		{        
		$dulux[] = $data; 
		}
	fclose($open);
	}
$count=count($dulux);



$my_img = imagecreate( $pix, $piy );     //width & height
//$my_img = imagecreate( $pix+200, $piy+200 );     //width & height zvacsene 
$background  = imagecolorallocate( $my_img, 255, 255, 255 );
$text_colour = imagecolorallocate( $my_img, 1, 33, 105 );
$line_colour = imagecolorallocate( $my_img, 0, 0, 0 );
$line_colour2 = imagecolorallocate( $my_img, 50, 150, 50 );
imagefilledrectangle($im, 0, 0, 399, 29, $white);
//obrazok kam , font , X os , Y os , text , farba
//tft kam velkjost krivost os X os Y farba font text

//cas -dlzka NAZVY   /   pzicia pomlcky -   / dlzka zvysneho textu od DLHSIE - ktory list ide,n-   "ktory produkt je zeleny
$pos=date("h:i:s")."-".strlen($dulux[$q][0])."/".stripos($dulux[$q][0]," – ")."/".strlen(substr($dulux[$q][0],$dlhsie,100))."-".$kontr.",".$kon."-".$p."/".$q;
//$pos=strlen(substr($dulux[76][3],stripos($dulux[76][3]," – ")+3,100));

// list - dpi 
imagettftext( $my_img, $sizeN, 0, $orez*2, $orez*2, $line_colour2 ,$font, $kontr."-".$vyber." ".$pos." ".$dulux[$q][0]);
//imagettftext( $my_img, $sizeN, 0, $orez, $orez*2, $line_colour2 ,$font, $dulux[0][12]." ".$dulux[0][14]);


for ($i = 0; $i < $pocX ; $i++)
	{
		for($j = 0; $j < $pocY; $j++)
		{
//NAZOV
$d=substr($dulux[$p][0],0,stripos($dulux[$p][0]," – "));
$d=strlen(substr($dulux[$p][0],stripos($dulux[$p][0]," – ")+3,100));
$d=strlen(substr($dulux[$p][0],$dlhsie,100));
switch ($d)
    {
    case 16:     $dlzka=20; break;
    case 5:     $dlzka=9; break;
    case 6:     $dlzka=8; break;
    case 8:     $dlzka=21; break;
    default: $dlzka=8;
    }
if(strlen($dulux[$p][0])>$dlhsie)

    {
        if(stripos($dulux[$p][0]," – ")>20)
        {
        if($kont<1)
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, "1".substr($dulux[$p][0],0,stripos($dulux[$p][0]," – ")));
        else
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, substr($dulux[$p][0],0,stripos($dulux[$p][0]," – ")));
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left*$dlzka, $odsadY+$sizeY*$j+$sizeN+$up+$up, $text_colour,$fontL, substr($dulux[$p][0],stripos($dulux[$p][0]," – ")+3,100));
        }
        else
        {
        if(strlen(stripos($dulux[$p][0],"  "))>0)
        $dlhsie2=stripos($dulux[$p][0],"  ");
        else
        $dlhsie2=49;
        if($kont<1)
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, "2".substr($dulux[$p][0],0,$dlhsie2));
        else
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, substr($dulux[$p][0],0,$dlhsie2));
        imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left*$dlzka, $odsadY+$sizeY*$j+$sizeN+$up+$up, $text_colour,$fontL, substr($dulux[$p][0],$dlhsie2,100));
        }
    }
else
    {
    if($kont<1)
    imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, "0".substr($dulux[$p][0],0,$dlhsie));
    else
    imagettftext( $my_img, $sizeN, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$up, $text_colour,$fontL, substr($dulux[$p][0],0,$dlhsie));

//imagettftext( $my_img, $sizeP, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$sizeP+$up*2, $text_colour,$font, substr($dulux[$p][2],11,10));
//imagettftext( $my_img, $sizeP, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY*$j+$sizeN+$sizeP*2+$up*3, $text_colour,$font, substr($dulux[$p][2],20,10));

//JEDNOTKOVA CENA
//imagettftext( $my_img, $sizeBEZ, 0, $odsadX+$sizeX*$i+$left2, $odsadY+$sizeY+$sizeY*$j-$down-$sizeBEZ, $text_colour,$font, $dulux[$p][10]." € / ".$dulux[$p][7]." dlzka ".$dlzka);
if(strlen($dulux[$p][4])>0)
imagettftext( $my_img, $sizeBEZ, 0, $odsadX+$sizeX*$i+$left2, $odsadY+$sizeY+$sizeY*$j-$down3-$sizeBEZ, $text_colour,$fontL, $dulux[$p][1]." &#8364; / ".$dulux[$p][4]);
//imagettftext( $my_img, $sizeBEZ-5, 0, $odsadX+$sizeX*$i+$left, $odsadY+$sizeY+$sizeY*$j-$down-40, $text_colour,$font, $cena1.$dulux[$p][7]);

//TEXT S DPH
$d=strlen($dulux[$p][7]);
switch ($d)
    {
    case 4:     $dlzka=10; break;
    case 5:     $dlzka=9; break;
    case 6:     $dlzka=8; break;
    }
imagettftext( $my_img, $sizeBEZ, 0, $odsadX+$sizeX*$i+$left*$dlzka, $odsadY+$sizeY+$sizeY*$j-$down-$down-$down, $text_colour,$fontL, "( ".$dulux[$p][7]);
imagettftext( $my_img, $sizeBEZ, 0, $odsadX+$sizeX+$sizeX*$i-$right1, $odsadY+$sizeY+$sizeY*$j-$down-$down-$down, $text_colour,$fontL, "&#8364; bez DPH )");

//CENA FINAL
$d=strlen($dulux[$p][12]);
switch ($d)
    {
    case 4:     $dlzka=300; break;
    case 5:     $dlzka=330; break;
    case 6:     $dlzka=360; break;
    }
imagettftext( $my_img, $sizeC, 0, $odsadX+$sizeX+$sizeX*$i-$dlzka*$pomer, $odsadY+$sizeY+$sizeY*$j-$down2, $text_colour,$fontB, $dulux[$p][12]);
//imagettftext( $my_img, $sizeBEZ, 0, $odsadX+$sizeX*$i+$left2, $odsadY+$sizeY+$sizeY*$j-$down-$sizeBEZ, $text_colour,$fontB, $dulux[$p][10]." € / ".$dulux[$p][7]." dlzka ".$dlzka);
imagettftext( $my_img, $sizeC, 0, $odsadX+$sizeX+$sizeX*$i-$right2, $odsadY+$sizeY+$sizeY*$j-$down2, $text_colour,$fontB, " &#8364;");
imagettftext( $my_img, $sizeC, 0, $odsadX+$sizeX+$sizeX*$i-$right2, $odsadY+$sizeY+$sizeY*$j-$down2, $text_colour,$fontL, "    /");
imagettftext( $my_img, $sizeC/2, 0, $odsadX+$sizeX+$sizeX*$i-$right3, $odsadY+$sizeY+$sizeY*$j-$down2, $text_colour,$fontB, "ks");
//imagettftext( $my_img, $sizeS-10, 0, $odsadX+$sizeX+$sizeX*$i-$right, $odsadY+$sizeY+$sizeY*$j-$down, $text_colour,$font, $cenaS);

//kontrola prepoctu odsadenia
//imagettftext( $my_img, $sizeS, 0, $odsadX, $odsadY, $text_colour,$font, $odsadXX);
//imagettftext( $my_img, $sizeS, 0, $odsadX, $odsadY, $text_colour,$font, $odsadYY);

//imagettftext( $my_img, 20, 0, $odsadX, $odsadY, $text_colour,$font, $odsadX);
//imagettftext( $my_img, 20, 0, $odsadX, $odsadY, $text_colour,$font, $odsadY);
$p=$p+1;
if ($count==$p) // ukonci ked vypise vsetky zaznamy
	{
	$i=$pocX;
	$j=$pocY;
	}
		}
	}

imagesetthickness ( $my_img, 5 );
// x y x y
//imageline( $my_img, 0, 0, 1, 0, $line_colour );
//imageline( $my_img, 1, 1, 2, 1, $line_colour );
//imageline( $my_img, 2, 2, 3, 2, $line_colour );
//$OD=850;
//imageline( $my_img, $OD , 0, $OD, 2000, $line_colour2 );
for ($j = 0; $j <= $pocX; $j++)
{
if($kont<1)
imageline( $my_img, $sizeX*$j+$odsadX, $odsadY, $sizeX*$j+$odsadX, $piy-$odsadY, $line_colour2 );  //kontrolana ciara
imageline( $my_img, $sizeX*$j+$odsadX, 0, $sizeX*$j+$odsadX, $orez, $line_colour );
imageline( $my_img, $sizeX*$j+$odsadX, $piy-$orez, $sizeX*$j+$odsadX, $piy, $line_colour );
}
for ($k = 0; $k <= $pocY; $k++)
{
if($kont<1)
imageline( $my_img, $odsadX ,$sizeY*$k+$odsadY, $pix-$odsadX, $sizeY*$k+$odsadY,  $line_colour2 ); //kontrolna ciara
imageline( $my_img, 0 ,$sizeY*$k+$odsadY, $orez, $sizeY*$k+$odsadY,  $line_colour );
imageline( $my_img, $pix-$orez ,$sizeY*$k+$odsadY, $pix, $sizeY*$k+$odsadY,  $line_colour );
}

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
//echo "</iframe></body></html>";
?>