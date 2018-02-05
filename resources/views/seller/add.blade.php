<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		@if (session('msg'))
			<script>
				alert("{{ session('msg') }}");
			</script>
		@endif
		<hr>
		<form action="{{ url('goods') }}" method='post' enctype="multipart/form-data">
		{{ csrf_field() }}
			分类：
				<select name="category_id" id="">
					<option value="1">男装</option>
					<option value="2">女装</option>
				</select>
			<br><br>
			商品标题：<input type="text" name="goods_title" id=""><br><br>
			商品状态：<input type="text" name="goods_status" id=""><br><br>
			商品图片：<input type="file" name="goods_original" id=""><br><br>
			商品详情：<textarea name="goods_info" id="" cols="30" rows="10"></textarea>
			<br><br>
			<input type="submit" value="提交">
		</form>
	</center>	
</body>
</html>