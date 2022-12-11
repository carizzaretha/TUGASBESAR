<?php
              
        include 'connect.php';
        public function getOrang($nama){
        $searchbuku1 = mysqli_query($koneksi, "select * from book1WHERE Source=$nama"); 
        $result=[];
        foreach ($res as $key => $value){  
        }
        return $result;
    }
               
            ?>
