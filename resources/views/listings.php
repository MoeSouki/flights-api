<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    laravel: "#ef3b2d",
                },
            },
        },
    };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="index.html"><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <h1><?php echo $heading; ?></h1>
    <?php foreach ($listings as $listing): ?>
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img class="hidden w-48 mr-6 md:block" src="images/no-image.png" alt="" />
                <div>
                    <h3 class="text-2xl">
                        <a href="show.html"><?php echo $listing['title']; ?></a>
                    </h3>
                    <div class="text-xl font-bold mb-4"><?php echo $listing['company'] ?></div>
                    <ul class="flex">
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Laravel</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">API</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Backend</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> <?php echo $listing['location']; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>