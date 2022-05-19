<?php

class Message {
    public $db = null;

    public function __construct(DBController $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into contact table
    public function addContact($name, $email, $msg) {
        $query_string = "INSERT INTO contacts (contact_name, contact_email, contact_message) VALUES ('$name','$email','$msg')";
                    
        //execute query
        $result = $this->db->con->query($query_string);
        return $result;
    }

    // insert into inkind table
    public function addInkind($name, $address, $contnum, $file) {
        $query_string = "INSERT INTO inkind (inkind_name, inkind_address, inkind_contnum, inkind_file) VALUES ('$name','$address','$contnum','$file')";
                    
        //execute query
        $result = $this->db->con->query($query_string);
        return $result;
    }

}