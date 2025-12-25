<?php

namespace App\Http\Controllers\Api;
use App\Classes\UserClass;

use Yajra\Datatables\Facades\Datatables;

class UserApiController
{
    public function getData(){
        $class = new UserClass();

        return $class->getData();
    }
}
