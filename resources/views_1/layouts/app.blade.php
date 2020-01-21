<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   

 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
    
       
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/customOK.css') }}" rel="stylesheet">
   

   <script>
    $(function(){
       
       $('#ok').click(function() {
        var obj = { name: "John", age: 30, city: "New York" };
           $.ajax({
                 url:'{{ route('ejemplo') }}',
                 type:'GET',
                 array: { array: obj },
                
                 success: function(result){
           alert('HI DOG');
           location.href ="http://localhost:8000/ejemplo";
  }});
       });
    });    
</script>
    <script>
        
        $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

    </script>


<script>
    $(function(){
       $('#oka').click(function() {
       
            $.ajax({
                url: '{{route('ejemplo')}}',
                type: 'GET',
                data: { id: 1 },
                success: function(response)
                {
                    alert("asd");
                    
                },error:function( jqXHR, textStatus, errorThrown){
                   if (jqXHR.status === 0) {

            alert('Not connect: Verify Network.');

          } else if (jqXHR.status == 404) {

            alert('Requested page not found [404]');

          } else if (jqXHR.status == 500) {

            alert('Internal Server Error [500].');

          } else if (textStatus === 'parsererror') {

            alert('Requested JSON parse failed.');

          } else if (textStatus === 'timeout') {

            alert('Time out error.');

          } else if (textStatus === 'abort') {

            alert('Ajax request aborted.');

          } else {

            alert('Uncaught Error: ' + jqXHR.responseText);

          }
                }
            });
       });
    });    
</script>





</head>
<body class="dybo">
    
    <div id="app">
       
       @section('barra-nav')
         @show
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @if ($message = Session::get('success'))
 
<nav class="navbar fixed-bottom navbar-light bg-custom">
  <a class="navbar-brand" href="#">{{ $message }}</a>

@endif
    
</nav>
</body>
</html>
