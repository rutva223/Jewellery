<footer id="site-footer" class="site-footer background four-columns">
    <div class="footer">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 column-1">
                            <div class="block block-menu m-b-20">
                                <h2 class="block-title">Contact Us</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <span>Head Office:</span> 26 Wyle Cop, Shrewsbury, Shropshire, SY1 1XD
                                        </li>
                                        <li>
                                            <span>Email:</span> <a
                                                href="mailto:pavitrajewellery100@gmail.com">pavitrajewellery100@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="block block-social">
                                <ul class="social-link">
                                    <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="index.html#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-4">
                            <div class="block block-menu">
                                <h2 class="block-title">Catalog</h2>
                                <div class="block-content">
                                    <ul>
                                        @foreach ($all_categories as $cat)
                                            <li>
                                                <a href="{{ route('catwiseproduct', $cat->name) }}">{{ $cat->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 column-3">
                            <div class="block block-menu">
                                <h2 class="block-title">About Us</h2>
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="{{ route('terms_condition') }}" target="_blank">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('privacy_policy') }}" target="_blank">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="section-padding">
            <div class="section-container">
                <div class="block-widget-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-left">
                                <p class="copyright">Copyright © 2023. All Right Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-right">
                                <div class="block block-image">
                                    <img width="309" height="32" src="{{ asset('front_end/media/payments.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Back Top button -->
<div class="back-top button-show">
    <i class="arrow_carrot-up"></i>
</div>

<!-- Search -->
<div class="search-overlay">
    <div class="close-search"></div>
    <div class="wrapper-search">
        <form role="search" method="get" class="search-from ajax-search" action="index.html">
            <a href="index.html#" class="search-close"></a>
            <div class="search-box">
                <button id="searchsubmit" class="btn" type="submit">
                    <i class="icon-search"></i>
                </button>
                <input type="text" autocomplete="off" value="" name="s" class="input-search s"
                    placeholder="Search...">
                <div class="content-menu_search">
                    <label>Suggested</label>
                    <ul id="menu_search" class="menu">
                        <li><a href="index.html#">Earrings</a></li>
                        <li><a href="index.html#">Necklaces</a></li>
                        <li><a href="index.html#">Bracelets</a></li>
                        <li><a href="index.html#">Jewelry Box</a></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Compare -->
<div class="compare-popup">
    <div class="compare-popup-inner">
        <div class="compare-table">
            <div class="compare-table-inner">
                <a href="index.html#" id="compare-table-close" class="compare-table-close">
                    <span class="compare-table-close-icon"></span>
                </a>
                <div class="compare-table-items">
                    <table id="product-table" class="product-table">
                        <thead>
                            <tr>
                                <th>
                                    <a href="index.html#" class="compare-table-settings">Settings</a>
                                </th>
                                <th>
                                    <a href="shop-details.html">Twin Hoops</a> <span class="remove">remove</span>
                                </th>
                                <th>
                                    <a href="shop-details.html">Medium Flat Hoops</a> <span
                                        class="remove">remove</span>
                                </th>
                                <th>
                                    <a href="shop-details.html">Bold Pearl Hoop Earrings</a> <span
                                        class="remove">remove</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-image">
                                <td class="td-label">Image</td>
                                <td>
                                    <a href="shop-details.html">
                                        <img width="600" height="600"
                                            src="{{ asset('front_end/media/product/3.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="shop-details.html">
                                        <img width="600" height="600"
                                            src="{{ asset('front_end/media/product/1.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="shop-details.html">
                                        <img width="600" height="600"
                                            src="{{ asset('front_end/media/product/2.jpg') }}" alt="">
                                    </a>
                                </td>
                            </tr>
                            <tr class="tr-sku">
                                <td class="td-label">SKU</td>
                                <td>VN00189</td>
                                <td></td>
                                <td>D1116</td>
                            </tr>
                            <tr class="tr-rating">
                                <td class="td-label">Rating</td>
                                <td>
                                    <div class="star-rating">
                                        <span style="width:80%"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="star-rating">
                                        <span style="width:100%"></span>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="tr-price">
                                <td class="td-label">Price</td>
                                <td><span class="amount">$150.00</span></td>
                                <td><del><span class="amount">$150.00</span></del> <ins><span
                                            class="amount">$100.00</span></ins></td>
                                <td><span class="amount">$200.00</span></td>
                            </tr>
                            <tr class="tr-add-to-cart">
                                <td class="td-label">Add to cart</td>
                                <td>
                                    <div data-title="Add to cart">
                                        <a href="index.html#" class="button">Add to cart</a>
                                    </div>
                                </td>
                                <td>
                                    <div data-title="Add to cart">
                                        <a href="index.html#" class="button">Add to cart</a>
                                    </div>
                                </td>
                                <td>
                                    <div data-title="Add to cart">
                                        <a href="index.html#" class="button">Add to cart</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="tr-description">
                                <td class="td-label">Description</td>
                                <td>Phasellus sed volutpat orci. Fusce eget lore mauris vehicula elementum gravida nec
                                    dui. Aenean aliquam varius ipsum, non ultricies tellus sodales eu. Donec dignissim
                                    viverra nunc, ut aliquet magna posuere eget.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</td>
                                <td>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece
                                    comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic
                                    bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made
                                    with up to 5 percent polyester created from recycled plastic.</td>
                            </tr>
                            <tr class="tr-content">
                                <td class="td-label">Content</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.</td>
                            </tr>
                            <tr class="tr-dimensions">
                                <td class="td-label">Dimensions</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Loader -->
