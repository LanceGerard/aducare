<?php

class Product
{
    public $db = null;
    public $con;

    public function __contruct(DBController $db)
    {
        //if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData meth
    public function getData($table = 'product')
    { 
        $con = mysqli_connect("localhost", "root", "", "aducare");
        $result = mysqli_query($con, "SELECT * FROM ($table)");
        $resultArray = array();
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch data for donate
    public function getDonate($table = 'product')
    {
        $con = mysqli_connect("localhost", "root", "", "aducare");
        $result = mysqli_query($con, "SELECT * FROM ($table) WHERE item_class='Buy to donate'");
        $resultArray = array();
        
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch product using item_id
    public function getProduct($item_id = null, $table = 'product') {
        if (isset($item_id)) {
            $con = mysqli_connect("localhost", "root", "", "aducare");
            $result = mysqli_query($con, "SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                $resultArray[] = $item;
            }
    
            return $resultArray;
        }
    }
}