<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $Body_Json =  file_get_contents('php://input');
  $Json_data = $obj = json_decode($Body_Json);

  $host = $Json_data->Database_Host;
  $dbuser = $Json_data->Database_User;
  $dbpassword = $Json_data->Password;
  $dbname = $Json_data->Database_Name;

  $first_name     = $Json_data->First_Name;
  $last_name      = $Json_data->Last_Name;
  $admin_name     = $first_name.' '.$last_name;
  $email          = $Json_data->Email;
  $login_password = $Json_data->panel_Password;
  $licence_code = $Json_data->licence_code;
}

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $install_dir = 'temp/';
	$install_file = 'Dooo215.zip';

  $zip = new ZipArchive;
  if ($zip->open($install_file) === TRUE) {
    $zip->extractTo($install_dir);
    $zip->close();
    unlink($install_file);
  } else {
    exit('Invalid File');
    deleteDirectory($install_dir, true);
  }

  $db_file_path = $install_dir."application/config/database.php";
  if (!file_exists($db_file_path)){
    deleteDirectory($install_dir, true);
    exit('Something Went Wrong!');
  }
  $db_file = file_get_contents($db_file_path);
  $is_installed = strpos($db_file, "enter_hostname");

  $config_file_path = $install_dir."application/config/config.php";
  if (!file_exists($config_file_path)){
    deleteDirectory($install_dir, true);
    exit('Something Went Wrong!');
  }
  $config_file = file_get_contents($config_file_path);
  $is_installed2 = strpos($config_file, "enter_base_url");

  $sql_file_path = $install_dir."backup/db/database.sql";
  if (!file_exists($sql_file_path)){
    deleteDirectory($install_dir, true);
    exit('Something Went Wrong!');
  }
  $sql = file_get_contents($sql_file_path);
  $is_installed3 = strpos($sql, "first_user_email");

  //check if Installed Already
  if (!$is_installed && !$is_installed2 && !$is_installed3) {
    deleteDirectory($install_dir, true);
    exit("Seems this app is already installed! You can't reinstall it again.");
  }

  //check for valid database connection
  $mysqli = @new mysqli($host, $dbuser, $dbpassword, $dbname);
  if (mysqli_connect_errno()) {
      echo ($mysqli->connect_error);
      deleteDirectory($install_dir, true);
      exit();
  }

  //all input seems to be ok. check required fiels
  if (!is_file($sql_file_path)) {
    deleteDirectory($install_dir, true);
    exit('The database file could not found!');
  }

  $db_file = str_replace('enter_hostname', $host, $db_file);
  $db_file = str_replace('enter_db_username', $dbuser, $db_file);
  $db_file = str_replace('enter_db_password', $dbpassword, $db_file);
  $db_file = str_replace('enter_database_name', $dbname, $db_file);
  file_put_contents($db_file_path, $db_file);

   
  $actualURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
  $config_file = str_replace('enter_base_url', $actualURL, $config_file);
  file_put_contents($config_file_path, $config_file);


    
  $sql = str_replace('first_user_full_name', $admin_name, $sql);
  $sql = str_replace('first_user_email', $email, $sql);
  $sql = str_replace('first_user_password', md5($login_password), $sql);
  $sql = str_replace('licence_code', $licence_code, $sql);

  $deafult_api_key = generateRandomString();
  $sql = str_replace('deafult_api_key', $deafult_api_key, $sql);

  $mysqli->multi_query($sql);
  do {
  
  } while (mysqli_more_results($mysqli) && mysqli_next_result($mysqli));

  $mysqli->close();

  deleteDirectory($install_dir."backup/db/", true);
  folderCopy($install_dir, "../");
  deleteDirectory($install_dir, true);
  echo "Installed Successfully";

} catch(PDOException $e) {
  exit('Connection failed');
}


function generateRandomString($length = 16) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function getFilename($header) {
  if (preg_match('/filename="(.+?)"/', $header, $matches)) {
    return $matches[1];
  }
  if (preg_match('/filename=([^; ]+)/', $header, $matches)) {
    return rawurldecode($matches[1]);
  }
  throw new Exception(__FUNCTION__ .": Filename not found");
}

function hashDirectory($directory){
  if (! is_dir($directory)){ return false; }

  $files = array();
  $dir = dir($directory);

  while (false !== ($file = $dir->read())){
    if ($file != '.' and $file != '..') {
      if (is_dir($directory . '/' . $file)) { $files[] = hashDirectory($directory . '/' . $file); }
      else { $files[] = md5_file($directory . '/' . $file); }
    }
  }

  $dir->close();

  return md5(implode('', $files));
}

function folderCopy($source, $dest, $permissions = 0755){
      $sourceHash = hashDirectory($source);
      // Check for symlinks
      if (is_link($source)) {
          return symlink(readlink($source), $dest);
      }
  
      // Simple copy for a file
      if (is_file($source)) {
          return copy($source, $dest);
      }
  
      // Make destination directory
      if (!is_dir($dest)) {
          mkdir($dest, $permissions);
      }
  
      // Loop through the folder
      $dir = dir($source);
      while (false !== $entry = $dir->read()) {
          // Skip pointers
          if ($entry == '.' || $entry == '..') {
              continue;
          }
  
          // Deep copy directories
          if($sourceHash != hashDirectory($source."/".$entry)){
            folderCopy("$source/$entry", "$dest/$entry", $permissions);
          }
      }
  
      // Clean up
      $dir->close();
      return true;
}

function deleteDirectory($dir) {
  if (!file_exists($dir)) {
    return true;
  }
  if (!is_dir($dir)) {
    return unlink($dir);
  }
  foreach (scandir($dir) as $item) {
    if ($item == '.' || $item == '..') {
      continue;
    }
    if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
      return false;
    }
  }
  return rmdir($dir);
}
?>