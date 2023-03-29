@extends('layouts/app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Expense manage</h3>
                        <div class="col-12" style="text-align: right;">
                            <a onclick="printDiv('printableArea')" class="btn btn-default"><i
                                    class="fas fa-print"></i> Print</a>
                        </div>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body" id="printableArea">
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Expense Category</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($expense as $e)
                               <tr> 
                                <td> {{$e->id}}</td>
                                <td> {{$e->date}}</td>
                                <td> {{$e->expense}}</td>
                                <td> {{$e->category}}</td>
                                <td> Edit/Delete</td>
                               </tr>
                               @endforeach
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>

</section>

@endsection
@section('js')
<script>
        @if (session()->has('success'))
        swal.fire("Done!", "{{ session()->get('success') }}", "success");
        @elseif(session()->has('error'))
        swal.fire("Error!", "{{ session()->get('error') }}", "error");
        @endif
    </script>

@endsection