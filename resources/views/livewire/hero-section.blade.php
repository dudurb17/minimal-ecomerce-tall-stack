<section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
        <div class="mx-auto max-w-xl text-center">
            <h1 class=" font-extrabold sm:text-5xl">
                Online Marketplace.
                </br>
                <strong class="font-extrabold text-red-700 text-4xl"> Discover Quality Online Now </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                numquam ea!
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                @if (auth()->check())
                    <a class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                        href="/offer">
                        Redeem your offer Now!
                    </a>
                @else
                    <a class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                        href="/auth/login">
                        Get Started
                    </a>
                @endif


                <a class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                    href="#">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
