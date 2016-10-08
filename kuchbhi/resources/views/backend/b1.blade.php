<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
      .container {
                        text-align: center;
                        vertical-align: middle;
                    }
        
                    .content {
                        text-align: center;
                        display: inline-block;
                    }
        
                    .title {
                        font-size: 50px;
                    }
              input {
          			    float:right;
              			clear:both;
          			}
                #stickyNav{
                      background-image: url('images/28.jpg');
                    }
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
            <div class="page-header text-success" style="text-align:center; color:black">
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
                <li @if($pagetype="=&quot;b1&quot;" )="" class="active" @else="" @endif="">
                  <a href="b1">Dashboard</a>
                </li>
                <li @if($pagetype="=&quot;b2&quot;" )="" class="" @else="" @endif="">
                  <a href="#">Orders</a>
                </li>
                <li @if($pagetype="=&quot;b3&quot;" ||="" $pagetype="=&quot;b4&quot;" )="" class="" @else="" @endif="">
                  <a href="#">Categories</a>
                </li>
                <li =""="" @if($pagetype="=&quot;b8&quot;" |="" $pagetype="=&quot;b9&quot;" ||="" )="" class="" @else="" @endif="">
                  <a href="#">Products</a>
                </li>
                <li @if($pagetype="=&quot;b11&quot;" )="" class="" @else="" @endif="">
                  <a href="#">Banners</a>
                </li>
                <li @if($pagetype="=&quot;b12&quot;" )="" class="" @else="" @endif="">
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
          <div class="row">
            <div class="col-md-6">
              <h2 style="text-align:left">Dashboard</h2>
            </div>
            <div class="col-md-6">
              <form class="form-inline well">
                <div class="form-group">
                  <label class="control-label">
                    <h4>To&nbsp;</h4>
                  </label>&nbsp;
                  <input id="todate" type="text" class="form-control">&nbsp;</div>
                <div class="form-group">
                  <label class="control-label">
                    <h4>&nbsp;&nbsp;From&nbsp;</h4>
                  </label>&nbsp;
                  <input id="fromdate" class="form-control" type="text">
                </div>
              </form>
            </div>
            <div class="col-md-12" style="border:1px solid black;">
              <div class="container">
                <div class="content">
                  <div class="title">Graph </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>Most sold products</h2>
              <h1 style="text-align:center;">List 10 products</h1>
            </div>
            <div class="col-md-4">
              <h2>Most Profitable products</h2>
              <h1 style="text-align:center;">List 10 products</h1>
            </div>
            <div class="col-md-4">
              <h2>Most Important Clients</h2>
              <h1 style="text-align:center;">List 10 clients</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>