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
<<<<<<< HEAD
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
    </script>    
=======
   
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
<<<<<<< HEAD
   <link href="{{ asset('css/customOK.css') }}" rel="stylesheet">
  <script>
function mostrar(){
document.getElementById('obj1').style.display = 'block';
}

    $(document).ready(function() {
      $("#ok").click(function() {
        var array=[];
array.push(1);
array.push(2);        
$("td").each(function(){

   
var em = $(this).text();
 
 if(em!='   '){
 if(em!=''){
var myJSON = { "name": "Chris", "age": "38" };
if(array.length > 0)
    {
        
        $.ajax({
                url:'{{URL::to("/imprimir")}}',
                method:"GET",
                data:{array:myJSON},
                success:function(data){
                console.log(data);
               },
    error: function( jqXHR, textStatus, errorThrown ) {

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
    ;
     }

}
}
 });

      });


      $(".boton").click(function() {

        var valores = "";

        // Obtenemos todos los valores contenidos en los <td> de la fila
        // seleccionada
        $(this).parents("tr").find(".numero").each(function() {
          valores += $(this).html() + "\n";
        });
        console.log(valores);
        alert(valores);
      });
    });
  </script>

=======
   
    
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
</head>
<body>
    <div id="app">


    @section('barra-nav')
         @show
             

        <main class="py-4">
            
            @yield('content')
        </main>
    </div>
<<<<<<< HEAD
     
=======
    @if ($message = Session::get('success'))
 


<nav class="navbar fixed-bottom navbar-light bg-custom">
  <a class="navbar-brand" href="#">{{ $message }}</a>





@endif
    
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
</nav>
</body>
</html>
