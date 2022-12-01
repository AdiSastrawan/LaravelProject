<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>kos.kita</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="bg-gray-100 font-poppins">
    <div class="relative py-16">
        <div class="container relative m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto space-y-8 md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div
                    class="rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 backdrop-blur-2xl">
                    <div class="p-8 py-12 sm:p-16">
                        <h2 class="mb-8 text-2xl font-bold text-gray-800">
                            Log in to your account
                        </h2>
                        <div id="error"></div>
                        <form action="{{ url('booking-details') }}" method="get" onSubmit="return ValidasiForm()" name="FormReg"
                            class="space-y-8">
                            <!--EMAIL-->
                            <div class="space-y-2">
                                <label for="email" class="text-gray-600">Email</label>
                                <input type="email" name="email" value="" placeholder="youremail@gmail.com"
                                    class="focus:outline-none block w-full rounded-md border border-gray-200 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-primary" />
                                <div id="error_email" style="color: rgb(236, 46, 46)">
                                </div>
                            </div>

                            <!--PASSWORD-->
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-gray-600">Password</label>
                                    <button class="-mr-2 p-2">
                                        <span class="text-sm text-primary">Forgot your password?</span>
                                    </button>
                                </div>
                                <input type="password" name="password" value="" placeholder="enter your password"
                                    class="focus:outline-none block w-full rounded-md border border-gray-200 bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-primary" />
                                <div id="error_password" style="color: rgb(236, 46, 46)"></div>
                            </div>

                            <button type="submit"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-2xl before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                                <span class="relative text-base font-semibold text-white">Login</span>
                            </button>

                            <p class="border-t border-gray-100 pt-6 text-sm text-gray-500">
                                Don't have an account yet?
                                <a href="#" class="text-primary">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="space-x-4 text-center text-gray-500">
                    <span>&copy; kos.kita</span>
                    <a href="#" class="text-sm hover:text-primary">Contact</a>
                    <a href="#" class="text-sm hover:text-primary">Privacy & Terms</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>