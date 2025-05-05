<?php

   namespace App\Http\Controllers;

   use App\Models\Notice;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\Storage;

   class NoticeController extends Controller
   {
       public function __construct()
       {
           $this->middleware('auth');
       }

       public function index()
       {
           $notices = Notice::with('user')->latest()->get();
           return view('notices.index', compact('notices'));
       }

       public function store(Request $request)
       {
           $request->validate([
               'title' => 'required|string|max:255',
               'file' => 'required|file|mimes:pdf,doc,docx,txt|max:10240',
               'description' => 'nullable|string',
           ]);

           $file = $request->file('file');
           $filePath = $file->store('notices', 'public');

           Notice::create([
               'title' => $request->title,
               'file_path' => $filePath,
               'description' => $request->description,
               'user_id' => Auth::id(),
           ]);

           return redirect()->route('notices.index')->with('success', 'Notice uploaded successfully.');
       }

       public function edit(Notice $notice)
       {
           $this->authorize('update', $notice);
           return view('notices.edit', compact('notice'));
       }

       public function update(Request $request, Notice $notice)
       {
           $this->authorize('update', $notice);

           $request->validate([
               'title' => 'required|string|max:255',
               'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240',
               'description' => 'nullable|string',
           ]);

           $data = [
               'title' => $request->title,
               'description' => $request->description,
           ];

           if ($request->hasFile('file')) {
               Storage::disk('public')->delete($notice->file_path);
               $data['file_path'] = $request->file('file')->store('notices', 'public');
           }

           $notice->update($data);

           return redirect()->route('notices.index')->with('success', 'Notice updated successfully.');
       }

       public function destroy(Notice $notice)
       {
           $this->authorize('delete', $notice);
           Storage::disk('public')->delete($notice->file_path);
           $notice->delete();
           return redirect()->route('notices.index')->with('success', 'Notice deleted successfully.');
       }
   }
