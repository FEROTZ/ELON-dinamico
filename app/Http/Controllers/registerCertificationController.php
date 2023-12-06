<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCertificationRequest;

class registerCertificationController extends Controller
{
    public function index()
    {
        return view('surveys.registerCertification');
    }

    public function store(StoreCertificationRequest $request): RedirectResponse
    {
        //TODO: Almacenar certificación después de validar
    }
}
