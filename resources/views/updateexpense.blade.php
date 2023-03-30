@extends('layouts/app')
@section('content')

<div class="content">
    <div class="container">

        <div class="row">
            <form action="{{route('update.store', $expense->id)}}" id="expense" method="POST">
                @csrf

                <div class="col">
                    <div class="form-group row">
                        <label for="Enter Amount" class="col-sm-5 col-form-label2">Enter Amount(₹)</label>
                        <div class="col-sm-7">
                            <input type="number" value="{{$expense->expense}}" class="form-control" id="expenseamount" name="expenseamount" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="expensedate" class="col-sm-5 col-form-label"><b>Date</b></label>
                        <div class="col-md-7">
                            <input type="date" class="form-control col-sm-12" value="{{ $expense->date }}"
                                name="expensedate" id="expensedate" required>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-6 pt-0"><b>Category</b></legend>
                            <div class="col-md">
                                <fieldset class="form-group">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory4" value="Medicine" {{ $expense->category=='Medicine'?'checked':"" }}>
                                            <label class="form-check-label" for="expensecategory4">
                                                Medicine
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory3" value="Food" {{ $expense->category=='Food'?'checked':"" }}>
                                                Food
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory2" value="Bills & Recharges" {{ $expense->category=='Bills & Recharges'?'checked':"" }} >
                                            <label class="form-check-label" for="expensecategory2">
                                                Bills and Recharges
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory1" value="Entertainment" {{ $expense->category=='Entertainment'?'checked':"" }} >
                                            <label class="form-check-label" for="expensecategory1">
                                                Entertainment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory7" value="Clothings" {{ $expense->category=='Clothings'?'checked':"" }}>
                                            <label class="form-check-label" for="expensecategory7">
                                                Clothings
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory6" value="Rent" {{ $expense->category=='Rent'?'checked':"" }}>
                                            <label class="form-check-label" for="expensecategory6">
                                                Rent
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory8" value="Household Items" {{ $expense->category=='Household Items'?'checked':"" }}>
                                            <label class="form-check-label" for="expensecategory8">
                                                Household Items
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="expensecategory" id="expensecategory5" value="Others" {{ $expense->category=='Others'?'checked':"" }}>
                                            <label class="form-check-label" for="expensecategory5">
                                                Others
                                            </label>
                                        </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 text-right">

                                                <button type="submit" name="add" class="btn btn-lg btn-block btn-success" style="border-radius: 0%;">Update Expense</button>

                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>

            <!-- /.row -->
        </div>
    </div>
</div>
@endsection
