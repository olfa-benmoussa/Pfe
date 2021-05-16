@extends('welcome')
@section('contenu')
<div class="masthead">
  <div class="container h-1000">
      
    
      </div-->
  </div>
</div>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="text-wrapper">
  <h4 class="top-title">Nos Services</h4>
</div>

<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          @foreach($categories as $categorie)
            <div class="carousel-item col-3 "   >
               <div >
                  <div class="panel-thumbnail" >
                    <a href="" title="image 1" class="thumb"  >
                      <img class="img-fluid mx-auto d-block img-thumbnail "   src="{{asset('storage/'. $categorie->image)}}" alt="categorie" id="imagresponsive">
                    </a>
                  </div>
                  <div class="card-body">
                   <h5 class="card-title text-wrapper"><a href="{{route('souscategories',['categorie'=>$categorie->titre])}}"> {{$categorie->titre}}</a></h5>
                  </div>
                </div>
            </div>
        
          
           @endforeach
         
          
          
            
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<!--les evenement actualite-->

<div>

  <div class="text-wrapper">
    <h4 class="top-title">Actualités</h4>
  </div>
  <div class="slider-wrapper">
    <div id="button-left" class="button no-select"><i class="material-icons">arrow_back</i></div>
    <div class="slider">
      @foreach(App\Evenement::all() as $evenement)
      <img  src="{{asset('storage/'. $evenement->image)}}"  width="320" height="568">
     
      @endforeach
     
    </div>
    <div id="button-right" class="button no-select"><i class="material-icons">arrow_forward</i></div>
  </div>
</div>


<!--h2>Card-deck :</h2-->

<div class="row d-flex justify-content-center text-center">
  <div class="col-4">
    <div class="card ">
      
      <div class="card-body">
          <h3 class="card-title">Demande De Partenariat</h5>
          <p class="card-text">Votre partenariat nous inteéresse,
            rejoignez nous maintenant pour partager vos informations et vos événements avec la communauté de Midoun.</p>
          <p class="card-text"><a type="button" class="btn btn-primary" href="{{ route('partenaire.register') }}">s'inscrire</a></p>
          
      </div>
      
  </div>
  </div>
  <div class="col-4">
    <div class="card ">
      
      <div class="card-body">
        <h3 class="card-title">Tout Midoun dans une application !</h5>
          <p class="card-text">Google Play > </p>
          
      </div>
      
  </div>
  </div>
  
</div>


@endsection