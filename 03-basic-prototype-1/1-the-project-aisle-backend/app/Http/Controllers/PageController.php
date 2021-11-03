<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Session;
use DB;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function ViewLoginPageController(){

      return view('login-page');

    }

    public function ViewDashboardPageController(){

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/home-page');

      }else{

        return Redirect::to("/");

      }

    }

    public function ViewChangePasswordController(){

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/user-settings');

      }else{

        return Redirect::to("/");

      }


    }

    public function ViewKeywordManagementController(){

      $all_context_names = DB::select("SELECT context FROM context_data");

      $keyword_data =  DB::table('knowledgebase')->get();
    
      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        return view('dashboard/keyword-management')->with(['all_context_names'=>$all_context_names, 'keyword_data' => $keyword_data]);

      }else{

        return Redirect::to("/");

      }

    }

    public function ViewContextManagementController(){

      $session_type = Session::get('Session_Type');

      $context_data = DB::table('context_data')->get();

      if($session_type == "Admin"){

        return view('dashboard/context-management')->with('context_data', $context_data);

      }else{

        return Redirect::to("/");

      }


    }

}
