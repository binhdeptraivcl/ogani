

<form action = "http://localhost/TH_1/index.php/backend/add" method = "POST" class ="form-horizontal" 
    enctype = "multipart/form-data">
  <div class="form-group">
    <label class = "col-sm-2 control-label">Product_name</label>
    <div class ="col-sm-10">
        <input name = "name" type="text" class="form-control"  placeholder="Enter Category_name">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Price</label>
    <div class ="col-sm-10">
        <input name = "price" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Category</label>
    <div class ="col-sm-10">
        <select class="form-control" name = "category">
        <option>Meat</option>
        <option>Vegetables</option>
        <option>Fastfood</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Image</label>
    <div class ="col-sm-10">
        <input name = "image" type="file" class="form-control">
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