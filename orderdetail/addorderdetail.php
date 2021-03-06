<!DOCTYPE html>
<html lang="vi">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <li><a href="../catproduct/catproduct.php"><i class="fa fa-user"></i> Danh mục sản phẩm </a></li>
                <li ><a href="../product/product.php"><i class="fa fa-pencil"></i> Sản phẩm </a></li>
                <li><a href="../order/order.php"><i class="fa fa-certificate"></i> Hoá đơn </a></li>
                <li class="active"><a href="../orderdetail/orderdetail.php"><i class="fa fa-flask"></i> Hoá đơn chi tiết </a></li>
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
                
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title col-md-12 col-xs-12 col-md-12">
                        <div class="col-md-10">
                            <h2>Thêm mới đơn hàng chi tiết</h2>
                            <div class="clearfix"></div> 
                        </div>
                        <div class="col-md-2">
                            
                            <div class="col-md-6">
                                <a href="orderdetail.php"><i class="glyphicon glyphicon-triangle-left"></i> Huỷ</a>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">
                      <form action="readdorderdetail.php" method="post">

                        <div class="form-group col-md-12" style="margin-bottom: 20px;">
                          <label for="idtitle" class="control-label col-md-2 col-sm-2 col-xs-12" style="padding-top: 8px;">Tên  đơn hàng chi tiết</label>
                          <div class="col-md-10 col-sm-10 col-xs-10">
                              <div class="input text">
                                <input name="txtname" class="form-control col-md-7 col-xs-12" type="text" id="">
                              </div>                                    
                          </div>
                        </div>
                        <div class="form-group col-md-12" style="margin-bottom: 20px;">
                          <label for="idtitle" class="control-label col-md-2 col-sm-2 col-xs-12" style="padding-top: 8px;">Sô lượng sản phẩm</label>
                          <div class="col-md-10 col-sm-10 col-xs-10">
                              <div class="input text">
                                <input name="txtcount" class="form-control col-md-7 col-xs-12" type="number" id="">
                              </div>                                    
                          </div>
                        </div>


                        <?php
                        include_once('../ketnoi.php');

                        $sql="select * from orders";
                        $listord=$db->query($sql);

                        ?>
                        <div class="form-group col-md-12" style="margin-bottom: 20px;">
                          <label for="idtitle" class="control-label col-md-2 col-sm-2 col-xs-12" style="padding-top: 8px;">Danh sách hoá đơn</label>
                          <div class="col-md-6 col-sm-6 col-xs-10">
                              <div class="input text">
                                <select name="ordid" id="" class="form-control">
                                <?php foreach($listord as $listord){ ?>
                                  <option value="<?php echo $listord['id'] ;?>"><?php echo $listord['name'] ;?></option>
                                <?php } ?>
                                </select>
                              </div>                                    
                          </div>
                        </div>

                        <?php
                        $dsn="mysql:host=localhost;dbname=dientoandammay-inf205";
                        $username="root";
                        $password="";
                        $db=new PDO($dsn,$username,$password);

                        $sql="select * from products";
                        $listpro=$db->query($sql);

                        ?>
                        <div class="form-group col-md-12" style="margin-bottom: 20px;">
                          <label for="idtitle" class="control-label col-md-2 col-sm-2 col-xs-12" style="padding-top: 8px;">Danh sách sản phẩm</label>
                          <div class="col-md-6 col-sm-6 col-xs-10">
                              <div class="input text">
                                <select name="proid" id="" class="form-control">
                                <?php foreach($listpro as $listpro){ ?>
                                  <option value="<?php echo $listpro['id'] ;?>"><?php echo $listpro['name'] ;?></option>
                                <?php } ?>
                                </select>
                              </div>                                    
                          </div>
                        </div>

                        <div class="form-group col-md-12">
                          <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-2">
                            <input type="submit" name="btnnhap" class="btn btn-primary" value="Lưu lại">
                          </div>
                        </div>
                        
                      </form>                    
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/custom.js"></script>


  
</body>

</html>
