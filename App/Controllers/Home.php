<?php

namespace App\Controllers;

use Core\Controller;
use Core\Http\Res;
use Core\View;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

class Home extends Controller
{
  public function index()
  {
    View::render("login.html");
  }
  public function dashboard()
  {
    View::draw('dashboard/index');
  }


  public function chat()
  {
    View::draw('ai/chat');
  }
  public function ai($p)
  {
    try {
      $client = new Client('AIzaSyAmuaUxJwMad_sHpXEscxEEeW7H1f5mpXg');
      $response = $client->geminiPro()->generateContent(
        new TextPart($p->prompt),
      );
      Res::send($response->text());
    } catch (\Throwable $th) {
      Res::status(400)::throwable($th);
    }
  }
}
