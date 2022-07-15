
<form action = "http://localhost/TH_1/index.php/backend/edit/<?=$data['id']?>" method = "POST" class ="form-horizontal" 
    enctype = "multipart/form-data">
  <div class="form-group">
    <label class = "col-sm-2 control-label">Product name</label>
    <div class ="col-sm-10">
        <input name = "name" type="text" class="form-control"  placeholder="Enter Category_name" value ="<?=$data['product']['product_name']?>">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Price</label>
    <div class ="col-sm-10">
        <input name = "price" type="text" class="form-control" value ="<?=$data['product']['price']?>">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Category</label>
    <div class ="col-sm-10">
        <select class="form-control" name = "category">
        <option value="Meat"<?=$data['product']['product_category'] == 'Meat' ? ' selected="selected"' : '';?>>Meat</option>
        <option value="Vegetables"<?=$data['product']['product_category'] == 'Vegetables' ? ' selected="selected"' : '';?>>Vegetables</option>
        <option value="Fastfood"<?=$data['product']['product_category'] == 'Fastfood' ? ' selected="selected"' : '';?>>Fastfood</option>
        <option value="Fruit"<?=$data['product']['product_category'] == 'Fruit' ? ' selected="selected"' : '';?>>Fruit</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Image</label>
    <div class ="col-sm-10">
        <input name = "image" type="file" class="form-control">
        <img style="width: 100px;height:100px;" src="/TH_1/view/backend/img/<?php echo $data['product']['image']?>" alt="">
    </div>
  </div>
  <div class="form-group">
    <label class = "col-sm-2 control-label">Status</label>
        <div class ="col-sm-10">
            <select class="form-control" name = "status">
            <option value="0"<?=$data['product']['status'] == '0' ? ' selected="selected"' : '';?>>0</option>
            <option value="1"<?=$data['product']['status'] == '1' ? ' selected="selected"' : '';?>>1</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <div 
        class = "col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-primary">Accpect</button>
        </div>
    </div>
</form>