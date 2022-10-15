<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UserDataExportController extends Controller
{
    protected function createExport(Request $request)
    {
        $userResource = UserResource::make($request->user());
        $pdf = PDF::loadView('pdf.user-export', $userResource->toArray($request));
        return $pdf->download('export.pdf');
    }
}
