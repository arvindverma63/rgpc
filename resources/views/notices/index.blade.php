@include('layouts.app-header')
   <div class="container py-5">
       <h1 class="text-center mb-5 text-dark fw-bold">Manage Important Notices</h1>
       <div class="row g-4">
           <!-- Upload Notice Section -->
           <div class="col-lg-4">
               <div class="card shadow-lg border-0 rounded-4 h-100">
                   <div class="card-body p-4">
                       <h3 class="mb-4 text-dark fw-semibold">Upload New Notice</h3>
                       <form id="uploadForm" action="{{ route('notices.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="mb-3">
                               <label for="noticeTitle" class="form-label fw-medium">Notice Title</label>
                               <input type="text" class="form-control form-control-lg rounded-3 shadow-sm @error('title') is-invalid @enderror" id="noticeTitle" name="title" value="{{ old('title') }}" required>
                               @error('title')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="noticeFile" class="form-label fw-medium">Upload Document</label>
                               <div class="border border-2 border-dashed rounded-3 p-4 text-center bg-light" id="dropZone">
                                   <p class="text-muted mb-2" id="dropText">Drag & drop file or click to browse</p>
                                   <input type="file" class="form-control @error('file') is-invalid @enderror" id="noticeFile" name="file" accept=".pdf,.doc,.docx,.txt" style="display: none;" required>
                                   <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="document.getElementById('noticeFile').click();">Browse Files</button>
                               </div>
                               <small class="form-text text-muted">Accepted formats: PDF, DOC, DOCX, TXT (Max size: 10MB)</small>
                               @error('file')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="description" class="form-label fw-medium">Description (Optional)</label>
                               <textarea class="form-control rounded-3 shadow-sm @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                               @error('description')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg w-100 rounded-3 shadow-sm">Upload Notice</button>
                       </form>
                   </div>
               </div>
           </div>
           <!-- Notice List Section -->
           <div class="col-lg-8">
               <div class="card shadow-lg border-0 rounded-4">
                   <div class="card-body p-4">
                       <h3 class="mb-4 text-dark fw-semibold">Notice List</h3>
                       <div class="table-responsive">
                           <table class="table table-hover table-bordered align-middle">
                               <thead class="table-light">
                                   <tr>
                                       <th>Title</th>
                                       <th>File</th>
                                       <th>Description</th>
                                       <th>Uploaded By</th>
                                       <th>Date</th>
                                       <th>Actions</th>
                                   </tr>
                               </thead>
                               <tbody id="noticeTableBody">
                                   @foreach ($notices as $notice)
                                       <tr>
                                           <td>{{ $notice->title }}</td>
                                           <td><a href="{{ Storage::url($notice->file_path) }}" class="text-primary text-decoration-none" target="_blank">{{ basename($notice->file_path) }}</a></td>
                                           <td>{{ $notice->description ?? '-' }}</td>
                                           <td>{{ $notice->user->name }}</td>
                                           <td>{{ $notice->created_at->format('d/m/Y') }}</td>
                                           <td>
                                               @can('update', $notice)
                                                   <a href="{{ route('notices.edit', $notice) }}" class="btn btn-sm btn-outline-primary me-2">Edit</a>
                                               @endcan
                                               @can('delete', $notice)
                                                   <form action="{{ route('notices.destroy', $notice) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notice?');">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                   </form>
                                               @endcan
                                           </td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <script>
       document.addEventListener('DOMContentLoaded', () => {
           const dropZone = document.getElementById('dropZone');
           const fileInput = document.getElementById('noticeFile');
           const dropText = document.getElementById('dropText');

           if (dropZone && fileInput && dropText) {
               dropZone.addEventListener('dragover', (e) => {
                   e.preventDefault();
                   dropZone.classList.add('border-primary', 'bg-primary-subtle');
               });

               dropZone.addEventListener('dragleave', () => {
                   dropZone.classList.remove('border-primary', 'bg-primary-subtle');
               });

               dropZone.addEventListener('drop', (e) => {
                   e.preventDefault();
                   dropZone.classList.remove('border-primary', 'bg-primary-subtle');
                   const files = e.dataTransfer.files;
                   if (files.length > 0) {
                       fileInput.files = files;
                       dropText.textContent = `Selected file: ${files[0].name}`;
                   }
               });

               fileInput.addEventListener('change', () => {
                   if (fileInput.files.length > 0) {
                       dropText.textContent = `Selected file: ${fileInput.files[0].name}`;
                   }
               });
           }

           document.querySelectorAll('.card').forEach(card => {
               card.addEventListener('mouseenter', () => card.style.transform = 'scale(1.02)');
               card.addEventListener('mouseleave', () => card.style.transform = 'scale(1)');
           });
       });
   </script>
   </body>
   </html>
