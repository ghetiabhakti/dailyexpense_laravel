<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expense;

class MainController extends Controller {
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

        return view('manage', compact('expense'));
    }

    public function add() {
        return view('addexpense');
    }

    public function edit($id) {
        $expense = Expense::find($id);
        return view('updateexpense', compact('expense'));
    }

    public function profile() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function addStore(Request $request) {
        $validate = $request->validate([
            'expenseamount' => 'required',
            'expensedate' => 'required',
            'expensecategory' => 'required',
        ]);

        $user = Expense::create([
            'user_id' => Auth::id(),
            'expense' => $request->expenseamount,
            'date' => $request->expensedate,
            'category' => $request->expensecategory,
        ]);
        return redirect()->route('manage')->with('success', 'Add Expense Successfully');
    }
    public function profileStore(Request $request){
//        dd($request->all());
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'expenseLimit' => 'required'
        ]);
        $user = Auth::user();
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$user->email;
        $user->expense_limit=$request->expenseLimit;
        $user->save();
        return redirect()->route('profile')->with('success', 'Profile Update Successfully');
    }
    public function profileUpload (Request $request){
        $user = Auth::user();
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = $user->email . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/profile', $filename);
            $user->profile = $filename;
            $user->save();
        }
        return redirect()->route('profile')->with('success', 'Profile Update Successfully');
    }
    public function update(Request $request, $id){
        $expense = Expense::find($id);
        $expense->update(['category'=>$request->expensecategory, 'date'=>$request->expensedate, 'expense'=>$request->expenseamount]);
         return redirect()->route('manage')->with('success', 'Update Expense Successfully');
    }
}
