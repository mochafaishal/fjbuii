<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/28/17
 * Time: 10:49 PM
 */

class Shop extends CI_Controller
{
    function index(){

        $query = $this->Shop_model->getProd();

        $data['prods'] = $query->result();

        $this->load->view('shop',$data);
    }

    function catFilter()
    {
        $cat = $_POST['cat'];
        $sort = $_POST['sort'];

        $query = $this->Shop_model->getProdCat($cat, $sort);
        // if($sort == "DESC"){

        // }


        $data['catData']=$query->result();

        $this->load->view('shop',$data);
    }

}