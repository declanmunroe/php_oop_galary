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
        
        $the_result_array =  self::find_this_query("select * from users where id = $id");
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false; // returns the first item of the array
        
    }
    
    public static function find_this_query($sql) {
        global $database; // global allows me to access all the methods and properties in the database class. In the database class I instanciated 
                          //my database object into a variable called $database and im accessing that variable $database in my user class from my database 
                          //class by using global
        
        $query = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($query)) {
            $the_object_array[] = self::instantation($row);
        }
        return $the_object_array;
    }
    
    public static function instantation($array_results) {
        $the_object = new self; // self refers to the current class so writing self instead of User()
        
        // $the_object->username = $array['username'] This method is turning the array values into object properties
        
        foreach ($array_results as $class_property => $value) {
            if ($the_object->has_class_property($class_property)) {
                $the_object->$class_property = $value;
            }
        }
        return $the_object;
    }
    
    private function has_class_property($class_property) {
        $object_properties = get_object_vars($this); // passes an array of the User class properties into the variable created. 
                                                     //$this in the brackets refers to the current class we are in
        
        return array_key_exists($class_property, $object_properties);
    }
    
    
    
    
}
?>

