<?php
/**
 * Created by PhpStorm.
 * User: shrrung
 * Date: 2017/6/14
 * Time: 20:15
 */
namespace app\Http\Middleware;

use PhpParser\Node\Expr\ClosureUse;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        return $next($request);
    }
}