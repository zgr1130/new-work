<?php
// function aa($q){
//     echo "<table style='border:2px solid blue'>";
//     for($i=1;$i<$q;$i++){
//         if($i%2==0){
//             echo "<tr style='background:".'red'.";width:100px;height:50px'>";
//         }else{
//             echo "<tr style='background:"."green".";width:100px;height:50px'>";
//         }      
//         for($j=1;$j<=$i;$j++){
//             echo "<td>";
//             echo $j."*".$i."=".$i*$j."&nbsp;";
//             echo "</td>";
//         }
//         echo "</tr>";
//     }
//     echo "</table>";
// }
// aa(10);

function aa($a,$b){
    if($a>$b){
        return $a;
    }elseif ($a==$b) {
        echo "相等";
    }else{
        return $b;
    }
}
$result=aa(12,22);
echo $result;
