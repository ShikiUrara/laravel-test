<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Add Product</title>
</head>
<body>
<form style="width: 50%;" class="container" action="/product/add" method="POST" enctype="multipart/form-data">
  <!-- Email input -->
  @csrf
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="name_Product" />
    <label class="form-label" for="form2Example1">Product Name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" class="form-control" name="des_Product"/>
    <label class="form-label" for="form2Example2">Description</label>
  </div>
  <div class="form-outline mb-4">
    <input type="file" id="form2Example2" class="form-control" name="image"/>
    <label class="form-label" for="form2Example2">Image</label>
  </div>


  
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">submit</button>

  <!-- Register buttons -->
  
  </div>
</form>
</body>
</html>