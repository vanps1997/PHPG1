<?php
class User{
    var $userName;
    var $password;
    var $fullName;
    function User($userName , $password , $fullName)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->fullName = $fullName;
    }
    /**
     * xác thực người sử dụng
     * @param $userName string tên đăng nhập
     * @param $password string mật khẩu
     * @return user hoặc null nếu như k tồn tại
     */
    static function authentication($userName , $password)
    {
        if($userName == "vanps1997" && $password== "123")
        {
            return new User($userName , $password ,"vanps1997");
        }
        else return null;
    }
}
?>