<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <style>
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Avenir Next", "Avenir", "Segoe UI", "Lucida Grande", "Helvetica Neue", "Helvetica", "Fira Sans", "Roboto", "Noto", "Droid Sans", "Cantarell", "Oxygen", "Ubuntu", "Franklin Gothic Medium", "Century Gothic", "Liberation Sans", sans-serif;
            color: rgba(0, 0, 0, 0.87);
        }
        
        a {
            color: #26890d;
        }
        a:hover, a:focus {
            color: #046a38;
        }
        
        .container {
            margin: 5% 3%;
        }
        @media (min-width: 48em) {
            .container {
                margin: 2%;
            }
        }
        @media (min-width: 75em) {
            .container {
                margin: 2em auto;
                max-width: 75em;
            }
        }
        
        .responsive-table {
            width: 100%;
            margin-bottom: 1.5em;
            border-spacing: 0;
        }
        @media (min-width: 48em) {
            .responsive-table {
                font-size: 0.9em;
            }
        }
        @media (min-width: 62em) {
            .responsive-table {
                font-size: 1em;
            }
        }
        .responsive-table thead {
            position: absolute;
            clip: rect(1px 1px 1px 1px);
            /* IE6, IE7 */
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }
        @media (min-width: 48em) {
            .responsive-table thead {
                position: relative;
                clip: auto;
                height: auto;
                width: auto;
                overflow: auto;
            }
        }
        .responsive-table thead th {
            background-color: #26890d;
            border: 1px solid #86bc25;
            font-weight: normal;
            text-align: center;
            color: white;
        }
        .responsive-table thead th:first-of-type {
            text-align: left;
        }
        .responsive-table tbody,
        .responsive-table tr,
        .responsive-table th,
        .responsive-table td {
            display: block;
            padding: 0;
            text-align: left;
            white-space: normal;
        }
        @media (min-width: 48em) {
            .responsive-table tr {
                display: table-row;
            }
        }
        .responsive-table th,
        .responsive-table td {
            padding: 0.5em;
            vertical-align: middle;
        }
        @media (min-width: 30em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em 0.5em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table th,
            .responsive-table td {
                display: table-cell;
                padding: 0.5em;
            }
        }
        @media (min-width: 62em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em 0.5em;
            }
        }
        @media (min-width: 75em) {
            .responsive-table th,
            .responsive-table td {
                padding: 0.75em;
            }
        }
        .responsive-table caption {
            margin-bottom: 1em;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }
        @media (min-width: 48em) {
            .responsive-table caption {
                font-size: 1.5em;
            }
        }
        .responsive-table tfoot {
            font-size: 0.8em;
            font-style: italic;
        }
        @media (min-width: 62em) {
            .responsive-table tfoot {
                font-size: 0.9em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody {
                display: table-row-group;
            }
        }
        .responsive-table tbody tr {
            margin-bottom: 1em;
        }
        @media (min-width: 48em) {
            .responsive-table tbody tr {
                display: table-row;
                border-width: 1px;
            }
        }
        .responsive-table tbody tr:last-of-type {
            margin-bottom: 0;
        }
        @media (min-width: 48em) {
            .responsive-table tbody tr:nth-of-type(even) {
                background-color: rgba(0, 0, 0, 0.12);
            }
        }
        .responsive-table tbody th[scope=row] {
            background-color: #26890d;
            color: white;
        }
        @media (min-width: 30em) {
            .responsive-table tbody th[scope=row] {
                border-left: 1px solid #86bc25;
                border-bottom: 1px solid #86bc25;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody th[scope=row] {
                background-color: transparent;
                color: #000001;
                text-align: left;
            }
        }
        .responsive-table tbody td {
            text-align: right;
        }
        @media (min-width: 48em) {
            .responsive-table tbody td {
                border-left: 1px solid #86bc25;
                border-bottom: 1px solid #86bc25;
                text-align: center;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody td:last-of-type {
                border-right: 1px solid #86bc25;
            }
        }
        .responsive-table tbody td[data-type=currency] {
            text-align: right;
        }
        .responsive-table tbody td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: 0.8em;
            color: rgba(0, 0, 0, 0.54);
        }
        @media (min-width: 30em) {
            .responsive-table tbody td[data-title]:before {
                font-size: 0.9em;
            }
        }
        @media (min-width: 48em) {
            .responsive-table tbody td[data-title]:before {
                content: none;
            }
        }
    </style>
    
</head>
<body>
    
    <div class="container">
            <div class="pull-right">
                <a href="{{url('create')}}" type="submit" class="btn btn-info">Add New</a>
            </div>
            
            <br><br>
             
                <table class="responsive-table pull-right" id="searching">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Email</th>
                            <th scope="col">College</th>
                            <th scope="col">Occupation</th>
                            <th scope="col">Income</th>
                            <th scope="col">Course</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>  
                    
                    @foreach ($data as $item)
                        <tbody id="dynamic-row">
                            <td data-title="Studio">{{ $item->name }}</td>
                            <td data-title="Studio">{{ $item->father_name }}</td>
                            <td data-title="Studio">{{ $item->degisnation }}</td>
                            <td data-title="Studio">{{ $item->email }}</td>
                            <td data-title="Studio">{{ $item->college }}</td>
                            <td data-title="Studio">{{ $item->occupation }}</td>
                            <td data-title="Studio">{{ $item->income }}</td>
                            <td data-title="Studio">{{ $item->course }}</td>
                            <td data-title="Studio">{{ $item->address }}</td>
                            <td data-title="Studio">{{ $item->gender }}</td>
                            <td data-title="Studio">
                                <a href="edit/{{ $item->id }}" type="submit" class="btn btn-info">Edit</a>
                            </td>
                            <td data-title="Studio">
                                <a href="destroy/{{ $item->id }}" type="submit" class="btn btn-danger">Delete</a>
                            </td>
                        </tbody>
                    @endforeach
                    
                    {{-- <td><a href="delete/{{ $data->id }}" name="view" id="" class="btn btn-pill btn-danger">Delete</a></td> --}}
            {{-- </div> --}}
         
    </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>
        
        // $(document).ready(function(){
        //     $('body').on('keyup', '#search-post', function(){
        //         var searchQues = $(this).val();

        //         $.ajax({
        //             method : 'POST',
        //             url : "{{url('liveSearching')}}",
        //             dataType : 'json',
        //             data : {
        //                 '_token':'{{ csrf_token() }}',
        //                 searchQues : searchQues,
        //             },
        //             success : function(res){
        //                 var tableRow = '';
        //                 $('#dynamic-row').html('');

        //                 $.each(res, function(index, value){
        //                     tableRow  = '<tr>'+
        //                                     '<td data-title="Studio">' + value.first_name +'</td>'+
        //                                     '<td data-title="Released">' + value.last_name +'</td>'+
        //                                     '<td data-title="Studio">' + value.gender +'</td>'+
        //                                     '<td data-title="Studio">' + value.city +'</td>'+
        //                                     '<td data-title="Released">' + value.password +'</td>'+
        //                                 '</tr>';
        //                     $('#dynamic-row').append(tableRow);  
        //                 });
        //             }
        //         });
        //     });
        // });
        
    </script>
</body>
</html>