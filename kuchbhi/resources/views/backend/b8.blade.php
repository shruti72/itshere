<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      #stickyNav{
                      background-image: url('images/28.jpg');
                    }
              input.qtyplus { width:30px; height:30px;}
    </style>
  </head><body>
    <style>
      body{
            
                        background-image:url('images/admin.jpg');
                        background-attachment:fixed;
                        background-repeat: no-repeat;
                        background-size: cover;
            
                      }
    </style>
    <div class="section">
      <div class="container" style="text-align: center; vertical-align: middle">
        <div class="row" style=" text-align: center;">
          <div class="col-md-12">
            <div class="page-header" style="text-align:center">
              <h1>A BIG TITLE</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div id="stickyNav" class="col-md-12">
              <ul class="nav nav-pills">
                <li @if($pagetype="=&quot;b1&quot;" )="" @else="" @endif="">
                  <a href="b1">Dashboard</a>
                </li>
                <li @if($pagetype="=&quot;b2&quot;" )="" @else="" @endif="">
                  <a href="#">Orders</a>
                </li>
                <li @if($pagetype="=&quot;b3&quot;" ||="" $pagetype="=&quot;b4&quot;" )="" @else="" @endif="">
                  <a href="#">Categories</a>
                </li>
                <li @if($pagetype="=&quot;b8&quot;" |="" $pagetype="=&quot;b9&quot;" ||="" )="" class="active" @else="" @endif="">
                  <a href="#">Products</a>
                </li>
                <li @if($pagetype="=&quot;b11&quot;" )="" @else="" @endif="">
                  <a href="#">Banners</a>
                </li>
                <li @if($pagetype="=&quot;b12&quot;" )="" @else="" @endif="">
                  <a href="#">Static Pages</a>
                </li>
                <li class="dropdown nav navbar-nav navbar-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><u>Admin</u><i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="#">Action</a>
                    </li>
                    <li>
                      <a href="#">Another action</a>
                    </li>
                    <li>
                      <a href="#">Something else here</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#">Separated link</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#">One more separated link</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="col-md-7">
            <h3>Products</h3>
          </div>
          <div class="col-md-5">
            <button type="submit" class="btn btn-lg" style="height:50px; width:140px; float:right">Add Product</button>
          </div>
          <div style="float: right;">
            <ul class="pagination">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
          </div>
          <!-- Modal for the delete button -->
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title" style="text-align:center; ">Delete Ptroduct</h4>
                </div>
                <div class="modal-body">
                  <h3 style="text-align:center">If you delete this product you will no longer be able to see it in the
                    frontend or the backend</h3>
                  <br>
                  <h4 style="text-align: center;">Are you sure you want to delete this product?</h4>
                </div>
                <div class="modal-footer">
                  <div style="display: block; margin: 0 auto; text-align:center;">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Delete</button>
                    <button onclick="window.location.href='/b8'" type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table" border="1">
                <thead>
                  <tr>
                    <th>Sr No.
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Product Name
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Category
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Price per unit
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Units in Inventory
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Added on
                      <i class="fa fa-fw fa-sort"></i>
                    </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Redmi note 3</td>
                    <td>Mobiles</td>
                    <td>12000</td>
                    <td>5000</td>
                    <td>Date</td>
                    <td>
                      <a href="#">Edit</a>&nbsp;
                      <a data-target="#myModal" data-toggle="modal" href="#myModal">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Samsung Galaxy J5</td>
                    <td>Mobiles</td>
                    <td>15000</td>
                    <td>4500</td>
                    <td>Date</td>
                    <td>
                      <a href="#">Edit</a>&nbsp;
                      <a data-target="#myModal" data-toggle="modal" href="#myModal">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>