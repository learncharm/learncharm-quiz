<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher | Learncharm Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font awesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
<link rel="manifest" href="../images/favicon/site.webmanifest">
</head>
<body>
<div class=" felx-col">
    <?php
    
        include './sidebar.php';
    ?>
    <div class="flex w-full bg-green-300 p-4">
        <h1 class="text-2xl text-green-800 font-semibold ml-14">Dashboard</h1>
        <a href="#" data-tooltip-target="tooltip-profile" data-tooltip-placement="bottom" class="flow-right bg-green-600 rounded p-3 text-white transition-all duration-200 ease-linear hover:bg-white hover:text-green-600" style="margin-left: 68rem;"><i class="fas fa-user"></i></a>
        <span id="tooltip-profile" role="tooltip" class="inline-block absolute invisible py-2 px-3 z-10 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">My Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </span>
    </div>
    <h1 class="text-2xl font-semibold ml-16 p-4">Namaste🙏, Krupesh.  <span id="lblGreetings"> Good Evening </span></h1>
</div>

<!-- javasript -->
    <!-- flowbite -->
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
      greet 
</script> 
</body>
</html>