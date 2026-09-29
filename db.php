<?php 
    function connectDb() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=artbox;charset=utf8mb4', 'root', '');
        } catch (Exception $e) {
            die('ERROR : ' . $e->getMessage());
        }
        return $db;
    }
?>