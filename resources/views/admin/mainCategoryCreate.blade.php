@extends('layouts.header')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                <div class="login-box">
                    </p>
                    <h2>Add Food Items</h2>
                    <form action="/catalog/main-category/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="user-box">
                            <input type="text" name="main_cat_name" required="">
                            <label>Main Category Name</label>
                        </div>
                        <div class="user-box">
                            <input type="number" name="main_cat_order" required="">
                            <label>Viewing order (1-100)</label>
                        </div>
                        <label style="color: white;">Image</label>
                        <div class="user-box">
                            <input type="file" name="main_cat_img" required="">
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </form>
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