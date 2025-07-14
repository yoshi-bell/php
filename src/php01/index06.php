<?php

for ($i = 2; $i <= 10; $i+=2) {
    echo "$i <br>";
}

$count = 0;
while( $count <= 100){
    echo ++$count;
    echo "<br>";
    if ($count === 20) {
        break;
    }
}

$num = 0;
do{
    echo "num = $num <br>";
    $num++;
}while($num <= 2);



for($num = 1; $num <= 50;$num++){
    if($num%15===0){
        echo"FizzBuzz <br>";

    }else if($num % 5 === 0){
        echo"Buzz <br>";
    
    }else if($num % 3 === 0){
        echo"Fizz <br>";
    }else{
        echo "$num <br>";
    }

}

for($dot = 1 ; $dot <= 5 ; $dot++){
    for($i=1 ; $i<=5 ; $i++){
        echo "●";
    }
    echo "<br>";
}