@extends('seller.parent')
@section('content')
<div class="page-content">
	<div class="page-header">
		<h1>
			添加用户
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">用户昵称</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="请输入用户名" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="space-4"></div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2">用户密码</label>

					<div class="col-sm-9">
						<input type="password" id="form-field-2" placeholder="请输入密码" class="col-xs-10 col-sm-5" />
						<span class="help-inline col-xs-12 col-sm-7">
							<span class="middle">请输入8-16位密码</span>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2">确认密码</label>

					<div class="col-sm-9">
						<input type="password" id="form-field-2" placeholder="请确认密码" class="col-xs-10 col-sm-5" />
					</div>
				</div>

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
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">性别</label>
					<div class="col-sm-9">
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 女
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