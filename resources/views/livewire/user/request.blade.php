<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
                    <form wire:submit="store">
                        <div class="">
                            @if(session()->has('yes'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('yes') }}
                                </div>
                            @endif
                            <div>
                                <label for="first_name"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input wire:model="title" type="text" id="first_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="HELP" required>
                            </div>
                            <div>
                                <label for="last_name"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input wire:model="description" type="text" id="last_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="I neeed HELPPP" required>
                            </div>
                            <div>
                                <label for="last_name"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                                <input wire:model="amount" type="text" id="last_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="500000" required>
                            </div>

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="file_input">Upload photo</label>
                            <input wire:model="image"
                                   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                   id="file_input" type="file">

                            <button type="submit"
                                    class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>
