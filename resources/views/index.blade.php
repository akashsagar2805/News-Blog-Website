<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Website</title>
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="navbar w-full bg-white">
        <div class="container-lg px-0">
            <div class="flex w-full items-center">
                <a class="nav-brand mr-auto ml-0 " href="{{ url('/') }}"><h1 class="text-2xl">News Blogs</h1></a>

            </div>
            

            <div>
                <ul class="navbar-nav">
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/business') }}">
                            <span>Business</span>
                        </a>
                    </li>
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/entertainment') }}">
                            <span>Entertainment</span>
                        </a>
                    </li>
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/health') }}">
                            <span>Health</span>
                        </a>
                    </li>
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/sports') }}">
                            <span>Sports</span>
                        </a>
                    </li>
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/science') }}">
                            <span>Science</span>
                        </a>
                    </li>
                    <li class="hover:bg-cyan-100">
                        <a class="nav-link" href="{{ url('/technology') }}">
                            <span>Technology</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-6 px-12 ">
        <form method="get">
            <input type="text" name="search" value="{{ request()->search ? request()->search : '' }}"
                class="h-10 w-1/4 mb-4 lg:w-1/2 pl-8 pr-20 rounded-lg z-0 focus:shadow focus:outline-none bg-gray-200"
                placeholder="Search news..." />
            <span><button type="submit"
                    class="h-10 w-20 text-white ml-2 mb-0 rounded-lg bg-cyan-500 hover:bg-cyan-600 ">
                    Search
                </button></span>
        </form>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap m-4">

                @foreach ($response['articles'] as $item)
                    @if (!$item['urlToImage'] == null)
                        <div class="p-4 md:w-1/4">
                            <div
                                class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden hover:bg-gray-100">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="{{ $item['urlToImage'] }}" alt="blog">
                                <div class="p-6">

                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $item['title'] }}
                                    </h1>
                                    {{-- <p class="leading-relaxed mb-3 text-overflow:ellipsis">{{ $item['description'] }}</p> --}}
                                    <div class="flex items-center flex-wrap ">
                                        <a class="text-cyan-600 inline-flex items-center md:mb-2 lg:mb-0"
                                            href="{{ $item['url'] }}" target="_blank">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
</body>

</html>
