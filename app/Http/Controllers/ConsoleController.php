<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Novel;
use App\Http\Requests;
use App\Repositories\Snatch\Biquge;
use Cache;

class ConsoleController extends Controller
{
    public function fillContent()
    {
        set_time_limit(0);
        $models = Chapter::where('novel_id',2)->where('content','')->get();
        $biquge = new Biquge();
        foreach($models as $model){
            $biquge->getContent($model);
        }
    }
}
