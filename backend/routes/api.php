<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // $servername = "localhost";
    // $username = "your_username";
    // $password = "your_password";
    // $dbname = "your_database";

    // // Tạo kết nối đến cơ sở dữ liệu
    // $conn = new mysqli($servername, $username, $password, $dbname);
    $target = -5;
    $num = 3;
    $target =- $num; 
    $target =+ $num; 
    // $resultAnd = true and false; 
    // $userInput = $_GET['username'];
    // // Sanitize user input to prevent SQL injection
    // $cleanInput = mysqli_real_escape_string($conn, $userInput);
    // $query = "SELECT * FROM users WHERE username = '$cleanInput'";
    // mysqli_query($conn, $query);
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == 'admin' && $pass == 'admin123') {
        // Grant access
    }
    $userInput = $_GET['search'];
    echo "<div>" . $userInput . "</div>";
    return $request->user();
});
