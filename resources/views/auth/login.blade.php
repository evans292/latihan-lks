<x-auth-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <x-slot name="style">
        <style>
            body {
                height: 100vh;
                background-image: url('/img/museum1.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .box {
                width: 600px;
                height: auto;
                background-color: white;
                padding: 20px;
                border-radius: 8px; 
            }

            h1 {
                text-align: center;
            }
        </style>
    </x-slot>

    <div class="box">
        <h1>Login</h1>
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="your password">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end">Login</button>
              </div>
        </form>
        
    </div>
</x-auth-layout>