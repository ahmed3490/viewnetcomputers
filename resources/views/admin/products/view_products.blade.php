

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

                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product ID</th>
                            <th>Product SKU</th>
                            <th>Actions</th>



                        </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)

                    <tr>

                        <td>{{$product->product_name}}</td>
                        <td>MVR {{number_format($product->price)}}</td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_code }}</td>


                        <td class="center"a href="" class="btn btn-primary btn-mini"></a>
                            <a href="{{url('/admin/product/edit/'.$product->id ) }}" class="btn btn-success btn-mini">Edit</a>


                        <a href="{{url('/admin/trash-product/'.$product->id)}}"
                        class="btn btn-danger btn-mini">Trash</a>
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
