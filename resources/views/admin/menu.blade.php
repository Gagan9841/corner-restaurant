@extends('layouts.header')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            <div class="row">
                <h4 class="card-title col-6 col-md-8">Menu Category</h4>
                <div class="col-6 col-md-4">
                  <a href="menuCreate.php" class="btn-flat btn-add p-1 p-md-2 addNew">Add Menu</a>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Image</th>
                      <th>Dish Name</th>
                      <th>Sub Category</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                      $sn=1;
                  @endphp
                  @foreach ($menu as $menu )
                      
                  <tr>
                              <td>{{$sn++}}</td>
                              <td><img class='rounded-circle' src='{{ asset('theme/images/{$menu->item_image}') }}'/></td>
                              <td>{{$menu->item_name}}</td>
                              <td><label class='badge badge-light badge-outline-dark'>{{$menu->subCategory->subcat_name}}</label></td>
                              <td><label class='badge badge-dark'>{{$menu->menuCategory->cat_name}}</label></td>
                              <td> <label class='badge badge-success'>Edit</label> <label class='badge badge-danger'>Delete</label>  </td>
                            </tr>
                            
                            @endforeach
                          
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection