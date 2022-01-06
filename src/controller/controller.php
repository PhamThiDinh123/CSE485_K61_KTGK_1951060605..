<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $Model = new model();
            $datas = $Model->getAllUsers();
            require_once('view/index.php');
        }

        function details(){
            $model = new model();
            $id = $_GET['mamh'];
            $data = $model->getUser($mamh);
            if($data)
                header("location:index.php");
                else
                header("error.php");
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtName'])){
                $ten_mh = $_POST['txtName'];
               
                $sotinchi= $_POST['txtsotinchi'];
                $sotiet_lt = $_POST['txtsotietlt'];
                $sotiet_bt= $_POST['txtsotietbt'];
                $sotiet_thtn = $_POST['txtsotietthtn'];
                $sogio_tuhoc = $_POST['txtsogiotuhoc'];
                $model = new model();
                $result = $model->add($mamh,  $ten_mh, $sotinchi,$sotiet_lt,$sotiet_bt, $sotiet_thtn, $sogio_tuhoc);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function edit(){
            $model = new model();
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtName'])){
                $ten_mh = $_POST['txtName'];
               
                $sotinchi = $_POST['txtsotinchi'];
                $sotiet_lt = $_POST['txtsotietlt'];
                $sotiet_bt= $_POST['txtsotietbt'];
                $sotiet_thtn = $_POST['txtsotietthtn'];
                $sogio_tuhoc = $_POST['txtsogiotuhoc'];
                $result = $model->update($mamh,  $ten_mh, $sotinchi,$sotiet_lt,$sotiet_bt, $sotiet_thtn, $sogio_tuhoc);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['mamh'];
            $result = $model->delete($mamh);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>