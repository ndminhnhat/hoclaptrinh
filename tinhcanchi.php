<?php
//$nam = 2021;
//$can =' ';
//switch ($nam%10) {
  //  case 1: $can ='Tân'; break;
    //case 2: $can ='Nhâm'; break;
   // case 3: $can ='Quý'; break;
    //case 4: $can ='Giáp'; break;
    //case 5: $can ='Ất'; break;
    //case 6: $can ='Bính'; break;
    //case 7: $can ='Đinh'; break;
    //case 8: $can ='Mậu'; break;
    //case 9: $can ='Kỷ'; break;
    //default: $can = 'Canh'; break;
    
//}
//$chi =' ';
//switch ($nam%12) {
  //  case 1: $chi ='Dậu'; break;
    //case 2: $chi ='Tuất'; break;
    //case 3: $chi ='Hợi'; break;
    //case 4: $chi ='Tý'; break;
    //case 5: $chi ='Sửu'; break;
    //case 6: $chi ='Dần'; break;
    //case 7: $chi ='Mẹo'; break;
    //case 8: $chi ='Thìn'; break;
    //case 9: $chi ='Tỵ'; break;
    //case 10: $chi ='Ngọ'; break;
    //case 11: $chi ='Mùi'; break;
    //default: $chi = 'Thân'; break;
    
//}
//echo 'Năm này là năm '.$can.' '.$chi;
$a = 1991;
$b = ' ';
$c = ' ';
if ($a%10==1) $b = 'Tân';
if ($a%10==2) $b = 'Nhâm';
if ($a%10==3) $b = 'Quý';
if ($a%10==4) $b = 'Giáp';
if ($a%10==5) $b = 'Ất';
if ($a%10==6) $b = 'Bính';
if ($a%10==7) $b = 'Đinh';
if ($a%10==8) $b = 'Mậu';
if ($a%10==9) $b = 'Kỷ';
if ($a%10==0) $b = 'Canh';
if ($a%12==1) $c = 'Dau';
if ($a%12==2) $c = 'Tuất';
if ($a%12==3) $c = 'Hợi';
if ($a%12==4) $c = 'Tý';
if ($a%12==5) $c = 'Sửu';
if ($a%12==6) $c = 'Dần';
if ($a%12==7) $c = 'Mẹo';
if ($a%12==8) $c = 'Thìn';
if ($a%12==9) $c ='Tỵ';
if ($a%12==10) $c = 'Ngọ';
if ($a%12==11) $c = 'Mùi';

if ($a%12==0) $c = 'Than';
echo 'Năm này là năm '.$b.' '.$c;


 

?>