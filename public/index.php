
<?php
/*
|--------------------------------------------------------------------------
| 注册自动加载程序
|--------------------------------------------------------------------------
|
| 引入 Composer 自动加载器和数据库类
|
*/

require __DIR__ . '/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| 环境检查
|--------------------------------------------------------------------------
*/

if (!file_exists(__DIR__ . '/../conf/install.lock')) {
    require __DIR__ . '/../app/setup/chkenv.php';
}


/*
|--------------------------------------------------------------------------
| 设置router并运行
|--------------------------------------------------------------------------
*/
require __DIR__ . '/../app/router/Router.php';


