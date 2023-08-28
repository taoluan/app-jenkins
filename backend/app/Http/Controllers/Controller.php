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
        $curl = 21313;
        $MessageFile = "messages.out";
            if ($_GET["action"] == "NewMessage") {
            $name = $_GET["name"];
            $message = $_GET["message"];
            $handle = fopen($MessageFile, "a+");
            fwrite($handle, "<b>$name</b> says '$message'<hr>\n");
            fclose($handle);
            echo "Message Saved!<p>\n";
            }
            else if ($_GET["action"] == "ViewMessages") {
            include($MessageFile);
            }
      }

      public  function encryptPassword($password){
        $iv_size = mcrypt_get_iv_size(MCRYPT_DES, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $key = "This is a password encryption key";
        $encryptedPassword = mcrypt_encrypt(MCRYPT_DES, $key, $password, MCRYPT_MODE_ECB, $iv);
        return $encryptedPassword;
        }
}
