<head>
<!--- Hey, look at you viewing source. -ac ----->
<?php
$page = basename($_SERVER[ 'PHP_SELF' ]);
//if ($page=='index.php') { echo "http://acarrozzo.com/2018/img/intro/yellowflower.jpg"; }
if ($page == 'index.php') {
    //echo "https://images.unsplash.com/photo-1499696562547-dbe51006e1bb?auto=format&fit=crop&w=1000&q=80";
    echo "<title>Anthony Carrozzo | Designer & Developer </title>";
    $name = "Home";
}
if ($page == 'design.php') {
    echo "<title>AC: Design </title>";
    $name = "Design";
}
if ($page == 'code.php') {
    echo "<title>AC: Code </title>";
    $name = "Code";
}
if ($page == 'photo.php') {
    //	echo "http://acarrozzo.com/img/photo/macro/IMG_3875.JPG";
    echo "<title>AC: Photo </title>";
    $name = "Photo";
}
if ($page == 'music.php') {
    echo "<title>AC: Music </title>";
    $name = "Music";
}
if ($page == 'word.php') {
    echo "<title>AC: Word </title>";
    $name = "Word";
}
if ($page == 'game.php') {
    echo "<title>AC: Game </title>";
    $name = "Game";
}
if ($page == 'about.php') {
    echo "<title>AC: About </title>";
    $name = "About";
}
?>
<meta name="description" content="Anthony Carrozzo is a Graphic Designer & Web Developer from New York with a focus on clean UI & UX. He specializes in visual design, web development, modern coding, branding, marketing, photography, music production, writing & game creation."/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="ac_favicon.ico">

<!--- MY CSS ----->
<link rel="stylesheet" href="css/core.min.css">
<link rel="stylesheet" href="css/style.min.css">
<!--- PHOTO GALLERY CSS ----->
<link rel="stylesheet" href="css/slip/slippry.css">
<!--- FONT CSS ----->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700i">
<!--<link rel="stylesheet" href="https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/icons.css" >-->
<!--- AC FONT CSS INLINE SINCE fontastic wasn't loading' ----->
<style>
@charset "UTF-8";@font-face{font-family:lg-font;src:url(https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/fonts/1499028174.eot);src:url(https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/fonts/1499028174.eot?#iefix) format("embedded-opentype"),url(https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/fonts/1499028174.woff) format("woff"),url(https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/fonts/1499028174.ttf) format("truetype"),url(https://file.myfontastic.com/TCGhgaeZJzPgzSiUf3dwjZ/fonts/1499028174.svg#1499028174) format("svg");font-weight:400;font-style:normal}[data-icon]:before{font-family:lg-font!important;content:attr(data-icon);font-style:normal!important;font-weight:400!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}[class*=" icon-"]:before,[class^=icon-]:before{font-family:lg-font!important;font-style:normal!important;font-weight:400!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-anvil:before{content:"\e000"}.icon-battle-gear:before{content:"\e001"}.icon-book:before{content:"\e002"}.icon-bow-arrow:before{content:"\e003"}.icon-chest:before{content:"\e004"}.icon-crossed-swords:before{content:"\e005"}.icon-crowned-skull:before{content:"\e006"}.icon-fireball:before{content:"\e007"}.icon-full-stats:before{content:"\e008"}.icon-gem:before{content:"\e009"}.icon-key:before{content:"\e00a"}.icon-medal:before{content:"\e00b"}.icon-pouch:before{content:"\e00c"}.icon-run:before{content:"\e00d"}.icon-shield:before{content:"\e00e"}.icon-sign:before{content:"\e00f"}.icon-sit:before{content:"\e010"}.icon-skull:before{content:"\e011"}.icon-sword:before{content:"\e012"}.icon-sword-shield:before{content:"\e013"}.icon-teleport:before{content:"\e014"}.icon-walk:before{content:"\e016"}.icon-throwing-dagger:before{content:"\e018"}.icon-blueberry:before{content:"\e019"}.icon-redberry:before{content:"\e01a"}.icon-tent:before{content:"\e01b"}.icon-cave:before{content:"\e01c"}.icon-stand:before{content:"\e01d"}.icon-compass:before{content:"\e01e"}.icon-crab:before{content:"\e01f"}.icon-seagull:before{content:"\e020"}.icon-scorpion3:before{content:"\e021"}.icon-scorpion2:before{content:"\e022"}.icon-scorpion:before{content:"\e023"}.icon-rat2:before{content:"\e025"}.icon-rat:before{content:"\e026"}.icon-spider2:before{content:"\e027"}.icon-spider:before{content:"\e028"}.icon-waterfall:before{content:"\e029"}.icon-sun:before{content:"\e024"}.icon-gator:before{content:"\e02b"}.icon-checkbox-uncheck:before{content:"\e02d"}.icon-checkbox-check1:before{content:"\e02c"}.icon-bat:before{content:"\e02e"}.icon-salamander:before{content:"\e02f"}.icon-goblin:before{content:"\e030"}.icon-goblinbandit:before{content:"\e031"}.icon-goblinchief:before{content:"\e032"}.icon-hatchet:before{content:"\e033"}.icon-blueberry-1:before{content:"\e02a"}.icon-tree:before{content:"\e034"}.icon-ac-icon-a:before{content:"\e035"}.icon-ac-icon-ac:before{content:"\e036"}.icon-ac-icon-alphacentauri:before{content:"\e037"}.icon-ac-icon-blocks:before{content:"\e038"}.icon-ac-icon-caravaggiosrevenge:before{content:"\e039"}.icon-ac-icon-firsthuman:before{content:"\e03a"}.icon-ac-icon-saintanthony:before{content:"\e03b"}.icon-ac-icon-tonycalamari:before{content:"\e03c"}.icon-trophy:before{content:"\e015"}.icon-world:before{content:"\e017"}.icon-backpack:before{content:"\e03d"}.icon-backpack-1:before{content:"\e03e"}.icon-dragon:before{content:"\e03f"}.icon-island:before{content:"\e040"}.icon-village:before{content:"\e041"}.icon-wizard:before{content:"\e042"}.icon-wood:before{content:"\e043"}.icon-cow:before{content:"\e045"}.icon-hillogre:before{content:"\e046"}.icon-hill:before{content:"\e044"}.icon-goblin-head:before{content:"\e047"}.icon-orc-head:before{content:"\e048"}.icon-ogre-head:before{content:"\e049"}
</style>
</head>
