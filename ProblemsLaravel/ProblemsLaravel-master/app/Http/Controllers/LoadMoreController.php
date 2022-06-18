<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoadMore;

class LoadMoreController extends Controller
{
    public function index(){
        $data = LoadMore::paginate(5);
        return view('LoadMore.load-more-data', compact('data'));
    }

    public function scrollLoadMoreData(Request $request){
        $liveData = LoadMore::paginate(10);
        if($request->ajax()){
            $view = view('LoadMore.data', compact('liveData'))->render();
            return response()->json(['html' => $liveData]);
        }
        return view('LoadMore.scroll-load-more-data', compact('liveData'));
    }


    // Delete Record with Ajax on load more data page
    public function deleteRecord(Request $request, $id){
        LoadMore::find($id)-> delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    // Delete Record with Ajax on scroll more data page
    public function deleteScrollRecord(Request $request, $id){
        LoadMore::find($id)-> delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }


}
