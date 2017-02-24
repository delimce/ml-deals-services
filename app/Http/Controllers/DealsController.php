<?php
/**
 * Created by PhpStorm.
 * User: delimce
 * Date: 21/12/2016
 * Time: 5:07 PM
 */

namespace app\Http\Controllers;

use App\Libs\Api\RestApi;
use App\Models\Deals\MlDeal;
use Laravel\Lumen\Routing\Controller as BaseController;

class DealsController extends BaseController
{


    /** whole deals list
     * @return mixed
     */
    public function getAll()
    {

        $resp = new RestApi();
        $data = MlDeal::select("id", "code", "name", "active")->get();

        $result = array();

        foreach ($data as $deal) {

            $temp = array("id" => $deal->id, "code" => $deal->code, "name" => $deal->name, "active" => $deal->active);

            $result[] = $temp;

        }

        $resp->setContent($result);

        return $resp->responseJson();
    }


}