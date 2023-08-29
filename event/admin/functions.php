<?php
    function get_users() {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "lms");
        $user_count="";
        $query = "select count(*) as user_count from users";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)) {
            $user_count = $row['user_count'];
        }
        return($user_count);
    }
    function get_products() {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "lms");
        $prod_count="";
        $query = "select count(*) as prod_count from products";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)) {
            $prod_count = $row['prod_count'];
        }
        return($prod_count);
    }
    
    
    function get_purchased() {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "lms");
        $purchased_count="";
        $query = "select count(*) as purchased_count from purchased";
        $query_run = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($query_run)) {
            $purchased_count = $row['purchased_count'];
        }
        return($purchased_count);
    }
?>