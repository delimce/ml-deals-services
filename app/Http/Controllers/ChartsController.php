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
     * successful items
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


}