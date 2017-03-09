<?php
/**
 * Created by PhpStorm.
 * User: delimce
 * Date: 21/12/2016
 * Time: 5:07 PM
 */

namespace app\Http\Controllers;

use App\Libs\Api\RestApi;
use App\Models\Charts\VwDealsTotals;
use App\Models\Charts\VwSellersTotals;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ChartsController extends BaseController
{


    /** whole totals data
     * @return mixed
     */
    public function getMainData()
    {

        $resp = new RestApi();
        $data = VwDealsTotals::all();

        $resp->setContent($data);

        return $resp->responseJson();
    }


    /**
     * totals
     */
    public function getTotals()
    {

        $resp = new RestApi();

        $data = VwDealsTotals::select("code", "name", "si", "gmvlc", "quarter")->get();

        $result = array();

        foreach ($data as $deal) {

            $temp = array("code" => $deal->code, "name" => $deal->name, "si" => $deal->si, "gmv" => $deal->gmvlc, "quarter" => $deal->quarter);

            $result[] = $temp;


        }

        $resp->setContent($result);

        return $resp->responseJson();

    }


    public function getSellerListTotals()
    {

        $resp = new RestApi();

        $data = VwSellersTotals::all();


        $result = array();

        foreach ($data as $seller) {

            $temp = array("id" => $seller->seller_id,
                "name" => $seller->name,
                "si" => $seller->si,
                "gmv" => $seller->gmv,
                "asp" => bcdiv($seller->gmv,($seller->si==0)?1:$seller->si,2)
            );

            $result[] = $temp;


        }

        $resp->setContent($result);

        return $resp->responseJson();


    }


}