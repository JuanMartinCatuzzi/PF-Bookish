<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Subscription;
use App\Category;
use App\Modality;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request['subscription']);
        $subscriptions = Subscription::all();
        $user=Auth::user()->id;
        foreach ($subscriptions as $subscription) {
          if ($subscription->id == $request["subscription"]) {
            $compra = $subscription;
          }
        }
        //dd($compra);
        DB::table('carts')->insertGetId(
          ['user_id'=>$user, 'subscription_id'=>$compra->id, 'estado'=>'PENDIENTE']
        );
        return view('compra-realizada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function administrarVentas(){
      $pendientes = DB::table('carts')->where('estado', '=', 'PENDIENTE')->get();
      // dd($pendientes);
      $subscriptions=Subscription::all();
      $categories = Category::all();
      $modalities = Modality::all();
      $users = User::all();
      // dd($users);

      return view('admin-ventas')->with('pendientes', $pendientes)->with('categories', $categories)->with('modalities', $modalities)->with('users', $users)->with('subscriptions', $subscriptions);
    }
    public function marcarComoEntregado(Request $request){
      //dd($request);
      $pendientes = DB::table('carts')->where('estado', '=', 'PENDIENTE')->get();
      $marcados = $request->all();
       //dd($request);
       // dd($marcados);
       foreach ($marcados as $marcado =>$valor) {
        foreach ($pendientes as $pendiente) {
          if ($valor == $pendiente->id) {
            DB::table('carts')->where('id', '=', $request[$pendiente->id])->update(['estado'=>'ENTREGADO']);
          }
          }
      }
      return redirect('/ver-ventas');
    }
}
