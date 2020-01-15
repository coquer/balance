<?php

namespace App\Http\Controllers;

use App\Type;
use App\Task;
use Illuminate\Support\Arr;
use JavaScript;
use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ChartDataController extends Controller
{
    public function index()
    {

    }

    public function today()
    {
        $arr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, '00'];

        $today = Carbon::now()->format('d');
//
        $a = Activity::all();
        for ($i = 1; $i <= count($arr); $i++) {
            $k = $a->whereDay('created_at', $today)->whereTime('paid_at', array_search())->get();
            dd(Arr::flatten($k));
        }
//
//        dd(Arr::flatten($arr));
//        //$a->whereDay('created_at', $today)->get();
//        //dd($a);

    }

    public function week()
    {

    }

    public function month()
    {

    }

    public function year()
    {

    }
}
