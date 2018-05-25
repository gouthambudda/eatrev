
<!doctype html>
<head>
<meta charset="UTF-8">
<title>EatRev</title>
<style>
td{
  background-color: #ffb326;
  font-style: bold;
  font-family: fantasy;
  text-shadow: 1px 1px #ffffff;
  box-shadow: 0px 0px 10px #000000;
  -webkit-box-shadow: 0px 0px 10px #000000;
  -moz-box-shadow: 0px 0px 10px #000000;
}
a{
  text-decoration: none;
}
p{
margin: 0;
}
</style>
</head>
<body  style="background-color: rgba(66, 134, 244, 0.5)">
<table width="500" border="0" cellpadding="5" cellspacing="10">
  <tr>
  <td align="center" valign="center">
  <a href="spicenflavor.html"><img src="spicenflavor.jpg" alt="description here" height="200px" width="240px" />
  <br />
    <div class="rest-rating" id ="2">
  <p>SPICE N FLAVOR
      <p>INDIAN CUISINE &nbsp &nbsp<span style="font-size:100%;color:red;">&starf;</span> <?php require'avgsnfrating.php' ?>/5</div>
  </a>
  </td>
  <td align="center" valign="center">
  <a href="cow.html"><img src="cow.jpg" alt="description here" height="200px" width="240px"/>
  <br />
    <div class="rest-rating">
  <p>CURRY ON WHEELS
      <p>FOOD TRUCK &nbsp &nbsp<span style="font-size:100%;color:red;">&starf;</span> <?php require'avgcowrating.php' ?>/5</div>
  </a>
  </td>
  <td align="center" valign="center">
  <a href="tnb.html"><img src="thali.jpeg" alt="description here" height="200px" width="240px"/>
  <br />
    <div class="rest-rating">
  <p>THALI N BIRYANI
      <p>FOOD TRUCK &nbsp &nbsp<span style="font-size:100%;color:red;">&starf;</span> <?php require'avgtnbrating.php' ?>/5</div>
  </a>
  </td>
  </tr>
  </table>
</body>
</html>
