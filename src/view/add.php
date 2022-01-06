<?php include("template/header.php"); ?>
  
        <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Danh Sách Môn Học</h5>

        <form action="" method="post">
       
            <div class="form-group">
                <label for="txttenmon"> tên môn</label>
                
                <input type="text" class="form-control" placeholder="Tên môn học" name="txtName">
              
            </div>
            
            <div class="form-group">
                <label for="txtsotinchi">số tín chỉ</label>
               
                <input type="text" class="form-control" placeholder="số tín chỉ" name="txtsotinchi" >
            </div>

            <div class="form-group">
                <label for="txtsotietlt">số tiết lý thuyết</label>
               
                <input type="text" class="form-control" placeholder="số tiết lý thuyết" name="txtsotietlt" >
            </div>
            <div class="form-group">
                <label for="txtsotietbt">số tiết bài tập</label>
               
                <input type="text" class="form-control" placeholder="số tiết bài tập" name="txtsotietbt" >
            </div>>
           
            <div class="form-group">
                <label for="txtsotietthtn">số tiết thực hành-thí nghiệm</label>
               
                <input type="text" class="form-control" placeholder="số tiết thực hành-thí nghiệm" name="txtsotietthtn" >
            </div>
            <div class="form-group">
                <label for="txtsogiotuhoc">số giờ tự học</label>
               
                <input type="text" class="form-control" placeholder="số giờ tự học" name="txtsogiotuhoc" >
            </div>
            
            <button class="btn btn-success mt-2" name="submit">Lưu</button>
        </form>
</div>
       
        
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>