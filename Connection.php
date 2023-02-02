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
        public static function SelectData()
        {
            $data=array();
            $p=xampp_crud::connect()->prepare('SELECT * FROM crud_table(first_name,last_name,email,pwd) VALUES(:f,:l,:e,:p)');
            $p->execute();
            $data=$p->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>