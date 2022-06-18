<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{
    public function userImport() {
        // return Excel::download(new UsersExport(), 'users.csv');
        // return (new UsersExport)->download('invoices.csv', \Maatwebsite\Excel\Excel::CSV, ['Content-Type' => 'text/csv']);
        return (new UsersExport)->forYear(2018)->download('invoices.xlsx');

    }
}
