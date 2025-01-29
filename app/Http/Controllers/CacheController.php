<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\Cache\CacheInterface;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;

final class CacheController extends Controller
{
    public function __construct(private CacheInterface $cache) {}

    public function __invoke()
    {
        $project = Project::query()->find('34');
//        dd($project);
        if ($this->cache->has('project')) {
            \Log::info('Cache !');
            return response()->json(['project' => $this->cache->get('project')]);
        }
        $this->cache->set('project', $project->name, 60);
        \Log::info('added Cache !');
        return response()->json(['project' => $this->cache->get('project')]);
    }
}
