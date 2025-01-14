<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                            Orders
                        </h2>

                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                        #
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap min-w-64">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                        User
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                        Total price
                                    </span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($this->orders as $item)
                                <tr>
                                    <td class="size-px whitespace-nowrap px-6 py-3">
                                        <button type="button"
                                            class="flex items-center gap-x-2 text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polygon
                                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                            </svg>
                                            <span class="text-sm text-gray-800 dark:text-neutral-200">1</span>
                                        </button>
                                    </td>
                                    <td class="size-px whitespace-nowrap px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span
                                                class="font-semibold text-sm text-gray-800 dark:text-white">{{ $item->user->email }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap px-6 py-3">
                                        <span
                                            class="text-sm text-gray-800 dark:text-white">${{ $item->total_price }}</span>
                                    </td>

                                </tr>
                            @endforeach
                            <p>Sem dados</p>
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
