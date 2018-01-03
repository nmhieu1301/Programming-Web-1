<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Trang chủ</title>
		<!-- Required meta tags -->
    <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.php">Trang chủ</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh sách các sản phẩm<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Tất cả sản phẩm</a></li>
						<li><a href="#">Danh sách sản phẩm mới nhất</a></li>
						<li><a href="#">Danh sách sản phẩm bán chạy</a></li>
						<li><a href="#">Danh sách sản phẩm được xem nhiều nhất</a></li>
					</ul>
				</li>
				<li><a href="#">Danh sách nhà sản xuất</a></li>
				<form class="navbar-form navbar-left" action="">
					<div class="form-group" >
						<input type="text" class="form-control" placeholder="Search" >
						<button type="submit" class="btn btn-default">Tìm kiếm</button>
					</div>
				</form>
			 </ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		 </div>
		
	</nav>
</body>
</html>

