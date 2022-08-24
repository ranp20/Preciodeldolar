<?php
$r = "";
if(isset($_POST) && count($_POST) > 0){
  if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST['email-adm'])){
    $arr_logiadm = [
      "email" => (isset($_POST['email-adm']) && $_POST['email-adm'] != "") ? $_POST['email-adm'] : "",
      "password" => (isset($_POST['pass-adm']) && $_POST['pass-adm'] != "") ? $_POST['pass-adm'] : "",
      "chkrempass" => (isset($_POST['remem-pass-adm']) && $_POST['remem-pass-adm'] != "") ? $_POST['remem-pass-adm'] : "off"
    ];    
    require_once 'c_list-by-username.php';
    $tUser = new List_byUsernameAdmin();
    $getbyU = $tUser->list($arr_logiadm['email']);

    if(isset($_COOKIE['preciodeldolar_adm-password'])){
      // $pass_save = substr($_COOKIE['preciodeldolar_adm-password'], 1, -1);
      if($arr_logiadm['password'] == $getbyU[0]['u_password']){
        session_start();
        $_SESSION['adm-logg_preciodeldolar'] = $getbyU[0];
        $r = array(
          'r' => 'true',
          'rdata' => $getbyU[0],
        );
      }else{
        $r = array(
          'r' => 'not-match',
        );
      }
    }else{
      if(count($getbyU) > 0){
        if($arr_logiadm['chkrempass'] == "on"){
          if(password_verify($arr_logiadm['password'], $getbyU[0]['u_password'])){
            session_start();
            $_SESSION['adm-logg_preciodeldolar'] = $getbyU[0];

            $resadm_email = $getbyU[0]['u_username'];
            $resadm_pass  = $getbyU[0]['u_password'];

            // CREAR COOKIES
            $cookie_expiration_time = time() + (10 * 365 * 24 * 60 * 60); // COOKIE EXPIRA EN 10 AÑOS
            if(count($_COOKIE) > 0){
              setcookie("preciodeldolar_adm-email", json_encode($resadm_email), $cookie_expiration_time, '/', '', true, true);
              setcookie("preciodeldolar_adm-password", json_encode($resadm_pass), $cookie_expiration_time, '/', '', true, true);
            }else{
              //echo "Cookies NO soportadas";
            }

            $r = array(
              'r' => 'true',
              'rdata' => $getbyU[0],
            );
          }else{
            $r = array(
              'r' => 'not-match',
            );
          }
        }else{
          if(password_verify($arr_logiadm['password'], $getbyU[0]['u_password'])){
            session_start();
            $_SESSION['adm-logg_preciodeldolar'] = $getbyU[0];
            $r = array(
              'r' => 'true',
              'rdata' => $getbyU[0],
            );
          }else{
            $r = array(
              'r' => 'not-match',
            );
          }
        }
      }else{
        $r = array(
          'r' => 'false',
        );
      }
    }
  }else{
    $r = array(
      'r' => 'err_email',
    );
  }
}else{
  $r = array(
    'r' => 'false',
  );
}
die(json_encode($r));