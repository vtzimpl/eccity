@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>{{ $moto_current->model }}</h1>
@stop

@section('content')

@php

@endphp



<form>

<div class="row">
              <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="vin">VIN</label>
                  <input type="text" class="form-control" id="vin" value={{ $moto_current->VIN }} disabled >
                </div>
              </div>
              <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="color">Color</label>
                  <input type="text" class="form-control" id="color" value={{ $moto_current->color }} disabled >
                </div>
                </div>

                <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="model">Model</label>
                  <input type="text" class="form-control" id="model" value={{ $moto_current->model }} disabled >
                </div>
                </div>
                <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="po">Import order</label>
                  <input type="text" class="form-control" id="po" value={{ $moto_current->PO }} disabled >
                </div>
                </div>
  </div>







  <div class="row">
            <div class="col-md-1 mb-1 form-inline">
                        <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="sold">
                              <label class="form-check-label" for="sold">
                              Sold?
                              </label>
                          </div>
            </div>

                  <div class="col-md-2 mb-3">
                            <div class="form-group">
                                  <label for="location">Location</label>
                                  <input disabled type="text" class="form-control" id="location" value={{ $moto_current->location }} >
                          </div>
            </div>
          

            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="registration_nbr">Registration nbr</label>
                                  <input disabled type="text" class="form-control" id="registration_nbr" value={{ $moto_current->registration_nbr }} >
                          </div>
            </div>

            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_eccity_nbr">ECCITY Invoice</label>
                                  <input disabled type="text" class="form-control" id="inv_eccity_nbr" value={{ $moto_current->inv_eccity_nbr }} >
                          </div>
            </div>


            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_eccity_date">Date Invoiced</label>
                                  <input  disabled type="date" class="form-control" id="inv_eccity_date" value={{ $moto_current->inv_eccity_date }} >
                          </div>
            </div>

               

  </div>









  <div class="row">
            <div class="col-md-1 mb-1 form-inline">
                        <div class="form-check ">
                              <input class="form-check-input" type="checkbox" id="invoiced_nip">
                              <label class="form-check-label" for="invoiced_nip">
                              Invoiced by Nipponia?
                              </label>
                          </div>
            </div>

                  <div class="col-md-2 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_nbr">Nipponia Invoice</label>
                                  <input disabled type="text" class="form-control" id="inv_nipponia_nbr" value={{ $moto_current->inv_nipponia_nbr }} >
                          </div>
            </div>


            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_paid">Paid to Nipponia?</label>
                                  <input disabled type="text" class="form-control" id="inv_nipponia_paid" value={{ $moto_current->inv_nipponia_paid }} >
                          </div>
            </div>



            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_date">Date Invoiced</label>
                                  <input  disabled type="date" class="form-control" id="inv_nipponia_date" value={{ $moto_current->inv_nipponia_date }} >
                          </div>
            </div>


    </div>
























  
  <div class="row">
        <div class="col-md-3 mb-5">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
  </div>







 



</form>























@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>


<script>
          var invoicenipcheck = document.getElementById('invoiced_nip');
          var inv_nbr = document.getElementById('inv_nipponia_nbr');
          var inv_nipponia_paid = document.getElementById('inv_nipponia_paid');
          var inv_nipponia_date = document.getElementById('inv_nipponia_date');
          invoicenipcheck.onchange = function() {
            inv_nbr.disabled = !this.checked ;
            inv_nipponia_paid.disabled = !this.checked ;
            inv_nipponia_date.disabled = !this.checked ;
                   };


                



</script>


<script> 

var sold = document.getElementById('sold');
          var registration_nbr = document.getElementById('registration_nbr');
          var location_stock = document.getElementById('location');
          var inv_eccity_nbr = document.getElementById('inv_eccity_nbr');
          var inv_eccity_date = document.getElementById('inv_eccity_date');
          sold.onchange = function() {
            registration_nbr.disabled = !this.checked ;
            location_stock.disabled = !this.checked ;
            inv_eccity_nbr.disabled = !this.checked ;
            inv_eccity_date.disabled = !this.checked ;
                   };








 </script>









@stop