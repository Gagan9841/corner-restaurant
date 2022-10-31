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
                  <a href="CategoryCreate.php" class="btn-flat btn-add p-1 p-md-2 addNew">Add Category</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Category</th>
                      <th>Main-category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $sn=1
                  @endphp
                  @foreach ($menu_cat as $menu_cat)
                  <tr>
                    <td>{{ $sn++ }}</td>
                    <td>{{ $menu_cat->cat_name }}</td>
                    <td>{{ $menu_cat->mainCategory->main_cat_name}}</td>
                    {{-- <td>{{ $menu_cat->main_cat_name}}</td> --}}
                     <td><a class='text-decoration-none' href='mainCategoryEdit.php?main-cat=".$main_cat_row['main_cat_id']."'><label role='button' class='badge badge-success'>Edit</label></a> <a class='text-decoration-none' href='mainCategoryDelete.php?main-cat=".$main_cat_row['main_cat_id']."'><label role='button' class='badge badge-danger'>Delete</label> </a> </td>
                  </tr>
                  @endforeach
                  {{-- {{ $forums->links('pagination::bootstrap-4') }} --}}
                    <?php
                    // include "../../../../includes/conn.php";
                    // $cat_sql = "SELECT * FROM `menu_category` LEFT JOIN `main_category` ON `menu_category`.`main_category`=`main_category`.`main_cat_id`;";
                    // $cat_res = mysqli_query($conn, $cat_sql);
                    // if (mysqli_num_rows($cat_res) > 0) {
                    //   $sn = 1;
                    //   while ($cat_row = mysqli_fetch_assoc($cat_res)) {
                    //     echo "
                    //         <tr>
                    //           <td>$sn</td>
                    //           <td>" . $cat_row['cat_name'] . "</td>
                    //           <td><label class='badge badge-outline-dark'>" . $cat_row['main_cat_name'] . "</label></td>
                    //           <td><a class='text-decoration-none' href='categoryEdit.php?catid=".$cat_row['cat_id']."'> <label role='button' class='badge badge-success'>Edit</label> <label class='badge badge-danger'>Delete</label>  </td>
                    //         </tr>
                    //       ";
                    //     $sn++;
                    //   }
                    // }

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
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@endsection