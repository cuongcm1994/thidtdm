<!DOCTYPE html>
<html lang="vi">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Assignment INF205</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
  <script src="../js/jquery.min.js"></script>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><span>Assignment INF205!</span></a>
          </div>
          <div class="clearfix"></div>
          <div class="profile">
            <div class="profile_pic">
              <img src="../images/logo.png" alt="..." class="img-circle profile_img">
            </div>
          </div>
          <br />
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3> Hello world</h3>
              <ul class="nav side-menu">
                <li ><a href="../catproduct/catproduct.php"><i class="fa fa-user"></i> Danh mục sản phẩm </a></li>
                <li class="active"><a href="../product/product.php"><i class="fa fa-pencil"></i> Sản phẩm </a></li>
                <li><a href="../order/order.php"><i class="fa fa-certificate"></i> Hoá đơn </a></li>
                <li><a href="../orderdetail/orderdetail.php"><i class="fa fa-flask"></i> Hoá đơn chi tiết </a></li>
                <li><a href="../custommer/custommer.php"><i class="fa fa-university"></i> Khách hàng </a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
          </nav>
        </div>
      </div>
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  <form class="input-group" action="researchproduct.php" method="get">
                    <input type="text" name="namesearch" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="searchproduct">Go!</button>
                    </span>
                  </form>

              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="btn btn-info" href="addproduct.php">Thêm mới</a></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example" class="table table-striped responsive-utilities jambo_table">
                  <?php 
                  include_once('../ketnoi.php');
                  $sql="select * from products";
                  $result=$db->query($sql);
                   ?>
                    <thead>
                      <tr class="headings">
                        <th>STT</th>
                        <th>Tên sản phẩm </th>
                        <th>Giá tiền</th>
                        <th>Nội dung chính </th>
                        <th>Ảnh</th>
                        <th>Danh mục sản phẩm </th>
                        <th>Chỉnh Sửa</th>
                        <th>Xoá </th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $i=1;
                      foreach($result as $row)
                      {
                      ?>
                      <tr class="even pointer">
                        <td class=" "><?php echo $i; ?></td>
                        <td class=" "><?php echo $row['name'] ?></td>
                        <td class=" "><?php echo number_format($row['price'],0,'.',',') ?> Đ</td>
                        <td class=" "><?php echo $row['content'] ?></td>
                        <td><img src="./uploads/<?php  echo $row['images'];?>" class="img-responsive" style="max-height: 100px;" alt=""></td>
                        <?php 
                        $catproid = $row['catproducts_id'];
                        $sql="select * from catproducts where id = '$catproid'";
                        $result=$db->query($sql);
                        foreach( $result as $catproname){
                          $catname = $catproname['name'];
                        }
                        ?>
                        <td class=" "><?php echo $catname; ?></td>
            

                        <td class=" "><a href="editproduct.php?id=<?php echo $row['id'];?>" class="btn btn-default">Sửa</a></td>
                        <td class=" "><a href="deleteproduct.php?id=<?php echo $row['id'];?>" class="btn btn-danger">xoá</a></td>
                      </tr>
                      <?php
                      $i=$i+1;
                      }
                       ?>

                    </tbody>

                  </table>
                </div>
              </div>
            </div>
            <br />
            <br />
            <br />

          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>


  
</body>

</html>
