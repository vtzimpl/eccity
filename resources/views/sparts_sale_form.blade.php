@extends('adminlte::page')

@section('title', 'Create new spare part')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>Part sale register</h1>
@stop

@section('content')


<div class="container">
  <!-- Content here -->



<form action="{{url('update_spart_sale_new')}}" method="post" >

<input type="hidden" class="form-control" name="modified_by" id="modified_by" value={{ Auth::user()->name }}  >
<input type="hidden" class="form-control" name="id" id="id" value={{ $spid_current->id }}  >
{{ csrf_field() }}


<div class="row">
              <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="pn">P/N</label>
                  <input type="text" class="form-control" name="pn" id="pn" >
                </div>
              </div>
              <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="color">Color</label>
                  <input type="text" class="form-control" name="color" id="color"  >
                </div>
                </div>

                <div class="col-md-3 mb-5">
                <div class="form-group">
                  <label for="product_name">Product name</label>
                  <input type="text" class="form-control"  name="product_name" id="product_name">
                </div>
                </div>


                <div class="col-md-3 mb-5">
                <div class="form-group">


                <label for="model">Is part for model</label>

              





                </div>

                </div>
  </div>




  
  <div class="row">
        <div class="col-md-3 mb-5">
        <button type="submit" class="btn btn-primary">Submit sale</button>
        </div>
  </div>





</form>

</div>

















@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
  @stop

@section('js')
   

  



@stop


            