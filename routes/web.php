<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $allUser=DB::table('users')->get();
    return view('admin/dashboard')->with(['allUser'=>$allUser]);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::post('/dashboard', function (Request $request) {
        $rand = mt_rand(1000, 9000);
        $password = "Easyloan-" . $rand;
        $secretCode = mt_rand(1000, 20000);
        $imageName = mt_rand(1000, 9000);
        $extension = $request->profilepic->extension();
        $image = $imageName . '.' . $extension;
        $myimage = 'images';
        $saveImage = $myimage . '/' . $image;
        $request->profilepic->storeAs('public/' . $myimage, $image);
        $request->validate([
            'profilepic' => "required",
            'fullname' => "required",
            'email' => "required",
            'bvn' => "required|min:11|max:11",
            'phoneno' => "required",
            'accountnum' => "required|min:10|max:10",
            'dob' => "required",
            'nok' => "required",
            'addressNok' => "required",
            'phoneNok' => "required",
        ]);
        $user = User::create([
            'profilepic' => $saveImage,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($password),
            'visiblePassword' => ($password),
            'bvn' => $request->bvn,
            'phoneno' => $request->phoneno,
            'accountnum' => $request->accountnum,
            'dob' => $request->dob,
            'nok' => $request->nok,
            'addressNok' => $request->addressNok,
            'phoneNok' => $request->phoneNok,
            'secretCode' => $secretCode,
            'balance' => 0
        ]);
        DB::table('transaction')->insert([
             'userid'=>$user->id
        ]);
        Auth::loginUsingId($user->id);
        return "<a href='http://127.0.0.1:8000/'>Account Created Successful. Create new user</a>";
    });

    Route::post('update', function(Request $request){
     $update=User::where('id',$request->index+1)->update([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'bvn' => $request->bvn,
        'phoneno' => $request->phoneno,
        'accountnum' => $request->accountnum,
        'dob' => $request->dob,
        'nok' => $request->nok,
        'addressNok' => $request->addressNok,
        'phoneNok' => $request->phoneNok,
     ]);
    if($update){
      return redirect()->back();
    }
    });
});

Route::prefix('user')->group(function () {

    Route::get('/', function () {
        return view('user/login');
    });

    Route::post('/', function (Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $token = auth()->attempt(['email' => $request->email, 'password' => $request->password], true);
        if (!$token) {
            session()->flash('error', 'Invalid details');
            return redirect()->back();
        }
        return redirect()->to('user/home');
    });

    Route::get('/home', function () {
        return view('user/home')->with(['profilepic' => auth()->user()->profilepic]);
    });

    Route::post('/home', function (Request $request) {
        $request->validate([
            'secretCode' => 'required'
        ]);
        if ($request->secretCode == auth()->user()->secretCode) {
            $user = DB::table('users')->where(['id' => auth()->user()->id])->update([
                'email_verified_at' => now(),
            ]);
            return redirect()->to('user/dashboard');
        } else {
            session()->flash('error', 'Invalid secret Code');
            return redirect()->back();
        }
    });

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->to('user/');
    });
    Route::get('/dashboard', function () {
        return view('user/dashboard')->with(['profilepic' => auth()->user()->profilepic]);
    });

    Route::get('/cashout', function () {
        return view('user/cashout');
    });
    Route::post('/cashout', function (Request $request) {
        $request->validate([
            'amount' => 'required',
            'accountnum' => 'required|min:10|:max:10',
            'bankname' => 'required'
        ]);
    });
    Route::get('/transaction', function(){
    $transaction=DB::table('transaction')->get();
    return view('user/transaction')->with(['transaction'=>$transaction]);
    });
});
