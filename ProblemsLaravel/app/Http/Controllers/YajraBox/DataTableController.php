<?php

namespace App\Http\Controllers\YajraBox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;

class DataTableController extends Controller
{
    public function index(){
        return view('dataTableCrud.yajtable-index');
    }

    /**
     * Simple data are listing with Data Table
     */
    public function anyData(Request $request)
    {
        if($request->ajax()){
            return Datatables::of(User::query())->make(true);
        }
        return view('dataTableCrud.index');
    }

    public function modifyColumn(Request $request){
        if($request->ajax()){
            $users = \DB::table('users')
                    ->select(['id', 'name', 'email', 'created_at','updated_at']);

            return Datatables::of($users)
                // ->setRowClass(function ($user) {
                //     return $user->id % 2 == 0 ? 'alert-success' : 'alert-danger';
                // })
                            // or
                ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-danger" }}')

                ->setRowData([
                    'data-id' => function($user) {
                        return 'row-' . $user->id;
                    }
                ])

                // adding new column
                ->addColumn('Action', function($user) {
                    return 'Hi ' . $user->name . '!';
                })

                // Edit Column 
                // ->editColumn('created_at', function($user){
                //     return $user->created_at->diffForHumans();       Search about it 
                // })

                // add Add , Edit, Show Column 
                ->addColumn('Operation', function($row){
       
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
         
                            return $btn;
                    })
                
                // Edit Column 
                ->editColumn('Operation', function($user){
                    return 'Hello';
                })

                ->rawColumns(['Operation'])

                ->make(true);

        }

        return view('dataTableCrud.add-edit-column');
    }

}
