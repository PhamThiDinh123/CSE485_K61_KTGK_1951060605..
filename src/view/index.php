<?php include("template/header.php"); ?>
<div class="container">
<h1 class="text-center text-success m-3"> DANH SÁCH </h1>
    <div>

        <a class="btn btn-primary" href="index.php?act=add">Thêm mới</a>
    </div>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">số tín chỉ</th>
                    <th scope="col">số tiết lý thuyết</th>
                    <th scope="col">số tiết bài tập</th>
                    <th scope="col">số tiết thực hành-thí nghiệm</th>
                    <th scope="col">số giờ tự học</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($datas AS $data) : ?>
                <tr>
                <td><?php echo $data['mamh'] ?></td>
                <td><?php echo $data['ten_mh'] ?></td>
                <td><?php echo $data['sotinchi'] ?></td>
                  <td><?php echo $data['sotiet_lt'] ?></td>
                  <td><?php echo $data['sotiet_bt'] ?></td>

                  <td><?php echo $data['sotiet_thtn'] ?></td>

                  <td><?php echo $data['sogio_tuhoc'] ?></td>

                  <td></td>
                <td>
                    <?php
                    
                    $urlDetail =
                        "index.php?act=detail&id=" . $data['mamh'];
                    $urlEdit =
                        "index.php?act=edit&id=" . $data['mamh'];
                    $urlDelete =
                        "index.php?act=delete&id=" . $data['mamh'];
                    ?>
                   
                    <a href="<?php echo $urlEdit?>"><i class="bi bi-pencil-square" style="margin-left:-40px"></i></a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                       <i class="bi bi-trash"style="margin-left:20px"></i>
                    </a>
                </td>
            </tr>
                    <?php endforeach; ?>
            </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>