<?php

namespace Modules\Staff\Order\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Setting\Models\Setting;

class StaffOrderController extends Controller
{

    public function index()
    {
      $orders = Order::paginate(1);
      return view('stafforder::index', compact('orders'));
    }

    public function details($id)
    {
      $order = Order::find($id);
      return view('stafforder::details', compact('order'));
    }

    public function invoice($id)
    {
      $settings = Setting::all();

      if(count($settings->where('name', 'invoice_stamp')->first()->media)){
        $stamp_image = $settings->where('name', 'invoice_stamp')->first()->media()->first();
      }
      else {
        $stamp_image = null;
      }

      $order = Order::find($id);

      return view('stafforder::invoice', compact('order', 'settings', 'stamp_image'));
    }

    public function search(Request $request, Order $orders)
    {
      (!$request->paginatorNum) ? $request->paginatorNum = 1 : '';

      $orders = $this->searchFilter($request, $orders);

      return view('stafforder::ajax.searchResult', compact('orders'));
    }

    public function searchFilter($request, $orders)
    {
      $orders = $orders->newQuery();

      if (!is_null($request->search_order_status)) {
        if ($request->search_order_status == 'awaiting_peyment') {
          $orders->where('status_id', 1);
        }

        if ($request->search_order_status == 'confirmed') {
          $orders->where('status_id', 2);
        }

      }

      return $orders->paginate($request->paginatorNum);

    }

}
