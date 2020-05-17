@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD BUSES SHEDULE') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="operator" type="text" class="form-control @error('operator') is-invalid @enderror" name="operator" value="{{ old('operator') }}" required autocomplete="operator" autofocus>

                                @error('operator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="seat_row" class="col-md-4 col-form-label text-md-right">{{ __('Seat_row') }}</label>

                            <div class="col-md-6">
                                <input id="seat_row" type="text" class="form-control @error('seat_row') is-invalid @enderror" name="seat_row" value="{{ old('seat_row') }}" required autocomplete="seat_row" autofocus>

                                @error('seat_row')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="seat_column" class="col-md-4 col-form-label text-md-right">{{ __('Seat_column') }}</label>

                            <div class="col-md-6">
                                <input id="seat_column" type="text" class="form-control @error('seat_column') is-invalid @enderror" name="seat_column" value="{{ old('seat_column') }}" required autocomplete="seat_column" autofocus>

                                @error('seat_column')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="route" class="col-md-4 col-form-label text-md-right">{{ __('Route') }}</label>

                            <div class="col-md-6">
                                <input id="route" type="text" class="form-control @error('route') is-invalid @enderror" name="route" value="{{ old('route') }}" required autocomplete="route" autofocus>

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
                                <input id="fare" type="text" class="form-control @error('fare') is-invalid @enderror" name="fare" value="{{ old('fare') }}" required autocomplete="fare" autofocus>

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
                                <input id="departure" type="text" class="form-control @error('departure') is-invalid @enderror" name="departure" value="{{ old('departure') }}" required autocomplete="departure" autofocus>

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
                                <input id="arrival" type="text" class="form-control @error('arrival') is-invalid @enderror" name="arrival" value="{{ old('arrival') }}" required autocomplete="arrival" autofocus>

                                @error('arrival')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
