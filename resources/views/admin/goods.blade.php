@extends('admin.parent')
@section('content')
<div class="admin-content">

    <div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加商品</strong></div>
        </div>

        <div class="am-tabs am-margin" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
              <li class="am-active"><a href="#tab1">基本信息</a></li>
            </ul>

            <form action="">
           
            <div class="col-sm-6 margin">

            <label for="select">商品分类
                <select class="form-control" id="select">
                  <option value="">--请选择--</option>
                  <option value="">男装</option>
                  <option value="">女装</option>
                  <option value="">彩妆</option>
                </select>
            </label>
            
            <label for="gname">商品名称
            <input type="text" id="gname" class="form-control" placeholder="请输入商品名">
            </label>

            <label for="goods_info">商品简介
                <textarea id="goods_info" class="form-control" rows="5" cols="30"></textarea>
            </label>

            <div class="form-group">
                <label for="exampleInputFile">商品图片
                    <input type="file" id="exampleInputFile">
                </label>
            </div>

            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 上架
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 下架
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 入库
            </label>
             
            </form>

        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default" value="提交">
            <input type="submit" class="btn btn-default" value="取消">
        </div>
            </div>
            <div class="col-md-2 column">
            </div>
        </div>

</div>
<!-- content end -->
@endsection