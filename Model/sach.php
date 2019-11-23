<?php 
    class Sach{
        var $id;
        var $ten;
        var $tacgia;
        var $gia;
        var $anh;
        var $mota;
        function Sach($id,$ten,$tacgia,$gia,$anh,$mota){
            $this->id = $id;
            $this->ten = $ten;
            $this->tacgia =$tacgia;
            $this->gia =$gia;
            $this->anh =$anh;
            $this->mota =$mota;
        }
        static function connect(){
            $con = new  mysqli("localhost","root","","SachDB");
            $con->set_charset("utf8");//hướng đối tượng
            if($con->connect_error)
                die("kết nối thất bại. Chi tiết:".$con->connect_error);
            return $con;
        }
        static function getListFromDB(){
            
            $con = Sach::connect();
            //b2: thao tác với csdl : CRUD
            $sql = "SELECT * FROM Sach";
            
            $result =  $con->query($sql);
            $ds = array();
            
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                    $thongtin = new Sach($row["Id"],$row["Ten"],$row["TacGia"],$row["Gia"],$row["Anh"],$row["MoTa"]);
                    array_push($ds,$thongtin);
                }
            }
            //b3 : đóng kết nối
            $con->close();
            //echo "<h4>kết nối thành công<h4>";
            return $ds;
        }
        static function getChiTiet($id){
            
            $con = Sach::connect();
            //b2: thao tác với csdl : CRUD
            $sql = "SELECT * FROM Sach Where Id = '$id'";
            
            $result =  $con->query($sql);
            $ds = array();
            
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {//biên nó thành 1 mảng kết hợp
                    $thongtin = new Sach($row["Id"],$row["Ten"],$row["TacGia"],$row["Gia"],$row["Anh"],$row["MoTa"]);
                    array_push($ds,$thongtin);
                }
            }
            //b3 : đóng kết nối
            $con->close();
            //echo "<h4>kết nối thành công<h4>";
            return $ds;
        }
    }
?>
