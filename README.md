IUG  
Web Programming 2 - SICT 2308  
ِِAssginment 3   
id : 120171952
<?php
    $IUG = array(
      "IT" => array("dean" => "Ali", "highestAvg" => 94 , "lowestAvg" => 64 ),
      "English" => array("dean" => "Alaa", "highestAvg" => 93 , "lowestAvg" => 63 ),
      "Engineering" => array("dean" => "Ahmed", "highestAvg" => 88 , "lowestAvg" => 62 ),
      "Medicine" => array("dean" => "Osama", "highestAvg" => 95 , "lowestAvg" => 60 )
    );
     // for(reset($IUG); $ky=key($IUG); next($IUG)){
     //   echo "$ky";
     // for(reset($IUG[$ky]); $k=key($IUG[$ky]); next($IUG[$ky])){
     //   echo "$IUG[$ky][$k]";
     // }
      print_r($IUG);
