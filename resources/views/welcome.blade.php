<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->

</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <section class="home">
            <div class="content">
                <h3>New Arrivals.</h3>
                <p>EXCLUSIVELY SELECTED FASHION, JUST FOR YOU</p>
                <p>Best-Selling outfits are now available.</p>
                <a href="about.php" class="btn">learn more</a>
            </div>
        </section>
        <section class="products">
            <h1 class="title">Our Selection</h1>
            <div class="box-container">
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/14.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/15.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/16.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/17.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/18.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
                <form action="" method="POST" class="box">
                    <a href="#" class="fas fa-eye"></a>
                    <div class="price">PHP799.00</div>
                    <img src="./images/19.png" alt="" class="image">
                    <div class="name"></div>
                    <input type="number" name="product_quantity" value="1" min="0" class="qty">
                    <input type="hidden" name="product_id" value="">
                    <input type="hidden" name="product_name" value="">
                    <input type="hidden" name="product_price" value="">
                    <input type="hidden" name="product_image" value="">
                    <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </form>
            </div>
            <div class="more-btn">
                <a href="#" class="option-btn">load more</a>
            </div>
        </section>
        <section class="home-contact">
            <div class="content">
                <h3>Talk to us!</h3>
                <p>We appreciate your patronage and are grateful for your choice to shop with us. If you have any
                    suggestions or ideas, please feel free to share them with us. Your input helps us continually
                    improve
                    and enhance our customer satisfaction.
                </p>
                <a href="contact.php" class="btn">contact us</a>
            </div>
        </section>
</body>

</html>