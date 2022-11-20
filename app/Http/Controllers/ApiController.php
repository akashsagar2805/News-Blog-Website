<?php

namespace App\Http\Controllers;

use App\Models\NewsApi;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request, $category = null)
    {

        $url = config('newsapi.base_url')
            . '/top-headlines?country=in'
            . ($request->search ? '&q=' . $request->search : '')
            . ($category != null ? '&category=' . $category : '')
            . '&apiKey=' . config('newsapi.api_key');

        $response = Http::get($url)
            ->json();


        return view('index', compact('response'));
    }
}
