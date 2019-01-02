<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
class IndexController extends Controller
{
    public function index($id){
        echo 'ID:'.$id;
        echo __METHOD__;
        $user=UserModel::where(['user_id'=>$id])->first()->toArray();
        echo "<pre>";
        print_r($user);
        //dd($user);
    }
    public function add(){
        $data=[
            'username'=>str_random(5),
            'userpwd'=>str_random(8),
            'usernum'=>str_random(11),
        ];
        $res=UserModel::insert($data);
        var_dump($res);
    }
    public function update($id){
        $data=[
            'usernum'=>1111111111
        ];
        $where=[
            'user_id'=>$id
        ];
        $res=UserModel::where($where)->update($data);
        var_dump($res);
    }
    public function delete($id){
        $where=[
            'user_id'=>$id
        ];
        $res=UserModel::where($where)->delete();
        var_dump($res);
    }
    public function list(){
        $list=UserModel::all();
        $data=[
            'list'=>$list,
            'page'=>555
        ];
        return view('user.list',$data);
    }
}
