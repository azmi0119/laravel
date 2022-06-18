<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multiple Table inserting</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <style>
            .note
            {
                text-align: center;
                height: 80px;
                background: -webkit-linear-gradient(left, #0072ff, #8811c5);
                color: #fff;
                font-weight: bold;
                line-height: 80px;
            }
            .form-content
            {
                padding: 5%;
                border: 1px solid #ced4da;
                margin-bottom: 2%;
            }
            .form-control{
                border-radius:1.5rem;
            }
            .btnSubmit
            {
                border:none;
                border-radius:1.5rem;
                padding: 1%;
                width: 20%;
                cursor: pointer;
                background: #0062cc;
                color: #fff;
            }
        </style>
    </head>
    <body><br>
        <div class="container register-form">
            <form action="" method="" id="ajax-form">
                <div class="form">
                    <div class="note">
                        <p>Registration with Ajax 
                            <a href="{{url('ajax-index')}}" class="btn btn-primay">
                                <= Ajax Index 
                            </a>
                        </p>
                    </div>
    
                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="father_name" placeholder="Father name *" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="degisnation" placeholder="Degisnation *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email *" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="college" placeholder="College *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="occupation" placeholder="Occupation *" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="income" placeholder="Income *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="course" placeholder="Course *" value=""/>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="college" placeholder="College *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="occupation" placeholder="Occupation *" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="income" placeholder="Income *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="course" placeholder="Course *" value=""/>
                                </div>
                            </div>
                            
                        </div>
                        <button type="button" class="btnSubmit">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

        <script>
            
        </script>
     
    </body>
</html>