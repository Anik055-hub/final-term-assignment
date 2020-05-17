@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Bus Shedule</h2></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">
		           <tr>
			         <th><h5>Id</h5></th>
			         <th><h5>Name</h5></th>
			         <th><h5>Operator</h5></th>
			         <th><h5>Route</h5></th>
			         <th><h5>Fare</h5></th>
			         <th><h5>Departure</h5></th>
			         <th><h5>Arrival</h5></th>
			         <th><h5>Action</h5></th>
		           </tr>
		
		        @foreach($adds as $add)
		           <tr>
			         <td><h6>{{$add['id']}}</h6></td>
			         <td><h6>{{$add['name']}}</h6></td>
			         <td><h6>{{$add['operator']}}</h6></td>
			         <td><h6>{{$add['route']}}</h6></td>
			         <td><h6>{{$add['fare']}}</h6></td>
			         <td><h6>{{$add['departure']}}</h6></td>
			         <td><h6>{{$add['arrival']}}</h6></td>
			         <td>
				        <a href="{{route('edit', $add['id'])}}">Edit</a> | 
				        <a href="{{route('delete', $add['id'])}}">Delete</a> 
			         </td>
		           </tr>
		        @endforeach
	           </table><br>
	           <a href="{{route('home')}}"><h4>Back</h4></a>
             </div>
          </div>
      </div>
   </div>
</div>
@endsection