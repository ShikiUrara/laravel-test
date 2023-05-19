<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
  body {
  margin: 0;
  
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: #345676;
  
}

* {
  margin: 0;
  padding: 0;
}

img {
  max-width: 100%;
  height: auto;
  vertical-align: middle;
}

h1 {
  font-size: 2rem;
}

h2 {
  font-size: 1.25rem;
}

h3 {
  font-size: 1rem;
}

h4 {
  font-size: 0.75rem;
}

button {
  padding: 0.5rem 1rem;
  border: 0;
  border-radius: 0.25rem;
  cursor: pointer;
  background-color: #cccccc;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
}

button:hover {
  background-color: #d9d9d9;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

.Track {
  text-align: center;
  
  color: black;
}

.title {
  margin-top: 2rem;
  margin-bottom: 1rem;
}

.track-list {
  display: flex;
  flex-wrap: wrap;
}

.track-item {
  display: flex;
  width: 25%;
  justify-content: center;
  margin: 1rem 0;
}

.album {
  display: flex;
  flex-direction: column;
  justify-content:space-between;
  border-radius: 1rem;
  background-color: rgba(255, 255, 255, 0.2);
  width: 15rem;
  padding: 1rem 0.5rem;
}

.album-image {
  width: 80%;
  /* margin: auto; */
  margin-bottom: 1rem;
}

.album-image img {
  border-radius: 1rem;
}

.album-info {
  padding: 1rem;
  display: flex; 
  flex-grow: 1;
  flex-direction:column;
  justify-content:space-between;
  /* background-color: cadetblue; */
}
.album-info:first-child {
  flex-grow:1;
}

.album-info h2 {
  margin-bottom: 0.5rem;
}

.album-info h4 {
  margin-bottom: 1rem;
}

.album-info button {
  background-color: #921233;
  color: black;
  width: 100%;
}

.album-info button:hover {
  background-color: #92a113;
}

    </style>
</head>

<body class="">
   
    {{-- /<div class="Track"> --}}
    {{-- <div class="card col item"  >
        <img src="{{asset("img/".$products->image_Product)}}" class="card-img-top" alt="..." style="">
        <div class="card-body">
          <h5 class="card-title"> {{ $products->name_Product}}</h5>
          <p class="card-text"> {{ $products->des_Product}}</p>
        </div>
      </div> --}}
      <div class="Track">
       
        <div class="track-list">
            @foreach($product as $products)
          <div class="track-item">
            <div class="album">
              <div class="album-image">
                <img src="{{asset("img/".$products->image_Product)}}" alt="This will be an image" />
              </div>
              <div class="album-info">
                <div>
                  <h4>{{ $products->name_Product}}</h2>
                  <p>
                    {{ $products->des_Product}}
                  </p>
                </div>
                <button style="color: white">Select</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</body>
</html>
