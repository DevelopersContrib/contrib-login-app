<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
        <?php
        include 'contribsdk/contribclient.php';
        //get api key from http://developers.contrib.com/
        $api_key = 'xxxxxxxx';
        $client = new ContribClient($api_key);
        
        if ($client->isLoggedIn()===true){
              $profile = $client->getUser();
              echo 'Welcome '.$profile['data']['info'] ['first_name'].' '.$profile['data']['info'] ['last_name'];
              echo '<br>';
              echo '<a href="logout.php">Logout</a>';
        }else {
             ?>
              <h3>Javascript Login Script</h3>
               <script src="https://tools.contrib.com/connect?api_key=<?php echo $api_key?>"></script>
               <script type="text/javascript">
               var contrib_connect = {
                ip : '<?php echo $_SERVER['REMOTE_ADDR']?>',
                redirect_url: 'http://localhost/contrib/index.php',
                cancel_url: 'http://localhost/',
                api_key: '<?php echo $api_key?>'
               }
              </script>    
                             
             <br> 
             <h3>OR Use Get Login Url</h3>
                         
             <?php
             $login_url =    $client->LoginUrl('http://localhost/contrib/index.php','http://localhost/');
             echo '<a href="'.$login_url.'" target="_blank">Login</a>' ;
        }
        ?>
  </body>
</html>
