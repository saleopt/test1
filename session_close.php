<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/22
 * Time: 17:31
 */
session_start(); //initiate / open session
$_SESSION['count'] = 0; // store something in the session
session_write_close(); //now close it,
# from here every other script can be run (and makes it seem like multitasking)
for($i=0; $i<=100; $i++){ //do 100 cycles
    session_start(); //open the session again for editing a variable
    $_SESSION['count'] += 1; //change variable
    session_write_close(); //now close the session again!
    sleep(2); //every cycle sleep two seconds, or do a heavy task
}
?>