@extends('layout')

@section('container')
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-green-800 text-center">{{ isset($tea) ? 'Create Tea' : 'Add New Tea' }}</h1>

    <form action="{{ isset($tea) ? route('teas.update', $tea->id) : route('teas.store') }}" method="POST" enctype="multipart/form-data" class="mt-8 space-y-6 max-w-2xl mx-auto">
        @csrf
        @if (isset($tea))
            @method('PUT')
        @endif

        <!-- Name Field -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-2 p-3 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:outline-none" value="{{ $tea->name ?? '' }}" required>
        </div>
        
        <!-- Description Field -->
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="mt-2 p-3 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:outline-none">{{ $tea->description ?? '' }}</textarea>
        </div>
        
        <!-- Price Field -->
        <div class="mb-6">
            <label for="price" class="block text-sm font-medium text-gray-700">Price (Rp.)</label>
            <input type="number" step="0.01" name="price" id="price" class="mt-2 p-3 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:outline-none" value="{{ $tea->price ?? '' }}" required>
        </div>
        
        <!-- Image Field -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-2 p-3 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-green-500 focus:outline-none">
            
            @if (isset($tea) && $tea->image)
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Current Image</label>
                    <img src="{{ asset('storage/' . $tea->image) }}" alt="Tea Image" class="mt-2 w-32 h-32 object-cover rounded-md">
                </div>
            @endif
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 px-6 bg-green-800 text-white rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-300 transition duration-300">
            Save
        </button>
    </form>
</div>
@endsection
