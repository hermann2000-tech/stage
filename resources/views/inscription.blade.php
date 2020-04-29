<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Page d'inscription</title>

    <!-- Icons font CSS-->
    <link href="assets/vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendors/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendors/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/vendors/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Inscription</h2>
                    <form method="POST">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nom" name="Nom" value="{{old('Nom')}}">

                        
                        </div>
                        <p>{{ $errors->first('Nom') }} </p>
                        <div class="row row-space">
                             <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Prénom" name="Prénom" value="{{old('Prénom')}}">
                                
                                </div>
                                <p>{{ $errors->first('Prénom') }} </p>
                            </div>
                        </div>
                        <div class="row row-space">
                             <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Email" name="Email" value="{{old('Email')}}">
                                 
                                </div>
                                <p>{{ $errors->first('Email') }} </p>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Date" name="Date" value="{{old('Date')}}">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                 
                                </div>
                                <p>{{ $errors->first('Date') }} </p>
                            </div>
                            </div>
                        <div class="row row-space">
                             <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Motdepasse" name="Motdepasse"value="{{old('Motdepasse')}}">
                                 
                                </div>
                                <p>{{ $errors->first('Motdepasse') }} </p>
                            </div>
                        </div>
                          <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Sexe">
                                            <option disabled="disabled" selected="selected">Sexe</option>
                                            <option value='H'>H</option>
                                            <option value='F'>F</option>
                                         
                                        </select>

                                        <div class="select-dropdown"></div>

                                    </div>

                                </div>
                            </div>
                            <p>{{ $errors->first('Sexe') }} </p>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit"> S'inscrire </button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/datepicker/moment.min.js"></script>
    <script src="assets/vendors/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/vendors/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->