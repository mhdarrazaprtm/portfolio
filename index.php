<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="assets/icons/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-tailwind.png">
    <title>Personal Portfolio | Mhd. Arraza Pratama</title>
    <style>
        [x-cloak] { 
            display: none 
        }
        body {
            /* background: radial-gradient( farthest-side, transparent calc(100% - 3px), red calc(100% - 2px) calc(100% - 1px), transparent 100%) fixedFixed to the screen no-repeat; */
            /* Don't repeat*/
            background-size: 0px 0px;
            /* by default, circle is of 0px */
        }
        body:hover {
            /* background-size: 30px 30px; */
            /* Control the size of the circle */
        }
    </style>
</head>
<body class="bg-white dark:bg-gray_10 text-gray_1 dark:text-gray_3 font-jost text-lg leading-base font-normal break-words duration-300" x-data="{width: true, menu: false}" @scroll.window="width = (window.pageYOffset > 100) ? false : true;">
    <div class="circle"></div>
    <!-- Wrapper -->
    <div class="w-full float-left clear-both min-h-screen relative overflow-hidden box-border">
        <!-- modalbox -->
        <div class="bg-white bg-opacity-95 fixed top-0 left-0 right-0 h-screen z-20 opacity-0 hidden transition-all duration-300"> </div>
        <div class="flex flex-col-reverse">
            <!-- Main Left Part -->
            <div x-cloak class="lg:min-h-screen relative overflow-x-hidden float-none clear-none transition-all duration-500" :class="width ? 'w-full lg:w-56%' : 'w-full lg:w-68%'">
                <!-- Page -->
                <div class="w-full float-left clear-both">
                    <!-- Home Section -->
                    <section id="home" class="pt-12.3 lg:py-50 flex lg:min-h-screen items-center w-full">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <div class="w-full">
                                <!-- Main Title -->
                                <div>
                                    <h3 class="uppercase font-medium text-gold mb-12.5 leading-tight tracking-1">Introduction</h3>
                                    <h3 class="title text-4xl md:text-5xl pb-3.7 mb-8.3 relative text-black dark:text-gray_6 leading-tight">Website Designer</h3>
                                    <p class="text-xl md:text-3xl leading-normal md:leading-44 md:mb-14.2">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, and online stores.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About Section -->
                    <section id="about" class="pt-37.5 lg:pt-0 pb-12.3 w-full block">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <div class="w-full">
                                <!-- Main Title -->
                                <div class="mb-19">
                                    <h3 class="uppercase font-medium text-gold mb-12.5 leading-tight tracking-1">About Me</h3>
                                    <h3 class="title text-4xl md:text-5xl pb-3.7 mb-8.3 relative text-black dark:text-gray_6 leading-tight">Biography</h3>
                                    <p class="text-xl md:text-3xl leading-normal md:leading-44">I'm a Front-end Developer from Pekanbaru. I code and create web elements for amazing people around the world. I like work with new people. New people are new experiences.</p>
                                </div>
                                <!-- About Information -->
                                <div class="flex flex-col justify-between mb-31">
                                    <div class="mb-12.5 w-full">
                                        <table class="table-fixed w-full max-w-full text-left border-collapse">
                                            <tbody>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Name</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5">Mhd. Arraza Pratama</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Birthday</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5">10th March 2004</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Age</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5">18</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Address</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5">58 Kampus I St, Bandung, Indonesia</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Phone</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5"><a href="http://wa.me/+6283173885776" class="relative border-b border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 duration-300">(+62) 831 7388 5776</a></th>
                                                </tr>
                                                <tr>
                                                    <th class="text-gray_4 dark:text-gray_3 tracking-1 font-medium uppercase py-2.3 pr-2.5">Email</th>
                                                    <th class="text-black dark:text-gray_6 font-normal tracking-1 py-2.3 pr-2.5"><a href="mailto:mhdarrazapratama@gmail.com" class="relative border-b border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 duration-300">mhdarrazapratama@gmail.com</a></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="w-full">
                                        <!-- Download CV Button -->
                                        <div class="flex relative w-full group">
                                            <a href="this-is-za.epizy.com/assets/images/cv.png" download class="border-2 border-black dark:border-white border-opacity-20 dark:border-opacity-20 group-hover:border-opacity-100 group-hover:border-gold w-full flex flex-col items-center justify-center max-w-full h-54 text-gray_3 font-medium uppercase tracking-1 transition-all duration-300">
                                                <span class="relative pt-4.5">
                                                    <svg class="fill-gray_4 dark:fill-gray_6 w-14.5 h-14.5 block mb-3.5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 449.306 449.306" style="enable-background:new 0 0 449.306 449.306;" xml:space="preserve" class="fn__svg replaced-svg">
                                                        <path d="M447.739,251.298l-59.037-126.433c-1.731-3.54-5.484-5.625-9.404-5.224h-50.155c-5.771,0-10.449,4.678-10.449,10.449     c0,5.771,4.678,10.449,10.449,10.449h43.363l48.588,104.49h-59.559c-27.004-0.133-51.563,15.625-62.694,40.229     c-8.062,16.923-25.141,27.698-43.886,27.69h-60.604c-18.745,0.008-35.823-10.767-43.886-27.69     c-11.131-24.604-35.69-40.362-62.694-40.229H29.257l57.469-104.49h33.437c5.771,0,10.449-4.678,10.449-10.449     c0-5.771-4.678-10.449-10.449-10.449H80.457c-3.776-0.358-7.425,1.467-9.404,4.702L2.09,250.776     c-1.209,1.072-1.958,2.569-2.09,4.18v130.09c0.832,29.282,24.524,52.744,53.812,53.29h341.682     c29.289-0.546,52.98-24.008,53.812-53.29v-130.09C449.107,253.622,448.567,252.362,447.739,251.298z M428.408,385.045     c-0.812,17.743-15.16,31.864-32.914,32.392H53.812c-17.754-0.528-32.102-14.648-32.914-32.392V265.927h66.873     c18.745-0.008,35.823,10.767,43.886,27.69c11.131,24.604,35.69,40.362,62.694,40.229h60.604     c27.004,0.133,51.563-15.625,62.694-40.229c8.062-16.923,25.141-27.698,43.886-27.69h66.873V385.045z"></path>
                                                    </svg>
                                                    <svg class="fill-gray_4 dark:fill-gray_6 absolute left-1/2 w-14.5 h-14.5 block mb-3.5 group-hover:animate-bounce" style="margin-left: -29px;top: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 449.306 449.306" style="enable-background:new 0 0 449.306 449.306;" xml:space="preserve" class="fn__svg arrow replaced-svg">
                                                        <path d="M217.339,252.865c3.706,4.04,9.986,4.31,14.025,0.603c0.21-0.192,0.411-0.394,0.603-0.603l71.053-71.576   c3.462-4.617,2.527-11.166-2.09-14.629c-3.715-2.786-8.824-2.786-12.539,0l-53.29,53.29V21.42   c0-5.771-4.678-10.449-10.449-10.449s-10.449,4.678-10.449,10.449v198.531l-53.29-53.29c-4.617-3.462-11.166-2.527-14.629,2.09   c-2.786,3.715-2.786,8.824,0,12.539L217.339,252.865z"></path>
                                                    </svg>
                                                </span>
                                                <span>Download CV</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabs Shortcode -->
                                <div x-data="{ tabs: 2 }" class="w-full overflow-hidden">
                                    <!-- Tab Header -->
                                    <div class="mb-9.5">
                                        <ul class="flex flex-row flex-wrap">
                                            <li class="tabs-border mb-2.5 relative">
                                                <a @click="tabs = 2" class="cursor-pointer hover:text-gold hover:underline dark:hover:text-gold dark:hover:underline duration-300 inline-block font-normal text-3xl leading-30 pt-1" :class="tabs == 2 ? 'text-gold border-gold underline' : 'text-gray_4 dark:text-gray_3'">Education</a>
                                            </li>
                                            <li class="tabs-border mb-2.5 relative">
                                                <a @click="tabs = 1" class="cursor-pointer hover:text-gold hover:underline dark:hover:text-gold dark:hover:underline duration-300 inline-block font-normal text-3xl leading-30 pt-1" :class="tabs == 1 ? 'text-gold border-gold underline' : 'text-gray_4 dark:text-gray_3'">Experience</a>
                                            </li>
                                            <li class="mb-2.5 relative">
                                                <a @click="tabs = 3" class="cursor-pointer hover:text-gold hover:underline dark:hover:text-gold dark:hover:underline duration-300 inline-block font-normal text-3xl leading-30 pt-1" :class="tabs == 3 ? 'text-gold border-gold underline' : 'text-gray_4 dark:text-gray_3'">Skills</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab Content -->
                                    <div>
                                        <!-- Tab 2 -->
                                        <div x-cloak x-show="tabs == 2" class="block">
                                            <!-- Boxed List -->
                                            <div class="w-full">
                                                <ul>
                                                    
                                                    <li class="w-full mb-5">
                                                        <div class="box-item bg-gray_5 dark:bg-gray_11 border border-gray_6 dark:border-gray_12 w-full relative pt-10.2 px-10 pb-10.5">
                                                            <div class="flex flex-col md:flex-row mb-3.5">
                                                                <span class="block text-base leading-30 text-gray_3">( 2017 — 2019 )</span>
                                                            </div>
                                                            <h3 class="text-black dark:text-gray_6 font-normal leading-tight text-2xl md:text-3xl">SMP Negeri 22 Pekanbaru</h3>
                                                        </div>
                                                    </li>
                                                    <li class="w-full mb-5">
                                                        <div class="box-item bg-gray_5 dark:bg-gray_11 border border-gray_6 dark:border-gray_12 w-full relative pt-10.2 px-10 pb-10.5">
                                                            <div class="flex flex-col md:flex-row mb-3.5">
                                                                <h5 class="text-lg uppercase font-normal leading-30 text-black dark:text-gray_6">Rekayasa Perangkat Lunak</h5>
                                                                <span class="block text-base leading-30 md:ml-5 text-gray_3">( 2019 — 2022 )</span>
                                                            </div>
                                                            <h3 class="text-black dark:text-gray_6 font-normal leading-tight text-2xl md:text-3xl">SMK Negeri 2 Pekanbaru</h3>
                                                        </div>
                                                    </li>
                                                    <li class="w-full">
                                                        <div class="box-item bg-gray_5 dark:bg-gray_11 border border-gray_6 dark:border-gray_12 w-full relative pt-10.2 px-10 pb-10.5">
                                                            <div class="flex flex-col md:flex-row mb-3.5">
                                                                <h5 class="text-lg uppercase font-normal leading-30 text-black dark:text-gray_6">Teknik Informatika</h5>
                                                                <span class="block text-base leading-30 md:ml-5 text-gray_3">( 2022 — Today )</span>
                                                            </div>
                                                            <h3 class="text-black dark:text-gray_6 font-normal leading-tight text-2xl md:text-3xl">STMIK Dharma Negara Bandung</h3>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Tab 1 -->
                                        <div x-show="tabs == 1" class="block">
                                            <!-- Boxed List -->
                                            <div class="w-full">
                                                <ul>
                                                    <li class="w-full mb-5.2">
                                                        <div class="box-item bg-gray_5 dark:bg-gray_11 border border-gray_6 dark:border-gray_12 w-full relative pt-10.2 px-10 pb-10.5">
                                                            <div class="flex flex-col md:flex-row mb-3.5">
                                                                <h5 class="text-lg uppercase font-normal leading-30 text-black dark:text-gray_6">Webby Digital</h5>
                                                                <span class="block text-base leading-30 md:ml-5 text-gray_3">( April 2021 — September 2021 )</span>
                                                            </div>
                                                            <h3 class="text-black dark:text-gray_6 font-normal leading-tight text-2xl md:text-3xl">Web Designer</h3>
                                                        </div>
                                                    </li>
                                                    <li class="w-full">
                                                        <div class="box-item bg-gray_5 dark:bg-gray_11 border border-gray_6 dark:border-gray_12 w-full relative pt-10.2 px-10 pb-10.5">
                                                            <div class="flex flex-col md:flex-row mb-3.5">
                                                                <span class="block text-base leading-30 text-gray_3">( 2021 — Today )</span>
                                                            </div>
                                                            <h3 class="text-black dark:text-gray_6 font-normal leading-tight text-2xl md:text-3xl">Freelancer</h3>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Tab 3 -->
                                        <div x-cloak x-show="tabs == 3" class="block">
                                            <!-- Progress Bar -->
                                            <div class="mb-9 w-full">
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">CorelDRAW</h3>
                                                        <span class="percent right-8% bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2">95%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 95%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">Adobe Photoshop</h3>
                                                        <span class="percent right-8% bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2">92%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 92%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">Canva</h3>
                                                        <span class="percent right-8% bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2">92%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 92%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">Adobe Flash</h3>
                                                        <span class="percent right-8% bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2">72%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 72%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">HTML & PHP</h3>
                                                        <span class="percent bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2" style="right: 5%;">95%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 95%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-4.3">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">Javascript</h3>
                                                        <span class="percent bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2" style="right: 7%;">87%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 87%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="w-full relative overflow-hidden">
                                                        <h3 class="text-gray_4 dark:text-gray_3 text-lg font-normal relative z-10 leading-40 mb-px">TailwindCSS</h3>
                                                        <span class="percent bg-gray_7 dark:bg-white dark:bg-opacity-5 absolute z-10 px-2 leading-24 text-sm font-normal block bottom-2.5 text-gold transform translate-x-1/2" style="right: 5%;">95%</span>
                                                        <div class="bg-gray_8 dark:bg-gray_4 relative z-10 h-px">
                                                            <div class="progress absolute z-10 top-0 left-0 bottom-0" style="width: 95%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Description -->
                                            <div class="w-full">
                                                <p class="max-w-500">A freelance creative designer with a love for minimal design, clean typography and well-written code, located in Bandung.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Portfolio Section -->
                    <section id="portfolio" class="pt-25 lg:pt-37.5 pb-9.5 w-full overflow-hidden block">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <div class="w-full">
                                <!-- Main Title -->
                                <div class="mb-17 pr-25 relative">
                                    <div class="absolute right-0 flex bottom-7.5 z-10">
                                        <a class="swiper-prev nav-slider  w-6.5 h-5.1 block relative">
                                            <span class="nav-slider-item block bg-gray_3 hover:bg-gold w-6.5 h-px absolute top-1/2"></span>
                                        </a>
                                        <a class="swiper-next nav-slider  ml-7.5 w-6.5 h-5.1 block relative">
                                            <span class="nav-slider-item nav-slider-item2 block bg-gray_3 hover:bg-gold w-6.5 h-px absolute top-1/2"></span>
                                        </a>
                                    </div>
                                    <h3 class="uppercase font-medium text-gold mb-12.5 leading-tight tracking-1">Portfolio</h3>
                                    <h3 class="title text-4xl md:text-5xl pb-3.7 mb-8.3 relative text-black dark:text-gray_6 leading-tight">Featured Projects</h3>
                                    <p class="text-xl md:text-3xl leading-normal md:leading-44">All project just made as template.</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-2.5 md:px-5 lg:px-8%   mx-auto w-full mb-12.5 ">
                            <div class="relative overflow-hidden mySwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/webby.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">web, mobile, online</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/webby/" class="hover:text-gold duration-300">Webby Digital</a></h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/autogram.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">web, mobile, online</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/autogram/" class="hover:text-gold duration-300">AutoGram.pro</a></h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/paramita.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">web, mobile, online</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/paramita/" class="hover:text-gold duration-300">Paramita Foundation</a></h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/topup.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">web, mobile, online</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/codashop/" class="hover:text-gold duration-300">TOPUPID</a></h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/kalles.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">web, mobile, online</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/kalles/" class="hover:text-gold duration-300">Kalles Shopify</a></h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/cmsi.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">web, mobile, online</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/cmsi/" class="hover:text-gold duration-300">CMSI ID</a></h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/cimb.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">web, mobile, online</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/cimb_niaga/" class="hover:text-gold duration-300">CIMB Niaga</a></h3>
                                        </div>
                                    </div>
                                   </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/mekari.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">web, mobile, online</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://design.webby.digital/raza/kanal/" class="hover:text-gold duration-300">Mekari</a></h3>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/ifg.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">web, mobile, online</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl"><a href="https://www.ifglabuanbajomarathon.com/id/" class="hover:text-gold duration-300">IFG Labuan Bajo Marathon</a></h3>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                              </div>
                        </div>
                    </section>
                    <!-- Achievement Section -->
                    <section id="achievement" class="pt-25 lg:pt-37.5 pb-9.5 w-full overflow-hidden block">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <div class="w-full">
                                <!-- Main Title -->
                                <div class="mb-17 pr-25 relative">
                                    <div class="absolute right-0 flex bottom-7.5 z-10">
                                        <a class="swiper-prev nav-slider  w-6.5 h-5.1 block relative">
                                            <span class="nav-slider-item block bg-gray_3 hover:bg-gold w-6.5 h-px absolute top-1/2"></span>
                                        </a>
                                        <a class="swiper-next nav-slider  ml-7.5 w-6.5 h-5.1 block relative">
                                            <span class="nav-slider-item nav-slider-item2 block bg-gray_3 hover:bg-gold w-6.5 h-px absolute top-1/2"></span>
                                        </a>
                                    </div>
                                    <h3 class="uppercase font-medium text-gold mb-12.5 leading-tight tracking-1">achievement</h3>
                                    <h3 class="title text-4xl md:text-5xl pb-3.7 mb-8.3 relative text-black dark:text-gray_6 leading-tight">Featured Certificates</h3>
                                </div>
                            </div>
                        </div>
                        <div class="px-2.5 md:px-5 lg:px-8%   mx-auto w-full mb-12.5 ">
                            <div class="relative overflow-hidden mySwiper2">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide w-auto">
                                      <div class="cursor-pointer">
                                          <div class="w-full relative overflow-hidden">
                                              <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                              <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/poster_certificate.png);"></div>
                                          </div>
                                          <div class="pt-6.5">
                                              <p class="mb-2">HIMATEL Politeknik Caltex Riau</p>
                                              <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">Poster Design</h3>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/speech_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Language Center Lancang Kuning University</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">Online English Speech Competition</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/google_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Google Digital Garage</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">Digital Marketing</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/js_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Progate</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">Javascript Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/sass_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Progate</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">SASS Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/html_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">HTML Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/css_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">CSS Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/php_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">PHP Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/sql_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">SQL Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/cpp_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">C++ Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="swiper-slide w-auto">
                                    <div class="cursor-pointer">
                                        <div class="w-full relative overflow-hidden">
                                            <img class="-mb-24% opacity-0 max-h-370 block w-full max-w-full" src="assets/images/square.jpg" loading="lazy">
                                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/jaa_certificate.png);"></div>
                                        </div>
                                        <div class="pt-6.5">
                                            <p class="mb-2">Sololearn</p>
                                            <h3 class="text-black dark:text-gray_6 leading-tight text-3xl">Java Course</h3>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </section>
                    <!-- Contact Section -->
                    <!-- <section id="contact" class="pt-25 lg:pt-37.5 pb-37.5 lg:pb-50 w-full block">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <div class="w-full"> -->
                                <!-- Main Title -->
                                <!-- <div class="mb-14.5">
                                    <h3 class="uppercase font-medium text-gold mb-12.5 leading-tight tracking-1">Contact</h3>
                                    <h3 class="title text-4xl md:text-5xl pb-3.7 mb-8.3 relative text-black dark:text-gray_6 leading-tight">Get In Touch</h3>
                                    <p class="text-xl md:text-3xl leading-normal md:leading-44">If you have any suggestion, project or even you want to say “hello”, please fill out the form below and I will reply you shortly.</p>
                                </div> -->
                                <!-- Contact Form -->
                                <!-- <form x-data="{ send: false }" action="" method="">
                                    <div x-cloak x-show="send" class="text-green_1 font-medium mb-6.3">
                                        <span>Your message has been received, I will contact you soon.</span>
                                    </div>
                                    <div class="-ml-5 flex flex-wrap">
                                        <div class="w-full md:w-1/2 pl-5 mb-5">
                                            <div class="outline-text w-full relative border border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 text-gray_4 dark:text-gray_2 focus-within:border-gold focus-within:hover:border-gold dark:focus-within:border-gold duration-300">
                                                <input type="text" name="" placeholder="" required class="block px-5 text-base w-full appearance-none focus:outline-none bg-transparent leading-70 h-17 tracking-0.5" />
                                                <label for="" class="absolute top-0 left-0 text-1xl pl-7.5 bg-white dark:bg-gray_10 leading-70 -z-1 duration-300 origin-0 text-gray_3">Name  *</label>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2 pl-5 mb-5">
                                            <div class="outline-text w-full relative border border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 text-gray_4 dark:text-gray_2 focus-within:border-gold focus-within:hover:border-gold dark:focus-within:border-gold duration-300">
                                                <input type="email" name="" placeholder="" required class="block px-5 text-base w-full appearance-none focus:outline-none bg-transparent leading-70 h-17 tracking-0.5" />
                                                <label for="" class="absolute top-0 left-0 text-1xl pl-7.5 bg-white dark:bg-gray_10 leading-70 -z-1 duration-300 origin-0 text-gray_3 ">Email  *</label>
                                            </div>
                                        </div>
                                        <div class="w-full pl-5 mb-5">
                                            <div class="outline-text w-full relative border border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 text-gray_4 dark:text-gray_2 focus-within:border-gold focus-within:hover:border-gold dark:focus-within:border-gold duration-300">
                                                <input type="text" name="" placeholder="" required class="block px-5 text-base w-full appearance-none focus:outline-none bg-transparent leading-70 h-17 tracking-0.5" />
                                                <label for="" class="absolute top-0 left-0 text-1xl pl-7.5 bg-white dark:bg-gray_10 leading-70 -z-1 duration-300 origin-0 text-gray_3">Phone  *</label>
                                            </div>
                                        </div>
                                        <div class="w-full pl-5 mb-5">
                                            <div class="outline-text w-full relative border border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 text-gray_4 dark:text-gray_2 focus-within:border-gold focus-within:hover:border-gold dark:focus-within:border-gold duration-300">
                                                <input type="text" name="" placeholder="" required class="block px-5 text-base w-full appearance-none focus:outline-none bg-transparent leading-70 h-17 tracking-0.5" />
                                                <label for="" class="absolute top-0 left-0 text-1xl pl-7.5 bg-white dark:bg-gray_10 leading-70 -z-1 duration-300 origin-0 text-gray_3">Message *</label>
                                            </div>
                                        </div>
                                        <div class="w-full pl-5">
                                            <a @click="send = true" class="block w-full leading-26 py-5 px-5 text-lg uppercase text-center font-semibold hover:text-gold dark:hover:text-gold border-2 border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-100 dark:hover:border-opacity-100 hover:border-gold dark:hover:border-gold text-gray_4 dark:text-gray_6 duration-300">Send Message</a>
                                        </div>
                                    </div>
                                </form> -->
                                <!-- Contact Info -->
                                <!-- <div class="pt-23">
                                    <p class="text-sm uppercase mb-2.5">Address</p>
                                    <h3 class="text-black dark:text-gray_6 mb-14.5 md:max-w-300 leading-tight text-2xl md:text-3xl">58 Banjarmasi St, Pekanbaru, Indonesia</h3>
                                    <p class="text-sm uppercase mb-2.5">Phone</p>
                                    <h3 class="text-black dark:text-gray_6 mb-14.5 md:max-w-300 leading-tight text-2xl md:text-3xl"><a href="http://wa.me/+6283173885776" class="hover:text-gold duration-300">(+62) 831-7388-5776</a></h3>
                                    <p><a href="mailto:mhdarrazapratama@gmail.com" class="text-gray_4 dark:text-gray_6 border-b border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 duration-300 text-lg">mhdarrazapratama@gmail.com</a></p>
                                </div>
                            </div> 
                        </div>
                    </section>-->
                </div>
                <!-- footer -->
                <footer class="w-full float-left clear-both relative z-10 block">
                    <div class="footer-top w-full relative h-px">
                        <a href="#" class="to-top absolute w-5.1 h-6.5 block right-37.7 top-1/2 -mt-3.3">
                            <span class="block bg-gray_3 hover:bg-gold w-px h-6.5 absolute top-0 left-1/2 duration-300"></span>
                        </a>
                    </div>
                    <div class="pt-15.5 pb-15.3">
                        <div class="px-2.5 md:px-5 lg:px-8% mx-auto w-full">
                            <p class="leading-30">Copyright © 2021. All rights reserved.
                                <!-- <br>Designed & Developed by <a href="" class="relative text-gray_4 dark:text-gray_6 border-b border-black dark:border-white border-opacity-20 dark:border-opacity-20 hover:border-opacity-50 dark:hover:border-opacity-50 duration-300">Mhd. Arraza Pratama</a> -->
                            </p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- Main Right Part -->
            <div class="border-l border-black dark:border-white border-opacity-20 dark:border-opacity-20 lg:min-h-screen relative lg:fixed lg:right-0 lg:top-0 lg:bottom-0 transition-all duration-500" :class="width ? 'w-full lg:w-44%' : 'w-full lg:w-32%'">
                <!-- Menu Trigger -->
                <a @click="menu = true" class="cursor-pointer bg-gray_5 dark:bg-gray_11 lg:bg-transparent dark:lg:bg-transparent border border-gray_6 dark:border-gray_12 lg:border-transparent dark:lg:border-transparent text-gray_4 dark:text-gray_6 flex flex-row items-center p-1.3 lg:p-0 fixed lg:absolute z-20 right-2.5 lg:right-12.3 top-2.5 lg:top-10">
                    <span>Menu</span>
                    <span class="flex flex-col items-center justify-center relative ml-3.7">
                        <span class="bg-gray_4 dark:bg-gray_6 w-6 h-0.5 block"></span>
                        <span class="mt-1 bg-gray_4 dark:bg-gray_6 w-6 h-0.5 block"></span>
                        <span class="mt-1 bg-gray_4 dark:bg-gray_6 w-6 h-0.5 block"></span>
                    </span>
                </a>
                <a id="switchTheme" class="cursor-pointer bg-gray_5 dark:bg-gray_11 lg:bg-transparent dark:lg:bg-transparent border border-gray_6 dark:border-gray_12 lg:border-transparent dark:lg:border-transparent text-gray_4 dark:text-gray_6 flex flex-row items-center p-1.3 lg:p-0 fixed lg:absolute z-20 left-2.5 lg:left-12.3 top-2.5 lg:top-10">
                    <i id="toggleIcon" class="fas fa-moon text-xl"></i>
                </a>
                <!-- Panel Content -->
                <div class="relative w-full lg:h-80.5 py-25 px-5 md:px-20% lg:px-16%">
                    <div class="py-9.3 px-10.1 relative w-full mb-7.5 z-10">
                        <div class="border border-black dark:border-white border-opacity-20 dark:border-opacity-20 absolute z-10 left-0 bottom-5 right-0 top-5"></div>
                        <div class="border border-black dark:border-white border-opacity-20 dark:border-opacity-20 absolute z-10 left-5 bottom-0 right-5 top-0"></div>
                        <div class="relative">
                            <img src="assets/images/square.jpg" class="min-w-full opacity-0 align-middle max-w-full" alt="" loading="lazy">
                            <div class="absolute left-0 top-0 right-0 bottom-0 bg-cover bg-center bg-no-repeat" style="background-image: url(assets/images/me.png);"></div>
                        </div>
                        <div class="text-center pt-6.7 pb-5 relative">
                            <h5 class="text-gray_4 dark:text-gray_13 font-medium uppercase mb-2 leading-tight">Hi There! I am</h5>
                            <h3 class="px-2.5 text-3xl min-h-36 relative text-black dark:text-gray_6 leading-tight">
                                <span class="animated-title font-medium">Mhd. Arraza Pratama</span>
                                <span></span>
                            </h3>
                        </div>
                    </div>
                    <div class="w-full text-center flex flex-row justify-center relative z-10">
                        <a href="http://wa.me/+6283173885776" class="hire-me text-gray_4 dark:text-gray_13 pl-5 whitespace-nowrap block text-lg relative leading-25 max-w-100">
                            <span class="absolute w-2.5 h-2.5 rounded-full left-0 top-1/2 -mt-1.3 block bg-green_1"></span>
                            <span class="truncate block">I’m available for a freelance job. Hire me</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Hidden Navigation -->
        <a x-cloak class="bg-gray_8 dark:bg-gray_10 fixed z-30 block top-0 left-0 w-full bottom-0 opacity-90 transform transition-all duration-200" :class="menu ? 'translate-x-0' : '-translate-x-102%'"></a>
        <div x-cloak class="bg-white dark:bg-gray_11 fixed w-full lg:w-32% z-40 min-h-full top-0 bottom-0  right-0 transform transition-all duration-300" :class="menu ? 'translate-x-0' : 'translate-x-102%'">
            <a @click="menu = false" class="close cursor-pointer block w-10 h-10 text-gray_3 absolute right-10 top-10 overflow-hidden z-50 border border-transparent hover:border-gold duration-300"></a>
            <!-- Navigation Content -->
            <div class="relative w-full h-full py-25 px-5 md:px-16% flex flex-col justify-between z-40">
                <nav class="block overflow-hidden h-130 lg:h-auto">
                    <h3 class="uppercase font-extrabold mb-6.5 tracking-0.5 leading-tight">Menu</h3>
                    <ul>
                        <li class="mb-2.5 transform transition-all duration-500" :class="menu ? 'delay-700 opacity-100 translate-x-0' : 'delay-0 opacity-0 translate-x-12.3'">
                            <a href="#home" class="text-gray_4 dark:text-gray_6 text-xl md:text-3xl font-normal leading-snug block hover:text-gold dark:hover:text-gold duration-300">Home</a>
                        </li>
                        <li class="mb-2.5 transform transition-all duration-500" :class="menu ? 'delay-900 opacity-100 translate-x-0' : 'delay-0 opacity-0 translate-x-12.3'">
                            <a href="#about" class="text-gray_4 dark:text-gray_6 text-xl md:text-3xl font-normal leading-snug block hover:text-gold dark:hover:text-gold duration-300">About</a>
                        </li>
                        <li class="mb-2.5 transform transition-all duration-500" :class="menu ? 'delay-1100 opacity-100 translate-x-0' : 'delay-0 opacity-0 translate-x-12.3'">
                            <a href="#portfolio" class="text-gray_4 dark:text-gray_6 text-xl md:text-3xl font-normal leading-snug block hover:text-gold dark:hover:text-gold duration-300">Portfolio</a>
                        </li>
                        <!-- <li class="mb-2.5 transform transition-all duration-500" :class="menu ? 'delay-1300 opacity-100 translate-x-0' : 'delay-0 opacity-0 translate-x-12.3'">
                            <a href="#contact" class="text-gray_4 dark:text-gray_6 text-xl md:text-3xl font-normal leading-snug block hover:text-gold dark:hover:text-gold duration-300">Contact</a>
                        </li> -->
                    </ul>
                </nav>
                <div class="pt-12.3 transform transition-all duration-500" :class="menu ? 'delay-1500 opacity-100 translate-y-0' : 'delay-0 opacity-0 translate-y-12.3'">
                    <div class="mb-6.3">
                        <ul class="flex flex-row items-center flex-wrap">
                            <li class="mr-2.5 mb-2.5">
                                <a href="https://github.com/mhdarrazaprtm" class="bg-gray_7 dark:bg-white dark:bg-opacity-5 dark:hover:bg-opacity-10 hover:bg-gray_9 text-gray_4 flex items-center justify-center w-10 h-10 transition-all duration-300">
                                    <i class="fab fa-github text-black dark:text-gray_3 text-lg"></i>
                                </a>
                            </li>
                            <li class="mr-2.5 mb-2.5">
                                <a href="http://wa.me/+6283173885776" class="bg-gray_7 dark:bg-white dark:bg-opacity-5 dark:hover:bg-opacity-10 hover:bg-gray_9 text-gray_4 flex items-center justify-center w-10 h-10 transition-all duration-300">
                                    <i class="fab fa-whatsapp text-black dark:text-gray_3 text-lg"></i>
                                </a>
                            </li>
                            <li class="mr-2.5 mb-2.5">
                                <a href="https://web.facebook.com/mhdarraza.pratama.7" class="bg-gray_7 dark:bg-white dark:bg-opacity-5 dark:hover:bg-opacity-10 hover:bg-gray_9 text-gray_4 flex items-center justify-center w-10 h-10 transition-all duration-300">
                                    <i class="fab fa-facebook-f text-black dark:text-gray_3 text-lg"></i>
                                </a>
                            </li>
                            <li class="mr-2.5 mb-2.5">
                                <a href="https://www.instagram.com/marzprtm/" class="bg-gray_7 dark:bg-white dark:bg-opacity-5 dark:hover:bg-opacity-10 hover:bg-gray_9 text-gray_4 flex items-center justify-center w-10 h-10 transition-all duration-300">
                                    <i class="fab fa-instagram text-black dark:text-gray_3 text-lg"></i>
                                </a>
                            </li>
                            <li class="mr-2.5 mb-2.5">
                                <a href="https://www.youtube.com/channel/UCT9mexJ2qWATIo6QDGuRaQ/featured" class="bg-gray_7 dark:bg-white dark:bg-opacity-5 dark:hover:bg-opacity-10 hover:bg-gray_9 text-gray_4 flex items-center justify-center w-10 h-10 transition-all duration-300">
                                    <i class="fab fa-youtube text-black dark:text-gray_3 text-lg"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full flex">
                        <a href="" class="copy-nav text-gray_4 dark:text-gray_6 truncate inline-block relative text-lg leading-25 transition-all duration-300">Developed by Mhd. Arraza Pratama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/alpine.min.js"></script>
    <script src="js/swiper.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            spaceBetween: 20,
            slidesPerView: 1,
            slidesPerGroup: 1,
            navigation: {
                nextEl: ".swiper-next",
                prevEl: ".swiper-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
            }
        });

        var swiper = new Swiper(".mySwiper2", {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            spaceBetween: 20,
            slidesPerView: 1,
            slidesPerGroup: 1,
            navigation: {
                nextEl: ".swiper-next",
                prevEl: ".swiper-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
            }
        });
    </script>
    <script>
        document.getElementById('switchTheme').addEventListener('click', function () {
          let htmlClasses = document.querySelector('html').classList;
          let toggleClasses = document.getElementById('toggleIcon').classList;
          if (localStorage.theme == 'dark') {
            htmlClasses.remove('dark');
            toggleClasses.remove('fa-sun');
            localStorage.removeItem('theme')
          } else {
            htmlClasses.add('dark');
            toggleClasses.add('fa-sun');
            localStorage.theme = 'dark';
          }
        });
      </script>
      <script>
            var h = document.querySelector("body");

            h.onmousemove = function(e) {
            /* 15 = background-size/2 */
            h.style.setProperty(
                "background-position",
                e.clientX - 15 + "px " + (e.clientY - 15) + "px"
            );
            };
      </script>
</body>
</html>