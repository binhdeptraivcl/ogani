<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
<title>Bình | đẹp trai vcl</title>
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
                        <th class="ml-5">Mã đơn hàng</th>
                        <th class="ml-5">Mã sản phẩm</th>
                        <th class="ml-5">Tên sản phẩm</th>
                        <th class="ml-5">Image</th>
                        <th class="ml-5">Số lượng</th>
                        <th class="ml-5">Giá tiền</th>
                        <th class="ml-5">Function</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    
                      <?php foreach($data['products'] as $value): ?>
                      <!-- đây -->
                        <td><?=$value['order_id']?></td>
                        <td><?=$value['product_id']?></td>
                        <td><?=$value['product_name']?></td>
                        <td><img style="width: 100px;height:200; " src="<?=folder?><?=$value['image']?>" alt=""></td>
                        <td><?=$value['qty']?></td>
                        <td><?= number_format($value['price']*$value['qty'], 0, '', ',') . " VND" ?></td>

                        <td>
                          <div class="d-flex align-items-center">
                            <a class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                          </a>
                            <!-- </form> -->

                            <a class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>
                            </a>
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
    </div>

