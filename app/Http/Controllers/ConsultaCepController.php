<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaCepController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function consultarCep(Request $request)
    {
    	$cep = $request->input('cep');

    	try {
		    $soapClient = new \SoapClient(str_replace('Http/Controllers', 'wsdl/AtendeCliente.xml', __DIR__), ['exceptions' => true]);
		    $endereco = $soapClient->consultaCEP(['cep' => $cep]);
		    
		    return response()->json($endereco->return, 200);
	    } catch (\SoapFault $exception) {
		    return response()->json(['error' => true, 'descrption' => $exception->getMessage()], 500);
	    }
    }
}
