@extends('adminlte::page')

@section('title', 'All Motorcycles')
@section('plugins.Datatables', true)
@section('content_header')


 <!-- view modal -->
<script>
        function getmotoidview(name) {
                            $.get('moto_view_form_modal?motoid='+name, function (data) {
                                        $('#exampleModal').on('shown.bs.modal', function () {
                                                            $('#modaltest').text(data.data.id);
                                                            $('#modaltest3').text(JSON.stringify(data));
                                                            $('#modaltest4').text(data.data.VIN);
                                                            $('#modaltest2').text(data.data.location);
                                        })
                            })
          }
</script>
 <!-- view modal -->



  <!-- edit modal -->
<script>
        function getmotoidedit(name) {
                            $.get('moto_edit_form_modal?motoid='+name, function (data) {
                                        $('#motoeditform').on('shown.bs.modal', function () {
                                                            $("#updateform").attr('action', 'update_moto_details');

                                                            $('#motoeditformlabel').text(data.data.model);
                                                            $('#modaleditid').val(data.data.id);
                                                            $('#_token').val("{{ csrf_token() }}");
                                                            $('#modaleditvin').val(data.data.VIN);
                                                            $('#modaleditmodel').val(data.data.model);
                                                            $('#modaleditcolor').val(data.data.color);
                                                            $('#modaleditpo').val(data.data.PO);
                                        })
                            })
          }
</script>
 <!-- edit modal -->








    <h1>All Motorcycles in Stock</h1>
@stop



@php
//var_dump($heads_motos);
$heads_motos = [
    'Model',
    'color',
    'VIN',
    'PO',
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
<div class="container-xxl">

<div class="row">

<div class="col-md-9 mb-5">
       
       <h1>Motorcycles in Stock</h1>
           <x-adminlte-datatable id="table_invoices" :heads="$heads_motos" striped hoverable with-buttons>
           @foreach(App\Models\Motos::whereNotNull('sold')->where('sold','!=',1)->get()  as $moto)
              
                    <tr><td>{{ $moto->model }}</td><td>{{ $moto->color }}</td><td>{{ $moto->VIN }}</td><td>{{ $moto->PO }}</td><td><a id="{{$moto->id}}" href=@php echo url("/moto_edit_form?motoid={$moto->id}"); @endphp><button class="btn btn-xs btn-default text-primary mx-1 shadow" onclick="getMessage()" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button></a>     <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details" onclick="getMessage('{{$moto->id}}')" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-lg fa-fw fa-eye"></i></button> </td></tr>
               @endforeach

               @foreach(App\Models\Motos::whereNull('sold')->get()  as $moto)
              
              <tr><td>{{ $moto->model }}</td><td>{{ $moto->color }}</td><td>{{ $moto->VIN }}</td><td>{{ $moto->PO }}</td>
              <td>
       <!--           <a id="{{$moto->id}}" href=@php echo url("/moto_edit_form?motoid={$moto->id}"); @endphp><button class="btn btn-xs btn-default text-primary mx-1 shadow" onclick="getMessage()" title="Edit"><i class="fa fa-lg fa-fw fa-pen"></i></button></a> -->  
       <button class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#motoeditform" title="Edit" onclick="getmotoidedit('{{$moto->id}}')" ><i class="fa fa-lg fa-fw fa-pen"></i></button>
       <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#exampleModal" title="Details" onclick="getmotoidview('{{$moto->id}}')" ><i class="fa fa-lg fa-fw fa-eye"></i></button>
             </td></tr>
         @endforeach



           </x-adminlte-datatable>
       </div>

</div>


</div>














@include('offcanvas.moto_view')
@include('offcanvas.moto_edit')













@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>



</script>


@stop