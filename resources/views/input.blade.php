@extends('layout.main')
@section('table')
    <form action="/store" method="POST">
        @csrf
        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full max-w-[550px]">
                <form action="https://formbold.com/s/FORM_ID" method="POST">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nama
                                </label>
                                <input type="text" required name="nama" id="fName" placeholder="Full Name"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Kopi
                                </label>
                                <input type="text" required name="kopi" id="lName" placeholder="Americano"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                            Size
                        </label>
                        <input type="text" required name="size" id="guest" placeholder="Small, Medium, Large"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">
                            How would you pay?
                        </label>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center">
                                <input type="radio" name="Cash" id="radioButton1" class="h-5 w-5" />
                                <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                    Cash
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="E - Money" id="radioButton2" class="h-5 w-5" />
                                <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                    E - Money
                                </label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </form>
@endsection
