<?php
    class xampp_crud{
        public static function connect()
        {
            try{
                $con=new PDO('mysql:localhost=host; dbname=xampp_crud','root','');
                return $con;
            } catch (PDOException $error1) {
                echo 'Something went wrong, it was not possible connect you to database'.$error1->getMessage();
            } catch (Exception $error2){
                echo 'Generic error'.$error2->getMessage();
            }
            
        }
    }
?>