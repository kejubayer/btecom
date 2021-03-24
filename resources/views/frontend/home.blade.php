@extends('layouts.frontend')

@section('main')
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                     data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach($products as $product)
                            <div class="grid-item">
                                <div class="grid-item__content-wrapper">
                                    <div class="ps-shoe mb-30">
                                        <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="{{route('add.cart',$product->id)}}" title="Add To Cart"><i
                                                    class="ps-icon-shopping-cart"></i></a><img src="@if(!filter_var($product->photo, FILTER_VALIDATE_URL)){{asset('assets/uploads/'.$product->photo)}}@else{{$product->photo}}@endif" alt=""><a
                                                class="ps-shoe__overlay" href="product-detail.html"></a>
                                        </div>
                                        <div class="ps-shoe__content">
                                            <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                                            href="{{route('product.show',$product->id)}}">{{$product->name}}</a>
                                                {{--                                        <p class="ps-shoe__categories"><a href="#">Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>--}}
                                                <span class="ps-shoe__price"> {{$product->price}} ৳</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img
                    src="images/banner/home-banner-1.png" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img
                    src="images/banner/home-banner-2.png" alt=""></a></div>
    </div>
@stop
