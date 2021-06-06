<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_AWS_ELB;

//    public function handle(Request $request, Closure $next) {
//        $request->setTrustedProxies([$request->getClientIp()], $this->headers);
//        if (!$request->secure()) {
//            return redirect()->secure($request->getRequestUri());
//        }
//        return $next($request);
//    }
}
