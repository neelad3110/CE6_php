<?php
    echo "Single Dimension Array<br><br>";
    $numbers=array(1,2,3,4,5,6,7,8,9,10);
    echo "Given Single Dimension Array :{1,2,3,4,5,6,7,8,9,10}<br>";
    $len=count($numbers);
    echo "Array length : ".$len."<br>";
    echo "Using print_r() : ";
    print_r($numbers);
    echo "<br>Using for loop : ";
    for ($i=0;$i<$len;$i++){
        echo $numbers[$i]." -> ";
    }
    echo "<hr>";
    
    echo "Multi-Dimension array<br><br>";
    $collections=array(
        array("The Weeknd","After Hours","Blinding Lights",2019),
        array("Kygo","'Golden Hour","Lost Somebody",2020),
        array("Post Malone","Hollywood","Saint Topez",2020),
        array("Alan Walker","Dark World","Alone",2018)
        );
        
        echo '<table border="1">';
        echo '<tr><th>Artist</th><th>Album</th><th>Song</th><th>Year</th></tr>';
        for($i=0;$i<count($collections);$i++){
        echo'<tr>';
        for( $j=0;$j<4;$j++){
            echo '<td>'.$collections[$i][$j].'</td>';
        }
        echo '</tr>';
        }
        echo '</table>';
?>