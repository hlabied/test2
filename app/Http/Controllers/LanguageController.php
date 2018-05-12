<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Lang;
use Session;
class LanguageController extends Controller
{
  public function chooser(Request $req)
  {
    if(! Session::has('locale'))
          {
              Session::put('locale', $req->locale);
          }
          else {

              Session::put('locale', $req->locale);
          }

echo "session : ".  Session::get('locale');
    App::setLocale( Session::get('locale'));
echo " locale : ".  App::getLocale('locale');
    return redirect('/personnes');
      // echo ' Local : ' .$req->locale;
  }



}
