<!DOCTYPE html>
<html lang="en">

<head>
    <title>eCommerce</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style>
        .custom-login {
            height: 85vmin;
            padding: 90px;
        }

        .page-footer {
            background: #324191;
        }

        img.slider-img {
            width: 100%;
            height: 600px !important;
            object-fit: cover;
        }

        .carousel-caption {
            background-color: #324191;
        }

        .trending-img {
            width: 80%;
            height: 100px;

        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .trending-wrapper {
            margin: 20px;
        }

        .detail-img {
            width: 80%;
        }

        .searched-item {
            margin-bottom: 50px;
        }

        .cart-list-divider {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}



</body>


</html>