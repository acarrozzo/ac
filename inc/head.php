<head>
<!----- Hey, look at you viewing source. -ac ----->
<?php
$page = basename( $_SERVER[ 'PHP_SELF' ] );
//if ($page=='index.php') { echo "http://acarrozzo.com/2018/img/intro/yellowflower.jpg"; }
if ( $page == 'index.php' ) {
	//echo "https://images.unsplash.com/photo-1499696562547-dbe51006e1bb?auto=format&fit=crop&w=1000&q=80"; 
	echo "<title>Anthony Carrozzo | Designer & Developer </title>"; 
	$name = "Home";
}
if ( $page == 'design.php' ) {
	echo "<title>AC: Design </title>"; 
	$name = "Design";
}
if ( $page == 'code.php' ) {
	echo "<title>AC: Code </title>"; 
	$name = "Code";
}
if ( $page == 'photo.php' ) {
//	echo "http://acarrozzo.com/img/photo/macro/IMG_3875.JPG";
	echo "<title>AC: Photo </title>"; 
	$name = "Photo";
}
if ( $page == 'music.php' ) {
	echo "<title>AC: Music </title>"; 
	$name = "Music";
}
if ( $page == 'word.php' ) {
	echo "<title>AC: Word </title>"; 
	$name = "Word";
}
if ( $page == 'game.php' ) {
	echo "<title>AC: Game </title>"; 
	$name = "Game";
}
?>
<meta name="description" content="Anthony Carrozzo is a Graphic Designer & Web Developer from New York with a focus on clean UI & UX. He specializes in visual design, web development, modern coding, branding, marketing, photography, music production, writing & game creation."/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!----- FONT CSS ----->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700i">
<link rel="stylesheet" href="https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/icons.css" >
<!----- MY CSS ----->
<link rel="stylesheet" href="css/style.min.css">	
<!----- PHOTO GALLERY CSS ----->
<link rel="stylesheet" href="css/slip/slippry.css">
</head>
