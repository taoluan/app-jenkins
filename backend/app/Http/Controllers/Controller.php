<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function tast()  {
        $this->foo("ab");
    }

    public function foo($a) { // Noncompliant, function will return "true" or null
        if ($a == 1) {
          return true;
        }
        return;
      }
}
