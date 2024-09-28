<div class="products-list grid">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="products-entry clearfix product-wapper">
                    <div class="products-thumb">
                        <div class="product-lable">
                            <div class="hot">Hot</div>
                        </div>
                        <div class="product-thumb-hover">
                            <a href="{{ route('product_detail', $product->id) }}">
                                @if (is_array($product->images) && count($product->images) > 0)
                                    <img src="{{ $product->images[0] }}" width="600" height="600" alt="Product Image" class="post-image">
                                    @if (isset($product->images[1]))
                                        <img src="{{ $product->images[1] }}" width="600" height="600" alt="Product Image" class="hover-image back">
                                    @else
                                        <img src="{{ $product->images[0] }}" width="600" height="600" alt="Product Image" class="hover-image back">
                                    @endif
                                @else
                                    <img src="{{ asset('front_end/media/product/1.jpg') }}" width="600" height="600" alt="Default Image">
                                @endif
                            </a>
                        </div>
                        <div class="product-button">
                            <div class="btn-add-to-cart" data-product-id="{{ $product->id }}" data-title="Add to cart">
                                <a rel="nofollow"  href="#" class="product-btn button">Add to cart</a>
                            </div>
                            <div class="btn-wishlist" data-title="Wishlist">
                                <button class="product-btn">Add to wishlist</button>
                            </div>
                            <div class="btn-compare" data-title="Compare">
                                <button class="product-btn">Compare</button>
                            </div>
                            <span class="product-quickview" data-title="Quick View">
                                <a href="#" class="quickview-button" data-id="{{ $product->id }}">Quick View <i
                                        class="icon-search"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="products-content">
                        <div class="contents text-center">
                            <div class="rating">
                                <div class="star star-0"></div><span class="count">(0 review)</span>
                            </div>
                            <h3 class="product-title"><a href="{{ route('product_detail', $product->id) }}">{{ $product->product_name }}</a></h3>
                            <span class="price">{{ $product->sell_price }}</span>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>

<nav class="pagination">
    <ul class="page-numbers">
        <!-- Previous Page Link -->
        @if ($products->onFirstPage())
            <li class="disabled"><span>&raquo;</span></li>
        @else
            <li><a class="prev page-numbers" href="{{ $products->previousPageUrl() }}">&raquo;</a></li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
                <li><span class="page-numbers current">{{ $page }}</span></li>
            @else
                <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($products->hasMorePages())
            <li><a class="next page-numbers" href="{{ $products->nextPageUrl() }}">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
</nav>
<script src="{{ asset('front_end/libs/slick/js/slick.min.js') }}"></script>

{{-- <div class="row">
    <!-- Display pagination text -->
    <div class="col-lg-6">
        {{ $text_for_pagination }}
    </div>

    <!-- Display pagination links -->
    <div class="col-lg-6 d-flex justify-content-end">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div> --}}
