<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Menu  footer-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
         <!-- category-->
       
      
       <!-- Menu -->
       <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
       <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
             
<!-- caroselle category -->

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
    
         @include('header')
       

        <div class="page-section">
            @yield('contenu')
        </div>
        @include('footer')
      
   
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js'></script>



        
   <script src="{{ asset('js/script.js') }}" ></script>
   

    </body>
</html>
