<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// Requestをインポート（忘れずに！）
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // ログアウト処理以外では、未ログインであることを確認
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // ログアウト後の動作をカスタマイズ
    protected function loggedout(Request $request)
    {
        //ログイン画面にリダイレクト
        return redirect(route('login'));
    }
}
