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
			<form action="{{ url('seller/goods') }}" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
			{{ csrf_field() }}
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
						<input type="text" name="cargo_name" id="form-field-1" placeholder="请输入商品名称" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品价格</label>

					<div class="col-sm-6">
						<input type="text" name="cargo_price" id="form-field-1" placeholder="请输入商品价格" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品图片</label>
					<div class="col-sm-9">
				    <input type="file" name="cargo_original" >
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品简介</label>
					<div class="col-sm-4">
				    <textarea class="form-control" name="cargo_info" id="form-field-8" placeholder="请输入简介"></textarea>
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品库存</label>
					<div class="col-sm-4">
				    <input type="text" name="inventory" class="input-mini" id="" />
				    </div>				
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商品状态</label>
					<div class="col-sm-9">
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio1" value="1"> 
						  上架
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio2" value="2"> 下架
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cargo_status" id="inlineRadio2" value="3"> 入库
						</label>

					</div>
				</div>
				<div class="form-group">
					<center>
					<input type="submit" class="btn btn-info" value="添加">
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