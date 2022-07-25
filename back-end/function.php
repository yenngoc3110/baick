<?php
    require "./database.php";

    function get_list_blog_admin()
    {
        $database = new database();
        $select = "SELECT * FROM blog_admin";
	    $data = $database->SelectAll($select);
        return $data;
    }


    //Get contact 
    function get_list_table_contact(){

        $database = new database();
        $select = "SELECT * FROM contact";
	    $data = $database->SelectAll($select);
        return $data;
    }


    function insert_blog_admin($id, $image, $title, $content)
    {
        $database = new database();
        $sql = "INSERT INTO blog_admin(id, image, title, content) VALUES ('$id', '$image', '$title', '$content')";
		$database->ExecuteSQL($sql);
    }
?>