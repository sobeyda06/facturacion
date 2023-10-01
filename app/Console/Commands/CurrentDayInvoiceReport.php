<?php

namespace App\Console\Commands;

use App\Models\Invoice;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CurrentDayInvoiceReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:current-day-invoice-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a daily report of invoices';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $file = public_path('invoices/' . Carbon::today()->format('Y-m-d') . '.pdf');
        $pdf = app(PDF::class);
        $invoices = Invoice::whereDate('created_at', Carbon::today())->get();
        $pdf->loadView('invoices.report', compact('invoices'));
        $pdf->save($file);

        $this->info('The daily report has been generated successfully');
    }
}
