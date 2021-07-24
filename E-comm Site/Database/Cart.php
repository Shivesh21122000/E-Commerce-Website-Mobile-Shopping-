<?php

//Cart class
class Cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)){
            return null;
        }
        $this->db = $db;
    }

    //insert into cart table

    public function insertIntoCart($params=null, $table='cart'){
        if($this->db->con!=null){
            if($params!=null){
                //getting column names
                $columns = implode(',',array_keys($params));

                //getting values of the column
                $values = implode(',',array_values($params));

                //query string
                $query_string = sprintf('insert into %s(%s) values(%s)', $table,$columns,$values);

                //result
                $result = $this->db->con->query($query_string);

                return $result;

            }
        }
    }

    //To get user_id and item_id for cart table and insert them in cart table

    public function addToCart($user_id, $item_id){
        if(isset($user_id) && isset($item_id)){
            $params = array(
                "user_id" => $user_id,
                "item_id"=> $item_id
            );
            $result = $this->insertIntoCart($params);

            if($result){
                //if result comes then reload the page
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    //Deleting from cart table
    public function deleteFromCart($item_id=null, $table = 'cart'){
        if($item_id!=null){
            $result = $this->db->con->query("delete from {$table} where item_id={$item_id}");
            if($result){
                //if result comes then reload the page
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    //Calculating total price of products in cart
    public function subTotal($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum = $sum+ floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }

    //Getting cart item_id array
    public function cartIdArray($cartArray = null, $key='item_id'){
        if($cartArray!=null){
            $cartID = array_map(function ($value) use ($key){
                return $value[$key];
            }, $cartArray);
            return $cartID;
        }
    }

}