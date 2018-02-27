@extends('seller.parent')
@section('content')
<div class="page-content">
	<div class="page-header">
		<h1>
			添加商品
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			@if(session('mes'))
				<script>
					alert("{{ session('mes') }}");
				</script>
			@endif
			
			<form action='{{ url("seller/goods/{$goods->id}") }}' method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
				<div class="form-group ">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品类别</label>

					<div class="col-sm-2">
						<select class="form-control" id="form-field-select-1">
							<option value="">--请选择--</option>
							<option value="" >男装</option>
							<option value="" >女装</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品名称</label>

					<div class="col-sm-6">
						<input type="text" name="cargo_name" id="form-field-1" placeholder="{{ $goods->cargo_name }}" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品价格</label>

					<div class="col-sm-6">
						<input type="text" name="cargo_price" id="form-field-1" placeholder="{{ $goods->cargo_price }}" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品图片</label>
					<div class="col-sm-9">
				    <input type="file" name="cargo_original" multiple>
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品简介</label>
					<div class="col-sm-4">
				    <textarea class="form-control" name="cargo_info" id="form-field-8" placeholder="{{ $goods->cargo_info }}"></textarea>
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品库存</label>
					<div class="col-sm-4">
				    <input type="text" name="inventory" value="{{ $goods->inventory }}" class="input-mini" id="" />
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品状态</label>
					<div class="col-sm-9">
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio2" value="2" {{ $goods->cargo_status == 1?"checked":'' }}> 上架
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio2" value="2" {{ $goods->cargo_status == 2?"checked":'' }}> 待售
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio2" value="2" {{ $goods->cargo_status == 3?"checked":'' }}> 下架
						</label>

					</div>
				</div>
				<div class="form-group">
					<center>
					<input type="submit" class="btn btn-info" value="修改">
					<input type="reset" class="btn btn-default" value="取消">
					</center>
				</div>
			</form>
			
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
@endsection