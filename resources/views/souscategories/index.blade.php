@extends('welcome')
@section('contenu')
<section class="page-section " >

    <div class="album py-5 bg-light">
      <div class="container">
    
        <div class="row  row-cols-md-3 ">
          @foreach( $souscategory as  $souscategorie)
          <div class="col">
            <div class="">
              <img class="card-img-top " src="{{asset('storage/'. $souscategorie->image)}}" alt="Card image cap "/>
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('partenaires',['partenaires'=>$souscategorie->titre])}}">{{ $souscategorie->titre}}</a></h5>
    
               
              </div>
            </div>
          </div>
          @endforeach
        </div>  
        
      </div>
    </div>
    
    </section>
    {{$souscategory->appends(request()->input())->links() }}
    @endsection
