<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class FirebaseController extends Controller
{
    //


    public function index()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/Firebase.json');
        $database = $factory->createDatabase();

        $reference = $database->getReference();
        $invoices = $reference->getChild('Invoices')->getValue();

        return view('invoices', compact('invoices'));

    }

    public function viewinvoice($id)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/Firebase.json');
        $database = $factory->createDatabase();

        $reference = $database->getReference();
        $invoice = $reference->getChild('Invoices/' . $id)->getValue();

        return view('invoice', compact('invoice'));

    }
}

