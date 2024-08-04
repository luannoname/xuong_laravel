<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $title = 'Quản Lý Đơn Hàng';

    public function index()
    {
        $title = $this->title;
        $table = 'Danh sách đơn hàng';

        $orders = Order::query()->orderByDesc('id')->get();

        $orderStatus = Order::ORDER_STATUS;

        $type_cancel = Order::CANCEL;

        return view('admin.orders.index', compact('title', 'table', 'orders', 'orderStatus', 'type_cancel'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = $this->title;
        $table1 = 'Danh sách đơn hàng';
        $table2 = 'Chi tiết đơn hàng';

        $order = Order::query()->findOrFail($id);
        $orderStatus = Order::ORDER_STATUS;

        $type_cancel = Order::CANCEL;
        $paymentStatus = Order::PAYMENT_STATUS;

        return view('admin.orders.show', compact('order', 'orderStatus', 'paymentStatus', 'title', 'table1', 'table2', 'type_cancel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::query()->findOrFail($id);

        $currentStatus = $order->order_status;

        $newStatus = $request->input('order_status');

        $arrStatus = array_keys(Order::ORDER_STATUS);

        // nếu đơn hàng đã hủy thì không được thay đổi trạng thái nữa
        if ($currentStatus === Order::CANCEL) {
            return redirect()->route('admin.orders.index')->with('error', 'Đơn hàng đã bị hủy không thể thay đổi trạng thái');
        }

        // kiểm tra nếu trạng thái mới không được nằm sau trạng thái cũ
        if (array_search($newStatus, $arrStatus) < array_search($currentStatus, $arrStatus)) {
            return redirect()->route('admin.orders.index')->with('error', 'Không thể cập nhật lại trạng thái trước đó');
        }

        $order->order_status = $newStatus;

        $order->save();

        return redirect()->route('admin.orders.index')->with('success', 'Cập nhật trạng thái thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // khi user đã hủy đơn thì mới được xóa
        $order = Order::query()->findOrFail($id);

        if ($order && $order->order_status == Order::CANCEL) {
            $order->orderItems()->delete();

            $order->delete();

            return response()->json(['success' => 'Xóa đơn hàng thành công']);
        }
       
        return response()->json(['error' => 'Đã xảy ra lỗi khi xóa đơn hàng'], 404);
    }
}
