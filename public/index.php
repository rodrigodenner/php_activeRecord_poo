<?php
require "../vendor/autoload.php";

use app\database\activerecord\Delete;
use app\database\activerecord\FindAll;
use app\database\activerecord\FindBy;
// use app\database\activerecord\Find;
// use app\database\activerecord\Insert;
use app\database\models\User;
// use app\database\activerecord\Update;


$user = new User;
// $user->firstName = 'Francisco';
// $user->lastName = 'Denner';

// $user->update(new Update);
var_dump($user->execute(new FindAll(fields:'id')));
