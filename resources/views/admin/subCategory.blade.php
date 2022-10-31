@extends('layouts.header')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            <div class="row">
                <h4 class="card-title col-6 col-md-8">Sub Category</h4>
                <div class="col-6 col-md-4">
                  <a href="subCategoryCreate.php" class="btn-flat btn-add p-1 p-md-2 addNew">Add Sub Category</a>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Sub-Category</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                      $sn = 1;
                  @endphp
                  @foreach ($sub_cat as $sub_cat)
                  <tr>
                    <td>{{$sn++}}</td>
                    <td>{{$sub_cat->subcat_name}}</td>
                    <td>{{$sub_cat->menuCategory->cat_name}}</td>
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