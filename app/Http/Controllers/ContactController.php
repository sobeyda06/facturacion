<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\DB;

final class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'identification' => 'required | unique:contacts',
            'measurer' => 'required | numeric',
            'current_reading' => 'required | numeric',
            'previous_reading' => 'required | numeric',
            'monthly_consumption' => 'required | numeric',
            'amount_payable' =>  'required | numeric',
            'arrears' => 'required | numeric',
            'location' => 'required',

        ]);           



        Contact::create([
            'name' => $request->input('name'),
            'identification' => $request->input('identification'),
            'measurer' => $request->input('measurer'),
            'current_reading' => $request->input('current_reading'),
            'previous_reading' => $request->input('previous_reading'),
            'monthly_consumption' => $request->input('monthly_consumption'),
            'amount_payable' => $request->input('amount_payable'),
            'arrears' => $request->input('arrears'),
            'location' => $request->input('location'),
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $invoiceNumber = $this->generateInvoiceNumber();
        return view('contacts.show', compact('contact', 'invoiceNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.modal-info', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'name' => $request->input('name'),
            'identification' => $request->input('identification'),
            'measurer' => $request->input('measurer'),
            'current_reading' => $request->input('current_reading'),
            'previous_reading' => $request->input('previous_reading'),
            'monthly_consumption' => $request->input('monthly_consumption'),
            'amount_payable' => $request->input('amount_payable'),
            'arrears' => $request->input('arrears'),
            'location' => $request->input('location'),
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {   
        $contact->deleteWithInvoices();
        $contact->delete();
        return redirect()->back()->with('success', 'usuario eliminado');
    }

   public function pdf(Contact $contact)
    {
        $invoiceNumber = $this->generateInvoiceNumber();
        $pdf = app(PDF::class);

        $invoiceNumber = $this->generateInvoiceNumber();

        Invoice::create(['number' => $invoiceNumber])
            ->contact()
            ->associate($contact)
            ->save();

        $pdf->loadView('contacts.show', compact('contact', 'invoiceNumber'));
        return $pdf->download("invoice-{$invoiceNumber}.pdf");
    }

    private function generateInvoiceNumber(): string
    {
        $latestInvoice = Invoice::latest()->first();

        if ($latestInvoice) {
            $invoiceNumber = $latestInvoice->number + 1;
        } else {
            $invoiceNumber = 1;
        }

        return str_pad($invoiceNumber, 6, '0', STR_PAD_LEFT);

    }

    public function showInvoices()
    {
        // Obtener los datos necesarios, por ejemplo, las facturas
        $invoices = Invoice::all();
        //$invoices = Invoice::with('contact')->get();
        
        $reportData = [];

        foreach($invoices as $invoice){
            $reportData[] =[
            'numero_reporte' => $invoice->number,
            'nombre_contacto' => $invoice->contact->name,
            'consumo_mensual' => $invoice->contact->monthly_consumption,
            ];

            $invoice->delete();
        }

        // Cargar la vista y pasar los datos
        return view('invoices.report', compact('invoices'));
    }

}
