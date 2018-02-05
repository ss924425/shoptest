<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
	@foreach($list as $v)
		<ul>
			<li>{{ $v->goods_title }}</li>
			<li>{{ $v->goods_status }}</li>
			<li>{{ $v->goods_original }}</li>
			<li>{{ $v->goods_info }}</li>
			<li><a href='{{ url("goods/{$v->id}/edit") }}'>修改</a></li>
			<li><a href='javascript:doDel({{ $v->id }})'>删除</a></li>
		</ul>
	@endforeach	
	</div>
</body>
</html>