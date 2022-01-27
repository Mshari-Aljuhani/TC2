<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Merchant;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'title',
        'merchant_id',
        'main_pic',
        'pic2',
        'pic3',
        'start_at',
        'end_at',
        'retails_price',
        'price',
        'description',
        'more_info',
        'location',
        'status',
    ];

    public function user(){
        return$this->belongsTo(User::class);
    }
    public function merchant(){
        return$this->belongsTo(Merchant::class, 'merchant_id');
    }
    //M2M between Deal&Category
    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->BelongsToMany(Category::class, 'deals_categories',
            'deal_id',
            'category_id');
    }
    public function orders(){
        return $this->belongsTo(Order::class,'orders_deals',
            'deal_id',
            'order_id');
    }

}
