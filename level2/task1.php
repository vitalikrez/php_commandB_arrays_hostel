<!DOCTYPE html>
<html>

<head>
    <title>Task1</title>
    <meta charset="utf-8" />

</head>


<body>
  <?php 
  
  $x=3;
  $y=6;

  $s=1;
  for($i=0;$i<$y;$i++)//генерація масиву 
  {
     for($j=0;$j<$x;$j++)
     {
         $arr[$i][$j]=$s;
         $s++;
     }
  }

//$x=4/;
//$y=4;
//$arr = array(
//[1, 2, 3, 4],
//[5, 6, 7, 8],
//[9, 10, 11, 12],
//[13, 14, 15,16]);
//$arr = array(
//   [1, 2, 3,],
//   [5, 6, 7, ],
//   [9, 10, 11, ],
 //  [13, 14, 15]);

for($i=0;$i<$y;$i++)//виводимо масив
{
   for($j=0;$j<$x;$j++)
   echo ($arr[$i][$j]." ");
   echo ("<br>");
}

   $arr2 = [];
   $kilkist=0;
   $mas1=0;
   $mas1_1=0;
   $mas2=1;
   $mas3=2;
   $mas3_2=1;
   $mas3_2_1=-1;
   $mas4=0;

  echo ("<br>");
  while($kilkist<$y*$x)//присвоюємо значення в одномірний масив
  {
      for($i=$mas1;$i<$x-$mas1;$i++)
      {
         $arr2[$kilkist] = $arr[$mas1][$i];//0
         $kilkist++;
      }
      if($kilkist>=$y*$x)
       break;
      for($i=$mas2;$i<$y-$mas1;$i++)
      {
         $arr2[$kilkist] = $arr[$i][$x-$mas2];//1
         $kilkist++;
      }
      if($kilkist>=$y*$x)
      break;
     
      for($i=$x-$mas3;$i>$mas3_2_1;$i--)//2
      {
         $arr2[$kilkist] = $arr[$y-$mas3_2][$i];//-1
         $kilkist++;
      } 

      if($kilkist>=$y*$x)
       break;
         for($i=$y-$mas3;$i>$mas4;$i--)//2
         {
            $arr2[$kilkist] = $arr[$i][$mas4];
            $kilkist++;
         } 
         if($kilkist>=$y*$x)
         break;
      $mas1++;
      $mas2++;
      $mas3++;
      $mas3_2++;
      $mas3_2_1++;
      $mas4++;
  }
    
 for($j=0;$j<count($arr2);$j++)//результат
 {
   echo($arr2[$j]." ");
 }

  ?>
  



</body>

</html>
