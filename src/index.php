<?php   
    include "user.php";

    $user = new User();

    echo $user->add();
    echo $user->change();
    echo $user->delete();
    echo $user->show();
?>