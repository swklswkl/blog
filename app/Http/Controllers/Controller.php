<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 返回json格式的错误信息
     * @param $code
     * @param $msg
     * @return string
     */
    public function jsonError($code, $msg){
        $data = array(
            'code' => $code,
            'msg' => $msg
        );
        return json_encode($data);
    }

    /**
     * 返回json成功信息
     * @param $msg
     * @return string
     */
    public function jsonSuccess($msg){
        $data = array(
            'code' => 200,
            'msg' => $msg
        );
        return json_encode($data);
    }
}
