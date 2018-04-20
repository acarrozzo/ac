<?php
//$page = basename( $_SERVER[ 'PHP_SELF' ] );
echo '<nav style="background-image:url(';
//if ($page=='index.php') { echo "http://acarrozzo.com/2018/img/intro/yellowflower.jpg"; }
if ( $page == 'index.php' ) {
	//echo "https://images.unsplash.com/photo-1499696562547-dbe51006e1bb?auto=format&fit=crop&w=1000&q=80"; 
	echo "img/bg/flag_bg.jpg";
	//$name = "Home";
}
if ( $page == 'design.php' ) {
	echo "img/bg/architecture_bg.jpg"; 
	//$name = "Design";
}
if ( $page == 'code.php' ) {
	echo "img/bg/snake_bg.jpg"; 
	//$name = "Code";
}
if ( $page == 'photo.php' ) {
//	echo "http://acarrozzo.com/img/photo/macro/IMG_3875.JPG";
	echo "img/bg/eye_bg.jpg"; 
	//$name = "Photo";
}
if ( $page == 'music.php' ) {
	echo "img/bg/guitar_bg.jpg"; 
	//$name = "Music";
}
if ( $page == 'word.php' ) {
	echo "img/bg/book_bg.jpg"; 
	//$name = "Word";
}
if ( $page == 'game.php' ) {
	echo "img/bg/chess_bg.jpg"; 
	//$name = "Game";
}
echo ')">';
?>

<h1>Anthony Carrozzo : <?php echo $name;?></h1>
<?php  // RANDOM ICON
$icon = rand( 1, 8 ); 
	 if ($icon==1) {$icon="icon-ac-icon-a";}
else if ($icon==2) {$icon="icon-ac-icon-ac";}
else if ($icon==3) {$icon="icon-ac-icon-alphacentauri";}
else if ($icon==4) {$icon="icon-ac-icon-blocks";}
else if ($icon==5) {$icon="icon-ac-icon-caravaggiosrevenge";}
else if ($icon==6) {$icon="icon-ac-icon-firsthuman";}
else if ($icon==7) {$icon="icon-ac-icon-saintanthony";}
else if ($icon==8) {$icon="icon-ac-icon-tonycalamari";}
echo '<i class="topIcon menuBtn theToggle '.$icon.'" alt="acarrozzo icon"></i>'; 
?>
<ul>
<?php 
echo '<li><a '; if ($page=='index.php') {echo 'class="active"';} echo 'href="/">Home</a></li>'; 
echo '<li><a '; if ($page=='design.php') {echo 'class="active"';} echo 'href="design.php">Design</a></li>'; 
echo '<li><a '; if ($page=='code.php') {echo 'class="active"';} echo 'href="code.php">Code</a></li>'; 
echo '<li><a '; if ($page=='photo.php') {echo 'class="active"';} echo 'href="photo.php">Photo</a></li>'; 
echo '<li><a '; if ($page=='music.php') {echo 'class="active"';} echo 'href="music.php">Music</a></li>'; 
echo '<li><a '; if ($page=='word.php') {echo 'class="active"';} echo 'href="word.php">Word</a></li>'; 
echo '<li><a '; if ($page=='game.php') {echo 'class="active"';} echo 'href="game.php">Game</a></li>'; 
?>
</ul>
</nav>
