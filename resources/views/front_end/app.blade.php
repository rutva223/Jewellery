<!DOCTYPE html>
<html lang="en">
    @php
        $all_categories = AllCategories();
        $user_id = Session::has('login_id');
        $wishlistCount = App\Models\Wishlist::where('user_id', $user_id)->count();
    @endphp

	@include('front_end.head_link')

	<body class="{{ $body }}">
		<div id="page" class="hfeed page-wrapper">
            @include('front_end.header',compact('all_categories', 'wishlistCount'))
			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
                        @yield('content')
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>
			@include('front_end.footer')
	</body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.wishlist-btn').on('click', function() {
                let productId = $(this).data('product-id');
                let heartIcon = $(this).find('i');

                $.ajax({
                    url: '{{ route("add-wishlist") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',  // CSRF token for security
                        product_id: productId
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Toggle heart icon on success
                            if (heartIcon.hasClass('empty-heart')) {
                                heartIcon.removeClass('empty-heart').addClass('filled-heart');
                            } else {
                                heartIcon.removeClass('filled-heart').addClass('empty-heart');
                            }
                        updateWishlistCount();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert('An error occurred. Please try again.');
                    }
                });
            });

            function updateWishlistCount() {
                $.ajax({
                    url: '{{ route('count-wishlist') }}', // Create a route to return the updated wishlist count
                    type: 'GET',
                    success: function(data) {
                        $('.count-wishlist').text(data.count);  // Update the wishlist count in the header
                    },
                    error: function() {
                        alert('Failed to update wishlist count.');
                    }
                });
            }
        });
    </script>
</html>
