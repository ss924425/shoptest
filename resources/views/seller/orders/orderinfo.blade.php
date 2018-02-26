@extends('seller.parent')
@section('content')
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">订单详情</h3>
										<div class="table-header">
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															商品名
														</th>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															商品图片
														</th>
														<th class="hidden-480">单价</th>
														<th class="hidden-480">总价</th>
														<th class="hidden-480">数量</th>
													</tr>
												</thead>

												<tbody>

													<tr>
														<td>
															<a href="#">女装</a>
														</td>
														<td>1.jpg</td>
														<td class="hidden-480">￥50</td>
														<td>￥150</td>
														<td>3</td>
													</tr>
													<tr>
														<td>
															<a href="#">女装</a>
														</td>
														<td>1.jpg</td>
														<td class="hidden-480">￥50</td>
														<td>￥150</td>
														<td>3</td>
													</tr>
													<tr>
														<td>
															<a href="#">女装</a>
														</td>
														<td>1.jpg</td>
														<td class="hidden-480">￥50</td>
														<td>￥150</td>
														<td>3</td>
													</tr>

												</tbody>
											</table>

										</div>
									</div>
									<div class="col-xs-9">	
									</div>
									<div class="col-xs-3">
										<h1>总金额：500</h1>
									</div>
@endsection