<?php


namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Config;
class LanguageSwitcher {


    public function handle($request, Closure $next){

        // App::setLocale(Session::has('locale') ? Session::get('locale') : Config::get('app.locale'));
        App::setLocale( Session::get('locale'));
        return $next($request);
    }
}

?>
