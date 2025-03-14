<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobs\ExportProjectsJob;
use App\Models\Project;
use Illuminate\Http\Request;

final class ExportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $projects = Project::query()->get();

//        $data = [];
//        foreach ($projects as $project) {
//            $data[] = ['id' => $project->id, 'name' => $project->name];
//        }
//
//        dd($data);
        dispatch(new ExportProjectsJob($projects));

        return back()->with('success', 'Projects exported');
    }
}
