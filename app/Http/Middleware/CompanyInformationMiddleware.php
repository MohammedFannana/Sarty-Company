<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\CompanyInformation;


class CompanyInformationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //user the middle ware to send the data from company to conlroller in index function 

    public function handle($request, Closure $next)
    {
        $company = CompanyInformation::latest()->limit(1)->get();

        view()->share('company', $company);

        return $next($request);
    }
}
