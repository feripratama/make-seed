<?php namespace Feripratama\MakeSeed\Http\Middleware;

use Closure;

/**
 * The MakeSeedMiddleware class.
 *
 * @package Feripratama\MakeSeed
 * @author  feripratama <eroorsys@gmail.com>
 */
class MakeSeedMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
