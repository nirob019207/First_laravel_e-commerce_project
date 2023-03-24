

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
      


        <div class="main-panel">
          <div class="content-wrapper">



         <div class="text-white ">
            <div class="text-center text-2xl">
                <h1>All Product</h1>
            </div>


<div class="mt-4">



<table class="table bg-white">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Discount price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $product)


    <tr>


    <td>{{$product->title}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->quantity}}</td>
    <td>{{$product->category}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->discount_price}}</td>
    <td><img src="{{ asset('product/' . $product->image) }}" alt=""></td>
      
    </tr>

    @endforeach
   
  </tbody>
</table>
</div>



         </div>



</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>














