<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="assets/icons/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-tailwind.png">
    <title>Thank You | MAP</title>
</head>
<body class="bg-white dark:bg-gray_10 text-gray_1 dark:text-gray_3 font-jost text-lg leading-base font-normal break-words duration-300">
    <!-- Wrapper -->
    <div class="w-full float-left clear-both min-h-screen relative overflow-hidden box-border">
        <div class="w-full min-h-screen relative flex flex-col justify-center items-center ">
            <!-- Main Part -->
            <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full text-center mb-10">
                <i class="far fa-smile-beam text-6xl lg:text-9xl"></i>
            </div>
            <div class="text-green_1 font-medium px-2.5 md:px-5 lg:px-8% mx-auto w-full text-center">
                <span>Thanks! Your message has been received, I will contact you soon.</span>
            </div>
        </div>
    </div>
</body>
</html>