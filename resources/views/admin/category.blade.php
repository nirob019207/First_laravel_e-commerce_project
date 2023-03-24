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
            @if(session()->has('message'))
            <div class="alert alert-success">
            
                {{ session()->get('message')}}
                <button clss="close text-left"type="button" data-dismiss="alert">x</button>
            </div>
            @endif


<div class='text-center mt-4'>

<div>
    <h1 class='text-2xl'>Add Category</h1>
</div>
<div class='mt-4'>
   <form action="{{url('/add_category')}}" method='POST'>
    @csrf


   <input type="text"placeholder='Write category name' name="category_name"class='p-2 bg-white-400 rounded text-black'>
    <button class='border-solid border-2 border-indigo-600'>Add Category</button>
   </form>
</div>








</div>
 


<table class="table mt-8 text-black bg-white">
  <thead>
    <tr class="">
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
    <td scope="col">{{$data->category_name}}</td>
      <td scope="col"><a class='btn btn-info' href="{{url('delete_category',$data->id)}}"> Delete</a></td>
     
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
