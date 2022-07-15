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
                        <th class="ml-5">Mã khách hàng</th>
                        <th>Họ tên</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Phone </th>
                        <th>Function</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data['category'] as $value): ?>
                      <!-- đây -->
                        <td><?=$value['id']?></td>
                        <td><?=$value['customer_id']?></td>
                        <td><?=$value['fullname']?></td>
                        <td><?=$value['address']?></td>
                        <td><?=$value['email']?></td>
                        <!-- <td>$ 5235</td> -->
                        <td><?=$value['phone']?></td>
                        <td>
                          <div class="d-flex align-items-center">
                          <!-- <form action = "http://localhost/TH_1/index.php/backend/edit/<?=$value['id']?>"> -->
                            <a title = "Xem chi tiết" href = "http://localhost/TH_1/index.php/backend/order_detail/<?=$value['id']?>" type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              
                              <i class="typcn typcn-edit btn-icon-append"></i>
                          </a>
                            <!-- </form> -->

                            <form action = "http://localhost/TH_1/index.php/backend/removeToProduct/<?=$value['id']?>">
                            <button title = "Xóa đơn hàng" type="submit" class="btn btn-danger btn-sm btn-icon-text">
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
          <div class="form-group">
          <?= $data['paginator']; ?>
    </div>

