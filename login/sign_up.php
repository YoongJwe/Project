<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <meta charset="utf-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <meta
                name="description"
                content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

            <title></title>

            <!-- GOOGLE FONTS -->
            <link
                href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
                rel="stylesheet"/>
            <link
                href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"
                rel="stylesheet"/>

            <!-- PLUGINS CSS STYLE -->
            <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet"/>

            <!-- SLEEK CSS -->
            <link href="../assets/css/sleek.css" rel="stylesheet"/>

            <!-- FAVICON -->
            <link href="../assets/img/favicon.png" rel="shortcut icon"/>

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
            queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]> <script
            src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
            src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
            <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
            <script src="../assets/plugins/nprogress/nprogress.js"></script>
            <script>
             $(document).ready(function(){
                const signupForm = document.querySelector("#signup-form");
                const signupButton = document.querySelector("#signup-button");
                const name = document.querySelector("#name");
                const email = document.querySelector("#email");
                const password = document.querySelector("#password");
                const passwordCheck = document.querySelector("#password-check");
                signupButton.addEventListener("click", function (e) {
                    if(!name.value ){
                      alert("이름을 입력해주세요!");
                    }else if(!email.value ){
                      alert("이메일을 입력해주세요!");
                    }else if(!password.value){
                      alert("비밀번호를 입력해주세요!");
                    }else if(!(password.value === passwordCheck.value)) {
                      alert("비밀번호가 서로 일치하지 않습니다!");
                    } else {
                      signupForm.submit();
                    }
                });
              });
            </script>
        </head>

    </head>
    <body class="" id="body">
        <div class="container d-flex flex-column justify-content-between vh-100">
            <div class="row justify-content-center mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <a href="/index.php">
                                    <svg
                                        class="brand-icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        preserveaspectratio="xMidYMid"
                                        width="30"
                                        height="33"
                                        viewbox="0 0 30 33">
                                        <g fill="none" fill-rule="evenodd">
                                            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z"/>
                                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z"/>
                                        </g>
                                    </svg>
                                    <span class="brand-name">JJABIX DASHBOARD</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <h4 class="text-dark mb-5">회원가입</h4>
                            <form action="./sign_up_check.php" method="POST" id="signup-form" >
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input
                                            type="text"
                                            class="form-control input-lg"
                                            id="name" name="name"
                                            aria-describedby="nameHelp"
                                            placeholder="이름">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input
                                            type="email"
                                            class="form-control input-lg"
                                            id="email" name="email"
                                            aria-describedby="emailHelp"
                                            placeholder="이메일">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input
                                            type="password"
                                            class="form-control input-lg"
                                            id="password" name="password"
                                            placeholder="비밀번호">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input
                                            type="password"
                                            class="form-control input-lg"
                                            id="password-check" name="cpassword"
                                            placeholder="비밀번호 확인">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">
                                                <input type="checkbox"/>
                                                <div class="control-indicator"></div>
                                                이용약관에 동의합니다.
                                            </label>

                                        </div>
                                        <button type="submit" id="signup-button" class="btn btn-lg btn-primary btn-block mb-4" onclick="return false;">회원가입</button>
                                        <p>이미 회원이신가요?
                                            <a class="text-blue" href="sign-in.html">로그인 하기</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>