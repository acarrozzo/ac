<?php
                        $roomname = "Cathedral Nave";
$lookdesc = $_SESSION['lookdesc'] = $_SESSION['desc622'];

include('function-start.php');

// -------------------------DB CONNECT!
include('db-connect.php');
// -------------------------DB QUERY!
$sql = "SELECT * FROM $username";
if (!$result = $link->query($sql)) {
    die('There was an error running the query [' . $link->error . ']');
}
// -------------------------DB OUTPUT!
while ($row = $result->fetch_assoc()) {


// -------------------------------------------------------------------------- BATTLE VARIABLES
    $infight = $row['infight'];
    $endfight = $row['endfight'];
    $enemy=$row['enemy'];



    // -------------------------------------------------------------------------- After Battle - SAFE ROOM
    if ($endfight == 1 && $input!='n' && $input!='north' && $input!='ne' && $input!='northeast' &&
            $input!='e' && $input!='east' && $input!='se' && $input!='southeast' &&
            $input!='s' && $input!='south' && $input!='sw' && $input!='southwest' &&
            $input!='w' && $input!='west' && $input!='nw' && $input!='northwest' &&
            $input!='u' && $input!='up' && $input!='d' && $input!='down') {
        echo "This room is safe.<br/>";
    }
    // -------------------------------------------------------------------------- If room ready create random rand #
    if ($infight < 1 && $endfight != 1) {  // RAND GENERATOR
            $rand = rand(1, 8);
    } else {
        $rand=0;
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 1) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Grey Gargoyle'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 2) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'White Gargoyle'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 3) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Vampire'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 4) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Vampire'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 5) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Vampire'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 6) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Fallen Priest'");
        include('battle.php');
    }
    // -------------------------------------------------------------------------- INITIALIZE - 1/8
    if (($rand == 7) && $infight==0 && $endfight==0) {
        $results = $link->query("UPDATE $user SET enemy = 'Fallen Priest'");
        include('battle.php');
    }

    // -------------------------------------------------------------------------- IN BATTLE
    elseif ($infight >=1) {
        include('battle.php');
    }






    // -------------------------------------------------------------------------- Battle TRAVEL
    if (($input=='n' || $input=='north' || $input=='ne' || $input=='northeast' ||
        $input=='e' || $input=='north' || $input=='se' || $input=='southeast' ||
        $input=='s' || $input=='south' || $input=='sw' || $input=='southwest' ||
        $input=='w' || $input=='west' || $input=='nw' || $input=='northwest' ||
        $input=='u' || $input=='up' || $input=='d' || $input=='down')  && $infight >= 1) {
        echo 'You cannot leave the room in the middle of battle!<br/>';
        $message="<i>You cannot leave the room in the middle of battle!</i><br/>";
        include('update_feed.php'); // --- update feed
    }

    // -------------------------------------------------------------------------- TRAVEL

    elseif ($input=='e' || $input=='east') {
        echo 'You travel east<br/>';
        $message="<i>You travel east</i></br>".$_SESSION['desc623'];
        include('update_feed.php'); // --- update feed
            $results = $link->query("UPDATE $user SET room = '623'"); // -- room change
            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
    } elseif ($input=='w' || $input=='west') {
        echo 'You travel west<br/>';
        $message="<i>You travel west</i></br>".$_SESSION['desc621'];
        include('update_feed.php'); // --- update feed
            $results = $link->query("UPDATE $user SET room = '621'"); // -- room change
            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
    }





    // ----------------------------------- end of room function
    include('function-end.php');
}
