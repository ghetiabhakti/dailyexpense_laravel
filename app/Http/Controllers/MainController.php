<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expense;

class MainController extends Controller
{
    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }
    public function dashboard() {
        return view('dashboard');
    }
    public function manage() {
        $expense = Expense::where('user_id', Auth::id())->get();
     
        return view('manage',compact('expense'));
    }
    public function add() {
        return view('addexpense');
    }public function profile() {
        return view('profile');
    }
    public function addStore( Request $request){
        $validate = $request->validate([
            'expenseamount' => 'required',
            'expensedate' => 'required',
            'expensecategory' => 'required'
            

           ,]);
         
        $user = Expense::create([
            'user_id' => Auth::id(),
            'expense' => $request->expenseamount,
            'date' => $request->expensedate,
            'category' => $request->expensecategory,
        ]);
return redirect()->route('manage')->with('success', 'Add Expense Successfully');
    }
}
