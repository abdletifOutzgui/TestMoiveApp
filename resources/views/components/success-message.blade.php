@if (session()->has('message'))
    <div class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('message') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.style.display='none';">
                <title>Close</title>
                <path d="M14.348 14.849a1 1 0 01-1.415 0L10 11.414 7.066 14.349a1 1 0 01-1.415-1.415l2.933-2.933-2.933-2.933a1 1 0 011.415-1.415L10 8.586l2.933-2.933a1 1 0 011.415 1.415l-2.933 2.933 2.933 2.933a1 1 0 010 1.415z"/>
            </svg>
        </span>
    </div>
@endif
