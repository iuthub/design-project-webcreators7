<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 14:40
 */

namespace inha_store\Http\Controllers\Admin;
use Illuminate\Http\Request;
use inha_store\Models\Category;
use inha_store\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $params = [
            'title' => 'List of Categories',
            'categories' => $categories,
        ];
        return view('admin.categories.categories_list')->with($params);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'title' => 'Create Product Category',
        ];
        return view('admin.categories.categories_create')->with($params);
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
            'name' => 'required|unique:categories',
            'description' => 'required',
        ]);
        $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('categories')->with('success', "The product category <strong>$category->name</strong> has successfully been created.");
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
            $category = Category::findOrFail($id);
            $params = [
                'title' => 'Edit Product Category',
                'category' => $category,
            ];
            return view('admin.categories.categories_delete')->with($params);
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
            $category = Category::findOrFail($id);
            $params = [
                'title' => 'Edit Product Category',
                'category' => $category,
            ];
            return view('admin.categories.categories_edit')->with($params);
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
                'name' => 'required|unique:categories,name,'.$id,
                'description' => 'required',
            ]);
            $category = Category::findOrFail($id);
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->save();
            return redirect()->route('product-categories.index')->with('success', "The product category <strong>Category</strong> has successfully been updated.");
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
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('product-categories.index')->with('success', "The product category <strong>Category</strong> has successfully been archived.");
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
