<?php
class User
{
    private static $nextId = 0;
    public $myId;

    public static function printId()
    {
        return "User id is: ". self::$nextId;
    }
}
/*
$user = new Id();
$user->myId = 10;
echo $user->myId;
*/
echo User::printId();

