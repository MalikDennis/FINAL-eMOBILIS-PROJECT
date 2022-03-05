<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FASTER SHOPPING SHOP</title>
    <script src="assets/bootsrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootsrap/js/popper.min.js"></script>
    <script src="assets/bootsrap/js/bootsrap.js"></script>
    <link rel="stylesheet" href="bootsrap/css/bootsrap.css">
</head>
<body>
  <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
          <h1>FASTER SHOPPING SHOP</h1>
          <form action="product_add_handler.php"class=" was- validated" method="post">
              <div class="form-group">
                  <label for="pname">product name:</label>
                  <input type="text" class="form-control"id="pname"placeholder="Enter enter product name" name="pname"required>
                  <div class="valid-feedback">valid</div>
                  <div class="invalid-feedback">please fill out this field.</div>
              </div>
              <div class="form-group">
                  <label for="qty">quantity:</label>
                  <input type="number" class="form-control" id="qty" placeholder="Enter quantity" name="qty" required>
                  <div class="valid-feedback">valid.</div>
                  <div class="invalid-feedback">please fill out this field.</div>
              </div>
              <div class="form-group">
                  <label for="price">price:</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" required>
                  <div class="valid-feedback">valid.</div>
                  <div class="invalid-feedback">please fill out this field.</div>
              </div>
              <input type="submit" name="btn_submit" class="btn btn-outline-info btn block">
              <a href="products.php" class btn btn-outline-primary btn-block>view products available</a>
              <input type="reset" value="clear" class="btn btn-outline-secondary btn-block">
          </form>
      </div>
      <div class="col-4"></div>
  </div>
</body>
</html>
