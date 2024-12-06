@extends('layout')
@section('container')

<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-gray-800">Add Products</h1>
    <a href="{{ route('teas.create') }}" class="btn btn-primary mt-5 mb-3 inline-block bg-green-800 text-white px-6 py-2 rounded-md hover:bg-green-700">
        Add Tea
    </a>

    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-green-800">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teas as $tea)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $tea->name }}</td>
                        <td class="px-6 py-4">{{ $tea->description }}</td>
                        <td class="px-6 py-4">Rp. {{ number_format($tea->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">
                            @if ($tea->image)
                                <img src="{{ asset('storage/' . $tea->image) }}" alt="{{ $tea->name }}" class="w-16 h-16 object-cover rounded-md">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('teas.edit', $tea->id) }}" class="inline-block text-white bg-yellow-300 hover:bg-yellow-200 px-4 py-2 rounded-md">
                                Edit
                            </a>
                            <form action="{{ route('teas.destroy', $tea->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block text-white bg-red-600 hover:bg-red-200 px-4 py-2 rounded-md">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
