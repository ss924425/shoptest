<?php

namespace App\Http\Controllers\seller\goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class goodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('data_cargo')->paginate(5);
        return view('seller.goods.index',['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->except('_token');
        $res = DB::table('data_cargo')->insertGetId($arr);
        $messages = [
            'required' => ':attribute 是必须填写的'
        ];

        $this->validate($request, [
            'goods_info' => 'required'
        ], $messages);

        if($res > 0){
            return redirect('goods/create')->with('mes','添加成功');
        }else{
            return redirect('goods/create')->with('mes','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods = DB::table('data_cargo')->where('id',$id)->first();
        return view('seller.goods.edit',['goods' => $goods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = $request->except('_token','_method');
        // dd($arr);
        if($request->hasFile('cargo_original'))
        {
            //判断上传的文件是否有效
            if($request->file('cargo_original')->isValid()){
                //生成给一个随机文件名(不含后缀)
                $name = time().rand(1000,9000);
                //获取后缀
                $ext = $request->file('cargo_original')->getClientOriginalExtension();
                //拼接成一个完整的文件名
                $filename = $name.'.'.$ext;
                //执行文件上传操作
                $request->file('cargo_original')->move('./sellers/images/gallery',$filename);
                // dd($filename);
               
                $res = DB::table('data_cargo')->where('id',$id)->update($list);

                if($res){
                    return redirect('/seller/goods')->with('msg', '修改成功');
                }else{
                    return redirect('/seller/goods')->with('msg', '修改失败');
                }
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('data_cargo')->where('id',$id)->delete();
        if($res){
            return 1;
        }else{
            return '';
        }
    }
}
