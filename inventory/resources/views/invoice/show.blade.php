@extends('layouts.master')
@section('title', 'Show | invoice')
@section('content')
    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                    </div>
                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Invoice No</label>
                                        <input type="text" name="invoice_no" id="invoice_no" class="form-control" disabled value="{{ $invoice->invoice_no }} ">
                                    </div>
                                 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <input type="text" name="invoice_no" id="invoice_no" class="form-control" disabled value="{{ $invoice->supplier->name }} ">

                                    </div>
                           
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Paid Amount</label>
                                        <input type="text" name="paid_amount" id="paid_amount" disabled class="form-control" value="{{ $invoice->paid_amount }}">
                                    </div>
                              
                                </div>
                                <div class="col-12">
                                    <table class="table table-responsive table-striped">
                                        <thead>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Product</th>
                                            <th class="text-center">Unit</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Unit Price</th>
                                            <th class="text-center">Total</th>
                                      
                                        </thead>
                                        <tbody class="tbody">
                                            @foreach( $invoice->invoiceMeta as $item)
                                            <tr class="tr">
                                            
                                               <td>
                                                   
                                                <input type="text" disabled class="form-control" value="{{ $item->category->name }}">

                                              </select>
                                            </td>
                                            <td>
                                                <input type="text" disabled class="form-control" value="{{ $item->product->name }}">
                                            </td>
                                            <td>
                                                <input type="text" disabled class="form-control" value="{{ $item->unit->name }}">

                                            </td>
                                            <td>
                                                <input class="form-control" type="text" disabled  value="{{ $item->quantity }}">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" disabled  value="{{ $item->unit_price }}">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" disabled  value="{{ $item->unit_price * $item->quantity }}">
                                            </td>
                                            

                                             
                                             
                                                
                                               
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <th colspan="5">Total</th>
                                            <td><input class="form-control total" value="{{ $invoice->total_amount }}" placeholder="Total" disabled></td>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     
    </script>
@endsection