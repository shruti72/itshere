<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="thumbnail.js"></script>
    <style>
      #stickyNav{
                      background-image: url('images/28.jpg');
                    }
              .form-horizontal .control-label{
                      /* text-align:right; */
                      text-align:left;
                      
                      }
                  textarea{
                      resize: none;
                    }
                    .inputfile {
                    width: 0.1px;
                    height: 0.1px;
                    opacity: 0;
                    overflow: hidden;
                    position: absolute;
                    z-index: -1;
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
          <div class="col-md-6">
            <h1>Products/Edit products</h1>
          </div>
          <div class="col-md-6" style="text-align: right;">
            <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Save</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Cancel</button>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="form-horizontal" role="form" method="POST">
                        <div class="form-group">
                          <label for="pname" class="col-md-4 control-label">Product name</label>
                          <div class="col-md-6">
                            <input id="pname" type="text" class="form-control" name="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Quantity in stock</label>
                          <div class="col-md-6">
                            <input id="Quantity" type="number" class="form-control" name="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="price" class="col-md-4 control-label">Price per Unit</label>
                          <div class="col-md-6">
                            <input id="price" type="number" name="price" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="Category" class="col-md-4 control-label">Category</label>
                          <div class="col-md-6">
                            <select>
                              <option>Mobiles</option>
                              <option>Laptops</option>
                              <option>Tablets</option>
                              <option>Motherboards</option>
                              <option>Processors</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ram" class="col-md-4 control-label">Ram</label>
                          <div class="col-md-6">
                            <input id="ram" type="text" class="form-control" name="ram">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="processors" class="col-md-4 control-label">Processor</label>
                          <div class="col-md-6">
                            <input id="processors" type="text" class="form-control" name="processor">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                      <div>
                        <label for="icon" class="col-md-4 control-label">Images</label>
                        <div class="col-md-6">
                          <label for="file" class="label-info">Upload</label>
                          <br>
                          <input type="file" name="file" id="file" class="inputfile" onchange="readURL(this);">
                          <img id="blah" src="#" alt="your image">
                          <a href="#"><u>Delete</u></a>
                          <br>
                          <input type="button" value="+" class="qtyplus" field="quantity">&nbsp;&nbsp;Add more Images</div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label id="buttonlabel" for="icon" class="col-md-2"></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>