<?php
    require_once 'config/db.php';
    class model{
        private $mamh,  $ten_mh, $sotinchi,$sotiet_lt,$sotiet_bt, $sotiet_thtn, $sogio_tuhoc;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM qldh";
            $result = mysqli_query($conn,$sql);

            $datas = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }
            $this->closeDb($conn);

            return $arr_users;
        }

        public function add($mamh,  $ten_mh, $sotinchi,$sotiet_lt,$sotiet_bt, $sotiet_thtn, $sogio_tuhoc){
            $conn = $this->connectDb();
            $sql = "INSERT INTO qldh (mamh,  ten_mh, sotinchi,sotiet_lt,sotiet_bt, sotiet_thtn, sogio_tuhoc)
             VALUES ('$mamh', ' $ten_mh',' $sotinchi','$sotiet_lt','$sotiet_bt', '$sotiet_thtn', '$sogio_tuhoc')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }


        public function getUser($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM qldh WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function update($mamh,  $ten_mh, $sotinchi,$sotiet_lt,$sotiet_bt, $sotiet_thtn, $sogio_tuhoc){
            $conn = $this->connectDb();

            $sql = "UPDATE qldh SET mamh='$mamh',ten_mh='$ten_mh', sotinchi='$sotinchi',sotiet_lt='$sotiet_lt',sotiet_bt='$sotiet_bt',  sotiet_thtn='$sotiet_thtn', sogio_tuhoc='$sogio_tuhoc' WHERE mamh = '$mamh'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

        function delete($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM qldh WHERE mamh = '$mamh'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>