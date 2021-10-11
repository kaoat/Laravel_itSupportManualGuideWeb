<div class="mb-2 mt-2">
    <form method="post" action="{{ route('login') }}" autocomplete="off">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="Enter email">
            @error('email')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                id="password" placeholder="Password">
            @error('password')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
