<x-layout>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Indirizzo email:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
        </div>
    </div>
 </div>
</x-layout>