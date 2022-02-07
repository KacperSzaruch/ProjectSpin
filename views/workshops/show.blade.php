@extends('layouts.app2')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
                <div class="col-lg-12 col-10 text-right pb-4">                  
                </div>
                <div class="row pb-5">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card card-stats mb-12 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h1 font-weight-bold mb-0" style="font-size: 45px;">{{$workshop->title}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="col-lg-6 col-5 text-right">
                                        @if (auth()->user()->id == $workshop->userID)
                                        <a href="/workshop/delete/{{ $workshop->id}}" class="btn btn-sm btn-danger">Usuń</a>                                                      
                                        @endif
                                    </div>
                                    </div>
                                 </div>
                                 </br></br></br></br>
                                 <h4 class="card-title text-uppercase  mb-0"style="font-size: 25px;">Opis</h4>
                                 <span class="h3 font-weight-bold mb-0">{{$workshop->description}}</span>
                                    </br></br>  </br> 
                                 <h4 class="card-title   mb-0"style="font-size: 25px;">Czas wydarzenia</h4>
                                 <span class="h3 font-weight-bold mb-0 ml-1">{{$workshop->time}}</span>
                                   </br></br>  </br> 
                                 <h4 class="card-title   mb-0"style="font-size: 25px;">Autor</h4>
                                 <span class="h3 font-weight-bold mb-0 ">{{$user->name}}</span>
                                 </br>
                                 <div class="col-auto" style="min-height: 15px;">
                                        
                                 </div>
                            </div>
                        </div>
                    </div>                                   
                </div>
        </div>
    </div>
</div>
    
    
    @include('layouts.footers.auth')
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush


