@extends('layouts.header')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
              <h4 class="card-title col-6 col-md-6">Main category</h4>
              <div class="col-6 col-md-6">
                <a href="/catalog/main-category/create" class="btn-flat btn-add p-1 p-md-2 addNew">Add Main Category</a>
              </div>
                    </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Main Category Name</th>
                      <th>Display Order</th>
                      <th>Action</th>
                      <!-- <a href="../../../../includes/conn.php"></a> -->
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $sn=1
                    @endphp
                    @foreach ($main_cat as $main_cat)
                    <tr>
                      <td>{{ $sn++ }}</td>
                      <td><img src="{{$main_cat->main_cat_img}}" alt=""></td>
                      <td>{{ $main_cat->main_cat_name }}</td>
                      <td>{{ $main_cat->main_cat_order }}</td>
                       <td><a class='text-decoration-none' href="{{route("main-category.edit",$main_cat->slug)}}"><label role='button' class='badge badge-success'>Edit</label></a>
                        <form action="{{route('main-category.delete',$main_cat->slug)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="badge badge-danger" role="button">Delete</button>
                        </form>
                        {{-- <a ><label role='button' class='badge badge-danger'>Delete</label> </a> </td> --}}
                    </tr>
                    @endforeach
                    <?php
                    //   include "../../../../includes/conn.php";
                    //   $main_cat_sql = "SELECT * FROM main_category";

                    //   $main_cat_res = mysqli_query($conn,$main_cat_sql);
                    //   if( mysqli_num_rows( $main_cat_res)>0){
                    //     $sn=1;
                    //     while ($main_cat_row = mysqli_fetch_assoc($main_cat_res)) {
                    //       echo"
                    //         <tr>
                    //           <td>$sn</td>
                    //           <td>".$main_cat_row['main_cat_name']."</td>
                    //           <td>".$main_cat_row['main_cat_order']."</td>
                    //         </tr>
                    //       ";
                    //       $sn++;
                    //     }
                    //   }

                    ?>
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
