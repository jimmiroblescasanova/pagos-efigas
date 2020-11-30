<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    public function validatePayerData(Request $request)
    {
        $request->validate([
            'paymentReference' => 'required',
            'payerRfc' => 'required|min:12|max:13',
            'captcha' => 'required|captcha'
        ]);

        $document = Document::where('reference', $request->input('paymentReference'))->first();

        if ($document->client->rfc != $request->input('payerRfc'))
        {
            return 'La información proporcionada no es correcta.';
        }

        return redirect()->route('payments.pay', compact('document'));
    }

    public function payDocument(Document $document)
    {
        return $document;
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
