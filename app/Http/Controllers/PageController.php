<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where("orario_di_partenza", '>=', now())->orderBy('orario_di_partenza', 'asc')->get();
        return view("index", compact('trains'));
    }
}
