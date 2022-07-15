<title>Bình | đẹp trai vcl</title>

<form action = "http://localhost/TH_1/index.php/backend/addcate" method = "POST" class ="form-horizontal" 
    enctype = "multipart/form-data">
  <div class="form-group">
    <label class = "col-sm-2 control-label">Category name</label>
    <div class ="col-sm-10">
        <input name = "name" type="text" class="form-control"  placeholder="Enter Category name">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Category</label>
    <div class ="col-sm-10">
        <select class="form-control" name = "category">
        <?php
            foreach($data['category'] as $r){
                echo "<option value = '".$r['id']."'>".$r['category_name']."</option>";
            }
        ?>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Status</label>
        <div class ="col-sm-10">
            <select class="form-control" name = "status">
            <option>0</option>
            <option>1</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <div 
        class = "col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>