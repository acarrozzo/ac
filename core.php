


<?php // include('head.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<!DOCTYPE html>-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>AC CORE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content = "telephone=no">


<link rel="stylesheet" href="css/core.min.css">



</head>

<body>
<main>
<div class="core-machine">
<?php
  echo '<div class="icon red hexagon">'.file_get_contents("img/svg/hexagon.svg").'</div>';
?>
  <h1>AC CORE</h1>
  <p>LAST REFRESH: <span id="datetime"></span></p>
  <p>CURRENT TIME: <span id="MyClockDisplay" class="clock" onload="showTime()"></span></p>
  <a href="javascript:void(0)" data-clear-storage>Clear Local Storage</a>

</div> <!-- END CORE MACHINE -->

<section>
  <h2>Headline H2</h2>
  <p>Will virtues snare play love strong depths eternal-return love moral zarathustra ultimate zarathustra. Enlightenment grandeur christianity ubermensch overcome noble decieve ubermensch burying joy merciful holiest justice. Contradict transvaluation snare superiority.</p>
  <h3>Headline H3</h3>
    <p>Will virtues snare play love strong depths eternal-return love moral zarathustra ultimate zarathustra. Enlightenment grandeur christianity ubermensch overcome noble decieve ubermensch burying joy merciful holiest justice. Contradict transvaluation snare superiority.</p>
  <h4>Headline H4</h4>
    <p>Will virtues snare play love strong depths eternal-return love moral zarathustra ultimate zarathustra. Enlightenment grandeur christianity ubermensch overcome noble decieve ubermensch burying joy merciful holiest justice. Contradict transvaluation snare superiority.</p>
  <h5>Headline H5</h5>
    <p>Will virtues snare play love strong depths eternal-return love moral zarathustra ultimate zarathustra. Enlightenment grandeur christianity ubermensch overcome noble decieve ubermensch burying joy merciful holiest justice. Contradict transvaluation snare superiority.</p>
  <h6>Headline H6</h6>
  <p> Moral intentions dead hatred gains love revaluation convictions ideal spirit battle god aversion pinnacle. Passion ubermensch derive evil joy christian strong madness ubermensch chaos selfish decieve. Suicide virtues sea abstract battle self ultimate moral ocean victorious christian victorious decrepit. Decrepit moral justice salvation insofar. Aversion war marvelous salvation philosophy gains mountains truth marvelous justice zarathustra reason derive. Oneself ultimate pinnacle ocean marvelous of zarathustra madness.</p>
  <p>Faith society <a href="/">god derive pious</a>. </p>
    <div class="flex">
  <strong class="red">Red</strong>
  <strong class="green">Green</strong>
  <strong class="blue">Blue</strong>
  <strong class="gold">Gold</strong>
  <strong class="purple">Purple</strong>
</div>

<div class="flex">
  <strong class="test-box redBG"> Red </strong>
  <strong class="test-box greenBG"> Green </strong>
  <strong class="test-box blueBG"> Blue </strong>
  <strong class="test-box goldBG"> Gold </strong>
  <strong class="test-box purpleBG"> Purple </strong>
</div>

<div class="flex">
  <strong class="color0 swap">Color0 </strong>
  <strong class="color1">Color1 </strong>
  <strong class="color2">Color2 </strong>
  <strong class="color3">Color3 </strong>
  <strong class="color4">Color4 </strong>
  <strong class="color5">Color5 </strong>
  <strong class="color6">Color6 </strong>
  <strong class="color7">Color7 </strong>
  <strong class="color8">Color8 </strong>
  <strong class="color9">Color9 </strong>
  <strong class="color10">Color10 </strong>
</div>

<div class="flex">
  <strong class="BG0 color10">BG0</strong>
  <strong class="BG1 color9">BG1</strong>
  <strong class="BG2 color8">BG2</strong>
  <strong class="BG3">BG3</strong>
  <strong class="BG4">BG4</strong>
  <strong class="BG5">BG5</strong>
  <strong class="BG6">BG6</strong>
  <strong class="BG7">BG7</strong>
  <strong class="BG8 color2">BG8</strong>
  <strong class="BG9 color1">BG9</strong>
  <strong class="BG10 color0">BG10</strong>
</div>
</section>

<footer>
<h3>Footer</h3>
<p>This is the footer</p>
</footer>
</main>
<?php include 'inc/corebar.php'; ?>
<?php include 'inc/js.php'; ?>
</body>
</html>
