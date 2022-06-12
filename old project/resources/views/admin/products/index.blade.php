@extends('layouts.main')
@section('content')
    <div class="page-wrapper">

<h1>Danh sách Sản Phẩm</h1>
@foreach ($products as $product)
<?php

?>
<table>
    {{$product->name}}
</table>


@endforeach
    

    </div>
@endsection
