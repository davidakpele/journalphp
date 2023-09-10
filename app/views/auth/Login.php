<?php $this->view('components/Header');?>
<body id="pagetop" class="oxy-ui pubs-ui hp-page">
    
    <?php $this->view("./components/Nav"); ?>
        <div class="clearfix seperate-border"></div>
        <div id="oceContainer" class="oce-container">
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
                        <div id="crossbar">
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
            </div>
        </div>
         <?php $this->view('./components/NavDrawe');?>
    </div>
        <script src="<?=ASSETS?>js/vendor.min.js"></script>
        <script src="<?=ASSETS?>js/pubs-ui.min.js"></script>
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