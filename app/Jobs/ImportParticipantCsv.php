<?php

namespace App\Jobs;

use App\Imports\ParticipantsImport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ImportParticipantCsv implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $file;
    public int $phase_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $file, int $phase_id)
    {
        $this->file = $file;
        $this->phase_id = $phase_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file = Storage::path($this->file);
        $extension = pathinfo(storage_path($this->file), PATHINFO_EXTENSION);
        if ($extension === 'xls' || $extension === 'xlsx'):
            Excel::import(new ParticipantsImport($this->phase_id), $file);
        else:
            (new ParticipantsImport($this->phase_id))->queue($file);
        endif;
    }
    // output
}

