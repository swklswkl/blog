<?php

namespace App\Http\Middleware;

use Closure;

class Activity{
    public function handle($request,Closure $next){

        if(time() < strtotime('2017-04-17')){
            return redirect('artivity1');
        }

        $req =  $next($request);
        echo ($req);

    }
}