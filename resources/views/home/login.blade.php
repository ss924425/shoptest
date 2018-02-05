@extends('home.parent')
@section('content')

<!--banner-->
<div class="banner-top">
    <div class="container">
        <img src="{{ asset('homes/images/logo1.png') }}">
    </div>
</div>
<!--login-->
<div class="container">
        <div class="login">
            <div class="col-md-3"></div>
            <form>
            <div class="col-md-6 login-do">
                <div class="login-mail">
                    <input type="text" placeholder="请输入用户名" name='name' required="" autofocus>
                    <i  class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="请输入密码" name='pass' required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <center>
                    <label class="hvr-skew-backward" style="width:64px;height:38px;">
                        <input type="submit" value="登录" >
                    </label>
                    <a href="register.html" class=" hvr-skew-backward">注册</a>
            </div>
            </center>
            <div class="clearfix"> </div>
            </form>
        </div>

</div>

<!--//login-->

            <!--brand-->
        <div class="container">
            <div class="brand">
                <div class="col-md-3 brand-grid">
                    <img src="images/ic.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic1.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic2.png" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="images/ic3.png" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
            <!--//brand-->
            </div>
            
        </div>
    <!--//content-->

@endsection
    