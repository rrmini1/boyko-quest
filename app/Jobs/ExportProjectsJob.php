<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Project;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\SimpleExcel\SimpleExcelWriter;

final class ExportProjectsJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private Collection $projects) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $pathToCsv= storage_path('/app/private/projects.xlsx');
        $writer = SimpleExcelWriter::create($pathToCsv, 'xlsx');
        foreach ($this->projects as $project) {
            $writer->addRow([
                'id' => $project->id,
                'name' => $project->name
            ]);
            $writer->close();
        }

    }
}
