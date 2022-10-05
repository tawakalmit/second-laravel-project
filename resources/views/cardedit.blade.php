<x-app-layout>

    <x-slot name="title">Card Edit</x-slot>

    <x-slot name="header"></x-slot>

    <form action="/card/{{ $card->id }}" enctype="multipart/form-data" method="post" class="w-10/12 md:w-3/12 mx-auto bg-[#2c3e50] mt-10 flex items-center flex-col rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 shadow-2xl">
        
        @method('put')
    
        @csrf
        
        <div class="w-10/12 mx-auto p-3">
            <label for="name" class="text-white">Name</label>
            <input type="text" placeholder="Type here" id="name" name="name" class="input w-full" value="{{ $card->name }}" />
        </div>

        <div class="w-10/12 mx-auto p-3">
            <label for="job" class="text-white">Job</label>
            <input type="text" placeholder="Type here" id="job" name="job" class="input w-full" value="{{ $card->job }}" />
        </div>

        <div class="w-10/12 mx-auto p-3">
            <label for="description" class="text-white">Description</label>
            <input type="text" placeholder="Type here" id="description" name="description" class="input w-full" value="{{ $card->description }}" />
        </div>

        <div class="w-10/12 mx-auto p-3">
            <label for="image" class="text-white">Upload Image</label>
            <input type="file" id="image" name="image" class="form-control w-60" accept="image/*" value="{{ $card->image }}" />
        </div>



        <button type="submit" class="btn glass m-5">Update</button>

    </form>
    
</x-app-layout>
