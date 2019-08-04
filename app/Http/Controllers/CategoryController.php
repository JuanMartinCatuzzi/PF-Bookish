<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subscription;
use App\Modality;
use App\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
      $subscriptions = Subscription::all();
      $modalities = Modality::all();
      $books = Book::all();
      return view('categorias')->with('categories', $categories)->with('subscriptions', $subscriptions)->with('modalities', $modalities)->with('books', $books);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function comprar(Request $request){

      //dd($request);
      //dd($request['Subscription']);
      $categories=Category::all();
      $subscriptions=Subscription::all();
      $modalities=Modality::all();
      foreach ($subscriptions as $subscription) {
        if ($subscription->id == $request['Subscription']) {
          $compra = $subscription;
        }
      }
      foreach ($categories as $category) {
        if ($compra->category_id==$category->id) {
          $categoria=$category;
        }
      }
      foreach ($modalities as $modality) {
        if ($compra->modality_id==$modality->id) {
          $modalidad=$modality;
        }
      }
      //dd($compra);
      return view('compra')->with('subscription', $compra)->with('categoria', $categoria)->with('modalidad', $modalidad);
    }
    public function administrarCategorias(){

      return view('admin-categorias');
    }
}
