@include('layouts.app-header')
   <div class="container py-5">
       <h1 class="text-center mb-5 text-dark fw-bold">Edit Notice</h1>
       <div class="row justify-content-center">
           <div class="col-lg-6">
               <div class="card shadow-lg border-0 rounded-4">
                   <div class="card-body p-4">
                       <form action="{{ route('notices.update', $notice) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')
                           <div class="mb-3">
                               <label for="noticeTitle" class="form-label fw-medium">Notice Title</label>
                               <input type="text" class="form-control form-control-lg rounded-3 shadow-sm @error('title') is-invalid @enderror" id="noticeTitle" name="title" value="{{ old('title', $notice->title) }}" required>
                               @error('title')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="noticeFile" class="form-label fw-medium">Replace Document (Optional)</label>
                               <input type="file" class="form-control @error('file') is-invalid @enderror" id="noticeFile" name="file" accept=".pdf,.doc,.docx,.txt">
                               <small class="form-text text-muted">Current file: {{ basename($notice->file_path) }}</small>
                               @error('file')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="description" class="form-label fw-medium">Description (Optional)</label>
                               <textarea class="form-control rounded-3 shadow-sm @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $notice->description) }}</textarea>
                               @error('description')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg w-100 rounded-3 shadow-sm">Update Notice</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </body>
   </html>
