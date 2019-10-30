<?php
                        $roomname = "Mining Guild Supply Shop";
$lookdesc = $_SESSION['lookdesc'] = $_SESSION['desc308d'];

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
    if ($input=='buy pickaxe') {
        if ($cash<5000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a pickaxe for 5000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET pickaxe = pickaxe + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 5000");
        }
    }
    if ($input=='buy hammer') {
        if ($cash<5000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a hammer for 5000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET hammer = hammer + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 5000");
        }
    }

    if ($input=='buy iron pickaxe') {
        if ($cash<15000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a iron pickaxe for 15000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET ironpickaxe = ironpickaxe + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 15000");
        }
    }
    if ($input=='buy iron hammer') {
        if ($cash<15000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a iron hammer for 15000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET ironhammer = ironhammer + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 15000");
        }
    }


    if ($input=='buy steel pickaxe') {
        if ($cash<50000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a steel pickaxe for 50000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET steelpickaxe = steelpickaxe + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 50000");
        }
    }
    if ($input=='buy steel hammer') {
        if ($cash<50000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a steel hammer for 50000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET steelhammer = steelhammer + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 50000");
        }
    }

    if ($input=='buy mithril pickaxe') {
        if ($cash<250000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a mithril pickaxe for 250000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET mithrilpickaxe = mithrilpickaxe + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 250000");
        }
    }
    if ($input=='buy mithril hammer') {
        if ($cash<250000) {
            echo $message=$toopoor;
            include('update_feed.php');
        } else {
            echo $message = 'You buy a mithril hammer for 250000 '.$currency.'<br>';
            include('update_feed.php'); // --- update feed
            $query = $link->query("UPDATE $user SET mithrilhammer = mithrilhammer + 1");
            $query = $link->query("UPDATE $user SET currency = currency - 250000");
        }
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
        $message="<i>You travel east</i></br>".$_SESSION['desc308a'];
        include('update_feed.php'); // --- update feed
            $results = $link->query("UPDATE $user SET room = '308a'"); // -- room change
            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
    }









    // ----------------------------------- end of room function
    include('function-end.php');
}
