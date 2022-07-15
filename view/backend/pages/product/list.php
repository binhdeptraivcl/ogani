<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">TH_1
    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="<?=import?>css/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="<?=import?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=import?>css/style.css" type="text/css">
<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th class="ml-5">Image</th>
                        <th>Project name</th>
                        <th>Category</th>
                        <th>Alias</th>
                        <th>Price </th>
                        <th>Function</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data['category'] as $value): ?>
                      <!-- đây -->
                        <td><?=$value['id']?></td>
                        <td><img style="width: 100px;height:100px;" src="<?=folder?><?=$value['image']?>" alt=""></td>
                        <td><?=$value['product_name']?></td>
                        <td><?=$value['product_category']?></td>
                        <td><?=$value['alias']?></td>
                        <!-- <td>$ 5235</td> -->
                        <td><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></td>
                        <td>
                          <div class="d-flex align-items-center">
                          <!-- <form action = "http://localhost/TH_1/index.php/backend/edit/<?=$value['id']?>"> -->
                            <a href = "http://localhost/TH_1/index.php/backend/editAdd/<?=$value['id']?>" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                          </a>
                            <!-- </form> -->

                            <form action = "http://localhost/TH_1/index.php/backend/removeToProduct/<?=$value['id']?>">
                            <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>
                            </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                      </br>
          <div class="form-group">
        <div 
        class = "col-sm-offset-2 col-sm-10"><a href = "http://localhost/TH_1/index.php/backend/catAdd" type="submit" class="btn btn-primary">Add</a>
        </div>
    </div>

<?= $data['paginator']; ?>
