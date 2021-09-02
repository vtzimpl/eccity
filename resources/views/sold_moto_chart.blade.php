@extends('adminlte::page')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@section('title', 'All Motorcycles Sold Graph')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>All Motorcycles Sold Graph</h1>
@stop
















@section('content')
@section('plugins.Chartjs', true)











<div class="row">
<div class="col-md-3 mb-9">
</div>
<div class="col-md-6 mb-5">
                    <h1>MOTO SALES (units)</h1>
                    <canvas id="motosaleschart" width="400" height="400"></canvas>
            </div>
 </div>











































@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    


<script>


var ctx = document.getElementById("motosaleschart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {

    labels: [

    
    @foreach($per_model_sold_qty as $model)
                        "{!! $model['name'] !!}", 
                @endforeach



            ],

    datasets: [{
      label: '# of Moto',
      data: [
         
        @foreach($per_model_sold_qty as $model)
                        "{!! $model['qty'] !!}", 
                @endforeach
          
          
          
          ],







          backgroundColor: [
'rgba(101, 239, 149, 0.3)',
'rgba(166, 60, 125, 0.2) ',
'rgba(159, 184, 100, 0.9) ',
'rgba(147, 244, 199, 0.8)',
'rgba(41, 209, 251, 0.5)',
'rgba(223, 31, 190, 0.5) ',
'rgba(76, 209, 57, 0.3) ',
'rgba(131, 107, 185, 0.7)',
'rgba(115, 205, 252, 0.6)',
'rgba(76, 169, 100, 1)',
'rgba(202, 14, 176, 0.2)',
'rgba(189, 52, 79, 0.5)',
'rgba(234, 13, 86, 0.7)',
'rgba(108, 64, 158, 0.1)',
'rgba(167, 7, 169, 0.4)',
'rgba(111, 248, 247, 0.2)',
'rgba(242, 152, 90, 0.2)',
'rgba(203, 158, 32, 0.8)',
'rgba(220, 6, 39, 0.3)'







      ],
      borderColor: [
'rgba(101, 239, 149, 1)',
'rgba(166, 60, 125, 1) ',
'rgba(159, 184, 100, 1) ',
'rgba(147, 244, 199, 1)',
'rgba(41, 209, 251, 1)',
'rgba(223, 31, 190, 1) ',
'rgba(76, 209, 57, 1) ',
'rgba(131, 107, 185, 1)',
'rgba(115, 205, 252, 1)',
'rgba(76, 169, 100, 1)',
'rgba(202, 14, 176, 1)',
'rgba(189, 52, 79, 1)',
'rgba(234, 13, 86, 1)',
'rgba(108, 64, 158, 1)',
'rgba(167, 7, 169, 1)',
'rgba(111, 248, 247, 1)',
'rgba(242, 152, 90, 1)',
'rgba(203, 158, 32, 1)',
'rgba(220, 6, 39, 1)'

      ],







    
      borderWidth: 1
    }]
  },
  options: {
   	//cutoutPercentage: 40,
    responsive: false,

  }
});



</script>


















@stop