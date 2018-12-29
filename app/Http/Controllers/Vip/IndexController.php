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
}