<div class="page-preloader">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>


<script src="{{ asset('front_end/libs/jquery/js/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="{{ asset('front_end/libs/popper/js/popper.min.js') }}"></script>
<script src="{{ asset('front_end/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_end/libs/slick/js/slick.min.js') }}"></script>
<script src="{{ asset('front_end/libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>

<script src="{{ asset('front_end/libs/slider/js/tmpl.js') }}"></script>
<script src="{{ asset('front_end/libs/slider/js/jquery.dependClass-0.1.js') }}"></script>
<script src="{{ asset('front_end/libs/slider/js/draggable-0.1.js') }}"></script>
<script src="{{ asset('front_end/libs/slider/js/jquery.slider.js') }}"></script>
<script src="{{ asset('front_end/libs/elevatezoom/js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('front_end/assets/js/app.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@stack('after-scripts')

<script>
    $(document).ready(function() {
        $('#login_ajax').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Clear previous status messages
            $('.error-login').text('');

            // Collect form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: $(this).attr('action'), // Get action URL from the form
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Assuming the response is a JSON object
                    if (response.success) {
                        // Show success message
                        $("body").append(
                            '<div class="cart-product-added"><div class="added-message">'+response.message+'</div></div>'
                        );
                        // Optionally, redirect to another page after a delay
                        setTimeout(function() {
                            window.location.href = response.redirect; // redirect if provided
                        }, 2000);
                    } else {
                        // Show validation errors
                        $('.error-login').text(response.message).css('color', 'red');
                    }
                },
                error: function(xhr) {
                    // Handle validation errors
                    if (xhr.status === 422) { // Unprocessable Entity
                        var errors = xhr.responseJSON.errors;
                        var errorMsg = '';
                        $.each(errors, function(key, value) {
                            errorMsg += value[0] + '<br>'; // Concatenate error messages
                        });
                        $('.error-login').html(errorMsg).css('color', 'red');
                    } else {
                        // Show a general error message
                        $('.error-login').text('An error occurred. Please try again.').css('color', 'red');
                    }
                }
            });
        });

        $('#register_ajax').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Clear previous status messages
            $('.error-register').text('');

            // Collect form data
            var formData = $(this).serialize();

            // AJAX request
            $.ajax({
                url: $(this).attr('action'), // Get action URL from the form
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        $("body").append(
                            '<div class="cart-product-added"><div class="added-message">'+response.message+'</div></div>'
                        );
                        // Optionally, redirect to another page after a delay
                        setTimeout(function() {
                            window.location.href = response.redirect; // redirect if provided
                        }, 2000);
                    } else {
                        // Show validation errors
                        $('.error-register').text(response.message).css('color', 'red');
                    }
                },
                error: function(xhr) {
                    // Handle validation errors
                    if (xhr.status === 422) { // Unprocessable Entity
                        var errors = xhr.responseJSON.errors;
                        var errorMsg = '';
                        $.each(errors, function(key, value) {
                            errorMsg += value[0] + '<br>'; // Concatenate error messages
                        });
                        $('.error-register').html(errorMsg).css('color', 'red');
                    } else {
                        // Show a general error message
                        $('.error-register').text('An error occurred. Please try again.').css('color', 'red');
                    }
                }
            });
        });
    });
</script>

