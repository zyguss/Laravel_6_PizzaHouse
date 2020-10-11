<?php

namespace App\Http\Controllers;
# Laravel 6
// use Illuminate\Http\Request;
// use App\Pizza;
use App\Http\Controllers\Controller;
use App\Models\Pizza;

class PizzaController extends Controller
{

  # primenjuje autentifikaciju na sve pizza metode, a to nam ne treba
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index() {

    // $pizzas = Pizza::all();  
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
    $pizzas = Pizza::latest()->get();      

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    $pizza = Pizza::findorFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create()
  {
      return view('pizzas.create');
  }

  public function store()
  {
      $pizza = new Pizza();
      $pizza->name = request('name');
      $pizza->type = request('type');
      $pizza->base = request('base');
      $pizza->toppings = request('toppings');

      $pizza->save();

      return redirect ('/')->with('mssg', 'Thanks for your order');
  }

  public function destroy($id)
  {
      $pizza = Pizza::findorFail($id);
      $pizza->delete();
      return redirect('/pizzas');
  }

}

