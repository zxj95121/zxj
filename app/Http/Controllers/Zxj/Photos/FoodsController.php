<?php

namespace App\Http\Controllers\Zxj\Photos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FoodsController extends Controller
{
    public function foods(Request $request)
    {
    	return view('zxj.photos.foods');
    }

    public function foodsUpload(Request $request)
    {
    	echo asset('storage/file.txt');
    	$path = $request->file('file')->store('public');
    	// $file = $request->file('file')->store('local');
    	// $path = Storage::putFile('s3', $request->file('file'));
    	// $icon = $request->file('file')->store('local', 'uploads');
    	// $path = Storage::disk('s3')->get($icon)->getPath();
    	echo $path;
  //   	if($file->isValid()) {
		//     $clientName = $file->getClientOriginalName();    //客户端文件名称..
		//     // $tmpName = $file->getFileName();   //缓存在tmp文件夹中的文件名例如php8933.tmp 这种类型的.
		//     // $realPath = $file->getRealPath();     //这个表示的是缓存在tmp文件夹下的文件的绝对路径
		//     $entension = $file->getClientOriginalExtension();   //上传文件的后缀.
		//     // $mimeTye = $file->getMimeType();    //也就是该资源的媒体类型
		//     // $newName = md5(date('ymdhis').$clientName).".".$entension;    //定义上传文件的新名称
		//     // $path = $file->move('storage/uploads',$newName);    //把缓存文件移动到制定文件夹
		//     Storage::disk('public')->
		//     //print_r($path);die;
  //   		// var_dump($path);
  //   		echo 3;
		// }
    }
}
