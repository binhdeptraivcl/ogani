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
                        <th class="ml-5">ID</th>
                        <th class="ml-5">Name</th>
                        <th>Email</th>
                        <th>Function</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data['category'] as $value): ?>
                      <!-- đây -->
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['email']?></td>
                        <!-- <td>$ 5235</td> -->
                        <td>
                          <div class="d-flex align-items-center">
                            <a  type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                          </a>
                            <!-- </form> -->

                            <button type="submit" class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
<?= $data['paginator']; ?>
