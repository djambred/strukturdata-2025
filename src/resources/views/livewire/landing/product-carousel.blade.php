    <!-- Carousel Products -->
    <section class="py-16 bg-base-100 px-4">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold">Popular Products</h2>
            <p class="text-gray-500">Browse our top-selling items</p>
        </div>

        <div class="carousel rounded-box space-x-4 w-full justify-center">
            @foreach (['Product 1', 'Product 2', 'Product 3'] as $index => $product)
                <div class="carousel-item">
                    <div class="card w-80 bg-base-200 shadow">
                        <figure><img src="https://via.placeholder.com/300x200" alt="{{ $product }}" /></figure>
                        <div class="card-body text-center">
                            <h2 class="card-title">{{ $product }}</h2>
                            <p>{{ ['Top-quality item just for you.', 'Stylish and modern design.', 'Engineered for performance.'][$index] }}
                            </p>
                            <div class="card-actions justify-center">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
