<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Task
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">DIVISION ID</label>
                            <input type="text" name="id" id="id"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ Auth::user()->id }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">DIVISION NAME</label>
                            <input type="text" name="name" id="name"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ Auth::user()->name }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Programme Name</label>
                            <input type="text" name="programme" id="programme"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="" />
                            @error('programme')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">TYPE</label>
                            <select name="divition" id="divition" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                <option value="">Click Here To Select Divitions</option>
                                @foreach ($divition as $item)
                                <option value="{{$item->id}}">{{$item->divitionName}}</option>
                                @endforeach              
                              </select>
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">CONTACT US</label>
                            <input type="text" name="title" id="title"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                            <input type="text" name="description" id="description"  size="5000" class="form-input rounded-md shadow-sm mt-1 block w-full" style="height: 5rem"
                                   value="" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Img</label>
                            <input type="file" name="img" id="img" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>