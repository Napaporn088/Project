<!DOCTYPE html>
<html>
<head>
	<title>เข้าสู่ระบบ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		body{
			background-image: url(image/university.jpg); 
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			-o-background-size:100%,auto;
			-moz-background-size:100%,auto;
			-webkit-background-size:100%,auto;
			background-size: 100%,auto;
		}
		.test{
			width: 470px;
			height: 270px;
			background-color: rgba(255,255,255,0.5);
			margin: 0 auto;
			margin-top: 170px;
			padding-top: 10px;
			padding-left:5px;
			border-radius: 25px;
			box-shadow: inset -5px -5px rgba(255,255,255,0.5);
			font-size: 13px;

		}
	</style>
</head>
<body>

<center><div class="test">
	<h2><font color=" #ff3300"><font face="Itim"> เข้าสู่ระบบ / Sign In</h2></font></font><br>

  <form action="loing_test.php" method="POST" class="form-horizontal">
 
    <div class="input-group  col-sm-9 " >

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <div >
      <input id="Username" type="text" class="form-control" name="Username" placeholder="Username"></div>
    </div><br>
    <div class="input-group  col-sm-9">
      <span class="input-group-addon"><i class="	glyphicon glyphicon-asterisk"></i></span>
      <input id="Password" type="Password" class="form-control" name="Password" placeholder="Password"></div><br>

    <div >
	<div class="col-sm-offset-2 col-sm-8"><input type="submit" name="submit" value="ยืนยัน" class="btn btn-primary"></div>
  </form></center>
</div>

</body>
</html>