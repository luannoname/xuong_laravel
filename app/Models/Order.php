<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDER_STATUS = [
        'pending' => 'Chờ xác nhận',
        'confirmed' => 'Đã xác nhận',
        'prepraring' => 'Đang chuẩn bị hàng',
        'shipping' => 'Đang giao hàng',
        'delivered' => 'Đã giao hàng',
        'cancel' => 'Đơn hàng đã hủy',
    ];
    
    const PAYMENT_STATUS = [
        'paid' => 'Đã thanh toán',
        'unpaid' => 'Chưa thanh toán'
    ];

    const PENDING = 'pending';
    const CONFIRMED = 'confirmed';
    const PREPRARING = 'prepraring';
    const SHIPPING = 'shipping';
    const DELIVERED = 'delivered';
    const CANCEL = 'cancel';

    const PAID = 'paid';
    const UNPAID = 'unpaid';

    // const STATUS_PENDING = 'pending';


    // const UNPAID = 'unpaid';


    protected $fillable = [
        'user_id',
        'user_email',
        'user_name',
        'user_address',
        'user_phone',
        'receiver_email',
        'receiver_name',
        'receiver_address',
        'receiver_phone',
        'order_status',
        'payment_status',
        'total_price',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

}
