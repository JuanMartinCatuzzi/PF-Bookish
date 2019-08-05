<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subscription;
use App\Modality;
use App\Book;
use Illuminate\Support\Facades\DB;
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
     //Agregar Categoría
    public function store(Request $request)
    {
      $datos = $request->all();
      $category=Category::create(['title'=>$datos['title'], 'description'=>$datos['description']]);
      // dd($category);
      Subscription::create(['price'=>$datos['reg-price'], 'category_id'=>$category->id, 'modality_id'=>1]);
      Subscription::create(['price'=>$datos['int-price'], 'category_id'=>$category->id, 'modality_id'=>2]);
      Book::create(['title'=>$datos['firstBook'], 'autor'=>$datos['firstBookAutor'], 'category_id'=>$category->id, 'modality_id'=>1]);
      Book::create(['title'=>$datos['secondBook'], 'autor'=>$datos['secondBookAutor'], 'category_id'=>$category->id, 'modality_id'=>1]);
      Book::create(['title'=>$datos['thirdBook'], 'autor'=>$datos['thirdBookAutor'], 'category_id'=>$category->id, 'modality_id'=>1]);
      Book::create(['title'=>$datos['fourthBook'], 'autor'=>$datos['fourthBookAutor'], 'category_id'=>$category->id, 'modality_id'=>2]);
      Book::create(['title'=>$datos['fifthBook'], 'autor'=>$datos['fifthBookAutor'], 'category_id'=>$category->id, 'modality_id'=>2]);
      Book::create(['title'=>$datos['sixthBook'], 'autor'=>$datos['sixthBookAutor'], 'category_id'=>$category->id, 'modality_id'=>2]);
      return redirect('/admin-categorias');
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd($request);
      $category=Category::find($id);
      $books=Book::all();
      $libros=[];
      $subscriptions=Subscription::all();
      $subscripciones=[];
      $modalities=Modality::all();
      // dd($category);
      // dd($request->title);
      foreach ($books as $book) {
        if ($book->category_id=$category->id) {
          array_push($libros, $book);
        }
      }
      $libros[0]->title=$request->firstBook;
      $libros[0]->autor=$request->firstBookAutor;
      $libros[0]->save();
      $libros[1]->title=$request->secondBook;
      $libros[1]->autor=$request->secondBookAutor;
      $libros[1]->save();
      $libros[2]->title=$request->thirdBook;
      $libros[2]->autor=$request->thirdBookAutor;
      $libros[2]->save();
      $libros[3]->title=$request->fourthBook;
      $libros[3]->autor=$request->fourthBookAutor;
      $libros[3]->save();
      $libros[4]->title=$request->fifthBook;
      $libros[4]->autor=$request->fifthBookAutor;
      $libros[4]->save();
      $libros[5]->title=$request->sixthBook;
      $libros[5]->autor=$request->sixthBookAutor;
      $libros[5]->save();
      // $libros->save();
      // dd($libros);

      foreach ($subscriptions as $subscription) {
        if ($subscription->category_id=$category->id) {
          array_push($subscripciones, $subscription);
        }
      }
      $subscripciones[0]->price=$request['reg-price'];
      $subscripciones[0]->save();
      $subscripciones[1]->price=$request['int-price'];
      $subscripciones[1]->save();
      // dd($subscripciones[0]);
      $category->title=$request->title;
      $category->description=$request->description;
      $category->save();
      return redirect('/admin-categorias');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category=Category::find($id);
      $books=Book::all();
      $subscriptions=Subscription::all();
      $libros = [];
      $subscripciones=[];
      foreach ($books as $book) {
        if ($book->category_id=$category->id) {
          array_push($libros, $book);
        }
      }
      foreach ($subscriptions as $subscription) {
        if ($subscription->category_id==$category->id) {
          array_push($subscripciones, $subscription);
        }
      }
      // dd($libros);
      // dd($subscripciones);
      // dd($category);
        return view('categoria')->with('category', $category)->with('subscriptions', $subscripciones)->with('books', $libros);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('category_id', '=', $id)->delete();
        DB::table('subscriptions')->where('category_id', '=', $id)->delete();
        Category::find($id)->delete();
        return redirect('/admin-categorias');
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
      $categories=Category::all();
      $modalities=Modality::all();
      $subscriptions=Subscription::all();


      return view('admin-categorias')->with('categories', $categories)->with('subscriptions', $subscriptions)->with('modalities', $modalities);
    }
}
