<?php
    require "./database.php";


    //GET Comment
    function get_list_single()
    {
        $database = new database();
        $select = "SELECT * FROM single";
	    $data = $database->SelectAll($select);
        return $data;
    }


    //GET Post bài viết
    function get_list_post()
    {
        $database = new database();
        $select = "SELECT * FROM blog_admin";
	    $data = $database->SelectAll($select);
        return $data;
    }




    function insert_single($name2,$email2,$website2,$message2)
    {
        $database = new database();
        $sql = "INSERT INTO single(name, email, website, message) VALUES ('$name2', '$email2', '$website2', '$message2')";
		$database->ExecuteSQL($sql);
    }
?>