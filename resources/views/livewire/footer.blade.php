<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4" id="footer">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                <img src={{asset("centre-logo.png")}} class="h-16 mr-3" alt="La Ministère de
                la Justice" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/" class="mr-4 hover:underline md:mr-6 ">Accuei</a>
                </li>
                <li>
                    <a href="/articles" class="mr-4 hover:underline md:mr-6">Articles</a>
                </li>
                <li>
                    <a href="{{ route("categories") }}" class="mr-4 hover:underline md:mr-6 ">Categories</a>
                </li>
                <li>
                    <a href="/documents" class="hover:underline">Documents</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2023 . Tous les droits sont réservés.</span>

    </div>
</footer>