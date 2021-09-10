<?php

namespace App;
require_once __DIR__ . '/vendor/autoload.php';



class HelloController {
public static function index($request, $response)
{
echo "<pre>";
var_dump($request);
echo "</pre>";
}
}



$app = new Slim\Slim\App();
$app->get('/', 'HelloController::index');
$app->run();

use App\Book\Book;
$book = new Book();

echo $book->path();

