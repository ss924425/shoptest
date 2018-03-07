@extends('home.parent')
@section('content')
<div class="banner">
<div class="container">
<section class="rw-wrapper">
                <h1 class="rw-sentence">
                    <span>Fashion购，我的时尚购</span>
                    <div class="rw-words rw-words-1">
                        <span>Exquisite woman</span>
                        <span>Fashionable life</span><!-- 
                        <span> Totam rem aperiam</span>
                        <span>Nemo enim ipsam</span>
                        <span>Temporibus autem</span>
                        <span>intelligent systems</span> -->
                    </div>
                    <div class="rw-words rw-words-2">
                        <span>新春倒计时</span>
                        <span>年货选购指南</span>
                        <span>快抢发新日</span>
                        <span>尽在Fashion街</span><!-- 
                        <span>The generated Lorem Ipsum</span>
                        <span>Excepteur sint occaecat</span> -->
                    </div>
                </h1>
            </section>
            </div>
</div>
    <!--content-->
        <div class="content">
            <div class="container">
                <div class="content-top">
                    <div class="col-md-6 col-md">
                        <div class="col-1">
                         <a href="{{url('detial')}}" class="b-link-stroke b-animate-go  thickbox">
           <img src="{{ asset('homes/images/pi.jpg') }}" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Trendy</h3></div></a>

                            <!---<a href="{{url('detial')}}"><img src="{{ asset('homes/images/pi.jpg') }}" class="img-responsive" alt=""></a>-->
                        </div>
                        <div class="col-2">
                            <span>Hot Deal</span>
                            <h2><a href="{{url('detial')}}">Luxurious &amp; Trendy</a></h2>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
                            <a href="{{url('detial')}}" class="buy-now">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-md1">
                        <div class="col-3">
                            <a href="{{url('detial')}}"><img src="{{ asset('homes/images/pi1.jpg') }}" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Men</h5>
                            </div></a>
                        </div>
                        <div class="col-3">
                            <a href="{{url('detial')}}"><img src="{{ asset('homes/images/pi2.jpg') }}" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Kids</h5>
                            </div></a>
                        </div>
                        <div class="col-3">
                            <a href="{{url('detial')}}"><img src="{{ asset('homes/images/pi3.jpg') }}" class="img-responsive" alt="">
                            <div class="col-pic">
                                <p>Lorem Ipsum</p>
                                <label></label>
                                <h5>For Women</h5>
                            </div></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--products-->
                <div class="copyrights">Collect from  <a href="http://www.cssmoban.com/" >网页模板</a></div>
            <div class="content-mid">
                <h3>Trending Items</h3>
                <label class="line"></label>
                <div class="mid-popular">
                    @foreach($res as $v)
                    <div class="col-md-3 item-grid simpleCart_shelfItem">
                    <div class=" mid-pop">
                    <div class="pro-img">
                        <img src='{{ asset("homes/images/{$v->goods_covel}") }}' class="img-responsive" alt="">
                        <div class="zoom-icon ">
                        <a class="picture" href='{{ asset("homes/images/{$v->goods_original}") }} ' rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
                        <a href="{{url('detial')}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                        </div>
                        </div>
                        <div class="mid-1">
                        <div class="women">
                        <div class="women-top">
                            <span>{{$v->goods_title}}</span>
                            <h6><a href="{{url('detial')}}">{{$v->goods_info}}</a></h6>
                            </div>
                            <div class="img item_add">
                                <a href="#"><img src="{{ asset('homes/images/ca.png') }}" alt=""></a>
                            </div>
                            
                            </div>
                            <div class="mid-2">
                                <p ><label>$100.00</label><em class="item_price">$70.00</em></p>
                                  <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--//products-->
            <!--brand-->
            <div class="brand">
                <div class="col-md-3 brand-grid">
                    <img src="{{ asset('homes/images/ic.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{ asset('homes/images/ic1.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{ asset('homes/images/ic2.png') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-3 brand-grid">
                    <img src="{{ asset('homes/images/ic3.png') }}" class="img-responsive" alt="">
                </div>
                
            </div>
            <!--//brand-->
            </div>
            
        </div>
    <!--//content-->
@endsection
    