<?php 
    class Cart{
        var $id;
        var $gia;
        var $sl;
        var $thanhtien;
        
        function Cart($id,$gia,$sl){
            $this->id = $id;
            $this->gia =$gia;
            $this->sl =$sl;
            $this->thanhtien =$sl* $gia;
        }
        static function connect(){
            $con = new  mysqli("localhost","root","","SachDB");
            $con->set_charset("utf8");//hướng đối tượng
            if($con->connect_error)
                die("kết nối thất bại. Chi tiết:".$con->connect_error);
            return $con;
        }
        static function getListFromDB(){
            
            $con = Cart::connect();
            //b2: thao tác với csdl : CRUD
            $sql = "SELECT * FROM Cart";
            
            $result =  $con->query($sql);
            $ds = array();
            
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                    $thongtin = new Cart($row["Id"],$row["Gia"],$row["SoLuong"]);
                    array_push($ds,$thongtin);
                }
            }
            //b3 : đóng kết nối
            $con->close();
            //echo "<h4>kết nối thành công<h4>";
            return $ds;
        }
        static function addToDB($content)
        {
            $con = Cart::connect();
            $sql="INSERT INTO `Cart`( `Id`, `Gia`, `SoLuong`) VALUES ('$content[0]','$content[1]','1')";
       
            if (mysqli_query($con, $sql)) {
                echo "<script type='text/javascript'>alert('Thêm Thành công');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            //b3 : đóng kết nối
            $con->close();
        }
        static function editToDB($id,$sl)
        {
            $con = Cart::connect();

            $sql="UPDATE `Cart` SET SoLuong='$sl' WHERE Id='$id'";
       
            if (mysqli_query($con, $sql)) {
                echo "<script type='text/javascript'>alert('Thêm Thành công');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            //b3 : đóng kết nối
            $con->close();
        }
        static function deleteDB($id){
            $con = Cart::connect();
            $sql="DELETE FROM `Cart` WHERE Id = '$id'";
            if (mysqli_query($con, $sql)) {
                //echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            //b3 : đóng kết nối
            $con->close();
        }
        static function deleteAllDB(){
            $con = Cart::connect();
            $sql="DELETE FROM `Cart`";
            if (mysqli_query($con, $sql)) {
                //echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            //b3 : đóng kết nối
            $con->close();
        }
        static function them($content){
            $lsCartDB= Cart::getListFromDB();
            if($lsCartDB!=null){
                foreach($lsCartDB as $key=>$value){
                    if($value->id == $content[0] ){
                        $soluong =$value->sl + 1;

                        return  Cart::editToDB($content[0],$soluong);
                    }
                       
                }
                return  Cart::addToDB($content);
            }
            else return Cart::addToDB($content);
        }

        static function listCart(){
            
            $con = Cart::connect();
            //b2: thao tác với csdl : CRUD
            $sql = "SELECT * FROM `Cart` INNER JOIN`Sach` ON Cart.Id =Sach.Id";
            
            $result =  $con->query($sql);
            $ds = array();
            
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                    $thongtin = new Info($row["Id"],$row["Ten"],$row["TacGia"],$row["Anh"],$row["MoTa"],$row["Gia"],$row["SoLuong"]);
                    array_push($ds,$thongtin);
                }
            }
            //b3 : đóng kết nối
            $con->close();
            //echo "<h4>kết nối thành công<h4>";
            return $ds;
        }
    }
    class Info{
        var $id;
        var $ten;
        var $tacgia;
        var $anh;
        var $mota;
        var $gia;
        var $sl;
        var $thanhtien;
        
        function Info($id,$ten,$tacgia,$anh,$mota,$gia,$sl){
            $this->id = $id;
            $this->ten = $ten;
            $this->tacgia =$tacgia;
            $this->anh =$anh;
            $this->mota =$mota;
            $this->gia =$gia;
            $this->sl =$sl;
            $this->thanhtien =$sl * $gia;
            
        }
    }
?>
