<?php
    class Product extends Connect{
        function showAll(){
            $sql = "select * from product";
            $kq = parent::getAll($sql);
            return $kq;
        }
    }
    class NewProduct extends Connect{
        function showSpecial(){
            $sql = "select * from product";
            $kq = parent::getAll($sql);
            return $kq;
        }
    }
?>