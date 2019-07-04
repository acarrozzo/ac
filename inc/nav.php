<?php
//$page = basename( $_SERVER[ 'PHP_SELF' ] );
echo '<nav style="background-image:url(';
//if ($page=='index.php') { echo "http://acarrozzo.com/2018/img/intro/yellowflower.jpg"; }
if ($page == 'index.php') {
    echo "img/bg/flag_bg.jpg";
    $icon="icon-ac-icon-a";
}
if ($page == 'design.php') {
    echo "img/bg/architecture_bg.jpg";
    $icon="icon-ac-icon-a";
    $icon="icon-ac-icon-ac";
}
if ($page == 'code.php') {
    echo "img/bg/snake_bg.jpg";
    $icon="icon-ac-icon-tonycalamari";
}
if ($page == 'photo.php') {
    echo "img/bg/eye_bg.jpg";
    $icon="icon-ac-icon-alphacentauri";
}
if ($page == 'music.php') {
    echo "img/bg/guitar_bg.jpg";
    $icon="icon-ac-icon-caravaggiosrevenge";
}
//if ($page == 'word.php') {
//    echo "img/bg/book_bg.jpg";
//    $icon="icon-ac-icon-saintanthony";
//}
if ($page == 'game.php') {
    echo "img/bg/chess_bg.jpg";
    $icon="icon-ac-icon-firsthuman";
}
if ($page == 'about.php') {
    echo "img/bg/book_bg.jpg";
    $icon="icon-ac-icon-saintanthony";
}
echo ')">';
?>

<h1>Anthony Carrozzo : <?php echo $name;?></h1>
<?php  // RANDOM ICON
/*
$icon = rand( 1, 8 );
     if ($icon==1) {$icon="icon-ac-icon-a";}
else if ($icon==2) {$icon="icon-ac-icon-ac";}
else if ($icon==3) {$icon="icon-ac-icon-alphacentauri";}
else if ($icon==4) {$icon="icon-ac-icon-blocks";}
else if ($icon==5) {$icon="icon-ac-icon-caravaggiosrevenge";}
else if ($icon==6) {$icon="icon-ac-icon-firsthuman";}
else if ($icon==7) {$icon="icon-ac-icon-saintanthony";}
else if ($icon==8) {$icon="icon-ac-icon-tonycalamari";}
*/
echo '<i class="topIcon menuBtn theToggle '.$icon.'" alt="acarrozzo icon"></i>';
?>
<ul>
<?php
echo '<li><a '; if ($page=='index.php') {
    echo 'class="active"';
} echo 'href="/">Home</a></li>';
echo '<li><a '; if ($page=='design.php') {
    echo 'class="active"';
} echo 'href="design.php">Design</a></li>';
echo '<li><a '; if ($page=='code.php') {
    echo 'class="active"';
} echo 'href="code.php">Code</a></li>';
echo '<li><a '; if ($page=='photo.php') {
    echo 'class="active"';
} echo 'href="photo.php">Photo</a></li>';
echo '<li><a '; if ($page=='music.php') {
    echo 'class="active"';
} echo 'href="music.php">Music</a></li>';
//echo '<li><a '; if ($page=='word.php') {echo 'class="active"';} echo 'href="word.php">Word</a></li>';
echo '<li><a '; if ($page=='game.php') {
    echo 'class="active"';
} echo 'href="game.php">Game</a></li>';
echo '<li><a '; if ($page=='about.php') {
    echo 'class="active"';
} echo 'href="about.php">About</a></li>';
?>
</ul>
</nav>
