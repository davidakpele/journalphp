<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ovid Login</title>
    <link rel="apple-touch-icon-precomposed" href="/assets/oce/images/favicon-180.png" />
    <meta name="description" content="Single Sign On" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?=ASSETS?>css/all.min.css" />
    <link rel="stylesheet" href="<?=ASSETS?>css/all.min.css" />
    <script src="<?=ASSETS?>js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=ASSETS?>css/wk-icons-all-open.min.css" />
    <link rel="stylesheet" href="<?=ASSETS?>css/wk-icons-all-filled.min.css" />
    <link href="<?=ASSETS?>css/standard.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=ASSETS?>css/oce-main.css" />
</head>
<body>
    <nav class="wk-navbar">
        <div class="wk-navbar-container">
            <div class="oce-header-menu-left">
                <a id="logo" role="link" target="_self" class="no-underline">
                    <a href="<?=ROOT?>"><span class="oce-wk-logo-text">SkyBase Data Center<sup class="registeredLogo">®</sup> </span></a>
                </a>
            </div>
            <div class="dropdown">
                <!-- three dots -->
                <ul id="dropbtn" class="wk-icon-filled-more dropbtn showLeft" onClick="expandNav()"></ul>
            </div>
            <div class="oce-header-menu-right">
                <div class="desktop-menu">
                    <div class="oce-header-menuitem-support">
                        <button type="button" class="wk-button-text oce-button-link-custom"><a tabindex="-1"vclass="oce-button-link-custom"  href="javascript:void(0)" target="_wk"> Support &Training</a></button>
                    </div>
                    <div class="oce-header-menuitem-help">
                        <button type="button" class="wk-button-text oce-button-link-custom"><a tabindex="-1"class="oce-button-link-custom" href="javascript:void(0)"target="_wk">Help</a></button>
                    </div>
                </div>
                <div id="navMenu" class="mobile-menu">
                    <div class="mobile-menu-closeButton"><span id="closeNav" onClick="closeNav()" class="wk-icon-close"></span></div>
                    <div class="oce-header-menuitem-support">
                        <button type="button" class="wk-button wk-button-text"><a tabindex="-1" href="javascript:void(0)" target="_wk"> Support & Training</a></button>
                    </div>
                    <div class="oce-header-menuitem-help">
                        <button type="button" class="wk-button wk-button-text"><a tabindex="-1"  href="javascript:void(0)" target="_wk">Help</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="clearfix seperate-border"></div>
    <div id="oceContainer" class="oce-container">
        <div class="clearfix"></div>
        <div class="oce-column-5 wk-column-12-xs contain-login" role="main">
            <div class="wrapper oce-column-12 wk-column-12-xs">
                <form class="wk-form" action="javascript:void(0)"
                    onsubmit="localStorage.setItem('trackLoginFail', true); return true;" method="post">
                    <div class="oce-align-center">SkyBase Data Center</div>
                    <div class="oce-align-center top-margin-fix">
                        <span class="oce-form-signin-heading">Login SkyBase</span>
                    </div>
                    <div class="oce-input-form-username">
                        <label for="username" class="oce-login-label-custom">User ID</label>
                        <input role="textbox" aria-label="Enter UserId" type="text" id="username" class="oce-login-text-custom" name="userName" value="" placeholder="Enter your User ID" data-rule="username" aria-required="true" aria-invalid="false" aria-describedby="" />
                        <div class="error" id="usernameErrorMessage" aria-hidden="true" role="alert" alt="Error" style="display: none">
                            <p>User ID is required.</p>
                        </div>
                    </div>
                    <div class="oce-password-elements">
                        <span id="showPassword">
                            <label for="password" class="oce-login-label-custom">Password</label>
                            <a id="showHide" role="link" class="links oce-label-show" onclick="togglePwd()">Show</a>
                            <span id="iconShowHide" class="wk-icon-visible oce-label-show"></span>
                        </span>
                        <input role="textbox" aria-label="Enter Password" id="password" type="password" class="oce-login-text-custom" name="userPassword" placeholder="Enter your password" data-rule="password" aria-required="true" aria-invalid="false" aria-describedby="" />
                        <div class="error" id="passwordErrorMessage" aria-hidden="true" role="alert" alt="Error"style="display: none">
                            <p>Password is required.</p>
                        </div>
                    </div>
                    <button class="wk-button oce-btn-custom" id="btnSubmit" type="submit">Sign In</button>
                    <div>
                        <hr class="oce-hr-custom" />
                        <span class="oce-label-login-option"> Or continue with</span>
                    </div>
                </form>

                <div class="text-center link-text-wrapper">
                    <span class="link-text">
                        <center> 
                            <a id="athensLoginUrl" role="link" class="links oce-link-athens-login" aria-label="Athens Login" href="<?=ROOT?>lookup/lookup" name="Athens Login">OpenAthens | Institutional</a>
                            <a id="SSOUrl" role="link" class="links oce-link-sso-login" href="javascript:void(0)" aria-label="Institutional Login" name="SSO">Ovid SSO</a>
                        </center>
                    </span>
                </div>
            </div>
            <div class="oce-link-find-articles-wrapper">
                <div class="oce-find-articles">
                    <span class="wk-icon-filled-cart oce-label-buy-articles"> Buy Articles</span>
                    <span class="oce-label-find-articles">
                        Buy immediate access to full text content from the latest, most trusted journals
                    </span>

                    <div class="oce-btn-find-articles-wrapper wk-column-12-m wk-column-12-xs">
                        <div class="oce-btn-find-articles">
                            <button class="wk-button wk-button-ghost oce-btn-custom-find-articles"
                                id="btnSubmitFindArticles" type="submit">Find Articles</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /container -->
    <div class="clearfix"></div>
    <footer id="oce_footer" class="footer-position">
        <p id="footNote">
            &copy;
            <script>document.write((new Date()).getFullYear());</script> 
            <a href="http://www.ovid.com/site/index.jsp"
                target="_ovid" class="oce_footer_content">Ovid Technologies, Inc.</a> All rights reserved.
        </p>
    </footer>
    <script type="text/javascript">
        window.onload = function () {
            delete_cookie('userdomain');

            var password = document.getElementById('password');
            var username = document.getElementById('username');
            //disable login button onload - if usernam/pwd are empty
            if (password.value.trim() == '' || username.value.trim() == '') {
                document.getElementById('btnSubmit').disabled = true;
            }

            username.addEventListener('keydown', resetErrors);
            password.addEventListener('keydown', resetErrors);

          function resetErrors() {
                if (username.value.length > 0 || password.value.length > 0) {
                    document.getElementById('errorContainer').classList.remove("show");
                    document.getElementById('errorContainer').classList.add("hide");
                }
            }
            
            function getCookie(name) {
                var value = '; ' + document.cookie;
                var parts = value.split('; ' + name + '=');
                if (parts.length == 2) return parts.pop().split(';').shift();
            }

            function delete_cookie(name) {
                document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }

            $('.form-signin').submit(function () {
                $('#username').val($('#username').val().trim());
                $('#password').val($('#password').val().trim());
                return true;

            });

            document.getElementById('btnSubmit').focus();

            //focus on error messages if present
            var error_heading = document.getElementsByClassName('error_heading');
            if (error_heading != null) {
                if (error_heading[0] != undefined) {
                    error_heading[0].setAttribute('tabindex', '0');
                }
            }

            const corpUrl = new URL('');
            const urlSearchParams = new URLSearchParams(corpUrl.search);
            const redirectUrl = new URL(urlSearchParams.get('redirect_uri'));

            var logoUrl = redirectUrl.origin;

            document.getElementById('logo').href = logoUrl;
            document.getElementById('btnSubmitFindArticles').onclick = function () { findArticles(logoUrl); };
        };

        function expandNav() {
            document.getElementById("navMenu").className += " navigation-menu expanded";
            document.getElementById("oceContainer").className += " oce-container hidden";
            document.getElementById("dropbtn").className += " dropbtn hidden";
            document.getElementById("closeNav").classList.remove("closed");
        }

        function closeNav() {
            document.getElementById("navMenu").classList.remove("expanded");
            document.getElementById("oceContainer").classList.remove("hidden");
            document.getElementById("dropbtn").classList.remove("hidden");
            document.getElementById("closeNav").className += " oce-header-menu-right-closeButton closed";
        }

        function closeAlert() {
            document.getElementById("errorContainer").className += " hidden";
        }

        function togglePwd() {
            var pwdElement = document.getElementById("password");
            var showLabel = document.getElementById("showHide");
            var iconShow = document.getElementById("iconShowHide");
            if (pwdElement.type === "password") {
                pwdElement.type = "text";
                showLabel.innerHTML = "Hide"
                iconShow.classList.remove("wk-icon-visible")
                iconShow.classList.add("wk-icon-invisible")
            } else {
                pwdElement.type = "password";
                showLabel.innerHTML = "Show"
                iconShow.classList.remove("wk-icon-invisible")
                iconShow.classList.add("wk-icon-visible")
            }
        }

        function findArticles(URL) {
            window.open(URL, "_self");
        }

    </script>

    <!-- field validation with wcag -->
    <script type="text/javascript">
        ///^\s*[a-zA-Z0-9,\s]+\s*$/
        (function (win, undefined) {
            $(function () {
                var rules = {
                    username: function (node) {
                        var inputText = node.value.trim(),
                            inputRegex = /\S+/;

                        return inputRegex.test(inputText);
                    },
                    password: function (node) {
                        var inputText = node.value.trim(),
                            inputRegex = /\S+/;

                        return inputRegex.test(inputText);
                    }
                };

                function onFocusOut() {
                    validate(this);
                }

                $("#username").on('input', function () {
                    validate(this);
                });

                $("#password").on('input', function () {
                    validate(this);
                });


                function validate(node) {
                    var valid = isValid(node),
                        $error = $(node).next('.error');

                    if (valid) {
                        $(node).attr('aria-invalid', false);
                        $error
                            .attr('aria-hidden', true)
                            .hide();
                        $(node).attr('aria-describedby', '');
                    } else {
                        $(node).attr('aria-invalid', true);
                        $error
                            .attr('aria-hidden', false)
                            .show();
                        $(node).attr('aria-describedby', $error.attr('id'));
                    }

                    //disable/enable login button
                    var password = document.getElementById('password');
                    var username = document.getElementById('username');
                    if (password.value.trim() == "" || username.value.trim() == "") {
                        document.getElementById("btnSubmit").disabled = true;
                    }
                    else {
                        document.getElementById("btnSubmit").disabled = false;
                    }

                    return valid;
                }

                function isValid(node) {
                    return rules[node.dataset.rule](node);
                }

                $('[aria-invalid]').on('focusout', onFocusOut);
            });
        }(window));

    </script>
</body>

</html>