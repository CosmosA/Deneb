<!DOCTYPE html>
<html lang="en" class="mdl-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="User Management System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="theme-color" content="#3f51b5">
    <meta name="msapplication-navbutton-color" content="#3f51b5">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="google" content="notranslate">
    <title>Deneb</title>
    <link rel="icon" type="image/png" href="assets/img_deneb.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
</head>

<body>
    <div class="mdl-color--grey-100 mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Deneb</span>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Deneb</span>
            <nav class="mdl-navigation">
                <?php
                    $navs = json_decode(file_get_contents('navs.json'), true);
                    foreach ($navs as $key => $value) {
                        echo '<a class="mdl-navigation__link" href="' . $value . '">' . $key . '</a>';
                    }
                ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div id="top"></div>
            <div class="mdl-grid">
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 24px 24px">
                    <h4>Error <span class=mdl-color-text--primary>404</span> Not Found.</h4>
                    <span class=mdl-color-text--primary>페이지를 표시할 수 없습니다.</span><br><br>
                    요청하신 파일을 찾을 수 없거나, 서버에서 제거 되었습니다. URL을 확인해 주시기 바랍니다.
                </div>
                <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset-desktop" id="content" style="padding: 0 24px 0 24px">
                    <ul class="mdl-list">
                        <?php
                            foreach ($navs as $key => $value) {
                                echo '<li class="mdl-list__item">';
                                echo '<a class="mdl-color-text--grey-700 mdl-button mdl-js-button mdl-js-ripple-effect" href="' . $value . '" style="margin: 0 auto;">' . $key . '</a>';
                                echo '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                if (file_exists('footer.html')) {
                    echo file_get_contents('footer.html');
                }
            ?>
        </main>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>