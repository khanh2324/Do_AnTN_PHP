<div class="container">
  <ul class="breadcrumb">
        <li><a href="/home.php"><i class="fa fa-home"></i></a></li>
        <li><a href="/account.php">Tài khoản</a></li>
  </ul>
  <div class="row">
  <div id="content" class="col-sm-9">
      <h2>Tài Khoản Của Tôi (<a href="/account-edit.php?cid=<?php echo $_SESSION['CUS_LOGGED']; ?>">sửa</a>)</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
              <th class="text-right p-4">Email</th>
              <td class="text-left p-4"><?php echo $email; ?></td>
            </tr>
            <tr>
              <th class="text-right p-4">Điện Thoại</th>
              <td class="text-left p-4"><?php echo $telephone; ?></td>
            </tr>
            <tr>
              <th class="text-right p-4">Địa Chỉ</th>
              <td class="text-left p-4"><?php echo $address; ?></td>
            </tr>
            <tr>
              <th class="text-right p-4">Thành Phố</th>
              <td class="text-left p-4"><?php echo $city; ?></td>
            </tr>
            <tr>
              <th class="text-right p-4">Mật Khẩu</th>
              <td class="text-left p-4">*******</td>
            </tr>
            <tr>

            </tr>
        </table>
      </div>
      <div class="buttons clearfix">
       <div class="pull-right"><a href="/home.php" class="btn btn-primary px-4 py-2" style="font-size:16px">Tiếp Tục</a></div>
      </div>
    </div>
    <?php include_once "view/view-account-box.php" ?>
   </div>
</div>