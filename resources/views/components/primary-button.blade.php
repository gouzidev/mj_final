<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-white dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 active:bg-gray-900 dark:active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
