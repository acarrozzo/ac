<?php
                        $roomname = "Mountain Path";
$lookdesc = $_SESSION['lookdesc'] = $_SESSION['desc602'];

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

    include('battle-sets/mountains.php');










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
        $message="<i>You travel east</i></br>".$_SESSION['desc601'];
        include('update_feed.php'); // --- update feed
            $results = $link->query("UPDATE $user SET room = '601'"); // -- room change
            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
    } elseif ($input=='nw' || $input=='northwest') {
        echo 'You travel northwest<br/>';
        $message="<i>You travel northwest</i></br>".$_SESSION['desc603'];
        include('update_feed.php'); // --- update feed
            $results = $link->query("UPDATE $user SET room = '603'"); // -- room change
            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
    }




    // ----------------------------------- end of room function
    include('function-end.php');
}
