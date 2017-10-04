<?php  //imam vupros po obrazuvaneto na tablicata
if(isset($_GET['filter'])){
    $names=$_GET['names'];
    $ages=$_GET['ages'];

    if($_GET['delimiter']==','){
        $names=explode(',',$names);
        $ages=explode(',',$ages);

    }elseif ($_GET['delimiter']=='|'){
        $names=explode('|',$names);
        $ages=explode(',',$ages);

    }elseif ($_GET['delimiter']=='&'){
        $names=explode('&',$names);
        $ages=explode(',',$ages);

    }
    $resultArr=[];

   for($i=0; $i<count($names); $i++) {
           $resultArr[$names[$i]] = $ages[$i];
       }
       // print_r($resultArr);
       echo "<table border='1' cellpadding='0'>";
       echo "<thead>";
       echo "<tr>";
       echo "<td>" . "Name" . "</td>";
       echo "<td>" . "Age" . "</td>";
       echo "</tr>";
       echo "</thead>";
       foreach ($resultArr as $k => $v) {
           if ($v >= 18) {
           echo "<tr>";
           echo "<td>" . $k . "</td>";
           echo "<td>" . $v . "</td>";
           echo "</tr>";
       }
       echo "</table>";
   }
}
