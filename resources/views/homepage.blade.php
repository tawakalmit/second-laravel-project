<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<nav class="absolute -top-10 md:relative md:top-0 pt-[52px] w-full h-[53px] items-center">
  <div class="w-11/12 h-fit flex mx-auto items-center justify-between">
    <img src="/Group2.png" alt="logo" class="mt-2 w-60 md:mt-0 md:w-80">
    <div class="hidden md:flex justify-between w-7/12">
      <div class="flex">
        <div class="border-b-2 mr-3">
        <input type="text" class="w-80 input">
        </div>
        <img src="/Group1.svg" alt="search-icon" class="w-5">
      </div>
      <div class="bg-[#DD0A16] rounded-full flex items-center">
        <a href="{{ route('register') }}" class="text-center text-white px-5 py-1">Register/login</a>
      </div>
      <div>
        <p class="font-bold">ID | EN</p>
      </div>
      <img src="/Group3.svg" alt="burger-icon">
    </div>
  </div>
</nav>

<img src="/Group3914.png" alt="jumbotron" class="mt-3 md:-mt-20">

<section class="w-full mt-10 pb-10 md:-mt-72 md:pb-0">
  <div class="w-8/12 flex items-center z-20 mx-auto justify-between">
    <div class="w-7/12 md:pt-72">
      <h1 class="text-[20px] md:text-[3em] font-bold">Choosing Hino Finance</h1>
      <p class="text-sm md:text-[20px]">In every business, there has to be a Hino in between. That’s why we provide you with a comprehensive financing options available for our vehicles. When you need to get moving, we are always there to push you forward.</p>
    </div>
    <img src="/Group3835.svg" alt="figure" class="w-32 md:w-96">
  </div>
</section>

<section class="w-full h-auto z-30 -mt-36">
  <img src="/Subtraction1.png" alt="subtrack" class="hidden md:block">

  <div class="w-full md:w-10/12 flex flex-col md:flex-row md:flex mx-auto justify-around mt-40 items-center md:-mt-[30rem]">
    <div class="w-64 h-[22rem] mb-5 flex flex-col items-center p-5 border-4 rounded-xl border-[#DA1222]">
      <img src="/Group14.svg" alt="speaker" class="w-24 mb-10">
      <h2 class="text-2xl text-[#DA1222] font-bold mb-3">Judul</h2>
      <p class="text-center text-[#DA1222]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error placeat esse nobis provident aut repellat minima </p>
    </div>
  </div>
</section>

<section class="flex flex-col w-8/12 mb-20 mx-auto mt-60 md:flex-row justify-around flex-wrap">
<div class="mb-20 md:mb-40">
    <img src="shutterstock_2140004723.png" alt="alt" class="rounded-t-xl w-72">
    <img src="/Group 3917.png" alt="alt" class="w-72">
    <img src="/Group 3832.svg" alt="alt" class="mx-auto -mt-[17rem] w-24">
    <p class="mt-5 w-64 text-sm text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cumque pariatur voluptatum similique architecto porro, distinctio magni.</p>
    <p class="text-center text-lg font-bold mt-5">Name</p>
    <p class="text-center text-md opacity-50 -mt-1">Job Description</p>
</div>
</section>

