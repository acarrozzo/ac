
<style>
body {
background:#000;
color:#ccc;
}
</style>

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





</head>

<body>
  <h1>AC CORE</h1>


  <!-- TIME BOX! -->
  <!-- TIME BOX! -->
  <!-- TIME BOX! -->
  <!-- TIME BOX! -->
  <!-- TIME BOX! -->
  <!-- TIME BOX! -->

  <p>LAST ACTION: <span id="datetime"></span>
  </p>
  <script>
  var dt = new Date();
  document.getElementById("datetime").innerHTML = dt.toLocaleString();
  </script>
  <p>CURRENT TIME: <span id="MyClockDisplay" class="clock" onload="showTime()"></span></p>


  <script>
  function showTime(){
  var date = new Date();
  var h = date.getHours(); // 0 - 23
  var m = date.getMinutes(); // 0 - 59
  var s = date.getSeconds(); // 0 - 59
  var session = "AM";
  if(h == 0){
      h = 12;
  }
  if(h > 12){
      h = h - 12;
      session = "PM";
  }
  h = (h < 10) ? "0" + h : h;
  m = (m < 10) ? "0" + m : m;
  s = (s < 10) ? "0" + s : s;
  var time = h + ":" + m + ":" + s + " " + session;
  document.getElementById("MyClockDisplay").innerText = time;
  document.getElementById("MyClockDisplay").textContent = time;
  setTimeout(showTime, 1000);
  }
  function refreshData()
  {
  x = 5;  // 5 Seconds
  //  console.log('xxxxxxx');
  // Do your thing here
  setTimeout(refreshData, x*100);
  }
  refreshData(); // execute function
  showTime();
  </script>



  <?
  //echo 'BBBBBBBBBBBbBBBBBBBBBBBb<br/>';
  //   	$message="<i>x</i></br>";
  //.$_SESSION['desc030'];
  //		include ('update_feed_alt.php'); // --- update feed
    //	$results = $link->query("UPDATE $user SET bluebalm = '400'"); // -- room change
      ?>

      <!-- // END TIME BOX! -->
      <!-- // END TIME BOX! -->
      <!-- // END TIME BOX! -->
      <!-- // END TIME BOX! -->
      <!-- // END TIME BOX! -->







<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/app.min.js"></script>

</body>
</html>
