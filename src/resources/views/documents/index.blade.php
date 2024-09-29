@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Documents</h1>
        <a href="{{ route('documents.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Document</a>
        <table class="min-w-full mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                    <tr>
                        <td class="border px-4 py-2">{{ $document->title }}</td>
                        <td class="border px-4 py-2">{{ $document->description }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('documents.edit', $document) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('documents.destroy', $document) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
