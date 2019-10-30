<?php
// -------------------------DB CONNECT!
include('db-connect.php');
// -------------------------DB QUERY!
$sql = "SELECT * FROM $username";
if (!$result = $link->query($sql)) {
    die('There was an error running the query [' . $link->error . ']');
}
// -------------------------DB OUTPUT!
while ($row = $result->fetch_assoc()) {
    $room = $row['room'];

    $pickaxe = $row['pickaxe'];
    $ironpickaxe = $row['ironpickaxe'];
    $steelpickaxe = $row['steelpickaxe'];
    $mithrilpickaxe = $row['mithrilpickaxe'];

    $stone=$row['stone'];
    $iron=$row['iron'];
    $mud=$row['mud'];
    $sand=$row['sand'];

    $woodtotal = $wood + 1;
    $woodtotal2 = $wood + 2;



    // -------------------------------------------------------------------------- Determine best pickaxe
    if ($mithrilpickaxe >=1) {
        $bestpickaxe = '<span class="blue">Mithril Pickaxe</span>';
        $bestpick="mithril";
    } elseif ($steelpickaxe >=1) {
        $bestpickaxe = '<span class="gray">Steel Pickaxe</span>';
        $bestpick="steel";
    } elseif ($ironpickaxe >=1) {
        $bestpickaxe = '<span class="brown">Iron Pickaxe</span>';
        $bestpick="iron";
    } elseif ($pickaxe >=1) {
        $bestpickaxe = 'Pickaxe';
    }






    //$icon = file_get_contents("icons/hatchet.svg");
    //$icon = <img src="icons/hatchet.svg">
    //<i class='icon'><img src='icons/hatchet.svg'></i>

    // -------------------------------------------------------------------------- MINE FUNCTION
    if (($input=='mine here' || $input=='mine' || $input=='mine down' || $input=='down' || $input=='d')  && $infight >= 1) {
        echo $message="<i class='redBG lightgray'>You cannot mine when you are in battle!</i><br/>";
        include('update_feed_alt.php'); // --- update feed
    } elseif ($input=='mine here' || $input=='mine' || $input=='mine down' || $input=='down' || $input=='d') {
        if ($pickaxe <=0 && $ironpickaxe <=0 && $steelpickaxe <=0 && $mithrilpickaxe <=0) {
            echo $message="<i class='redBG lightgray'>You need a pickaxe to mine! Go get one!</i><br/>";
            include('update_feed_alt.php'); // --- update feed
        } elseif ($pickaxe >= 1 || $ironpickaxe >= 1 || $steelpickaxe >= 1 || $mithrilpickaxe >= 1) {
            // ------------------------- MINE
            $randOre = rand(1, 10);

            echo 'ROOOO:'.$randOre;


            // ----------------------------------------------------------------------------------------------------- MITHRIL LEVELS 21-30
            if ($room == 'm21' || $room == 'm22' || $room == 'm23' || $room == 'm24' || $room == 'm25' || $room == 'm26' || $room == 'm27' || $room == 'm28' || $room == 'm29' || $room == 'm30') {
                // ----------------------------------------------------------------------------------------------------- Coal 6/10
                if ($randOre <=6) {
                    if ($steelpickaxe ==0 && $mithrilpickaxe ==0) { // ------------------------- if no good pickaxe
                        echo $message="<i>You see some coal, but you will need a steel pickaxe or better to mine it.</i><br/>";
                        include('update_feed_alt.php'); // --- update feed
                    } else {
                        $coal=$coal+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Coal!<br/><span class='dgray'>COAL + 1 = $coal</span></div>";
                        include('update_feed_alt.php'); // --- update feed
                        $results = $link->query("UPDATE $user SET coal = coal + 1");
                    }
                }
                // ----------------------------------------------------------------------------------------------------- Mithril 2/10
                elseif ($randOre == 7 || $randOre == 8) {
                    if ($mithrilpickaxe ==0) { // --------------------- if no good pickaxe
                        echo $message="<i>You see some mithril, but you will need a mithril pickaxe or better to mine it.</i><br/>";
                        include('update_feed_alt.php'); // --- update feed
                    } else {
                        $mithril=$mithril+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Mithril!<br/><span class='blue'>MITHRIL + 1 = $mithril</span></div>";
                        include('update_feed_alt.php'); // --- update feed
                        $results = $link->query("UPDATE $user SET mithril = mithril + 1");
                    }
                }
                // ----------------------------------------------------------------------------------------------------- Stone 1/10
                elseif ($randOre == 9) {
                    $stone=$stone+1; // for display
                    echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Stone! <br/><span class='gray'>STONE + 1 = $stone </span></div>";
                    include('update_feed_alt.php'); // --- update feed
                    $results = $link->query("UPDATE $user SET stone = stone + 1");
                }
            } // end MITHRIL




            // ----------------------------------------------------------------------------------------------------- STEEL LEVELS 11-20
            // ----------------------------------------------------------------------------------------------------- STEEL LEVELS 11-20
            // ----------------------------------------------------------------------------------------------------- STEEL LEVELS 11-20
            // ----------------------------------------------------------------------------------------------------- STEEL LEVELS 11-20
            // ----------------------------------------------------------------------------------------------------- STEEL LEVELS 11-20
            elseif ($room == 'm11' || $room == 'm12' || $room == 'm13' || $room == 'm14' || $room == 'm15' || $room == 'm16' || $room == 'm17' || $room == 'm18' || $room == 'm19' || $room == 'm20') {
                // ----------------------------------------------------------------------------------------------------- Coal 5/10
                if ($randOre <=5) {
                    if ($steelpickaxe ==0 && $mithrilpickaxe ==0) { // ------------------------- if no good pickaxe
                        echo $message="<i>You see some coal, but you will need a steel pickaxe or better to mine it.</i><br/>";
                        include('update_feed_alt.php'); // --- update feed
                    } else {
                        $coal=$coal+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Coal!<br/><span class='dgray'>COAL + 1 = $coal</span></div>";
                        include('update_feed_alt.php'); // --- update feed
                        $results = $link->query("UPDATE $user SET coal = coal + 1");
                    }
                }
                // ----------------------------------------------------------------------------------------------------- Stone 2/10
                elseif ($randOre == 6 || $randOre == 7) {
                    $stone=$stone+1; // for display
                    echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Stone! <br/><span class='gray'>STONE + 1 = $stone </span></div>";
                    include('update_feed_alt.php'); // --- update feed
                    $results = $link->query("UPDATE $user SET stone = stone + 1");
                }

                // ----------------------------------------------------------------------------------------------------- Iron 2/10
                elseif ($randOre == 8 || $randOre == 9) {
                    if ($ironpickaxe ==0 && $steelpickaxe ==0 && $mithrilpickaxe ==0) { // --------------------- if no good pickaxe
                        echo $message="<i>You see some iron, but you will need an iron pickaxe or better to mine it.</i><br/>";
                        include('update_feed_alt.php'); // --- update feed
                    } else {
                        $iron=$iron+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Iron!<br/><span class='lightbrown'>IRON + 1 = $iron</span></div>";
                        include('update_feed_alt.php'); // --- update feed
                        $results = $link->query("UPDATE $user SET iron = iron + 1");
                    }
                }
            } // end STEEL



            else { //  ------------ else iron
                // ----------------------------------------------------------------------------------------------------- IRON LEVELS 1-10
                // ----------------------------------------------------------------------------------------------------- IRON LEVELS 1-10
                // ----------------------------------------------------------------------------------------------------- IRON LEVELS 1-10
                // ----------------------------------------------------------------------------------------------------- IRON LEVELS 1-10
                // ----------------------------------------------------------------------------------------------------- IRON LEVELS 1-10
                // ----------------------------------------------------------------------------------------------------- Stone 5/10
                if ($randOre <=5) {
                    $stone=$stone+1; // for display
                    echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Stone! <br/><span class='gray'>STONE + 1 = $stone</span></div>";
                    include('update_feed_alt.php'); // --- update feed
                    $results = $link->query("UPDATE $user SET stone = stone + 1");
                }

                // ----------------------------------------------------------------------------------------------------- Iron 4/10
                if ($randOre > 5 && $randOre <= 9) {
                    if ($ironpickaxe ==0 && $steelpickaxe ==0 && $mithrilpickaxe ==0) { // ------------------------- if no good pickaxe
                        echo $message="<i>You see some iron, but you will need an iron pickaxe or better to mine it.</i><br/>";
                        include('update_feed_alt.php'); // --- update feed
                    } else {
                        $iron=$iron+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Iron! <br/><span class='lightbrown'>IRON + 1 = $iron</span></div>";
                        include('update_feed_alt.php'); // --- update feed
                        $results = $link->query("UPDATE $user SET iron = iron + 1");
                    }
                }
            } // end IRON
            // ----------------------------------------------------------------------------------------------------- SAND or MUD (1/20 each) - FINAL 5% for all
            if ($randOre == 10) {
                $randOre2 = rand(1, 2);
                if ($randOre2 == 1) { 		// ------------------ sand
                        $sand=$sand+1; // for display
                        echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Sand! <br/> <span class='lyellow'>SAND + 1 = $sand </span></div>";
                    include('update_feed_alt.php'); // --- update feed
                    $results = $link->query("UPDATE $user SET sand = sand + 1");
                } elseif ($randOre2 == 2) { 		// ------------------ mud
                            $mud=$mud+1; // for display
                            echo $message="<div class='menuAction'>You use your $bestpickaxe and mine some Mud!<br/> <span class='brown'>MUD + 1 = $mud</span></div>";
                    include('update_feed_alt.php'); // --- update feed
                    $results = $link->query("UPDATE $user SET mud = mud + 1");
                }
            }

            // ----------------------------------------------------------------------------------------------------- PickAxe Break
        $pickaxebreak = rand(1, 50); // pickaxe break 1/50
        if ($pickaxebreak == 1) {
            if ($bestpick == 'mithil') {
                $results = $link->query("UPDATE $user SET mithrilpickaxe = mithrilpickaxe - 1");
            }
            if ($bestpick == 'steel') {
                $results = $link->query("UPDATE $user SET steelpickaxe = steelpickaxe - 1");
            }
            if ($bestpick == 'iron') {
                $results = $link->query("UPDATE $user SET ironpickaxe = ironpickaxe - 1");
            } else {
                $results = $link->query("UPDATE $user SET pickaxe = pickaxe - 1");
            }

            echo "O NO! As you swing your $bestpickaxe it breaks apart in your hands! [ -1 $bestpick pickaxe!! ]<br/> ";
            $message="<div class='menuAction blackBG'>O NO! As you swing your $bestpickaxe it breaks apart in your hands! <br/>[ -1 $bestpick pickaxe!! ] </div>";
            include('update_feed_alt.php'); // --- update feed
        }


            $results = $link->query("UPDATE $user SET endfight = 0"); // -- reset fight
        }
    }
} // -- END MINE WHILE
