<?php

class User {
    
//    public static function find_all_users() {
//        global $database; // global allows me to access all the methods and properties in the database class. In the database class I instanciated 
//                          //my database object into a variable called $database and im accessing that variable $database in my user class from my database 
//                          //class by using global
//        
//        $result_set = $database->query("SELECT * FROM users");
//        $user_found = mysqli_fetch_array($result_set);
//        return $user_found;
//    }
//    
//    public static function find_user_by_id($id) {
//        global $database;
//        
//        $result_set = $database->query("select * from users where id = $id");
//        $user_found = mysqli_fetch_array($result_set);
//        return $user_found;
//    }
    
    // My cleaner version below is different to the lectures code in Section 5 Lecture 40
    // use $this to refer to the current object
    // use self to refer to the current class
    
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    
    public static function find_all_users() {
        return self::find_this_query("select * from users");
    }
    
    public static function find_user_by_id($id) {
        
        
        return self::find_this_query("select * from users where id = $id");
        
    }
    
    public static function find_this_query($sql) {
        global $database; // global allows me to access all the methods and properties in the database class. In the database class I instanciated 
                          //my database object into a variable called $database and im accessing that variable $database in my user class from my database 
                          //class by using global
        
        $query = $database->query($sql);
        $query_results = mysqli_fetch_array($query);
        return $query_results;
    }
    
    
    
    
}
?>

