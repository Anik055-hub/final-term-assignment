@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Bus Summary</h2></div>&nbsp
              
                <div class="card-body">
                        @csrf
	            <table border="2">

                   <tr>
			       
			         <th><h5>Name</h5></th>
			         <th><h5>Operator</h5></th>
			         <th><h5>Route</h5></th>
			         <th><h5>Amount</h5></th>
			         <th><h5>Booked Ticket</h5></th>
			        
		
		           </tr>

		
		        @foreach($adds as $add)
		           <tr>
			       
			         <td><h6>{{$add['name']}}</h6></td>
			         <td><h6>{{$add['operator']}}</h6></td>
			         <td><h6>{{$add['route']}}</h6></td>
			         <td><h6>{{$add['seat_row']}}</h6></td>
			         <td><h6>{{$add['seat_column']}}</h6></td>
			        
			      
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