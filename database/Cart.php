<?php

class Cart {
    public $db = null;

    public function __construct(DBController $db) {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart") {
        if ($this->db->con!=null && $params != null) {
            $product = new Product($db);
            
            if (count($params) > 3) {
                $cartItems = $product->getData('cart');

                // check for duplicate cart entries
                foreach ($cartItems as $cartItem) {
                    ($params['item_id']==$cartItem['item_id']) ? $existing = $params['item_id'] :'';
                }

                if ($existing!=null && $params['item_type'==null]) {
                    $add = $params['item_quantity'];
                    echo "inside existing";
                    // sql query update
                    $query_string = sprintf("UPDATE $table SET item_quantity = item_quantity +  $add WHERE item_id = $existing");
                    $existing = null;
                } else {
                    // take 4th element
                    $type = $params['item_type'];

                    // remove 4th element
                    unset($params['item_type']);

                    // get table cols for the rest
                    $columns = implode(',', array_keys($params));
                    $values = implode(',', array_values($params));
                    
                    // cql query insert
                    $query_string = sprintf("INSERT INTO %s(%s, item_type) VALUES(%s, '$type')", $table, $columns, $values);
                }
            } else {
                $cartItems = $product->getData('cart');

                // check for duplicate cart entries
                foreach ($cartItems as $cartItem) {
                    if ($params['item_id']==$cartItem['item_id']) $existing = $params['item_id'];
                }

                if ($existing!=null && $params['item_type'==null]) {
                    $add = $params['item_quantity'];

                    // sql query update
                    $query_string = sprintf("UPDATE $table SET item_quantity = item_quantity +  $add WHERE item_id = $existing");
                    $existing = null;
                } else {
                    // get table cols
                    $columns = implode(',', array_keys($params));
                    $values = implode(',', array_values($params));

                    //create sql query
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                }
            }
            
            //execute query
            $result = $this->db->con->query($query_string);
            return $result;
            
        }
    }

    // insert data from but-to into cart table
    public function addToCart($userid, $itemid, $quantity, $type) {
        if (isset($userid)&&isset($itemid)&&isset($quantity)) {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid,
                "item_quantity" => $quantity,
                "item_type" => $type
            );

            //insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result) {
                //reload
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    // sub total
    public function getSum($arr) {
        if(isset($arr)) {
            $sum = 0;
            foreach($arr as $item) {
                $sum += floatval($item);
            }
            return sprintf('%.2f', $sum);
        }
    }

    // del item
    public function delCartItem($item_id=null, $table='cart'){
        if ($item_id!=null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if ($result) {
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // get item_id of shopping cart list
    public function getItemId($cartArray=null, $key="item_id"){
        if($cartArray != null){
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);

            return $cart_id;
        }
    }
}