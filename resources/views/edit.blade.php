@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Edit Bus Shedule</h2></div>&nbsp
              
                <div class="card-body">
		             <form method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" readonly name="id" value="{{$id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$name}}" required autocomplete="name" autofocus>

                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="operator" class="col-md-4 col-form-label text-md-right">{{ __('Operator') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="operator" value="{{$operator}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="route" class="col-md-4 col-form-label text-md-right">{{ __('Route') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('route') is-invalid @enderror" name="route" value="{{$route}}" required autocomplete="route" autofocus>

                                 @error('route')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fare" class="col-md-4 col-form-label text-md-right">{{ __('Fare') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('fare') is-invalid @enderror" name="fare" value="{{$fare}}" required autocomplete="fare" autofocus>

                                 @error('fare')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departure" class="col-md-4 col-form-label text-md-right">{{ __('Departure') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('departure') is-invalid @enderror" name="departure" value="{{$departure}}" required autocomplete="departure" autofocus>

                                 @error('departure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="arrival" class="col-md-4 col-form-label text-md-right">{{ __('Arrival') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('arrival') is-invalid @enderror" name="arrival" value="{{$arrival}}" required autocomplete="arrival" autofocus>

                                 @error('arrival')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4"> 
			               <input type="submit" name="submit" value="Save">
			             </div>
                       </div>
                       <a href="{{route('busshedule')}}"><h4>Back</h4></a>
		             </form>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


