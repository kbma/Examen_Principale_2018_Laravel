<?php

namespace App\Http\Controllers;

use App\Computer;
use App\ComputerUser;
use App\Http\Requests\AddComputerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComputerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers= Computer::paginate(5);
        return view('computers',['computers'=>$computers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddComputerRequest $request)
    {
        $computer = new Computer();
        $computer->macAdress =$request->macAdress;
        $computer->model =$request->model;
        $computer->system =$request->system;
        $computer->purchaseDate  =$request->purchaseDate;
        $computer->departement_id  =$request->departement_id;
        $computer->save();
        return redirect()->route('computers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer= Computer::where('id',$id)->first();
        return view('edit',['computer'=>$computer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $computer = Computer::where('id',$id)->first();

        $computer->macAdress= $request->macAdress;
      $computer->model = $request->model;
        $computer->system= $request->system;
        $computer->purchaseDate= $request->purchaseDate;
        $computer->departement_id= $request->departement_id;
        $computer->save();
        return redirect()->route('computers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Computer::find($id)->delete();
        return redirect()->route('computers');
    }


    public function disponibles(){
         $computersDiponibles = Computer::all();
        return view('disponibles',['computersDiponibles'=>$computersDiponibles]);
    }

    public function mescomputers(){
        $mescomputers = ComputerUser::where('user_id',Auth::id())->get();
       // echo $mescomputers;
       return view('home',['mescomputers'=>$mescomputers]);
    }

    public function reserver($id){
        $reservation = new ComputerUser();
       // dd(Auth::id());
        $reservation->user_id=Auth::id();
        $reservation->computer_id=$id;

        $reservation->save();
        return redirect()->route('home');
    }

    public function liberer($id){
       ComputerUser::where('id',$id)->delete();
        return redirect()->route('home');
    }
}
