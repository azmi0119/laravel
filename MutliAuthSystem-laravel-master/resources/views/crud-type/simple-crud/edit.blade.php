<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multiple Table inserting</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');
            *, body {
                font-family: 'Poppins', sans-serif;
                font-weight: 400;
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                -moz-osx-font-smoothing: grayscale;
            }

            html, body {
                height: 100%;
                background-color: #152733;
                overflow: hidden;
            }


            .form-holder {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                min-height: 100vh;
            }

            .form-holder .form-content {
                position: relative;
                text-align: center;
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-align-items: center;
                align-items: center;
                padding: 60px;
            }

            .form-content .form-items {
                border: 3px solid #fff;
                padding: 40px;
                display: inline-block;
                width: 100%;
                min-width: 540px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                text-align: left;
                -webkit-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }

            .form-content h3 {
                color: #fff;
                text-align: left;
                font-size: 28px;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .form-content h3.form-title {
                margin-bottom: 30px;
            }

            .form-content p {
                color: #fff;
                text-align: left;
                font-size: 17px;
                font-weight: 300;
                line-height: 20px;
                margin-bottom: 30px;
            }


            .form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
                color: #fff;
            }

            .form-content input[type=text], .form-content input[type=text], .form-content input[type=email], .form-content select {
                width: 100%;
                padding: 9px 20px;
                text-align: left;
                border: 0;
                outline: 0;
                border-radius: 6px;
                background-color: #fff;
                font-size: 15px;
                font-weight: 300;
                color: #8D8D8D;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                margin-top: 16px;
            }


            .btn-primary{
                background-color: #6C757D;
                outline: none;
                border: 0px;
                box-shadow: none;
            }

            .btn-primary:hover, .btn-primary:focus, .btn-primary:active{
                background-color: #495056;
                outline: none !important;
                border: none !important;
                box-shadow: none;
            }

            .form-content textarea {
                position: static !important;
                width: 100%;
                padding: 8px 20px;
                border-radius: 6px;
                text-align: left;
                background-color: #fff;
                border: 0;
                font-size: 15px;
                font-weight: 300;
                color: #8D8D8D;
                outline: none;
                resize: none;
                height: 120px;
                -webkit-transition: none;
                transition: none;
                margin-bottom: 14px;
            }

            .form-content textarea:hover, .form-content textarea:focus {
                border: 0;
                background-color: #ebeff8;
                color: #8D8D8D;
            }

            .mv-up{
                margin-top: -9px !important;
                margin-bottom: 8px !important;
            }

            .invalid-feedback{
                color: #ff606e;
            }

            .valid-feedback{
            color: #2acc80;
            }
        </style>
    </head>
    <body>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register Today</h3>
                            <form class="requires-validation" action="{{url('update')}}" method="post" novalidate>
                                @csrf
                                <input type="hidden" value="{{$data->id}}" name="form_id" />
                                <div class="col-md-12">
                                   <input class="form-control" type="text" value="{{$data->name}}" name="name" placeholder="Student Name" required>
                                   <div class="valid-feedback">Username field is valid!</div>
                                   <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$data->father_name}}" name="father_name" placeholder="Father Name" required>
                                    <div class="valid-feedback">Father name field is valid!</div>
                                    <div class="invalid-feedback">Father name field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="degisnation" required>
                                          <option selected disabled value="">Degisnation</option>
                                          <option value="Software Engineer">Software Engineer</option>
                                          <option value="Hardware Engineer">Hardware Engineer</option>
                                          <option value="Data Scientist">Data Scientist</option>
                                          <option value="Web Developer">Web Developer</option>
                                          <option value="RPA Developer">RPA Developer</option>
                                          <option value="Robot Developer">Robot Developer</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="email" value="{{$data->email}}" name="email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$data->college}}" name="college" placeholder="College Name" required>
                                     <div class="valid-feedback">College field is valid!</div>
                                     <div class="invalid-feedback">College field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="occupation" required>
                                          <option selected disabled value="">Occupation</option>
                                          <option value="gvot">Freedom Figher</option>
                                          <option value="farmer">Farmer</option>
                                          <option value="buisness">Buisness</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                </div>

                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="income" required>
                                          <option selected disabled value="">Yearly Income</option>
                                          <option value="10k">10000 Per Month</option>
                                          <option value="20k">20000</option>
                                          <option value="30k">30000</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                </div>


                                <div class="col-md-12">
                                    <select class="form-select mt-3" name="course" required>
                                          <option selected disabled value="">Course</option>
                                          <option value="jweb">Junior Web Developer</option>
                                          <option value="sweb">Senior Web Developer</option>
                                          <option value="pmanager">Project Manager</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="address" placeholder="Address.." required>
                                    <div class="valid-feedback">Address field is valid!</div>
                                    <div class="invalid-feedback">Address field cannot be blank!</div>
                                </div>
    
                                <div class="col-md-12 mt-3">
                                    <label class="mb-3 mr-1" for="gender">Gender: </label>
        
                                    <input type="radio" class="btn-check" value="{{$data->gender}}" name="gender" value = "male" id="male" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
        
                                    <input type="radio" class="btn-check" value="{{$data->gender}}" name="gender" value = "female" id="female" autocomplete="off" required>
                                    <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
        
                                    <div class="valid-feedback mv-up">You selected a gender!</div>
                                    <div class="invalid-feedback mv-up">Please select a gender!</div>
                                </div>
     
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function () {
                'use strict'
                const forms = document.querySelectorAll('.requires-validation')
                Array.from(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                    }, false)
                })
            })()

        </script>
    
    </body>
</html>