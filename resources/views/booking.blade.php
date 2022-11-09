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
  <header class="w-full fixed table-fixed z-[999] border-b bg-white">
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
                  <a href="{{ url('index') }}"
                    class="relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative text-sky-800">Home</span>
                  </a>
                </li>
                <li>
                  <a href="/public/index.html#services"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Services</span>
                  </a>
                </li>
                <li>
                  <a href="/public/index.html#blogs"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Blogs</span>
                  </a>
                </li>
                <li>
                  <a href="/public/index.html#about_us"
                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                    <span class="relative group-hover:text-sky-800">Contact us</span>
                  </a>
                </li>
              </ul>
              <div class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                <a href="#"
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

  <!--BOOKING SECTION START-->
  <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
    <section id="booking" class="items-center">
      <!--NAVIGATION DETAILS-->

      <div class="relative w-full">
        <div class="pt-24">
          <h4 class="ml-10 text-gray-500 font-semibold text-xl">
            Packages
            <span class="text-gray-400 font-semibold text-xl">
              > Details > Payment > Finish
            </span>
          </h4>
        </div>
        <br><br>
      </div>

      <div class="items-center lg:pt-30 lg:m-auto">

        <!--HEADER CONTENT-->
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">
            TYPE OF PACKAGES
          </h4>
          <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
            Choose Your Packages
          </h2>
          <p class="font-medium text-md text-slate-800 md:text-lg">
            There are 3 types of packages that you can choose according to the facilities and prices that you think are
            the most suitable
          </p>
        </div>
      </div>
      <div class="lg:w-3/4 xl:w-2/4 lg:mx-auto space-y-5">
        <!--1ST PACKAGE-->
        <div 
          class="group border-gray-300  relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-gray-100 hover:bg-sky-50 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
          <!--IMAGE-->
          <div class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
            <img src="img/1466.jpg"
              class="sm:h-full object-cover object-top transition duration-500 group-hover:scale-105" />
              <a href="{{ url('login') }}"></a>
            </div>
          <!--CONTENT-->
          <div class="sm:p-2 sm:pl-0 sm:w-4/6">
            <span class="mt-4 mb-2 inline-block font-medium text-red-600 sm:mt-0">3 rooms left</span>
            <h3 class="text-2xl font-semibold text-primary">
              Package 1
            </h3>
            <p class="my-6 text-gray-600">
              Indoor Bathroom, Kitchen, Fan, Study Desk, ...
            </p>
            <div class="flex gap-4">
              <select name="Number of People"
                class="px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <option>One Person</option>
                <option>Two People</option>
              </select>
              <div
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                Rp 500.000<span class="text-gray-400">\month</span>
              </div>
              <div id="add-chart"
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <img src="img/shopping-cart.png">
              </div>
            </div>
          </div>
        </div>
        <!--2ND PACKAGE-->
        <a href="#"
          class="group border-gray-300  relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-gray-100 hover:bg-sky-50 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
          <!--IMAGE-->
          <div class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
            <img src="img/1284.jpg"
              class="sm:h-full object-cover object-top transition duration-500 group-hover:scale-105" />
          </div>
          <!--CONTENT-->
          <div class="sm:p-2 sm:pl-0 sm:w-4/6">
            <span class="mt-4 mb-2 inline-block font-medium text-red-600 sm:mt-0">4 rooms left</span>
            <h3 class="text-2xl font-semibold text-primary">
              Package 2
            </h3>
            <p class="my-6 text-gray-600">
              Indoor Bathroom, Kitchen, AC, Study Desk, ...
            </p>
            <div class="flex gap-4">
              <select name="Number of People"
                class="px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <option>One Person</option>
                <option>Two People</option>
              </select>
              <div
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                Rp 800.000<span class="text-gray-400">\month</span>
              </div>
              <div id="add-chart"
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <img src="img/shopping-cart.png">
              </div>
            </div>
          </div>
        </a>
        <!--3RD PACKAGE-->
        <a href="#"
          class="group border-gray-300  relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-gray-100 hover:bg-sky-50 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
          <!--IMAGE-->
          <div class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
            <img src="img/417.jpg"
              class="sm:h-full object-cover object-top transition duration-500 group-hover:scale-105" />
          </div>
          <!--CONTENT-->
          <div class="sm:p-2 sm:pl-0 sm:w-4/6">
            <span class="mt-4 mb-2 inline-block font-medium text-red-600 sm:mt-0">3 rooms left</span>
            <h3 class="text-2xl font-semibold text-primary">
              Package 3
            </h3>
            <p class="my-6 text-gray-600">
              Indoor Bathroom, Kitchen, AC, WiFi, Study Desk, ...
            </p>
            <div class="flex gap-4">
              <select name="Number of People"
                class="px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <option>One Person</option>
                <option>Two People</option>
              </select>
              <div
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                Rp 1.000.000<span class="text-gray-400">\month</span>
              </div>
              <div id="add-chart"
                class="bg-white px-3 py-1 rounded-xl border border-gray-500 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                <img src="img/shopping-cart.png">
              </div>
            </div>
          </div>
        </a>


        <!--SHOPPING CART-->
        <div
          class="group border-gray-300  relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
          
          <!--CONTENT-->
          <div class="sm:p-2 sm:pl-0 sm:w-4/6">
            
            <h3 class="text-2xl font-semibold text-primary">
              Shopping Cart
            </h3>
            
          
            <div class="bg-white rounded-xl space-x-0 mb-6">
              
              <p class="my-6 text-gray-600">
                List of shopping cart:
              </p>
            </div>

            <div class="bg-white rounded-xl space-x-0 mb-6">
              
                <button class="py-15 relative group overflow-hidden pl-6 h-14 flex items-center">
                  <span class="relative font-semibold text-gray-500 ">Promotional Code</span>
             
                <input type="text" class="justify-center hover:bg-gray-100">
              </div>

              <div class="rounded-xl space-x-0 m-6">
                <h3 class="text-base font-semibold text-primary">
                  Total Cost
                </h3>
              </div>
            
              <!--BUTTON SUBMIT-->
            <div>
              <div class="pl-56 pt-4">
                <button type="submit"
                  class="transition rounded-2xl bg-slate-400 hover:bg-gray-700 border p-4 relative group overflow-hidden h-14 flex items-center">
                  <span class="relative font-semibold text-white">Checkout</span>
                  <!--ANIMATION ICON-->
                  <div aria-hidden="true" class="w-14 transition duration-300 -translate-y-7 group-hover:translate-y-7">
                    <div class="h-14 flex">
                      <img src="img/right-arrow.png" class="h-8 w-8 m-auto fill-white" viewBox="0 0 20 20"></img>
                    </div>
                    <div class="h-14 flex">
                      <img src="img/right-arrow.png" class="h-8 w-8 m-auto fill-white" viewBox="0 0 20 20"></img>
                    </div>
                  </div>
                </button>
              </div>
            </div>
            
            </div>


          </div>
      </div>
      
      </div>
    </section>
  </div>
</body>

</html>
