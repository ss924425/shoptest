<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action='{{ url("goods/$v->id") }}' method='post' enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
			分类：
				<select name="category_id" id="">
					<option value="1" {{ $list-> == 1?"checked":'' }}>男装</option>
					<option value="2" {{ $user->sex == 2?"checked":'' }}>女装</option>
				</select>
			<br><br>
			商品标题：<input type="text" name="goods_title" value="{{ $v->goods_title }}"><br><br>
			商品状态：<input type="text" name="goods_status" value="{{ $v->goods_status }}"><br><br>
			商品图片：<input type="file" name="goods_original" value="{{ $v->goods_original }}"><br><br>
			商品详情：<textarea name="goods_info" value='{{ $v->goods_info }}' cols="30" rows="10"></textarea>
			<br><br>
			<input type="submit" value="修改">
		</form>
	</center>	
</body>
</html>