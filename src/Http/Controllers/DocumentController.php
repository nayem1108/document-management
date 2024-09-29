<?php

namespace Nayem1108\DocumentManagement\Http\Controllers;

use Nayem1108\DocumentManagement\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nayem1108\DocumentManagement\Http\Requests\DocumentRequest;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('document-management::documents.index', compact('documents'));
    }

    public function create()
    {
        return view('document-management::documents.create');
    }

    public function store(DocumentRequest $request)
    {
        $document = Document::create($request->validated());

        // Dispatch event for document creation
        event(new DocumentCreated($document));

        return redirect()->route('documents.index')->with('success', 'Document created successfully.');
    }

    public function edit(Document $document)
    {
        return view('document-management::documents.edit', compact('document'));
    }

    public function update(DocumentRequest $request, Document $document)
    {
        $document->update($request->validated());
        return redirect()->route('documents.index')->with('success', 'Document updated successfully.');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Document deleted successfully.');
    }
}
