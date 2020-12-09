@extends('layouts.front')

@section('content')
<div class="container">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <section class="gallery-wrap">
                    <div class="img-big-wrap">
                        <a href="#">
                            <img src="{{Storage::url($product->image)}}" alt="" width="450">
                        </a>
                    </div>
                </section>
            </aside>
            <aside class="col-sm-7">
                <div class="card-body p-5">
                    <h3 class="title mb-3">
                        {{$product->name}}
                    </h3>
                    <p class="price-detail-wrap">
                        <span class="price h3 text-danger">
                            <span class="currency">
                                US $4{{$product->price}}
                            </span>
                        </span>
                    </p>

                    <h3>Description</h3>
                    <p>{!! $product->description !!}</p>
                    <h3>Addmitional Description</h3>
                    <p>{!! $product->additional_info !!}</p>
                    <hr>
                    <div class="row">
                        <div class="form-inline">
                            <h3>Quantity : </h3>
                            <input type="text" name="qty" class="form-control">
                            <input type="submit" class="btn btn-primary ml-2" value="Get">
                        </div>
                    </div>
                        <hr>
                        <a href="" class="btn btn-outline-secondary text-uppercase">Add to cart</a>
                </div>
            </aside>
        </div>
    </div>
</div>

<div class="ecom-products-grids row mt-lg-5 mt-3">
                @foreach($productFromSameCategories as $product)
                <div class="col-lg-3 col-6 product-incfhny mt-4">
                    <div class="product-grid2 transmitv">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1 img-fluid" src="{{Storage::url($product->image)}}">
                                <img class="pic-2 img-fluid" src="{{Storage::url($product->flip_image)}}">
                            </a>
                            <ul class="social">
                                <li><a href="{{route(product.show )}}" data-tip="Quick View"><span
                                            class="fa fa-eye"></span></a></li>

                                <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                            </ul>
                            <div class="transmitv single-item">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="transmitv_item" value="{{$product->name}}">
                                    <input type="hidden" name="amount" value="{{$product->price}}">
                                    <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{$product->name}} </a></h3>
                            <span class="price">${{$product->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
@endsection
