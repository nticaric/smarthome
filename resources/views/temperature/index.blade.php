@extends('layouts.main')

@section("content")
<div id="graphdiv" style="width: 100%; height: 550px"></div>
@stop

@section('scripts')
    <script type="text/javascript">
        el = document.getElementById('graphdiv');
      new Dygraph(el,
       "Date,Temperature,Humidity\n" +
       @foreach($temperatures as $t)
       "{{$t->created_at}},{{$t->temperature}},{{$t->humidity}}\n" +
       @if($loop->last)
       "",
       @endif
       @endforeach
       {

         legend: 'always',
         ylabel: 'Temperature (C)',
         valueRange: [0, 50],
         axisLineWidth: 5,
         fillGraph: true,
         strokeWidth: 2,
         axis : {
           x : {

             valueFormatter: Dygraph.dateString_,
             valueParser: function(x) { return 1000*parseInt(x); },
             ticker: Dygraph.dateTicker
           },
           y : {

           }
         }
       });
    </script>
@stop
