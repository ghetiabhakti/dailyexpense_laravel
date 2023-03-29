@extends('layouts/app')
@section('content')

<div class="container emp-profile">
    <form class="form" method="post" action="" enctype='multipart/form-data'>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="" alt="" width="120" height="120"/>
                        <div class="form-group">
                            <!-- <label for="exampleFormControlFile1">Example file input</label> -->
                            <input type="file" name='file' class="form-control-file mt-3" id="exampleFormControlFile1">
                        </div>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" name='but_upload' id="profilepicinput">Upload Picture</button>
                </div>
            </div>
        </div>
    </form>
    <form action="" method="post">
        <div class="row">                
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-2">
                                <label>First Name</label>
                            </div>
                            <div class="col-md-10">
                                <p><input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value=""></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Last Name</label>
                            </div>
                            <div class="col-md-10">
                                <p><input class="form-control" type="text" name="last_name" id="last_name" value=""></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-10">
                                <p><input class="form-control" type="text" name="email" id="email" value="" disabled></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Expense Limit</label>
                            </div>
                            <div class="col-md-10">
                                <p><input class="form-control" type="number" name="expenseLimit" id="expenseLimit" value=""></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">                                
                                <button class="btn btn-block btn-md btn-success" style="border-radius:0%;" name="save" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </div>            
                </div>                
            </div> 
        </div>      
    </form>           
</div>

@endsection