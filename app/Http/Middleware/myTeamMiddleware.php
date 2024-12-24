<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ApiBasKetBallService;

class MyTeamMiddleware
{
    protected $apiBasKetBallService;

    public function __construct(ApiBasKetBallService $apiBasKetBallService)
    {
        $this->apiBasKetBallService = $apiBasKetBallService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $count = $this->apiBasKetBallService->getCurrentTeamCount(); 
        
        if ($count == 5) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Your team does not have exactly 5 players.');
    }
}

