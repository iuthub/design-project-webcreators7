<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 14:32
 */
namespace Larashop\Http\Controllers\Admin;
use inha_store\Models\Brand;
use inha_store\Models\Product;
use Illuminate\Http\Request;
use inha_store\Models\Category;
use inha_store\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $params = [
            'title' => 'List of Products',
            'products' => $products,
        ];
        return view('admin.products.products_list')->with($params);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $params = [
            'title' => 'Create Product',
            'categories' => $categories,
        ];
        return view('admin.products.products_create')->with($params);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|unique:products',
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        $product = Product::create([
            'code' => $request->input('product_code'),
            'name' => $request->input('product_name'),
            'desc' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('prod_list')->with('success', "The product <strong>Product name</strong> has successfully been created.");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try
        {
            $product = Product::findOrFail($id);
            $params = [
                'title' => 'Delete Product',
                'product' => $product,
            ];
            return view('admin.products.products_delete')->with($params);
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $categories = Category::all();
            $product = Product::findOrFail($id);
            $params = [
                'title' => 'Edit Product',
                'categories' => $categories,
                'product' => $product,
            ];
            return view('admin.products.products_edit')->with($params);
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
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
        try
        {
            $this->validate($request, [
                'code' => 'required|unique:products,product_code,'.$id,
                'name' => 'required',
                'desc' => 'required',
                'price' => 'required',
                'category_id' => 'required',
            ]);
            $product = Product::findOrFail($id);
            $product->product_code = $request->input('product_code');
            $product->product_name = $request->input('product_name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->category_id = $request->input('category_id');
            $product->save();
            return redirect()->route('prod_list')->with('success', "The product <strong>$product->name</strong> has successfully been updated.");
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('products.index')->with('success', "The product <strong>$product->product_name</strong> has successfully been archived.");
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }
}
