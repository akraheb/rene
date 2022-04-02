<?
//A4 cm  21 × 29,7 cm vyber 3,6*6
//21/6=3,5  
//29,7/3,7=8,027
//Size	600 PPI	8,26 11,69	720 PPI	 	1200 PPI
//A4	4960 x 7016		5953 x 8419	 9921 x 14032
//Size	72 PPI		96 PPI		150 PPI		300 PPI
//A4	595 x 842	794 x 1123	1240 x 1754	2480 x 3508


//if($kontr<1)
//    $kont=$n;
//else
//    $kont=$kontr+1;
$p=1+14*($kontr);
$q=$p+$kon-1;
$font = 'arial.ttf';
$fontB='OpenSans-Bold.ttf';
$fontL='OpenSans-Light.ttf';

if(strlen($dpi)<1)
   $vyber=72;
else
$vyber=$dpi;
$dlhsie=40;


$pix=ceil($vyber*8.266); //1250 zaokruhlenie nahor
$piy=ceil($vyber*11.693); //1754
$sizeX=floor(7*$pix/21); //357 zaokruhlenie nadol
$sizeY=floor(3.7*$piy/29.7); // 218
$pocX=floor($pix/$sizeX)-1; // 3,5
$pocY=floor($piy/$sizeY)-1; // 8,05
//$odsadX=round(($pix-$sizeX*(round($pix/$sizeX)-1))/2);
$odsadX=round(($pix-$sizeX*$pocX)/2); //zaokruhlenie
//$odsadY=round(($piy-$sizeY*(ceil($piy/$sizeY)))/2);
$odsadY=round(($piy-$sizeY*($pocY))/2);
//echo $pix."<br>".$pix."<br>".$sizeX."<br>".$sizeY;

$cenaS = "CENA s DPH";
$cenaBEZ= "CENA s DPH";
$cena1= "CENA s DPH za ";

$pomer=$vyber/100/3*2;
$orez=40*$pomer;   //velkost orezovej znacky

$sizeN=14*$pomer;  //velkost nazov
$sizeP=20*$pomer;  
$sizeC=40*$pomer;  //velkost ceny
$sizeBEZ=15*$pomer; //velkost jednotkovej ceny

$up=30*$pomer; // posunutie nazvy                             Z HORA
$left=10*$pomer;   //posunutie strany NAZOV a DPH             Z LAVA

$down2=90*$pomer; // posunutie ceny                          Z DOLA
$right=330*$pomer; // posunutie CENA                          Z PRAVA
$right1=257*$pomer; //posunutie € bez DHP                        Z PRAVA
$right2=200*$pomer; //posunutie ks
$right3=120*$pomer; //posunutie ks

$down=20*$pomer; // posunutie   DPH         Z DOLA
$down3=10*$pomer; 
$left2=250*$pomer; // posunutei  jednotkova cena              Z LAVA


//$sizeN=30;
//$sizeP=20;
//$sizeS=30;
//$sizeBEZ=15;
//$left=30;
//$right=270;
//$down=20;
//$up=10;

?>