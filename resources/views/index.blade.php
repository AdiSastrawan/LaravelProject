<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>kos.kita</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src='/public/js/script.js'></script>
</head>

<body class="bg-gray-100 font-poppins">
  <!-- NAVIGATION BAR START-->
  <header class="w-full fixed table-fixed z-[10] border-b bg-white">
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
      <div class="flex items-center justify-between">
        <!--LOGO-->
        <div class="relative z-20">
          <h1 class="ml-10 text-primary font-bold text-3xl">kos.kita</h1>
        </div>
        <!--NAVIGATION BAR-->
        <div class="flex items-center justify-end border-l lg:border-l-0">
          <!--HAMBURGER MENU-->
          <input type="checkbox" name="hamburger" id="hamburger" class="peer" hidden>
          <label for="hamburger" class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
            <div aria-hidden="true" class="m-auto h-0.5 w-6 rounded bg-sky-900 transition duration-300"></div>
            <div aria-hidden="true" class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 transition duration-300"></div>
          </label>
          <!--SIDEBAR-->
          <div
            class="peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.5rem)] translate-x-[-100%] bg-white border-r shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static lg:shadow-none lg:translate-x-0">
            <!--LIST MENU-->
            <div class="flex flex-col h-full justify-between lg:items-center lg:flex-row">
              <ul class="px-6 pt-32 text-gray-700 space-y-8 md:px-12 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0">
                <li>
                  <a href="#home"
                    class="relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative text-sky-800">Home</span>
                  </a>
                </li>
                <li>
                  <a href="#services"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Services</span>
                  </a>
                </li>
                <li>
                  <a href="#blogs"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Blogs</span>
                  </a>
                </li>
                <li>
                  <a href="#about_us"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Contact us</span>
                  </a>
                </li>
              </ul>
              <div class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                <a href="{{ url('booking') }}"
                  class="group font-semibold block px-6 py-3 rounded-2xl bg-gradient-to-r from-sky-300 to-sky-500 text-center text-white transition duration-200 hover:shadow-2xl">
                  Book Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--NAVIGATION BAR END-->

  <!--HERO SECTION START-->
  <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
    <section id="home" class="items-center">
      <div class="flex flex-col-reverse lg:flex-row items-center lg:pt-20 lg:mt-30">
        <!--CONTENT-->
        <div class="flex flex-1 flex-col items-center lg:items-start lg:mt-10 lg:mx-10">
          <h2
            class="font-semibold text-primary text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
            A Minimalist Boarding House
          </h2>
          <p class="font-normal text-slate-900 text-lg text-center lg:text-left mb-6 mr-8">
            A clean and simple boarding house that have many interesting facilities that you should try!
          </p>
          <div class="flex justify-center flex-wrap gap-6">
            <button type="button"
              class="w-full py-3 px-6 rounded-sm text-center transition  bg-gray-500 hover:bg-gray-900 md:w-max">
              <span class="block text-white font-semibold">
                Learn More
              </span>
            </button>
          </div>
        </div>
        <!--IMAGE-->
        <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 lg:mt-10 lg:mx-10">
          <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full rounded-2xl" src="img/tampakDepan.jpg" />
        </div>
      </div>
    </section>
  </div>
  <!--HERO SECTION END-->

  <!--SERVICES SECTION START-->
  <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
    <section id="services" class="pt-28 text-center">
      <!--HEADER CONTENT-->
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">
          BRIEF INFORMATION
        </h4>
        <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
          Facilities and Services
        </h2>
        <p class="font-medium text-md text-slate-800 md:text-lg">
          There are various very interesting facilities that you will get and you can customize according to your budget
        </p>
      </div>
      <!--BRIEF ABOUT SERVICES-->
      <div class="text-left xl:container m-auto px-6 text-gray-500 md:px-12">
        <div
          class="mt-16 grid divide-x divide-y divide-gray-200  overflow-hidden rounded-3xl sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
          <!--LOCATION-->
          <div class="group relative bg-slate-50 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8 group-hover:bg-slate-300">
              <img src="img/location.png" class="w-12" />
              <div class="space-y-2">
                <h5 class="text-xl font-medium  text-sky-700">
                  Location
                </h5>
                <p class="text-sm text-slate-700">
                  The location is very strategic, in Jln. Gatot Subroto Barat No 307, Denpasar.
                </p>
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-primary">
                <span class="text-sm">Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          <!--PRICE-->
          <div class="group relative bg-slate-50 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8 group-hover:bg-slate-300">
              <img src="img/tag.png" class="w-12" />
              <div class="space-y-2">
                <h5 class="text-xl font-medium  text-sky-700">
                  Price
                </h5>
                <p class="text-sm text-slate-700">
                  The price range is very friendly and affordable, starting from 500k - 1000k.
                </p>
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-primary">
                <span class="text-sm">Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          <!--ROOMS-->
          <div class="group relative bg-slate-50 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8 group-hover:bg-slate-300">
              <img src="img/living-room.png" class="w-12" />
              <div class="space-y-2">
                <h5 class="text-xl font-medium text-sky-700">
                  Rooms
                </h5>
                <p class="text-sm text-slate-700">
                  There are 12 rooms with 3 different packages to choose from.
                </p>
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-primary">
                <span class="text-sm">Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
          <!--INTERNET-->
          <div class="group relative bg-slate-50 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-slate-300">
              <img src="img/wifi.png" class="w-12" />
              <div class="space-y-2">
                <h5 class="text-xl font-medium  text-sky-700">
                  Accsess Internet
                </h5>
                <p class="text-sm text-slate-700">
                  Free access wifi anywhere because we can't live without internet.
                </p>
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-primary">
                <span class="text-sm">Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--SERVICES SECTION END-->

  <!--BLOGS SECTION START-->
  <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
    <section id="blogs" class="pt-28 text-center">
      <!--HEADER CONTENT-->
      <div class="max-w-xl mx-auto text-center mb-16">
        <h4 class="font-semibold text-lg text-primary mb-2">
          BLOGS
        </h4>
        <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
          Latest Blogs
        </h2>
        <p class="font-medium text-md text-slate-800 md:text-lg">
          This section of blogs contains the latest and most current information that can be read by boarding house
          residents
        </p>
      </div>
      <!--BLOGS-->
      <div class=" xl:container m-15 px-6 text-gray-600 md:px-12 xl:px-6">
        <div class=" grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12 m-20">
          <!--BLOGS 1-->
          <div
            class="bg-slate-50 rounded-2xl p-5 group space-y-6 border-2 border-gray-200 hover:bg-white hover:opacity-85">
            <img src="img/colorful-flower-garden.jpg"
              class="h-80 w-full rounded-2xl object-cover object-top transition-all duration-500 group-hover:shadow-2xl" />
            <h5 class="text-xl font-semibold text-gray-800">
              It's already spring, tutorials how to plant flowers in the garden together
            </h5>
            <!--MORE-->
            <div class="flex gap-8 items-center">
              <a href="#" class="m-2 p-2 rounded-md flex items-center gap-3 hover:bg-gray-200">
                <img class="w-8 h-8 object-cover rounded-full" src="img/product-owner.png">
                <span class="hidden sm:block font-semibold text-base text-gray-600">Ibu Kos</span>
              </a>
              <span class="w-max block font-light text-gray-500 sm:mt-0">Nov 05 2022</span>
              <!--icon clock-->
              <div class="flex gap-2 items-center text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>2 mins read</span>
              </div>
            </div>
          </div>
          <!--BLOGS 2-->
          <div
            class="bg-slate-50 rounded-2xl p-5 group space-y-6 border-2 border-gray-200 hover:bg-white hover:opacity-85">
            <img src="img/kitchen.jpg"
              class="h-80 w-full rounded-2xl object-cover object-top transition-all duration-500 group-hover:shadow-2xl" />
            <h5 class="text-xl font-semibold text-gray-800">
              The shared kitchen on the 1st floor has been renovated, check now!
            </h5>
            <!--MORE-->
            <div class="flex gap-8 items-center">
              <a href="#" class="m-2 p-2 rounded-md flex items-center gap-3 hover:bg-gray-200">
                <img class="w-8 h-8 object-cover rounded-full" src="img/product-owner.png">
                <span class="hidden sm:block font-semibold text-base text-gray-600">Ibu Kos</span>
              </a>
              <span class="w-max block font-light text-gray-500 sm:mt-0">Oct 31 2022</span>
              <!--icon clock-->
              <div class="flex gap-2 items-center text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-5 h-5 text-gray-400 dark:text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>1 min read</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--BLOGS SECTION END-->

  <!--FOOTER SECTION START-->
  <section id="about_us" class="pt-28 text-center">
    <footer class="w-full bg-white py-4">
      <div class="md:px-12 lg:px-28">
        <div class="container m-auto space-y-4 text-gray-600">
          <div class="m-auto flex w-max items-center justify-between space-x-4">
            <!--NO.TELP-->
            <a href="#" aria-label="call">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-auto w-5" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                </path>
              </svg>
              <span class="">+62123456789</span>
            </a>
            <!--GMAIL-->
            <a href="mailto:kos.kita@gmail.com" aria-label="mail">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-auto w-5" viewBox="0 0 16 16">
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z">
                </path>
              </svg>
              <span>kos.kita@gmail.com</span>
            </a>
            <!--FACEBOOK-->
            <a href="#" title="facebook" aria-label="facebook">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="m-auto w-5" viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                </path>
              </svg>
              <span class="">kos.kita.id</span>
            </a>
          </div>
          <!--COPYRIGHT-->
          <div class="text-center">
            <span class="uppercase font-semibold text-sky-500 text-lg">
              Copyright © kos.kita <span id="year"></span> | All right reserved
            </span>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--FOOTER SECTION END-->
</body>

</html>