<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
  public function index()
  {
    $dataFromGS = json_decode(file_get_contents('http://gsx2json.com/api?id=1nKo9EBv5h2ZJEZYzzC1Hyzp3Zyi3nwR2PEmSBOEAYzM&columns=false'));
    return view('pages.home')->with('data', $dataFromGS->rows);
  }
}
