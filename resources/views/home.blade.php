@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Home Page</h3></div>
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                    
                     @auth
                            <a href="{{url('/profile/{id}')}}"><h4>Profile</h4></a><br>
                            <a href="{{ url('/add') }}"><h4>Add Bus Shedule</h4></a><br>
                            <a href="{{ url('/busshedule') }}"><h4>Bus Shedule</h4></a><br>
                            <a href="{{ url('/busSummary') }}"><h4>Bus Summary</h4></a>
                    @endauth
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection