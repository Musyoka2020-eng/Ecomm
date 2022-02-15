<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/90799b4287.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html,
    body {
        place-items: center;
        background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
    }

    .wrapper .button {
        display: inline-block;
        height: 60px;
        width: 60px;
        float: left;
        margin: 0 5px;
        overflow: hidden;
        background: #fff;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-out;
    }

    .wrapper .button:hover {
        width: 200px;
    }

    .wrapper .button .icon {
        display: inline-block;
        height: 60px;
        width: 60px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 60px;
        transition: all 0.3s ease-out;
    }

    .wrapper .button:nth-child(1):hover .icon {
        background: #4267B2;
    }

    .wrapper .button:nth-child(2):hover .icon {
        background: #1DA1F2;
    }

    .wrapper .button:nth-child(3):hover .icon {
        background: #E1306C;
    }

    .wrapper .button:nth-child(4):hover .icon {
        background: #333;
    }

    .wrapper .button:nth-child(5):hover .icon {
        background: #ff0000;
    }

    .wrapper .button .icon i {
        font-size: 25px;
        line-height: 60px;
        transition: all 0.3s ease-out;
    }

    .wrapper .button:hover .icon i {
        color: #fff;
    }

    .wrapper .button span {
        font-size: 20px;
        font-weight: 500;
        line-height: 60px;
        margin-left: 10px;
        transition: all 0.3s ease-out;
    }

    .wrapper .button:nth-child(1) span {
        color: #4267B2;
    }

    .wrapper .button:nth-child(2) span {
        color: #1DA1F2;
    }

    .wrapper .button:nth-child(3) span {
        color: #E1306C;
    }

    .wrapper .button:nth-child(4) span {
        color: #333;
    }

    .wrapper .button:nth-child(5) span {
        color: #ff0000;
    }

    <------------------------>.custom-login {
        height: 500px;
        padding-top: 100px;
    }

    img.slider-img {
        height: 400px !important
    }

    .det {
        background-color: whitesmoke;
    }

    .gof {
        padding-left: 50px;
    }

    .custom-product {
        height: auto;
    }
    .bread{
        padding: 20px;
        border-bottom: 2px solid #8e95a5;
    }
    .float-child1 {
        width: 20%;
        float: left;
        padding: 20px;
        background-color: #8e95a5;
        padding-top:0px;
        margin-top: 30px;
        height: auto;
    }
    .float-child2 {
        width: 80%;
        float: right;
        padding: 20px;
    }
    .prow {
        height: 800px;
    }

    .carts {
        background-color: #35443585 !important;
    }

    .ord {
        background-color: #35443585 !important;
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 100px;
    }

    .trening-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 200px;
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .border {
        border-radius: 10px;
        background-color: #fff !important;
        box-shadow: 2px 5px 20px rgba(199, 199, 199, .5);
        height: 500px;
        padding: 10px;
        text-decoration: black;
        font-weight: bold;
        padding-left: 10rem;
        width: 70vw;
        margin-top: 10%;
        margin: 0 auto;
        -ms-overflow-style: none;
        overflow-y: scroll;
    }
    .border::-webkit-scrollbar {
        display: none; /* for Chrome, Safari, and Opera */
      }

    .bod {
        height: 600px;
    }

    .navbar {
        box-shadow: 0px 3px #888888;
        background-color: lightskyblue;

    }

    .version {
        text-align: right;
    }

    a.footer-link {
        padding: 0px 10px;
        word-wrap: normal;
        display: inline-block;
    }

    .myord-l {
        float: right;
        padding-top: 45px;
        border-bottom: 1px;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-bottom: 20px
        width: 350px;
    }

    .myord-r {
        float: left;
        padding: 0px;
        margin: 0px;
        border-right: 2px solid green;
        width: 350px;
        border-bottom: 1px;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
</style>

</html>
