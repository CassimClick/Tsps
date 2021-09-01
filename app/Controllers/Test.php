<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
    public function index()
    {
        $d1 = date('Y-m-d', strtotime("+10 days"));
        $d2 = date('Y-m-d', strtotime("+12 days"));

        if ($d1 > $d2) {
            echo 'd1 is big';

        } else {
            echo 'd2 is big';

        }

    }
}