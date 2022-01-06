<?php include("template/header.php"); ?>
  
        <div class="container">
        <h5 class="text-center text-primary mt-5">Chỉnh sửa Danh Sách Môn học</h5>

        <form action="" method="post">
        <div class="form-group">
                <label for="mamh">Mã môn học</label>
                <input  readonly type="text" class="form-control" id="mamh" name="mamh" placeholder="" value="<?php
           echo  $data['mamh']?>">
              
            </div>
        
            <div class="form-group">
                <label for="txttenmon">Tên môn học</label>
                
                <input type="text" class="form-control" placeholder="Tên môn học" name="txtName" value="<?php echo $data['ten_mh']; ?>">
              
            </div>
            
            <div class="form-group">
                <label for="txtsotinchi">số tín chỉ</label>
               
                <input type="text" class="form-control" placeholder="số tín chỉ" name="txtsotinchi" value="<?php echo $data['sotinchi']; ?>">
            </div>

            <div class="form-group">
                <label for="txtsotietlt">số tiết lý thuyết</label>
                <input type="text" class="form-control" placeholder="số tiết lý thuyết" name="txtsotietlt" value="<?php echo $data['sotiet_lt']; ?>">
            </div>
            <div class="form-group">
                <label for="txtsotietbt">số tiết bài tập</label>
               <input type="text" class="form-control" placeholder="số tiết bài tập" name="txtsotietbt" value="<?php echo $data['sotiet_bt']; ?>">
            </div>
           
            <div class="form-group">
                <label for="txtsotietthtn">số tiết thực hành - thí nghiệm</label>
               <input type="text" class="form-control" placeholder="số tiết thực hành - thí nghiệm" name="txtsotietthtn" value="<?php echo $data['sotiet_thtn']; ?>">
            </div>
            <div class="form-group">
                <label for="txtsogiotuhoc">số giờ tự học</label>
                 <input type="text" class="form-control" placeholder="số giờ tự học" name="txtsogio_tuhoc" value="<?php echo $data['sogio_tuhoc']; ?>">
               
            </div>
            
            <button class="btn btn-success mt-2" name="submit">Lưu</button>

        </form>
   </div>
       
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
