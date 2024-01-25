<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($donations as $item)
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
                        <!-- Move the foreach loop outside this div -->
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ $item->title }}
                                    </h3>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $item->description }}
                                    </p>
                                </div>
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        Needed amount: {{ $item->amount }}  -  Collected Amount: {{ $this->calculateSum($item->id) ?? 0 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End of foreach loop -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
