<?php
    class Connection{ 
        public function connect($server, $username, $user_password, $db_name){
            $connect = mysqli_connect($server, $username, $user_password, $db_name);
            if($connect){
                echo "Database connected";
            }else{
                echo "Database failed to connect";
            }
        }
    }
?>