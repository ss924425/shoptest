@extends('home.parent')
@section('content')

<!--banner-->
<div class="banner-top">
    <div class="container">
        <h1>注册</h1>
    </div>
</div>
<!--login-->
<div class="container">
        <div class="login">
<!--             @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
            @if(session('msg'))
                <script>
                    alert('{{ session("msg") }}')
                </script>
            @endif
            <form action='{{ url("/register/doRegister") }}' method='post'>
                {{ csrf_field() }}
                <div class="col-md-3"></div>
                
            <div class="col-md-6 login-do">
            <div class="login-mail">
                    <input type="text" name="name" placeholder="请输入用户名" required="" autofocus>
                    <i  class="glyphicon glyphicon-user"></i>
                </div>
                <div class="login-mail">
                    <input type="text" name='tel' placeholder="电话" required="">
                    <i  class="glyphicon glyphicon-phone"></i>
                </div>
                <div class="pull-right">
                <span onclick="sendCode()" class="btn btn-default">获取验证码</span>
                </div>
                <div style="width: 200px;">
                    
                <div class="login-mail">
                    <input type="text" name="code" placeholder="请输入验证码" required="">
                </div>
                </div>
                <div class="login-mail">
                    <input type="text" name="email" placeholder="邮箱" required="">
                    <i  class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" name='password' placeholder="输入密码" required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <div class="login-mail">
                    <input type="password" name='repass' placeholder="确认密码" required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                   <center>
                    <label class="hvr-skew-backward" style="width:64px;height:38px;">
                        <input type="submit" value="注册" >
                    </label>
                    <a href="{{ url('register') }}" class=" hvr-skew-backward">重置</a>
            </div>
            </center>
            
            </div>
            
            <div class="clearfix"> </div>
            </form>
        </div>

</div>

<!--//login-->

            <!--brand-->
        <div class="container">
            <div class="brand">
                <div class="col-md-3 brand-grid">
                    <img src="{{asset('homes/images/ic.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{asset('homes/images/ic1.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{asset('homes/images/ic2.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{asset('homes/images/ic3.png') }}" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
            <!--//brand-->
            </div>
            
        </div>
    <script type="text/javascript">
        function sendCode()
        {
            var tel = $('[name="tel"]').val();
            $.post('{{ url("register/send") }}',{'_token':'{{ csrf_token() }}','tel':tel},function(data){
                alert('验证码已发送');
            })
        }
    </script> 
@endsection
    