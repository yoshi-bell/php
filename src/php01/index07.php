<?php
function test($a,$b){
    $total = $a + $b;
    return $total;
}
$c = test(2,3);
echo $c."<br>";


function pass($score1,$score2,$score3){
    $total = $score1+$score2+$score3;
    if($total>210){
       echo "合計点は $total なので合格です<br>";
    }else{
        echo "合計点は $total なので不合格です<be>";
}
}
pass(90,80,70);
pass(70,70,70);

echo "<br>";

function tri($t_base,$t_height){
    $tri_area = $t_base * $t_height * 0.5;
    return $tri_area;
}

function quad($q_height,$q_width){
    $quad_area = $q_height * $q_width;
    return $quad_area;
}

function trap($u_base,$b_base,$trap_height){
    $trap_area = ($u_base + $b_base) * $trap_height * 0.5;
    return $trap_area;
}

echo tri(4,4)."<br>";
echo quad(4,5)."<br>";
echo trap(3,5,4)."<br>";