<?php
							  $roomname = "The Catacombs Gallery";
$lookdesc = $_SESSION['lookdesc'] = $_SESSION['desc232r'];
//$dangerLVL = $_SESSION['dangerLVL'] = "7-13"; // danger level

include ('function-start.php'); 
// -------------------------DB CONNECT!
include ('db-connect.php');  
// -------------------------DB QUERY!
$sql = "SELECT * FROM $username";
if(!$result = $link->query($sql)){ die('There was an error running the query [' . $link->error . ']');}
// -------------------------DB OUTPUT!
while($row = $result->fetch_assoc()){   

include ('battle-sets/catacombs.php'); 

if ( 1 == 2 ) { } //nada
// -------------------------------------------------------------------------- ROOM ACTIONS



// -------------------------------------------------------------------------- END BATTLE BLOCK


// -------------------------------------------------------------------------- Battle TRAVEL
if ((	$input=='n' || $input=='north' || $input=='ne' || $input=='northeast' ||
		$input=='e' || $input=='north' || $input=='se' || $input=='southeast' ||
		$input=='s' || $input=='south' || $input=='sw' || $input=='southwest' ||
		$input=='w' || $input=='west' || $input=='nw' || $input=='northwest' ||
		$input=='u' || $input=='up' || $input=='d' || $input=='down' )  && $infight >= 1) {
	echo 'You cannot leave the room in the middle of battle!<br/>';
   	$message="<i>You cannot leave the room in the middle of battle!</i><br/>";
	include ('update_feed.php'); // --- update feed
	}
// -------------------------------------------------------------------------- TRAVEL
else if($input=='w' || $input=='west') 
{			echo 'You travel west<br/>';
   	 $message="<i>You travel west</i></br>".$_SESSION['desc232u'];
	 include ('update_feed.php');   // --- update feed
   		   $results = $link->query("UPDATE $user SET room = '232u'"); // -- room change
   		   $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
}
else if($input=='s' || $input=='south') 
{			echo 'You travel south<br/>';
   	$message="<i>You travel south</i></br>".$_SESSION['desc232s'];
	include ('update_feed.php');   // --- update feed
   		   $results = $link->query("UPDATE $user SET room = '232s'"); // -- room change
   		   $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
}
else if($input=='e' || $input=='east') 
{			echo 'You travel east<br/>';
   	 $message="<i>You travel east</i></br>".$_SESSION['desc232q'];
	 include ('update_feed.php');   // --- update feed
   		   $results = $link->query("UPDATE $user SET room = '232q'"); // -- room change
   		   $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
}


// ----------------------------------- end of room function
include ('function-end.php');
}
?>
