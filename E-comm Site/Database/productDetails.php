<?php


class productDetails
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)){
            return null;
        }
        $this->db = $db;
    }

    //get product details
    public function getProductDetail($table = 'product'){
        $result = $this->db->con->query("select * from {$table}");

        $resultArray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    //getting product values by item_id
    public function getProductByID($item_id=null, $table='product'){
        if(isset($item_id)){
            $result = $this->db->con->query("select * from {$table} where item_id={$item_id}");

            $resultArray = array();
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}







