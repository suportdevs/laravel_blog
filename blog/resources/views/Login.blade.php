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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <h4>Login</h4><hr>
                    <a href="{{ url('/CallGithub') }}" class="btn btn-primary btn-block"><i class="fab fa-github"></i> Sign in With Github</a>
                    <a href="{{ url('/CallGithub') }}" class="btn btn-primary btn-block bg-dark"><i class="fab fa-github"></i> Sign Up With Github</a>
                </div>
                <div class="form-body mt-5">
                    <form action="" method="post" class="userLogin">
                        <input name="name" value="" type="text" class="form-control mb-4" placeholder="Username or Email">
                        <input name="email" value="" type="email" class="form-control mb-4" placeholder="Password">
                        <input name="submit" type="submit" class="btn btn-primary" placeholder="submit">
                    </form>
                </div>
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
<script type="text/javascript">
    $(".userLogin").on('submit', function(event){
        event.preventDefault();
        let formData = $(this).serializeArray();
        let name = formData[0]['value'];
        let email = formData[1]['value'];
        let url = '/userLogin';

        axios.post(url, {
            name:   name,
            email:  email
        })
        .then(function(response){
            if(response.status == 200 && response.data == 1){
                window.location.href='/Dashboard';
                toastr.success("User Login Successful.");
            }else{
                toastr.error("User Login Fail ! Try again");
            }
        })
        .catch(function(error){
            toastr.error("User Login Fail ! Try again");
        });

    });
</script>
</body>
</html>