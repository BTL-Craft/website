<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="/assets/script/jquery.js"></script>

    <title>帮助中心 - BTL Craft</title>
    <link rel="stylesheet" type="text/css" href="/assets/style/markdown.css">
    <link rel="stylesheet" type="text/css" href="/assets/style/help.css">
    <link href="/assets/style/loading.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="img/png" href="/assets/image/icon.png" sizes="192x192" />

    <script>
        window.onload = function() {
            $('#loading').fadeOut(50)
            setTimeout(() => {
                $('#page').fadeIn(100)
            }, 60);
        }
    </script>
    <style>

    </style>
</head>

<body style="margin: 0">
    <div class="top">
        <a href="/" class="link">
            <p class="title-top">BTL Craft</p>
        </a>
        <ul class="alist">
            <li><a href="/user" class="ha">用户中心</a></li>
            <li><a href="/help" class="ha">获取帮助</a></li>
            <li><a href="https://btlcraft.top" class="ha">皮肤站</a></li>
            <li><a href="/auth" class="ha">登录/注册</a></li>
        </ul>
    </div>
    <aside class="sidebar">
        <ul class="sidebar-links">
            <li class="sidebar-link" id="welcome" onclick="sidebar('#help/welcome')"><a href="/help" class="sidebar">介绍</a></li>
            <li class="sidebar-link" id="start" onclick="sidebar('#help/start')"><a href="/help/start" class="sidebar">快速上手</a></li>
            <li class="sidebar-link active"><a href="/help/start#role" class="sidebar">角色系统</a></li>
            <li class="sidebar-link active"><a href="/help/start#skin" class="sidebar">更改你的皮肤</a></li>
            <li class="sidebar-link active"><a href="/help/start#mod" class="sidebar">配置 Mod</a></li>
            <li class="sidebar-link" id="faq" onclick="sidebar('#help/faq')"><a href="/help/faq" class="sidebar">常见问题解答</a></li>
        </ul>
        </div>
    </aside>
    <main class="page">
        <div id="loading">
            <div class="Sf-Kd mspin-medium">
                <div>
                    <div></div>
                </div>
            </div>
            <p>请稍候</p>
        </div>
        <div class="page" id="page" style="display: none;">

            <?php


            include '../app/parse/markdown.php';
            include '../app/parse/markdownextra.php';

            if ($url != '') {
                $Dir = __DIR__ . '/../doc/' . $url . '.md';
                $Extra = new ParsedownExtra();
                echo $Extra->text(file_get_contents($Dir));
            } else {
                $Extra = new ParsedownExtra();
                echo $Extra->text(file_get_contents(__DIR__ . '/../doc/welcome.md'));
            }
            ?>
        </div>
        <hr>
        <div style="padding-left: 3rem; padding-top: 1rem;">
            <a href="mailto:old_driver__@outlook.com" style="border-bottom: none; ">
                <span style="color: #007bff;">发送反馈</span>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" x="0px" y="0px" viewBox="0 0 100 100" width="15" height="15" class="icon outbound">
                    <path fill="currentColor" d="M18.8,85.1h56l0,0c2.2,0,4-1.8,4-4v-32h-8v28h-48v-48h28v-8h-32l0,0c-2.2,0-4,1.8-4,4v56C14.8,83.3,16.6,85.1,18.8,85.1z"></path>
                    <polygon fill="currentColor" points="45.7,48.7 51.3,54.3 77.2,28.5 77.2,37.2 85.2,37.2 85.2,14.9 62.8,14.9 62.8,22.9 71.5,22.9"></polygon>
                </svg>
            </a>
        </div>
        <script src="/scripts/app.de1c.js"></script>
        <script src="/scripts/app.de2c.js"></script>
        <script>
            var url = <?php echo '"' . substr($_GET['url'], 5) . '";'; ?>
            if (url != '') {
                $('#' + url).attr('class', 'sidebar-active')
            } else {
                $('#welcome').attr('class', 'sidebar-active')
            }
        </script>
        <script>
            function sidebar(id) {
                $(id).attr('class', 'sidebar active')
            }
        </script>

    </main>

</body>

</html>