

@extends('layouts.adminLayout.admin_design')
@section('content')
@include('layouts.adminLayout.menubar')




<div class="main-content">
  <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">

                <table class="table table-borderless table-data3" id ="myTable">
                    <thead>
                        <tr>

                            <th>Category Code</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)

                    <tr>

                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>

                        <td class="center"a href="" class="btn btn-primary btn-mini"></a>
                            <a href="{{url('/admin/category/edit/'.$category->id ) }}" class="btn btn-success btn-mini">Edit</a>

                        <a rel="{{$category->id}}" rel1="delete-category"
                        <?php /*href="{{url('/admin/delete-category/'.$category->id)}}"*/ ?>  href = "javascript:"
                        class="btn btn-danger btn-mini deleteCat">Delete</a>
                        <div class="table-data-feature">
                    </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>
    </div>
        </div>


<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>




@endsection
