<?php
/**
 * Created by PhpStorm.
 * User: delimce
 * Date: 21/12/2016
 * Time: 5:16 PM
 */

namespace app\Models\Deals;

use Illuminate\Database\Eloquent\Model;

class MlDealDetail extends Model
{

    protected $table = "ml_deal_detail";
    public $timestamps = false;


    public function deal()
    {
        return $this->belongsTo('MlDeal');
    }

}