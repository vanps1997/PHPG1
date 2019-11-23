<?php
session_start();
include_once("header.php");
include_once("Model/sach.php");
include_once("Model/cart.php");
include_once("Model/user.php");
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
$user = unserialize($_SESSION["user"]);

$check = null;
if (isset($_REQUEST["action"])) {
    if (strcmp($_REQUEST["action"], "cart") == 0) {
        $lsCart = Cart::listCart();
        $lsCartDB = Cart::getListFromDB();
        $check = "cart";
    }
    if (strcmp($_REQUEST["action"], "chitiet") == 0) {
        $id = $_REQUEST["id"];
        $ls = Sach::getChiTiet($id);
        $check = "chitiet";
    }
}


// $check =null;
// if(isset($_REQUEST["action"])){
//     if(strcmp($_REQUEST["action"],"addcart")==0){
//         $id =$_REQUEST["id"];
//         $gia =$_REQUEST["gia"];
//         $content =  array();
//         array_push($content,$id);
//         array_push($content,$gia);
//         Cart::them($content);
//         $lsCart = Cart::listCart();
//         $lsCartDB= Cart::getListFromDB(); 
//         $check = "cart";
//     }
//     if(strcmp($_REQUEST["action"],"cart")==0){
//         $lsCart = Cart::listCart();
//         $lsCartDB= Cart::getListFromDB(); 
//         $check = "cart";
//     }
//     if(strcmp($_REQUEST["action"],"chitiet")==0){
//         $id =$_REQUEST["id"];
//         //Cart::them($content);
//         $ls= Sach::getChiTiet($id);
//         //var_dump($ls);
//         $check = "chitiet";
//     }
//     if(strcmp($_REQUEST["action"],"delete")==0){
//         $id =$_REQUEST["id"];
//         Cart::deleteDB($id);
//         $lsCart = Cart::listCart();
//         $lsCartDB= Cart::getListFromDB(); 
//         $check = "cart";
//     }
//     if(strcmp($_REQUEST["action"],"deleteall")==0){
//         Cart::deleteAllDB();
//         $lsCart = Cart::listCart();
//         $lsCartDB= Cart::getListFromDB(); 
//         $check = "cart";
//     }
//     if(strcmp($_REQUEST["action"],"update")==0){
//         $id =$_REQUEST["id"];

//         $sl = $_REQUEST["txtSoluong"];
//         $sl = (int)$sl;
//         Cart::editToDB($id,$sl);
//         $lsCart = Cart::listCart();
//         $lsCartDB= Cart::getListFromDB(); 
//         $check = "cart";
//     }
// }
$lsSach = Sach::getListFromDB();
$size = count($lsSach);
$i = 0;
include_once("nav.php");
?>
<div id="content-wrapper" style="background-color: #f8f9fa;">
    <div class="container">
        <?php if ($check == null) { ?>

            <h1 class="pt-2" style="text-align: center;color: red;">SÁCH</h1>
            <div>
                <div>
                    <table class="table table-borderless" style="text-align: center;">
                        <tbody>
                            <tr>
                                <?php foreach ($lsSach as $key => $value) {
                                        $i++; ?>

                                    <th scope="col">
                                        <img src="<?php echo $value->anh; ?>" alt="" class="img-thumbnail" style="width: 200px;height: 300px"><br>
                                        <a href="index.php?action=chitiet&&id=<?php echo $value->id ?>"> <?php echo $value->ten ?></a><br>
                                        Giá: <?php echo $value->gia ?><br>
                                        <a href="giohang.php?action=addcart&&id=<?php echo $value->id ?>&&gia=<?php echo $value->gia ?>"><img src="mua.jpg" alt=""></a>
                                    </th>
                                    <?php if ($i % 3 == 0) { ?>
                            </tr>
                            <tr>
                            <?php }
                                    if ($i >= $size) { ?></tr>
                        <?php } ?>
                    <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } else if ($check == "cart") { ?>
            <div>

                <h2 class="pt-2" style="text-align:center;color: red;">THÔNG TIN GIỎ HÀNG</h2>
                <table align="center" border="1">
                    <tbody>

                        <tr style="text-align:center; font-weight:bold">
                            <td> Mã sách </td>
                            <td> Tên sách </td>
                            <td> Ảnh bìa </td>
                            <td> Số lượng </td>
                            <td> Đơn giá </td>
                            <td> Thành tiền </td>
                            <td width="50px"></td>
                            <td width="50px"></td>
                        </tr>
                        <?php foreach ($lsCart as $key => $value) { ?>
                            <tr style="text-align:center; font-weight:bold">
                                <td> <?php echo $value->id ?> </td>
                                <td> <?php echo $value->ten ?></td>
                                <td><img src="<?php echo $value->anh ?>"></td>
                                <form action="giohang.php?action=update&&id=<?php echo $value->id ?>" method="post">
                                    <td>
                                        <input type="number" name="txtSoluong" value="<?php echo $value->sl ?>" style="background">
                                        <input type="submit" name="" id="" value="Sửa">
                                    </td>
                                </form>
                                <td><?php echo $value->gia ?> </td>
                                <td><?php echo $value->thanhtien ?> </td>
                                <td> <a href="index.php?action=chitiet&&id=<?php echo $value->id ?>"> Chi tiết </a></td>
                                <!-- <td> <input type="submit" value="Cập Nhật"></td> -->
                                <td> <a href="giohang.php?action=delete&&id=<?php echo $value->id ?>">Xóa</a></td>
                                <!-- <td> <a  href="giohang.php?action=update&&id=<?php echo $value->id ?>">Cập Nhật</a></td> -->
                            </tr>
                        <?php } ?>
                        <tr style="font-weight: bold; color:blue; text-align:right ">
                            <td colspan="9">
                                <a href="giohang.php?action=deleteall">Xóa Giỏ Hàng</a>
                            </td>
                        </tr>
                        <tr style="font-weight: bold; color:blue; text-align:right ">
                            <td colspan="9" align="center">
                                <a href="">ĐẶT HÀNG</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <?php } else if ($check == "chitiet") {;
            ?>
            <h2 class="pt-2" style="text-align:center;color: red;">CHI TIẾT</h2>
            
        
            <div class="container pt-2">
                <table class="table table-borderless">
                    <?php foreach ($ls as $key => $value) { ?>
                        <tr>
                            <td rowspan="4" style="width: 120px;"><img src="<?php echo $value->anh ?>" alt=""></td>
                        </tr>
                        <tr> 
                            <th scope="col"> Tiêu Đề: <?php echo $value->ten ?> </th>
                        </tr>
                        <tr> <th scope="col">Giá: <?php echo $value->gia ?> </th></tr>
                        <tr>
                            <th scope="col">
                                <a href="index.php?action=addcart&&id=<?php echo $value->id ?>&&gia=<?php echo $value->gia ?>"><img src="mua.jpg" alt=""></a>
                            </th>
                        </tr>
                        <tr >
                            <th scope="col"> Mô Tả:</th>
                        </tr>
                        <tr>
                            <td scope="col" colspan="5"><em><?php echo $value->mota ?></em></td>
                        </tr>

                </table>
            </div>
        <?php } ?>
    <?php } ?>

    </div>
</div>
<?php include_once("footer.php"); ?>

<!-- modal login -->
<form action="" method="post">
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding: 30px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel" style="text-align: center;">Sign in</h1>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="Username" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div class="form-group modal-footer">
                    <button type="submit" name="editdanhba" class="btn btn-primary">Save changes</button>
                </div>
                <?php if (strlen($information) != 0) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $information; ?>
                    </div>
                <?php } ?>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
</form>