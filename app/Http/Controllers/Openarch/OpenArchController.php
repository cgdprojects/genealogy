<?php

namespace App\Http\Controllers\Openarch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OpenArchController extends Controller
{
    private $openArchRecordsApi;

    public function __construct()
    {
        $this->openArchRecordsApi = config('services.openarch.api.records');
    }

    public function searchPerson(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', $this->openArchRecordsApi.'/search.json', ['query' => [
            'name' => $request->name,
            'number_show' => $request->per_page, // 100
            'start' => ($request->per_page * $request->page) - $request->per_page, // 2,
        ],
        ]);

        $response->getStatusCode();
        $response->getBody();
        $persons = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);

        return response()->json($persons);
    }
}
