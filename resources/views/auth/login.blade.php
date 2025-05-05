@include('layouts.app-header')
   <div class="container py-5">
       <div class="row justify-content-center">
           <div class="col-md-4">
               <div class="card shadow-lg border-0 rounded-4">
                   <div class="card-body p-4">
                       <h2 class="text-center mb-4 text-dark fw-bold">Login</h2>
                       <form method="POST" action="{{ route('login') }}">
                           @csrf
                           <div class="mb-3">
                               <label for="email" class="form-label">Email address</label>
                               <input type="email" class="form-control form-control-lg rounded-3 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                               @error('email')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="password" class="form-label">Password</label>
                               <input type="password" class="form-control form-control-lg rounded-3 @error('password') is-invalid @enderror" id="password" name="password" required>
                               @error('password')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg w-100 rounded-3">Sign In</button>
                       </form>
                       <p class="text-center mt-3 text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-primary text-decoration-none">Sign Up</a></p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </body>
   </html>
