
<!doctype html>
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/png"  sizes="32x32"href="icon.png">
<title>EatRev</title>
<style>
body {
  background: url(bg.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
    margin: 0px 0px 0px 8px;
}

.shadowfilter {
	-webkit-filter: drop-shadow(0px 0px 8px rgba(255,255,255,0.8));
	-webkit-transition: all 0.5s linear;
	-o-transition: all 0.5s linear;
	transition: all 0.5s linear;

}.shadowfilter:hover {
	-webkit-filter: drop-shadow(0px 0px 8px rgba(255, 255, 0, 0.8));
}
.header{
  margin: 0;
  padding: 0;
  background-color: rgba(0,0,0,0.3);
}
.header button{
  background:  transparent;
    border: 2px solid white;
    border-style: none none none solid;
    color: #ffb311;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    text-shadow: 2px 2px #000000;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
    float: right;
  margin-top: 20px;
}
.header button:hover {
    background-color: #aeaeae;
}
.content{
  background: rgba(255, 255, 255, 0.8) fixed;
  width: 100%;
  height: 100%;
  margin: 5;
}
iframe{
  border: 0;
  width: 500px;
}
input{
  height: 20px;
  border: 1px solid #ffb311;
  border-radius: 5px;

}
.button{
  background: #ffb311;
  color: #0000ff;
  margin-left: 450px ;
  cursor: pointer;
}
.button:hover{
  background: #aeaeae;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#description{

  border: 1px solid #ffb311;
  border-radius: 5px;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<div class="header">
<a href="index.html"><img class="shadowfilter" src="logoe.png" alt="logo" height="100px" width="100px" /> </a>
  <a href="aboutus.html"><button class="button1">About Us</button></a>
<a href="trail.php"><button class="button2">Become A Chef</button></a>
<a href="index.html"><button class="button3">Home</button></a>
</div>
<div class="content">
<form method="post" enctype="multipart/form-data">
<br />
<h1 style="color: #0000ff">SIGNUP FOR CHEF</h1>
<h3 style="color: #0000ff" for="name">What's Your name, chef ?
<input type="text" name="name" id="name" style="font-size:15px;"></h3>
<h3 style="color: #0000ff" for="email">Email Address ?
<input type="text" name="email" id="email" style="font-size:15px;"></h3>
<h3 style="color: #0000ff" for="number">Contact Number ?
<input type="text" name="number" id="number" style="font-size:15px;"></h3>
<h3 style="color: #0000ff" for="foodtype">Select food images to upload:<br />
<input type="file" name="image" /><br /> <br />
<input type="submit" name="sumit" value="upload" /><br />
</form>
<?php
if(isset($_POST['sumit']))
{
if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
{
echo "please select";
}
else{
$image= addslashes($_FILES['image']['tmp_name']);
$image= file_get_contents($image);
$image= base64_encode($image);
saveimage($name,$image);
}
}
displayimage();
function saveimage($name,$image)
{
$conn = mysqli_connect('localhost', 'eatrev', 'youthrocker', 'EatRev');
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn,$_POST['number']);
  $sql="insert into images (name,image,email,number) values ('$name','$image','$email','$number')";
  $result= mysqli_query($conn, $sql);
}
function displayimage($name,$image)
{
$conn = mysqli_connect('localhost', 'eatrev', 'youthrocker', 'EatRev');
  $sql="select * from images";
  $result= mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
  echo '<img height="100" width="100" src="data:image;base64,'.$row[2].'">';
}
mysqli_close($conn);
}
?>
<input type="submit" class="button" value="REQUEST" style="font-size: 15px; width: 120px; height: 40px;" >
</div>
</body>
</html>
