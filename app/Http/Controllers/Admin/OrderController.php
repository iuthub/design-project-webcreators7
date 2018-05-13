<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 14:43
 */
namespace inha_store\Http\Controllers\Admin;
use inha_store\Models\Order;
use Illuminate\Http\Request;
use inha_store\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $params = [
            'title' => 'List of Orders',
            'orders' => $orders,
        ];
        return view('admin.orders.orders_list')->with($params);
    }
}
