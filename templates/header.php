<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>რა ვაჩუქო - Ra Vachuqo</title>
    <link href="./output.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');

        /* Font For logo_ra_vachuqo*/
        .ra_vachuqo_logo {
            font-family: "Agbalumo";
            font-weight: 400;
            font-style: normal;
        }

        body {
            font-family: "Exo 2";
        }
    </style>
</head>

<body class="bg-gray-500">
    <nav
        class="z-10 px-4 py-2 bg-white md:justify-between md:flex md:items:center shadow-md shadow-red-500 font-medium">

        <div class="flex justify-between items-center">
            <!-- Logo -->
            <h1 class="flex md:text-3xl text-xl cursor-pointer ra_vachuqo_logo text-blue-500">
                Ra Vachuqo</h1>

            <!-- Menu Button -->
            <span class="text-3xl cursor-pointer md:hidden block mx-2">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul
            class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-4 md:pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 text-indigo-600">
            <li class="mx-8 my-6 md:my-0"><a href="./home.php" class="text-xl hover:text-cyan-500 duration-500">Home</a>
            </li>
            <li class="mx-8 my-6 md:my-0"><a href="./products.php"
                    class="text-xl hover:text-cyan-500 duration-500 ">Products</a></li>
            <li class="mx-8 my-6 md:my-0"><a href="./about.php"
                    class="text-xl hover:text-cyan-500 duration-500">About</a></li>
            <li class="mx-8 my-6 md:my-0"><a href="./contact.php"
                    class="text-xl hover:text-cyan-500 duration-500">Contact</a></li>
        </ul>
    </nav>