@extends('seller.parent')
@section('content')
<script src="{{ asset('admins/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('layer/layer.js') }}" type="text/javascript"></script>
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
			<form action="{{ url('seller/goods') }}" id="art_form" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
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
				<input type="hidden" name="sales_volume" value="0">
				<input type="hidden" name="number_of_comments" value="0">
				<input type="hidden" name="cargo_original" value="0">
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
				    <input type="hidden" name="cargo_cover" id="art_thumb" value="{{ old('art_thumb') }}">
			        <input type="file" name="file" id="cargo_original" style="position:absolute;height:200px;weight:200px;opacity:0;">
			        <p><img src="{{ asset('/sellers/images/gallery/image-1.jpg')}}" alt="" id="img1" style="width:200px"></p>
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

				<!-- <script>
				    function changePic() {
				        var reads= new FileReader();
				        f=document.getElementById('cargo_original').files[0];
				        reads.readAsDataURL(f);
				        reads.onload=function (e) {
				            document.getElementById('img1').src=this.result;
				        };
				    }
				</script> -->
			</form>
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        $("#cargo_original").change(function (){ 
            uploadImage();
        });
    });
    function uploadImage() {
        var imgPath = $("#cargo_original").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }
        var formData = new FormData($( "#art_form" )[0]);
        console.log(formData);
        $.ajax({
            type: "post",
            url: '{{ url("/seller/goods/pic") }}',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                  // 菊花转转图
                  // $('#img1').attr('src', 'http://img.lanrentuku.com/img/allimg/1212/5-121204193R0-50.gif');
                  //
                   a = layer.load();
              },
            success: function(data) {
                layer.close(a);
                // alert(data);
                $('#img1').attr('src', 'http://p53v2ha77.bkt.clouddn.com/goods/'+data);

              $('#art_thumb').val(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            	alert(errorThrown);
                alert("上传失败，请检查网络后重试");
                $('#img1').attr('src','1.jpg');
            }
        });
    }
</script>
@endsection