<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StateExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function stateExport() {
        return Excel::download(new StateExport, 'state-export.xlsx');
    }
}
