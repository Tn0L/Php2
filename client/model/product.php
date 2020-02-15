<?php
    class Product extends Connect{
        function showAll(){
            $sql = "select * from product";
            $kq = parent::getAll($sql);
            return $kq;
        }
    }
?>