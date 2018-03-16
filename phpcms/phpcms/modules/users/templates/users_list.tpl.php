<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./statics/bc/css/bootstrap.min.css">
	<script scr='./statics/bs/js/jquery.js'></script>
	<script scr='./statics/bs/js/bootstrap.min.js'></script>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<a href="" class='btn btn-success'>添加</a>
			<a href="" class='btn btn-info'>浏览</a>
		</div>
	</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<table class='table table-hover table-bordered'>
					<tr>
						<th>ID</th>
						<th>姓名</th>
						<th>年龄</th>
						<th>班级</th>
						<th>操作</th>
					</tr>
					<tr>
						<?php foreach($res as $k=>$v): ?>
						<td><?=$v['id']?></td>
						<td><?=$v['uname']?></td>
						<td><?=$v['age']?></td>
						<td><?=$v['classid']?></td>
						<td><a href=""class='btn btn-info'>修改</a></td>
						<td><a href=""class='btn btn-danger'>删除</a></td>
					</tr>
				<?php endforeach?>
				</table>
			</div>
		</div>
	</div>
	<script>alert($)</script>
</body>
</html>