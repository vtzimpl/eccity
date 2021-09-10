@extends('adminlte::page')

@section('title', 'All Motorcycles')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>Spare Parts </h1>
@stop



@php
//var_dump($heads_motos);
$heads_motos = [
    'P/N',
    'Name',
    'Color',

    ['label' => 'Actions', 'no-export' => true],
];
$config = [
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp












@section('content')

@php        
$config['dom'] = '<"row" <"col-sm-7" B> <"col-sm-5 d-flex justify-content-end" i> >
                  <"row" <"col-12" tr> >
                  <"row" <"col-sm-12 d-flex justify-content-start" f> >';
$config['paging'] = false;
$config["lengthMenu"] = [ 10, 50, 100, 500];
@endphp
<div class="row">
<div class="col-md-2 mb-5">
</div>

<div class="col-md-6 mb-5">
<h6>Spare parts that can be sold. Notice that the following list does not ensure availability.</h6>
</div>
</div>




<div class="row">
<div class="col-md-2 mb-5">
</div>
<div class="col-md-6 mb-5">
       
      
           <x-adminlte-datatable id="table_invoices" :heads="$heads_motos" striped hoverable with-buttons>
           @foreach(App\Models\sparts::all()  as $spart)
              
                    <tr><td>{{ $spart->pn }}</td><td>{{ $spart->product_name }}</td><td>{{ $spart->color }}</td><td><a href=@php echo url("/sparts_sale_form?spid={$spart->id}"); @endphp><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button></a>     <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-lg fa-fw fa-eye"></i></button> </td></tr>
               @endforeach

             


           </x-adminlte-datatable>
       </div>

</div>














@include('offcanvas.moto_view')














@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>


$('#exampleModal').on('shown.bs.modal', function () {
      $('#modaltest').text('tesjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjt');
})
</script>


@stop