<?php

namespace App\Http\Controllers;

use App\Services\ElectreService;
use Illuminate\Http\Request;

class InputController extends Controller
{
    protected ElectreService $service;
    public function __construct(ElectreService $service)
    {
        $this->service = $service;
    }
    public function index(Request $request)
    {
        return view("tampilan");
    }

    public function store(Request $request)
    {
        $criterias = $request->input("bobot");
        $n = count($criterias);
        $m = 5;
        // dd($this->service->normalizedMatrix($request->input('k')));
        
        $matrixArray2d = request()->input('k');
        $nMatrix = $this->service->normalizedMatrix($matrixArray2d);
        $matrixV = $this->service->weightingNormalizedMatrix($nMatrix, $criterias);

        $cdIndex = $this->service->findConcordanceDiscordanceIndex($matrixV, $m, $n);
        $C = $this->service->findConcordanceMatrix($cdIndex['concordance'], $criterias, $m);
        $D = $this->service->findDiscordanceMatrix($matrixV, $cdIndex['discordance'], $m, $n);
        $threshold_c = $this->service->findThresholdC($C, $m);
        $threshold_d = $this->service->findThresholdD($D, $m);
        $F = $this->service->findConcordanceDominance($C, $threshold_c);
        $G = $this->service->findDiscordanceDominance($D, $threshold_d);

        return $this->service->findAggregateDominance($F, $G);
    }
}
