
<div class="container">
    <div class="mt-5">
        <form class="row g-3" action="{{ route('register') }}" method="POST">
            @csrf
            {{-- <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div> --}}
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Username</label>
              <input type="text" class="form-control" name="username">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
           
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@include('backend.back-script')
