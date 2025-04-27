<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Cart</title>
    @livewireStyles
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .product-list,
        .cart {
            width: 48%;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <!-- Navbar atau navigasi umum -->
            <a href="{{ route('products') }}">Products</a>
            <a href="{{ route('cart') }}">Cart</a>
        </nav>
    </header>

    <main class="container">
        <!-- Tempatkan konten dinamis dengan $slot -->
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
