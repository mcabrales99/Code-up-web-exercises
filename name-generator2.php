<?php 

class Generate  {


    public static function getAdjective() {

        $adjectivesArray = ["good", "new", "first", "last", "long", "bad", "same", "next","same","few"];

        $rand_keys = array_rand($adjectivesArray);

    return $adjectivesArray[$rand_keys];
    }   


    public static function  getNoun()   {

    $nounsArray = ["jam", "soil", "star", "wallet", "screen", "leg", "child", "sand", "room", "dancer"];

        $rand_keys = array_rand($nounsArray);

        return $nounsArray[$rand_keys];

    }

    public static function getServerName()  {

        return self::getAdjective() . " - " . self::getNoun();

    }

}





