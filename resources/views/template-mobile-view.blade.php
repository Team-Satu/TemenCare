<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile View Layout</title>
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto h-screen">
        <!-- Header -->
        <header class="bg-blue-500 text-white text-center py-4">
            <h1 class="text-xl font-bold">Mobile View Header</h1>
        </header>

        <!-- Content -->
        <main class="mt-4">
            <section class="bg-white shadow-md rounded-md p-4">
                <h2 class="text-lg font-semibold mb-2">Content Section</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur felis sit amet lorem
                    consequat, id dictum mi interdum.</p>
            </section>
        </main>

        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm mt-4">
            <p>&copy; 2024 Mobile View Footer</p>
        </footer>
    </div>
</body>

</html>
