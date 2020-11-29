<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    public function index(Request $request)
    {
        $document = Document::where('reference', $request->input('paymentReference'))->first();

        if ($document->client->rfc != $request->input('payerRfc'))
        {
            return 'La información proporcionada no es correcta.';
        }

        return "Datos correctos.";
    }
}
