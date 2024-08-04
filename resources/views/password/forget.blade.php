<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}">

</head>


<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <div class="banner"> LaserAddict CRM - V1.0.0a 👇 </div>
    <div>
        <div class="row" style="    BACKGROUND: #00000087;">
            <div class="col-md-6" style="padding: 15px;">
                <img src="images/logo.png" alt="" width="251" style="margin-left: 20px">
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <div class=" login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">

                <form>
                    <h3 class="">Password forgotten</h3>
                    <p class="">Enter your username and your center name<br> to receive a password recovery e-mail.</p>
                    <br>
                    <div class="form-group">
                        <span>E-mail address</span>
                        <input type="text" class="form-control" placeholder="practitioner@laseraddict.fr *" value="" />
                    </div>
                    <div class="form-group">
                        <span>LaserAddict center</span>
                        <input type="password" class="form-control" placeholder value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control" value="Reset your password" style="background: #22A383;color: white;border-radius: 10px;" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2" style="    background: #d3ede6;">
                <form style="background: white;border-radius: 47px; margin: 0px 100px;padding: 10% 10%;text-align: center;">
                    <h2>Disclaimer</h2>
                    <p>Access to this customer relationship management (CRM) system and all the information it contains is strictly reserved to authorized persons. Please note that all connections to this system are monitored and recorded. Any unauthorized
                        use will be reported to appropriate authority and may result in legal action.<br><br> By logging on to this system, you confirm that you are an authorized person and that you understand and accept these conditions.</p>

                </form>
                <div class="form-group" style="display: flex;justify-content: space-between; margin: 0px 90px;padding: 2% 7%;text-align: center;">
                    <a href="#" class="ForgetPwd" style="width: 180px;background: #22A383;border-radius: 5px; padding: 7px;color: white;">Assistance</a>
                    <a href="#" class="ForgetPwd" style="width: 180px;background: #22A383;border-radius: 5px; padding: 7px;color: white;">Legal information</a>
                </div>

            </div>

        </div>
        <div>
            <img src="{{asset('website/images/footer.png')}}" alt="" style="width: 100%;height: 193px;">
        </div>
        <div class="footer">Copyright © 2024 SARL CS LAZER ® - All rights reserved</div>
    </div>

</body>

</html>