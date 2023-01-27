@extends('marketplace.layouts.app')
@section('title')
@endsection


@section('content')
<div class="shop-products-bhv pt20 pb60">
    <div class="container">
        <div class="row">
            @foreach ($product as $i=> $product )
            <div class="col-lg-4 col-md-6">
                <div class="rpb-shop-items-dv s-block mt60">
                    <div class="rpb-shop-items-img">
                        <a href="#"><img src="{{ url('storage/product/'.'fotocover_'.$product->name_product.'.png')}}"
                                class="img-fluid" alt="product" /></a>
                    </div>
                    <div class="rpb-shop-items-info">
                        <div class="rpb-shop-items-tittl">
                            <h3>
                                <a href="#">{{ $product->name_product}}</a>
                            </h3>
                            <p class="tags-itmm">By. {{ $product->laboratorium->nama_lab }}</p>
                        </div>
                        <div class="rpb-shop-items-flex">
                            <div class="rpb-shop-inf-ll">
                                <div class="rpb-itm-pric">
                                    <span class="offer-prz">@if($product->price_min != NULL)
                                        Rp. {{ number_format($product->price_min) }} - {{
                                        number_format($product->price_max) }}
                                        @else()
                                        Rp. {{ number_format($product->price_before) }}
                                        @endif</span>
                                </div>
                                <div class="rpb-tim-rate">
                                    <div class="star-rate">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="fas fa-star"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rpb-itm-sale">144 Sales</div>
                            </div>
                            <div class="rpb-shop-inf-rr">
                                <div class="rpb-shop-flxbt">
                                    <a href="#" class="rpb-shop-prev" data-bs-toggle="tooltip"
                                        title="View the Item Demo">Preview</a>
                                    <a href="#" class="rpb-shop-cartt" data-bs-toggle="tooltip" title="Add to Cart"><i
                                            class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pagination pagi1">
                    <ul>
                        <li>
                            <a href="#."> &lt; </a>
                            <a class="is-active" href="#">1</a>
                            <a href="#.">2</a>
                            <a href="#.">3</a>
                            <a href="#.">4</a>
                            <a href="#."> > </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection