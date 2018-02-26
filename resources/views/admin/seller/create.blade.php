@extends('admin.parent')
@section('content')
<div class="page-content">
	<div class="page-header">
		<h1>
			添加商家
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">商家昵称</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="请输入用户名" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">店铺名称</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="请输入店铺" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="space-4"></div>

				
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">真实姓名</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="请输入真实姓名" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">邮箱</label>

					<div class="col-sm-9">
						<input type="email" id="form-field-1" placeholder="请输入邮箱" class="col-xs-10 col-sm-5" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">联系电话</label>

					<div class="col-sm-9">
						<input type="email" id="form-field-1" placeholder="请输入电话" class="col-xs-10 col-sm-5" />
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