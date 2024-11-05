<?php
 namespace NSpacePractice\Backend;


class User{

    public function UserName($name){
        echo "<h3> Welcome to Backend User </h3>";
        echo "Backend User Name Is ".$name;
        echo "<br>";
    
    }
    public function Age($age){
     echo "Backend User Age is ".$age;
    }
}

