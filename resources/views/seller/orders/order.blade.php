@extends('seller.parent')
@section('content')
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">浏览订单</h3>
										<div class="table-header">
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															订单编号
														</th>
														<th class="hidden-480">下单人</th>
														<th class="hidden-480">收货人</th>
														<th class="hidden-480">收货地址</th>
														<th class="hidden-480">交易状态</th>
														<th class="hidden-480">订单详情</th>
													</tr>
												</thead>

												<tbody>

													<tr>
														<td>
															<a href="#">43546546846846</a>
														</td>
														<td>921127</td>
														<td class="hidden-480">阿宁</td>
														<td>北京市昌平区</td>

														<td class="hidden-480">
															未发货
														</td>

														<td>
															<a href="{{url('seller/orders/orderinfo')}}">查看详情</a>
														</td>
													<tr>
												</tbody>
											</table>
										</div>
									</div>
@endsection