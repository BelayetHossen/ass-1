<?php

//input===============================================
    $name= "Anik";
    $num = 89;


//relation===============================================

    $rel="";
    if ($name=="aditi" || $name=="tabira" || $name== "ruma" || $name=="tarannum")
    {
        $rel= "Apu";
    }
    else{
        $rel="Vaiya";
    }
//result====================================================
    $result ="";
    $gpa ="";
    if($num<=32){
        $result= "F";
        $gpa = "00";
    }
    else if ($num<=39){
        $result= "D";
        $gpa = "1.0";
    }
    else if ($num<=49){
        $result= "C";
        $gpa = "2.0";
    }
    else if ($num<=59){
        $result= "B";
        $gpa = "3.0";
    }
    else if ($num<=69){
        $result= "A-";
        $gpa = "3.5";
    }
    else if ($num<=79){
        $result= "A";
        $gpa = "4.0";
    }else if ($num<=100){
        $result= "A+";
        $gpa = "5.0";
    }
    else {
        echo "Please Input 1-100 number in field";
    }
//output msg==============================================================
    $f=         "<strong>$name $rel</strong> Sorry, You have Failed, and You have got GPA = $gpa<br> Please try next year";
    $d=         "<strong>$name $rel</strong> You have Passed, and You have got GPA = $gpa<br> Please improve yourself";
    $c=         "<strong>$name $rel</strong> You have Passed, and You have got GPA = $gpa<br> Please improve more yourself";
    $b=         "<strong>$name $rel</strong> You have Passed, and You have got GPA = $gpa<br> Please improve more one yourself";
    $a_mainus=  "<strong>$name $rel</strong> Congratulation, You have Passed, and You have got GPA = $gpa<br> You can got more point, try good";
    $a=         "<strong>$name $rel</strong> Congratulation, You have Passed, and You have got GPA = $gpa<br> Good, All the best";
    $a_plus=    "<strong>$name $rel</strong> Congratulation, You have Passed, and You have got GPA = $gpa<br> Very Good, All the best";

//output program=======================================================
    if ($num<=32){
        echo "$f";
    }elseif ($num<=39){
        echo "$d";
    }elseif ($num<=49){
        echo "$c";
    }elseif ($num<=59){
        echo "$b";
    }elseif ($num<=69){
        echo "$a_mainus";
    }elseif ($num<=79){
        echo "$a";
    }elseif ($num<=100){
        echo "$a_plus";
    }
