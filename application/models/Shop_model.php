<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 9:13 PM
 */

class Shop_model extends CI_Model
{
    function getProd(){
        $this->db->from('products');
        $this->db->order_by('product_price','ASC');
        $query = $this->db->get();
        return $query;
    }

    function getProdCat($cat, $sort){
        $query = $this->db->order_by('product_price', $sort)->get_where('products',array('product_category' =>$cat));
        return $query;
    }
}