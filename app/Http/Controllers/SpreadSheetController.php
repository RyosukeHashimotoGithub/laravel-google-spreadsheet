<?php

namespace App\Http\Controllers;

class SpreadSheetController extends Controller
{
    public function get(string $id)
    {
        $url = 'https://spreadsheets.google.com/feeds/list/' . $id . '/od6/public/values?alt=json';
        $data = json_decode(file_get_contents($url));
        dd($data->feed->entry);
    }
}