<section class="w-full h-[55rem] pattern">
  <div class="w-full flex flex-col md:flex-row justify-between">
    <div class="md:w-5/12 pl-40 mt-10 pb-5 md:pb-0 md:mt-28">
      <h2 class="text-5xl font-bold w-32 mb-5">Latest Deals</h2>
      <div class="flex">
      <a href="" class="text-lg font-bold text-[#DD0A16]">View All Promo</a>
      <img src="/Group 3839.png" alt="alt" class="w-8 ml-2">
      </div>
    </div>
    <div class="md:mt-28">
      <img src="/Mask Group 2.png" alt="alt" class="w-[100rem]">
    </div>
  </div>

  <div class="w-full md:w-[30rem] h-[22rem] md:absolute top-[200rem] left-[8rem] rounded-2xl bg-black bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 shadow-2xl">
    <h2 class="text-white font-bold text-3xl px-16 pt-14 pb-3">Promotion Title One</h2>
    <p class="text-white align-center text-xl px-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="w-48 mt-10 h-10 bg-[#DD0A16] flex items-center justify-center text-white rounded-full mx-auto">
      <p class="font-bold text-2xl ">More Details</p>
    </div>
  </div>
</section>

<section class="mt-14">
  <h1 class="text-center text-4xl font-bold text-[#DD0A16] mb-14">Preferred Products</h1>
  <div class="flex flex-col md:flex-row mx-auto md:w-8/12 justify-around">

    <div class="mb-20 md:mb-0">
      <div class="w-96 mx-auto h-[30rem] rounded-3xl bg-gradient-to-b from-[#E30A17] to-[#A5030E]">
        <h2 class="text-center font-bold text-white text-3xl pt-10">Combo Package</h2>
        <div>
          <p class="text-sm w-44 text-white ml-10 mt-5">All-in-one No-worry Package</p>
          <div class="w-4/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[7rem] text-white ml-10 mt-5">Various Truck Selections</p>
          <div class="w-3/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[10rem] text-white ml-10 mt-5">Full Chassis & Carrosseries</p>
          <div class="w-2/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[8rem] text-white ml-10 mt-5">Insurance & Maintenance Included</p>
          <div class="w-1/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
      </div>
      <img src="/Mask Group 27.png" alt="alt" class="w-[15rem] md:w-[16rem] ml-[10rem] -mt-[23rem] md:-mt-[24.5rem]">
    </div>

    <div>
      <div class="w-96 mx-auto h-[30rem] rounded-3xl bg-gradient-to-b from-[#E30A17] to-[#A5030E]">
        <h2 class="text-center font-bold text-white text-3xl pt-10">Combo Package</h2>
        <div>
          <p class="text-sm w-44 text-white ml-10 mt-5">All-in-one No-worry Package</p>
          <div class="w-4/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[7rem] text-white ml-10 mt-5">Various Truck Selections</p>
          <div class="w-3/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[10rem] text-white ml-10 mt-5">Full Chassis & Carrosseries</p>
          <div class="w-2/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
        <div>
          <p class="text-sm w-[8rem] text-white ml-10 mt-5">Insurance & Maintenance Included</p>
          <div class="w-1/12 ml-10 mt-3 h-0.5 bg-white"></div>
        </div>
      </div>
      <img src="/Mask Group 9.png" alt="alt" class="w-[15rem] md:w-[16rem] ml-[10rem] md:ml-[12rem] -mt-[23rem] md:-mt-[24.5rem]">
    </div>
</div>
</section>

<section class="w-10/12 mx-auto mt-14 pb-10">
  <div>
  <h1 class="font-bold text-3xl py-8">Latest From Hino Finance</h1>
  </div>
  <div class="w-full flex flex-col items-center md:flex-row mx-auto justify-between">

    <div class="w-64 mb-5 h-fit rounded-3xl shadow-2xl">
      <img src="/Rectangle 2932.png" alt="alt">
      <div class="p-5">
      <h2 class="font-bold text-[#DD0A16] text-2xl">News Title</h2>
      <h3 class="text-sm text-[#E30613]">00 Agustus 2022</h3>
      <p class="text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ....</p>
      </div>
    </div>

    <div class="w-64 mb-5 h-fit rounded-3xl shadow-2xl">
      <img src="/Rectangle 2933.png" alt="alt">
      <div class="p-5">
      <h2 class="font-bold text-[#DD0A16] text-2xl">News Title</h2>
      <h3 class="text-sm text-[#E30613]">00 Agustus 2022</h3>
      <p class="text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ....</p>
      </div>
    </div>

    <div class="w-64 mb-5 h-fit rounded-3xl shadow-2xl">
      <img src="/Rectangle 2934.png" alt="alt">
      <div class="p-5">
      <h2 class="font-bold text-[#DD0A16] text-2xl">News Title</h2>
      <h3 class="text-sm text-[#E30613]">00 Agustus 2022</h3>
      <p class="text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ....</p>
      </div>
    </div>

    <div class="w-64 mb-5 h-fit rounded-3xl shadow-2xl">
      <img src="/Rectangle 2935.png" alt="alt">
      <div class="p-5">
      <h2 class="font-bold text-[#DD0A16] text-2xl">News Title</h2>
      <h3 class="text-sm text-[#E30613]">00 Agustus 2022</h3>
      <p class="text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ....</p>
      </div>
    </div>

  </div>
</section>

<footer class="w-full h-fit md:h-[80vh] bg-[#111111] text-white">
  <div class="pt-14 w-10/12 mx-auto flex flex-col md:flex-row justify-between">

    <div class="w-[22rem]">
      <img src="/Group 3822.png" alt="alt" class="w-[22rem]">

      <div class="flex mt-5">
        <img src="/Group 3824.png" alt="alt" class="w-[1.5rem] h-[1.5rem]">
        <p class="ml-3">Indomobile Tower, 17th Floor <br> Jl. MT. Haryono Kav 11 <br> Bidara Cina, Jatinegara, Jakarta Timur 13330</p>
      </div>

      <div class="flex mt-5">
        <img src="/Path 302.png" alt="alt" class="w-[1.5rem] h-[1.5rem]">
        <p class="ml-3">customer_service@hinofinance.co.id</p>
      </div>

      <div class="flex mt-5">
        <img src="/Path 301.png" alt="alt" class="w-[1.5rem] h-[1.5rem]">
        <p class="ml-3">(021) 2128 1600 - Hari Kerja</p>
      </div>

    </div>

    <div>
      <h1 class="font-bold text-xl">About Us</h1>
      <a href="" class="opacity-70 mb-1">Company Information</a>
      <p class="opacity-70 mb-1">Investor Relation</p>
      <p class="opacity-70 mb-1">Good Corporate Governance</p>
      <p class="opacity-70">Sustainability & CSR</p>
      <h1 class="mt-10 font-bold text-xl">Contact Us</h1>
      <h1 class="mt-10 font-bold text-xl mb-1">Truck & Bus Specialist</h1>
      <a class="opacity-70">https://www.hino.co.id</a>
    </div>

    <div class="w-[20rem]">
      <h1 class="font-bold text-2xl text-center mb-3">Download Hino In The Box</h1>
      <div class="flex justify-around">
        <img src="/Mask Group 21.png" alt="alt" class="w-[8rem]">
        <img src="/Mask Group 22.png" alt="alt" class="w-[8rem]">
      </div>

      <h1 class="text-lg mt-10 text-center mb-3">Follow Us</h1>
      <div class="flex justify-around">
        <img src="/Path 297.png" alt="alt" class="">
        <img src="/Group 217.png" alt="alt" class="">
        <img src="/Group 216.png" alt="alt" class="">
        <img src="/Group 218.png" alt="alt" class="">
      </div>
    </div>

  </div>

  <div class="w-10/12 h-0.5 bg-white mx-auto mt-20 opacity-50"></div>
  <p class="w-10/12 mx-auto mt-5 text-lg">Product | Promotions | Article | Services | FAQ | Career | Privacy Policy</p>

  <div class="mt-[3rem] flex flex-col md:flex-row w-10/12 mx-auto text-sm items-center justify-between">
    <div class="flex md:w-6/12 justify-between items-center">
    <p>PT Hino Finance Indonesia Berizin & Diawasi oleh Otoritas Jasa Keuangan</p>
    <img src="/Group 3911.png" alt="alt">
    </div>
    <div class="flex w-full mb-5 md:mb-0 md:w-4/12 justify-between items-center">
      <p>Cookie Policy</p>
      <p>Privacy Statement</p>
      <p>Term of Use</p>
    </div>
  </div>
</footer>

</body>
</html>