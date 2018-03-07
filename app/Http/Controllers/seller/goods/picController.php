<?php

namespace App\Http\Controllers\seller\goods;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use League\Flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;
use Overtrue\Flysystem\Qiniu\Plugins\FetchFile;

class picController extends Controller
{
    public function pic(Request $request)
    {
        
        // dd($request->all());
        $file = $request->file('file'); // 图片缓存路径
        // return var_dump($file);
        // 获取文件路径
       // dd($file);
        $transverse_pic = $file->getRealPath();
        $transverse_pic = file_get_contents($transverse_pic);

        // 获取后缀名
        $postfix = $file->getClientOriginalExtension();
        $fileName = md5(time().rand(1000,9999)).'.'.$postfix;

        $accessKey = 'n1fusJd2kdiKZEBYaFhclU9LnPWU2ggXViumpe3Q';
        $secretKey = 'VkqzCHimhzFNRGVrVhbV8zwC65U98vUL-9YGEzbI';
        $bucket = 'goods';
        $domain = 'p53v2ha77.bkt.clouddn.com'; // or with protocol: https://xxxx.bkt.clouddn.com

        $adapter = new QiniuAdapter($accessKey, $secretKey, $bucket, $domain);

        $flysystem = new Filesystem($adapter);
        $flysystem->write('goods/'.$fileName, $transverse_pic);

        return $fileName;

    }
}
