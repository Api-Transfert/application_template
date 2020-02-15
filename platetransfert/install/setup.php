<?php 

//Created By Salman Iqbal
//Company Parexons
//Date 11/25/2016

$db_config = "<?php bs() ?>application/config/database.php";

if (isset($_POST)) 
{


	//taking values for database setup
   $hostname = $_POST['hostname'];
   $db_name  = $_POST['db_name'];
   $username = $_POST['username'];
   $db_pass  = $_POST['db_pass'];
   $site_url = $_POST['site_url'];


   if (isset($_POST['submit']) == TRUE) 
   {

      /// Create connection
      $con = new mysqli($hostname,$username,$db_pass,'');

      // Check connection
      if ($con->connect_error) 
      {
          die("Connection failed: " . $con->connect_error);
      } 
      
      
     //if database exits then run this script  
     else
     {

      //Check if database exists or not
      if(mysqli_select_db($con,$db_name))
      {
         $notification_error = "error";      
      echo  '<script type="text/javascript">
             window.location = "index.php?err_msg= Database Already Exits Please Try With Another Name."
            </script>'; 
        exit();
      }

      //create database
      $query = "CREATE DATABASE IF NOT EXISTS ".$db_name;

      //If query run successfully
      if ($con->query($query) == TRUE) 
      {

         //if post exists
         if (isset($_POST['submit']) == TRUE) 
         {
            // Open the default SQL file
            $query = file_get_contents('sql_files/login_db.sql');

            //Select database for tables insertion
            $dbSelector = "Use `".$db_name."`; ";

            $query = $dbSelector.$query;

            // Execute a multi query
            if($con->multi_query($query))
            {
               do {

                 // fetch results
                  if (!$con->more_results()) {
                     break;
                  }

                  //For more results
                  if (!$con->next_result()) {
                     if($con->errno){
                        if($con->error === "Variable 'sql_mode' can't be set to the value of 'NULL'"){
                           return true;
                        }else{
                           die("FAIL::".$con->error."::error");
                        }
                     }
                     break;
                  }
               } 
               while (true);
            }
         }
         
         //Now Seting Hostname,username,password,Database name in config/database  
         if (isset($_POST['submit']) == TRUE) 
         {

            // Config path
            $install_path    = 'config/database.php';
            $output_path   = '<?php bs() ?>application/config/database.php';

            // Open the file
            $database_file = file_get_contents($install_path);

            $new  = str_replace("%HOSTNAME%",$hostname,$database_file);
            $new  = str_replace("%USERNAME%",$username,$new);
            $new  = str_replace("%PASSWORD%",$db_pass,$new);
            $new  = str_replace("%DATABASE%",$db_name,$new);

            // Write the new database.php file
            $handle = fopen($output_path,'w+');

            // Chmod the file, in case the user forgot
            @chmod($output_path,0777);

            // Verify file permissions
            if(is_writable($output_path)) {

               // Write the file
               if(fwrite($handle,$new)) 
               {

                  // echo "create";
               } 
               else 
               {
                  return false;
               }

            } else {
               return false;
            }
            
         }
         
         // Now setting base url in config/config.php
         if (isset($_POST['submit']) == TRUE) 
         {

            //config path
            $local_path   = "config/config.php";
            $replace_path = "<?php bs() ?>application/config/config.php";

            //geting content of local config file
            $config_file  = file_get_contents($local_path);

            $new = str_replace('%BASE_URL%',$site_url,$config_file);

            //getting file config for replacing base url
            $write = fopen($replace_path,"w+");

            // Chmod the file, in case the user forgot
            @chmod($replace_path,0777);

            // Verify file permissions
            if (is_writable($replace_path)) 
            {
               // Write the file
               if (fwrite($write,$new))
               {
                  echo  '<script type="text/javascript">
                      window.location = "<?php bs() ?>users/Auth/login/?success_msg= Configuration Completed Successfully, Please Login To System."
                     </script>';
                  
                   
               }
               else
               {
                  return FALSE;
               }
            }
            else
            {
               return FALSE;
            }

         }

        }

      //If error in database
      else 
      {
         echo "Error in Creating Database".$con->error;
      }
      
      $con->close();
   } 

 }

}
//end of file
//install/setup.php
?>













