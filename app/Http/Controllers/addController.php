<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Add;
use Illuminate\Support\Facades\Validator;
//use Validator;

class addController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function index()
    {
        return view('add');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required'],
            'route' => ['required'],
            'fare' => ['required'],
            'departure' => ['required'],
            'arrival' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $req)
    {
        $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'route' => ['required'],
            'fare' => ['required'],
            'departure' => ['required'],
            'arrival' => ['required'],
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

        }

        /*return Add::create([
            'name'      => $req['name'],
            'operator' => $req['operator'],
            'seat_row' => $req['seat_row'],
            'seat_column' => $req['seat_column'],
            'route' => $req['route'],
            'fare' => $req['fare'],
            'departure' => $req['departure'],
            'arrival' => $req['arrival'],
        ]);*/
        $add = new Add;
        $add->name     = $req['name'];
        $add->operator = $req['operator'];
        $add->seat_row = $req['seat_row'];
        $add->seat_column = $req['seat_column'];
        $add->route = $req['route'];
        $add->fare = $req['fare'];
        $add->departure = $req['departure'];
        $add->arrival = $req['arrival'];
        if($add->save()){
            return redirect()->route('busshedule');
        }else{
            return redirect()->route('add');
        }
    }
    public function list(){
        $adds = Add::all();
        return view('busshedule', ['adds'=>$adds]);
    }
    public function edit($id){

        $add = Add::find($id);
        return view('edit', $add);
    }

    public function update($id, Request $req){

         $validation = Validator::make($req->all(), [
            'name' => ['required'],
            'route' => ['required'],
            'fare' => ['required'],
            'departure' => ['required'],
            'arrival' => ['required'],
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

        }

        $add = Add::find($id);
        $add->name     = $req->name;
        $add->operator = $req->operator;
        $add->route     = $req->route;
        $add->fare     = $req->fare;
        $add->departure = $req->departure;
        $add->arrival     = $req->arrival;

        if($add->save()){
            return redirect()->route('busshedule');
        }else{
            return redirect()->route('edit', $id);
        }
    }

    public function delete($id){
        $add = Add::find($id);
        return view('delete', $add);
    }   
    public function destroy($id, Request $req){
        if(Add::destroy($req->id)){
            return redirect()->route('busshedule');
        }else{
            return redirect()->route('delete', $id);
        }
    }
}
