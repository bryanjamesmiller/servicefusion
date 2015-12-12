<?php

namespace App\Http\Middleware;

use Closure;

/*
 * Middleware has replaced what used to be "filters"
 */
class NoBracketsAllowed
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
        $inputs = $request->all();
        foreach($inputs as $input){
            if(strpos($input, '<') || strpos($input, '>')){
                return back()->with('flash_message', '<span class="glyphicon glyphicon-exclamation-sign"></span> You entered an invalid tag for a form field.  Please try again without "<" and ">".')
                    ->withInput();
            }
        }
        return $next($request);
    }
}
