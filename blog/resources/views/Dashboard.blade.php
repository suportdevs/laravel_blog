<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="google-site-verification" content="J2K-awrLm--LtTSkUGmFsRpFFTU0W1V5PqZTQp0b6pg" />
    <meta name="description" content="Rabbil Hasan is an Expert Web Developer in Bangladesh. Expert Mobile App Developer in Bangladesh.He is highly talented, experienced, professional and cooperative software engineer, working in programming and web world for more than 4 years. Moreover Rabbil Hasan has a skilled team for achieving his goal named “Team Rabbil”.Team Rabbil assure you a wide range of quality IT services. ">
    <meta name="keywords" content="Expert Web Developer in Bangladesh, Expert Mobile App Developer in Bangladesh, Android App Developer in Bangladesh">
    <meta name="author" content="Rabbil Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" >
</head>
<body>
<div class="container">
    <div class="row content-justify-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                <tr>
                    <td><img src="{{ Session::get('img') }}" alt=""></td>
                </tr>
                <tr>
                    <td>User id</td>
                    <td>{{ Session::get('userId') }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ Session::get('name') }}</td>
                </tr>
                <tr>
                    <td>Nick Name</td>
                    <td>{{ Session::get('nickName') }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ Session::get('email') }}</td>
                </tr>
                <tr>
                    <td>Token</td>
                    <td>{{ Session::get('token') }}</td>
                </tr>
                <tr>
                    <td><a href="{{ url('/userLogout') }}">Logout</a></td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>