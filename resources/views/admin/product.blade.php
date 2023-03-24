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

          <div class="flex flex-col items-center justify-center mt-8 text-info ">
    <h1 class="text-3xl font-bold mb-6">Add Product</h1>
    <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data" class="border p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <label for="title" class="font-bold">Product Title:</label>
            <input type="text" id="title" name="title" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="description" class="font-bold">Product Description:</label>
            <textarea id="description" name="description" class="w-full p-2 border rounded-lg" rows="4" required></textarea>
        </div>

        

        <div class="mb-4">
            <label for="quantity" class="font-bold">Product Quantity:</label>
            <input type="number" id="quantity" name="quantity" class="w-full p-2 border rounded-lg" min="1" required>
        </div>

        <div class="mb-4">
            <label for="category" class="font-bold">Product Category:</label>
            <select id="category" name="category" class="w-full p-2 border rounded-lg" required>
                <option value="">--Select a Category--</option>
               @foreach($category as $category)

               <option value="{{$category->category_name}}">>{{$category->category_name}}</option>
               @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="price" class="font-bold">Product Price:</label>
            <input type="number" id="price" name="price" class="w-full p-2 border rounded-lg" min="0" step="0.01" required>
        </div>

        <div class="mb-4">
            <label for="discount_price" class="font-bold">Product Discount Price:</label>
            <input type="number" id="discount_price" name="discount_price" class="w-full p-2 border rounded-lg" min="0" step="0.01" required>
        </div>
        <div class="mb-4">
            <label for="image" class="font-bold">Product Image:</label>
            <input type="file" id="image" name="image" class="w-full p-2 border rounded-lg" accept="image/*" required>
        </div>

        <div>
            <input type="submit" class="bg-white text-info py-2 px-4 rounded-lg hover:bg-blue-600 cursor-pointer" value="Submit">
        </div>
    </form>
</div>





</div>
</div>






    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
