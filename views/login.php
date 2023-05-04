<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="login.style.css">

<body>
    <input style="display:none;" name="62A52B6B-4600-4a8d-A1E0-EB8A811D9D60" />

    <div id="studioContent">
        <div id="studioPageContent">
            <div class="studioTopNavigationPanel clearFix">
                <div class="systemSection mainPageLayout clearFix">
                </div>
            </div>

            <div class="mainPageLayout">
                <div id="studio_sidePanelUpHeight20" style="height: 20px;"></div>
                <div class="clearFix">
                    <div class="topMargin"></div>
                    <div class="mainContainer clearFix">
                        <div style="margin-bottom: 10px">
                            <div id="GreetingBlock" class="authForm">
                                <div class="header headerLightBig clearFix">
                                    <img class="logo" src="/img/logo.png" alt="" />

                                    <h1 class="title">Seja bem Vindo!</h1>
                                </div>

                                <div id="authForm">
                                    <div id="authMessage"></div>

                                    <div id="ctl00_ctl00_PageContent_StudioPageContent__AuthByEmail" class="login">
                                        <div class="title">O e-mail que você usou para se registrar no portal:</div>
                                        <input maxlength="64" class="pwdLoginTextbox" type="text" id="login" name="login" required />
                                    </div>

                                    <div class="password">
                                        <div class="title">Senha:</div>
                                        <input maxlength="64" class="pwdLoginTextbox" type="password" id="pwd" name="pwd" required />
                                    </div>

                                    <div class="subtext">
                                        <span class="pseudolink" onclick="AuthManager.ShowPwdReminderDialog()">Esqueceu sua senha?</span>
                                    </div>

                                    <div class="submenu clearFix">
                                        <div class="loginBlock clearFix">
                                            <div style="float: left;">
                                                <input class="highLinkButton signIn" id="loginButton" type="submit" value="Login" />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="studio_sidePanel" class="studioRightSidePanel" style="display:none;"></div>
                </div>

                <div id="container" style="position: absolute; top: 0px; left: 0px;"></div>
                <div id="fullScreen" style="margin: 0; padding: 0;"></div>
            </div>
        </div>
    </div>

    <div id="studioFooter">
        <div class="mainPageLayout">
            <span class="footerCopyright">&copy; Sttórico Sitemas <?php echo date("Y") ?></span>
        </div>
    </div>
    <script>
        /*Área de scripts javascript*/
    </script>
</body>

</html>