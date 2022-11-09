<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>kos.kita</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <script src='script.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
                  <a href="/public/index.html#home"
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

      <div class="relative w-full pt-24">
        <h4 class="ml-10 text-gray-400 font-semibold text-xl">
          <a href="{{ url('booking') }}"> Packages > </a>
          <span class="text-gray-500 font-semibold text-xl">
            Details
          </span>
          <span class="text-gray-400 font-semibold text-xl">
            > Payment > Finish
          </span>
        </h4>

        <div class="max-w-xl mx-auto text-center my-12">
          <h4 class="font-semibold text-lg text-primary mb-2">
            DETAILS OF PACKAGES
          </h4>
          <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
            Package One
          </h2>
          <p class="font-medium text-md text-slate-800 md:text-lg">
            Pada paket 1 ini anda akan mendapatkan fasilitas dan servis sebagai berikut yang akan dijelaskan pada bagian
            bawah
          </p>
        </div>

      </div>
      <div class="md:px-12 lg:px-24">
        <div class="overflow-x-hidden -mx-4 md:mx-0">
          <div class="container m-auto py-4 overflow-x-auto">
            <div
              class="h-[60vh] w-[130vh] md:h-full md:w-full grid grid-cols-12 grid-rows-4 pl-8 pr-4 md:pl-0 md:pr-0 divide-x gap-4">
              <div class="col-span-4 row-span-4 md:col-span-8 lg:col-span-6 md:h-[25rem] lg:h-[31rem] px-2 py-6">
                <img src="img/1466.jpg" class="h-full w-full rounded-xl object-cover">
              </div>
              <div class="col-span-4 row-span-2 lg:col-span-3 lg:h-60 p-2 pt-6 rounded-bl-xl">
                <img src="img/1466.jpg" class="h-full w-full rounded-xl object-cover">
              </div>
              <div
                class="col-span-4 row-span-2 lg:col-span-3 lg:h-60 p-2 pt-6 md:pt-2 lg:pt-6 rounded-bl-xl md:rounded-tl-xl">
                <img src="img/1466.jpg" class="h-full w-full rounded-xl object-cover">
              </div>
              <div class="col-span-5 row-span-2 md:col-span-7 lg:col-span-4 lg:h-60 p-2 pb-6 rounded-tl-xl">
                <img src="img/1466.jpg" class="h-full w-full rounded-xl object-cover">
              </div>
              <div class="col-span-3 row-span-2 md:col-span-5 lg:col-span-2 lg:h-60 p-2 pb-6 rounded-tl-xl">
                <img src="/img/1466.jpg" class="h-full w-full rounded-xl object-cover">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl lg:flex">
        <div class="lg:w-1/2">
          <div class="p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Spesifikasi Tipe Kamar
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class="p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Fasilitas Kamar
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class=" p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Fasilitas Kamar Mandi
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class=" p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Fasilitas Umum
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class="  p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Peraturan
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class=" p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Lokasi dan lingkungan sekitar
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              pengen isi map
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class=" p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Ketentuan Pengajuan Sewa
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

          <div class=" p-3">
            <h3 class="font-semibold text-lg text-primary mb-2">
              Review
            </h3>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
            <p class="font-medium text-md text-slate-800 md:text-lg">
              Lorem ipsum dolor sit amet
            </p>
          </div>

        </div>


        <div class="lg:w-1/2 space-y-5">
          <form action="#" method="post" onSubmit="return ValidasiForm()" name="FormReg">
            <div class="bg-slate-50 p-6 mb-9 rounded-xl">
              <h3 class="font-semibold text-2xl text-gray-700 mb-2">
                Rp 500.000<span class="text-gray-400">/month</span>
              </h3>

              <div class="flex bg-white rounded-xl space-x-0 mb-6">
                <div class="w-1/2">
                  <button class="py-15 relative group overflow-hidden pl-6 h-14 flex items-center">
                    <span class="relative font-semibold text-gray-500 ">Start Date</span>
                </div>
                <div class="w-1/2 p-4">
                  <input type="date" class="justify-center hover:bg-gray-100" required>
                </div>
              </div>

              <div class="flex  bg-white rounded-xl space-x-0 mb-6">
                <div class="w-1/2">
                  <button class="py-15 relative group overflow-hidden pl-6 h-14 flex items-center">
                    <span class="relative font-semibold text-gray-500 ">End Date</span>
                </div>
                <div class="w-1/2 p-4">
                  <input type="date" class="justify-center hover:bg-gray-100" required>

                </div>
              </div>

              <div class="flex  bg-white rounded-xl space-x-0 mb-6">
                <div class="w-1/2">
                  <button class="py-15 relative group overflow-hidden pl-6 h-14 flex items-center">
                    <span class="relative font-semibold text-gray-500 ">Pay Option</span>
                </div>
                <div class="w-1/2 p-4">
                  <select name="Select the competition" class="justify-center hover:bg-gray-100" required>
                    <option> Pay Per Month </option>
                    <option> Pay Per Year </option>
                  </select>
                </div>
              </div>

              <div class="flex  bg-white rounded-xl space-x-0 mb-6">
                <div class="w-1/2">
                  <button class="py-15 relative group overflow-hidden pl-6 h-14 flex items-center">
                    <span class="relative font-semibold text-gray-500 ">Promotional Code</span>
                </div>
                <div class="w-1/2 p-4">
                  <input type="text" class="justify-center hover:bg-gray-100" required>
                </div>
              </div>
            </div>



            <div class="bg-slate-50 p-4 pb-24 rounded-xl justify-items-center mb">
              <h3 class="font-semibold text-2xl text-gray-700 mb-2 ml-3">
                Fill the Resident Data
              </h3>
              <!-- using php form to accept or input user data -->
              <form id="form" action="formulir.php" method="get" name="FormReg" class="text-left space-y-5">
                <!--FULL NAME-->
                <div class="pb-5 pl-6 h-14 items-center mb-6">
                  <label id="name" class="text-base text-primary font-bold pb-4">
                    Full Name
                  </label>
                  <input type="text" id="name" name="name" placeholder="type your name" required
                    class="w-full bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                </div>

                <!--GENDER-->
                <div class="py-2  pl-6 h-14 items-center mb-6">
                  <label id="gender" class="text-base text-primary font-bold">
                    Gender
                  </label>
                  <div class="flex p-2">
                    <div class="w-1/2">
                      <label class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="gender" name="gender" required />
                        <div
                          class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold text-gray-500">Male</p>
                              <div>
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                </svg>
                              </div>
                            </div>
                            <div class="flex items-end justify-between"></div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="w-1/2">
                      <label class="cursor-pointer">
                        <input type="radio" class="peer sr-only" id="gender" name="gender" required />
                        <div
                          class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold text-gray-500">Female</p>
                              <div>
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                </svg>
                              </div>
                            </div>
                            <div class="flex items-end justify-between"></div>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                </div>


                <div class="pt-6 pb-8 pl-6 h-14 items-center mb-6">
                  <div class="py-4">
                    <label id="term1" class="text-base text-primary font-bold">
                      Telphone
                    </label>
                    <input type="number" name="term1" value="" placeholder="type your number phone" required
                      class="w-full bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">

                  </div>

                </div>


                <div class="pt-2">
                  <div class="py-6 pl-6 h-14 items-center">
                    <div class="py-4">
                      <label id="job" class="text-base text-primary font-bold ">
                        Job
                      </label>
                      <input type="text" name="job" value="" placeholder="type your job" required
                        class="w-full bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">

                    </div>

                  </div>
                </div>
              </form>






              <div>




              </div>

            </div>

            <div class="bg-slate-50 mt-6 p-6 pb-24 rounded-xl justify-items-center">
              <h3 class="font-semibold text-2xl text-gray-700 mb-2">
                User Data Verification
              </h3>


              <!-- using php form to accept or input user data -->
              <form id="form" action="/" method="get" class="text-left space-y-5">
                <div class="py-2 pl-6 h-14 items-center">
                  <label id="identityCard" class="text-base text-primary font-bold">
                    Choose Identity Card
                  </label>
                  <div class="flex p-2">
                    <div class="w-1/2">
                      <label class="cursor-pointer">
                        <input type="radio" class="peer sr-only" name="card" id="card" required />
                        <div
                          class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold text-gray-500">e-KTP</p>
                              <div>
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                </svg>
                              </div>
                            </div>
                            <div class="flex items-end justify-between"></div>
                          </div>
                        </div>
                      </label>
                    </div>
                    <div class="w-1/2">
                      <label class="cursor-pointer">
                        <input type="radio" class="peer sr-only" name="card" id="card" required />
                        <div
                          class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                          <div class="flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                              <p class="text-sm font-semibold text-gray-500">Passport</p>
                              <div>
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="currentColor"
                                    d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                </svg>
                              </div>
                            </div>
                            <div class="flex items-end justify-between"></div>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>

                </div>


                <div class="pt-6 pb-8 pl-6 h-14 items-center">
                  <div class="py-4">
                    <label id="file" class="text-base text-primary font-bold">
                      Scan the file
                    </label>
                    <input type="file" id="file" name="file" required
                      class="w-full bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">

                  </div>

                </div>





              </form>
              <div>
              </div>
            </div>

            <!--BUTTON SUBMIT-->
            <div class="pl-56 pt-4">
              <button type="submit"
                class="transition rounded-2xl bg-slate-400 hover:bg-gray-700 border p-4 relative group overflow-hidden h-14 flex items-center">
                <span class="relative font-semibold text-white">Continue Booking</span>
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
        </form>
      </div>
    </section>
  </div>
</body>

</html>