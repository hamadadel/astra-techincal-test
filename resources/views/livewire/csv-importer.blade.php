<div class="relative z-10">
    <div class="fixed inset-0"></div>
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                    <div class="pointer-events-auto w-screen max-w-md">
                    <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                        <div class="px-6 px-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium">Import</h2>
                                <div class="mt-1 sm:mt-0 sm:col-span-3">
                                                <select type="text" name="" id="" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                                    <option value="">Don't import</option>
                                                    <option value="">Column</option>
                                                </select>
                                                <span class="mt-2 text-red-500 font-medium text-sm">
                                                    Validation error
                                                </span>
                                            </div>
                                        </div>
{{--                                    End foreach columns to map --}}
                                    </div>
                                  </div>
{{--                                Endif file uploaded--}}
{{--                                End columns selection--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-shrink justify-end px-4 py-4">
                            <button type="submit" class="ml-4 inline-flex justify-center rounded-md border
                            border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm
                            hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500
                            focus:ring-offset-2 disabled:opacity-50" disabled="disabled"> Import

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
