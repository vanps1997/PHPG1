<?php
session_start();
include_once("Model/sach.php");
include_once("Model/cart.php");


if(isset($_REQUEST["action"])){
    if(strcmp($_REQUEST["action"],"addcart")==0){
        $id =$_REQUEST["id"];
        $gia =$_REQUEST["gia"];
        $content =  array();
        array_push($content,$id);
        array_push($content,$gia);
        Cart::them($content);
        // $lsCart = Cart::listCart();
        // $lsCartDB= Cart::getListFromDB(); 
        // $check = "cart";
        header('Location:index.php?action=cart');
    }
    if(strcmp($_REQUEST["action"],"cart")==0){
        $lsCart = Cart::listCart();
        $lsCartDB= Cart::getListFromDB(); 
        header('Location:index.php?action=cart');
        //$check = "cart";
    }
    if(strcmp($_REQUEST["action"],"chitiet")==0){
        $id =$_REQUEST["id"];
        $ls= Sach::getChiTiet($id);
        header('Location:index.php?action=chitiet&id=');
    }
    if(strcmp($_REQUEST["action"],"delete")==0){
        $id =$_REQUEST["id"];
        Cart::deleteDB($id);
        header('Location:index.php?action=cart');
    }
    if(strcmp($_REQUEST["action"],"deleteall")==0){
        Cart::deleteAllDB();
        header('Location:index.php?action=cart');  
    }
    if(strcmp($_REQUEST["action"],"update")==0){
        $id =$_REQUEST["id"];
        $sl = $_REQUEST["txtSoluong"];
        $sl = (int)$sl;
        Cart::editToDB($id,$sl);
        header('Location:index.php?action=cart');
        //echo $sl;
    }
    
}
?>
