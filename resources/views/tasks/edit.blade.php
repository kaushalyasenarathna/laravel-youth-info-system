<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Task
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Programme Name</label>
                            <input type="text" name="programme" id="programme"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('programme', $task->programme) }}" />
                            @error('programme')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700" >Description</label>
                            <input type="text" name="description" id="description" type="text"  size="1550" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', $task->description) }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">CONTACT US</label>
                            <input type="text" name="title" id="title"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', $task->title) }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="custom-select px-4 py-5 bg-white sm:p-6" >
                        <label for="type" class="block font-medium text-sm text-gray-700">Type</label>

                        <select  name="division" class="form-input rounded-md shadow-sm mt-1 block w-full">
                            
                            <option value="1">SPORTS</option>
                            <option value="2">COURSES</option>
                            <option value="3">SPECIAL PROJECTS</option>
                            <option value="4">YOUTH AWADS</option>
                            <option value="5">COUNSELLING</option>
                            <option value="6">CULTURAL</option>
                            <option value="7"> EXAMMINATION & ASSESMENT</option>
                            <option value="8">INFORMATION & COMMUNICATI</option>
                            <option value="9">AGRICULTURE</option>
                            <option value="10">INTERNATIONAL YOUTH RELAT</option>
                            <option value="11"> YOUTH PARLIAMENT</option>
                            <option value="12">MEDIA</option>
         
                        </select>
                    </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="img" class="block font-medium text-sm text-gray-700">Img</label>
                            <input type="file" name="img" id="img" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="" />
                            <img  src="../../images/{{ $task->img }}"  >
                            @error('img')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>