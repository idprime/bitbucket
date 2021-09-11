<?php

namespace App\Http\Controllers;

use App\Models\FormLastRunner;
use App\Models\Runner;
use Illuminate\Support\Facades\Cache;

class RunnerController extends Controller
{
    private $data;
    public function index()
    {
        return Runner::all();
    }
    public function show($id)
    {

        //Check data already cached inside DB
        if (Cache::has($id)) {
            //if yes return the response
            return Cache::get($id);
        }

        //if not retrieve data from DB
        $runners = Runner::select("runners.*", "form_data.distance")
            ->join('form_data', 'form_data.runner_id', '=', 'runners.id')
            ->where('runners.id', $id)->get();

        //Check if data is empty or not
        if (!$runners->isEmpty()) {
            //Pass data to the client
            $this->data["success"] = true;
            $this->data["data"] = $runners;

            $last_runners = FormLastRunner::where('runner_id', $id)->get();
            if ($last_runners) {
                $this->data["last_runners"] = $last_runners;
            }
            $this->data["status"] = 200;
        } else {
            //Pass 404 response to the client if data is not available
            $this->data["success"] = false;
            $this->data["status"] = 404;
        }
        //Create cache record inside DB 
        Cache::put($id, $this->data, $seconds = 10);


        // $value = Cache::get('key');
        return $this->data;
    }
}
