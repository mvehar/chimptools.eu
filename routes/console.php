<?php

use App\Services\TimeFreezeService;
use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('px:freeze {force}', function (TimeFreezeService $freezeService, $force) {
    $updated = $freezeService->freezeNow($force ?: false);
    echo sprintf('updated: %d ' . PHP_EOL, $updated);
});

Artisan::command('px:defreeze {person} {year} {month}', function (TimeFreezeService $freezeService, int $person, int $year, int $month) {
    $updated = $freezeService->defreeze($person, $year, $month);
    echo sprintf('updated: %d ' . PHP_EOL, $updated);
});
