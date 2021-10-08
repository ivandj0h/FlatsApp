<x-slot name="header">
    <h2 class="text-center">The Flat's Datatables</h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base font-bold text-blue shadow-sm hover:bg-blue-700">
                Create Flats
            </button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">The Flat's Name</th>
                        <th class="px-4 py-2">Location</th>
                        <th class="px-4 py-2">Lat</th>
                        <th class="px-4 py-2">Long</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flats as $flat)
                    <tr>
                        <td class="border px-4 py-2">{{ $flat->id }}</td>
                        <td class="border px-4 py-2">{{ $flat->name }}</td>
                        <td class="border px-4 py-2">{{ $flat->location}}</td>
                        <td class="border px-4 py-2">{{ $flat->lat}} °S</td>
                        <td class="border px-4 py-2">{{ $flat->long}} °E</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $flat->id }})"
                                class="flex px-4 py-2 bg-gray-500 text-gray-900 cursor-pointer">Edit</button>
                            <button wire:click="delete({{ $flat->id }})"
                                class="flex px-4 py-2 bg-red-100 text-gray-900 cursor-pointer">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>