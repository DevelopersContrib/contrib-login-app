# contrib-login-app
contrib login app
#how to use class
 include 'contribsdk/contribclient.php';<br>
        //get api key from http://developers.contrib.com/<br>
        $api_key = 'xxxxxxxx';<br>
        $client = new ContribClient($api_key);<br>
#class functions
$client->isLoggedIn() - checks if user is already logged in<br>
$client->LoginUrl('http://localhost/contrib/index.php','http://localhost/') - get contrib login URL, pass redirect and cancel url<br>
$client->logout('http://localhost/contrib/index.php') - logout user from contrib, pass redirect url - url to be redirected after logout
$client->getUser() - get user information function<br>
returns array():<br>
array (size=2)<br>
  'success' => boolean false<br>
  'data' => <br>
    &nbsp;array (size=2)<br>
      &nbsp;&nbsp;'success' => boolean true<br>
      &nbsp;&nbsp;'info' => <br>
        &nbsp;&nbsp;array (size=6)<br>
          &nbsp;&nbsp;&nbsp;'userid' => ''<br>
          &nbsp;&nbsp;&nbsp;'email' => ''<br>
          &nbsp;&nbsp;&nbsp;'username' => ''<br>
          &nbsp;&nbsp;&nbsp;'first_name' => ''<br>
          &nbsp;&nbsp;&nbsp;'last_name' => ''<br>
          &nbsp;&nbsp;&nbsp;'image' => ''<br>
#reference links          
documentation - http://developers.contrib.com/opensource  <br>
sample - http://www.referrals.com


