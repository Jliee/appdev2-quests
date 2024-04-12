<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExtractBearerToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        #2/register to kernel to use aliase
    

        #4/check if token can be called
        $token = $request->bearerToken();
        
        #6/ logic is now implemented, check if token exists, error 401 unauthorized access
        if(!$token){
            return response()->json([
               'message' => 'No token provided'
            ], 401);
        }

        #7/ if token exist but is wrong, error 403 for forbidden access

        if($token !== env('BEARER_TOKEN')){
            return response()->json([
               'message' => 'Invalid token provided'
            ], 403);
    
        }

        return $next($request);
    }
}