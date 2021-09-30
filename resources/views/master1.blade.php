<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
</head>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .slider-img{
        height: 400px !important;
    }
    .slider-text{
        background-color: #72bf72 !important;
    }
    .custom-product{
        height: 600px;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .detail-img{
        height: 400px;

    }
    .search-box{
        width : 500px !important;
    }
</style>
<body>
    {{View::make('header1')}}

    @yield('content')

    {{View::make('footer1')}}

    
</body>
</html>