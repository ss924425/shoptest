@extends('seller.parent')
@section('content')
<div class="col-xs-12">
	<h3 class="header smaller lighter blue">浏览商品</h3>

	<div class="table-responsive">
		<table id="sample-table-2" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>分类</th>
					<th width="300">商品名称</th>
					<th width="200">商品详情</th>
					<th>商品价格</th>
					<th>商品状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($list as $v)
				<tr>
					<td><a href="#">{{ $v->id }}</a></td>
					<td><a href="#">{{ $v->category_id }}</a></td>
					<td>{{ $v->cargo_name}}</td>
					<td>{{ $v->cargo_info }}</td>
					<td>{{ $v->cargo_price }}</td>
					<td>
					@if($v->cargo_status == 1)
					上架
					@elseif($v->cargo_status == 2)
					待售
					@elseif($v->cargo_status == 3)
					下架
					@endif
					</td>
					<td>
						<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
							<a class="green" href='{{ url("/seller/goods/{$v->id}/edit") }}'>
								<i class="icon-pencil bigger-130"></i>
							</a>

							<a class="red" onclick = "del({{ $v->id }})" >
								<i class="icon-trash bigger-130"></i>
							</a>
						</div>

						<div class="visible-xs visible-sm hidden-md hidden-lg">
							<div class="inline position-relative">
								<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
									<i class="icon-caret-down icon-only bigger-120"></i>
								</button>

								<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
									<li>
										<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
											<span class="blue">
												<i class="icon-zoom-in bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
											<span class="green">
												<i class="icon-edit bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
											<span class="red">
												<i class="icon-trash bigger-120"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<center>
{!! $list->fragment('foo')->render() !!}
</center>
<script src="{{ asset('admins/js/jquery.min.js') }}"></script>
<script src="{{ asset('layer/layer.js') }}"></script>
<script type="">
function del(id){
  layer.confirm('您确定要删除吗',{
    btn:['确定','取消']
  },function(){
    $.post('{{ url("/seller/goods/") }}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
        if(data == 1){
          layer.msg('删除成功');
        }else{
          layer.msg('删除失败');
        }
    })
  });
}
</script>
@endsection