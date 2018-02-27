@extends('home.parent')
@section('content')
    <div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        填写并核对订单信息
                    </h3>
                </div>
                <div class="panel-body" style="border-bottom: 1px solid #eee;">
                    <h5><b>收货人信息</b> <a href="">[修改]</a></h5><br>
                    <h6 style="margin-bottom: 5px;">可爱多 12345678911</h6>
                    <h6>北京市昌平区回龙观文化西路育荣教育园区</h6>
                </div>
                <div class="panel-body" style="border-bottom: 1px solid #eee;">
                    <h5><b>送货方式</b> <a href="">[修改]</a></h5><br>
                    <h6 style="margin-bottom: 5px;">普通快递送货上门</h6>
                    <h6>送货时间不限</h6>
                </div>
                <div class="panel-body" style="border-bottom: 1px solid #eee;">
                    <h5><b>支付方式</b> <a href="">[修改]</a></h5><br>
                    <h6 style="margin-bottom: 5px;">货到付款</h6>
                    
                </div>
                <div class="panel-body" style="border-bottom: 1px solid #eee;">
                    <h5><b>发票信息</b> <a href="">[修改]</a></h5><br>
                    <h6 style="margin-bottom: 5px;">个人发票</h6>
                    <h6>内容：明细</h6>
                </div>

                <div class="panel-body" style="border-bottom: 1px solid #eee;">
                    <h5><b>商品清单</b></h5><br>
                    <table>
                        <tr bgcolor="#eee">
                           <td style="color:#000; font-size: 10px;">商品</td> 
                           <td style="color:#000; font-size: 10px;">规格</td> 
                           <td style="color:#000; font-size: 10px;">价格</td> 
                           <td style="color:#000; font-size: 10px;">数量</td> 
                           <td style="color:#000; font-size: 16px;">小计</td>                     
                       </tr>
                        <tr>
                            <td style="color:#000; font-size: 10px;">1.jpg|男装</td>
                            <td style="color:#000; font-size: 10px;">￥499.00 </td>
                            <td style="color:#000; font-size: 10px;">asdf</td>
                            <td style="color:#000; font-size: 10px;">1</td>
                            <td style="color:#000; font-size: 16px;">￥499.00 </td>                        </tr>
                    </table>
                    <div class="pull-right" align="right" style="font-size: 14px;color: #333;">
                        <p>4 件商品，总商品金额： ￥5316.00 </p>
                        <p>返现： ￥240.00</p>
                        <p>运费： ￥10.00 </p>
                        <p>应付总额： ￥5076.00 </p>
                    
                    </div>
                    
                </div>
                <div class="panel-footer">
                    <div align="right">
                        应付总额：￥5076.00元
                        <button class="btn btn-primary btn-lg btn-danger">提交付款</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 column">
        </div>
    </div>
@endsection
    