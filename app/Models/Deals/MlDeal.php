<?php
/**
 * Created by PhpStorm.
 * User: delimce
 * Date: 21/12/2016
 * Time: 5:16 PM
 */

namespace app\Models\Deals;

use Illuminate\Database\Eloquent\Model;

class MlDeal extends Model
{

    protected $table = "ml_deal";
    public $timestamps = false;


    public function details()
    {
        return $this->hasMany('MlDealDetail');
    }


}