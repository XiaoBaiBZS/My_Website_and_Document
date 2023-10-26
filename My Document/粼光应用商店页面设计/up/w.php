<meta http-equiv="Refresh" content="1;url=/up/" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php

 if(isset($_GET['submit_btn']))
 {
  $username = $_GET['name'];
  $pwd = $_GET['pwd'];
  $m = $_GET['m'];
  $bm = $_GET['bm'];
  $js = $_GET['js'];
  $lj = $_GET['lj'];
  $qx = $_GET['qx'];
  $logo = $_GET['logo'];
  $rj = $_GET['rj'];
  $text = "<h3>" . " 软件开发者-姓名/昵称:" . $username . " 联系方式:" . $pwd  . " 软件名:" . $m . " 软件包名:" . $bm . " 软件介绍:" . $js . " 软件获取链接:" . $lj . "所需权限:" . $qx . " 软件logo:" . $logo . " 软件截图:" . $rj .   " </h3> </hr>\n" ;
  $fp = fopen('site.html', 'a+');

    if(fwrite($fp, $text))  {
        echo 'OK 请等待审核';

    }
fclose ($fp);    
}
?>