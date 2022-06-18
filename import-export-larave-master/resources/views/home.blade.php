@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>{{ __('Excel File Import Export') }}</strong></div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    {{-- file upload --}}
                    <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="upload-btn-wrapper">
                                    <button class="btn">Upload a file</button>
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="upload-btn-wrapper">
                                    <input type="submit" class="btn" value="Import">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="upload-btn-wrapper">
                                    <a href="{{route('state.export')}}" class="btn">Export</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- /file upload --}}

                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>{{ __('PDF File Import Export') }}</strong></div>
                
                @if ($message = Session::get('inserted'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('notinserted'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="upload-btn-wrapper">
                                <a href="{{route('simple.pdf')}}" class="btn">Simple PDF</a>
                            </div>
                        </div>
                        @include('pdf.html-to-pdf')
                        <div class="col-md-3">
                            <div class="upload-btn-wrapper">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
                                    HTML<strong>-></strong>PDF
                              </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
