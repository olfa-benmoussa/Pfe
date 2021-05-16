@extends('welcome')
@section('contenu')
<section class="page-section " >

    <div class="album py-5 bg-light">
      <div class="container">
    
        <div class="row  row-cols-md-3 ">
          @foreach( $partenaires as  $partenaire)
          <div class="col">
            <div class="">
              <img class="card-img-top " src="{{asset('storage/'. $partenaire->logo)}}" alt="Card image cap "/>
              <div class="card-body">
                <h5 class="card-title">{{ $partenaire->nom}}</h5>
    
               
              </div>
            </div>
          </div>
          @endforeach
        </div>  
        
      </div>
    </div>
    
    </section>
    {{$partenaires->appends(request()->input())->links() }}
    @endsection
