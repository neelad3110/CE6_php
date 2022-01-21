<?php
    echo"Sorting Functions<br><br>";
    $arr_index=array(7,3,6,9,3,2,1,9,3);
    echo "Given Index array   :     ";
    $len_index=count($arr_index);
    for($i=0;$i<$len_index;$i++){ echo $arr_index[$i]." ";}
    echo "<br>";
    
    echo "<br>";                // simple sort function
    echo "Using sort()   :     ";
    sort($arr_index);
    for($i=0;$i<$len_index;$i++){ echo $arr_index[$i]." ";}
    
    echo "<br>";                // reverse sort function
    echo "Using rsort()  :     ";
    rsort($arr_index);
    for($i=0;$i<$len_index;$i++){ echo $arr_index[$i]." ";}
    
    echo"<br><br>";
    $arr_associative=array(64=>"Sunny",78=>"Riddesh",82=>"Neel",51=>"Krunal",72=>"Nakul",18=>"Shantanu",70=>"Abhi");
    echo "Given Associative array   :     ";
    print_r($arr_associative);
    echo"<br>";
    
    echo "<br>";        //sorting values in associative array
    echo "Using asort()  :     ";
    asort($arr_associative);
    print_r($arr_associative);
    
    echo "<br>";        //reverse sorting values in associative array 
    echo "Using arsort()  :     ";
    arsort($arr_associative);
    print_r($arr_associative);

    echo "<br>";         //sorting keys in associative array   
    echo "Using ksort()  :     ";
    ksort($arr_associative);
    print_r($arr_associative);

    echo "<br>";            //reverse sorting values in associative array
    echo "Using krsort()  :     ";
    krsort($arr_associative);
    print_r($arr_associative);

    

    echo"<br><br>";
    $temp=array("img1.jpg","img00.jpg","img115.jpg","img3.jpg","img22.jpg");
    echo "Given Associative array   :     ";
    print_r($temp);
    echo"<br>";
    echo "<br>Difference in sort() and natsort()<br>";
    echo "<br>";
    echo "Using sort()  :     ";
    sort($temp);
    print_r($temp);

    echo "<br>";                    //natsort vs sort
    echo "Using natsort()  :     ";
    natsort($temp);
    print_r($temp);
    
    echo"<hr><br>Array Functions <br>";

    $arr_index=array(7,3,6,9,3,2,1,9,3);
    echo "Given Index array 1  :     ";
    $len_index=count($arr_index);
    for($i=0;$i<$len_index;$i++){ echo $arr_index[$i]." ";}
    echo "<br>Given Fruits array   :     ";
    $fruits=array("apple","orange","grapes","banana","grapes","orange","banana","orange","grapes");
    $len_index1=count($fruits);
    for($i=0;$i<$len_index1;$i++){ echo $fruits[$i]." , ";}

    $arr_associative=array("Sunny"=>"64","Riddesh"=>"78","Neel"=>"82","Krunal"=>"51","Nakul"=>"72","Shantanu"=>"18","Abhi"=>"70");
    echo "<br>Given Associative array   :     ";
    print_r($arr_associative);
    echo"<br>";


    echo "<br>";                        //sum of elements
    echo "Array Index 1 Sum  :     ";
    echo array_sum($arr_index);

    echo "<br>";                     // searching value with use of key
    echo "Searching Name of Enrollment ID [72]  :     ";
    print(array_search("72",$arr_associative));
    
    echo "<br>";                    // counting distinct values in array
    echo "Types of fruits available  :      ";
    $level=array_count_values($fruits);
    print_r($level);

    echo "<br>";                    // array with custom range
    echo "Range (0-8) :      ";
    $range=range(0,8);
    print_r($range);

    echo "<br>";                    // shuffling array elements
    echo "Shuffling Fruits array :      ";
    shuffle($fruits);
    print_r($fruits);

    echo "<br><br>";                // merging 2 arrays
    echo "Merging Index array 1 and fruits  :      ";
    print_r(array_merge($arr_index,$fruits));

    echo "<br><br>";                // chaning key to UPPERCASE
    echo "Making Name UPPERCASE   :      ";
    print_r(array_change_key_case($arr_associative,CASE_UPPER));

    echo "<br>";                    // diving array into groups of 2
    echo "Making chunks of fruits in 2  :      ";
    $chunks=array_chunk($fruits,2,true);
    print_r($chunks);

    echo "<br><hr><br>";
    echo "Multidimensional Array   :      ";
    
    $multid_array = array(
        array('Artist'=>'The_Weeknd','Album'=>'After_Hours'),
        array('Artist'=>'Travis_Scott','Album'=>'AstroWorld'),
        array('Artist'=>'Post_Malone','Album'=>'Hollywoods_Bleeding'),
        array('Artist'=>'Alan_Walker','Album'=>'Dark_World')
    );
    print_r($multid_array);
    
    echo "<br><br>";            // list of values as per column
    echo "Values of Album Column  :      ";
    print_r(array_column($multid_array,'Album'));
  
    echo "<br><hr><br>";
    $set1=array('A','B','C','D');
    $set2=array('B','D','E');

    echo"<br>Set 1 elements : ";
    for($i=0;$i<count($set1);$i++){ echo $set1[$i]." - ";}
    echo"<br>Set 2 elements : ";
    for($i=0;$i<count($set2);$i++){ echo $set2[$i]." - ";}

    echo "<br><br>";            // finding difference between 2 arrays
    echo "Elements of Set1 not in Set2  :      ";
    print_r(array_diff($set1,$set2));
    

    

?>