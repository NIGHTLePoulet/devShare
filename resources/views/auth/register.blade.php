<x-layout>
    <div class="py-6">
        <header class="w-full flex flex-col items-center mb-9">
            <div class="flex items-center gap-2 text-[32px]">
                <img src="{{ asset('images/logo_devshare.svg') }}" alt="">
                <span class="font-bold text-primary">DevShare</span>
            </div>
            <p class="text-sm mt-2 text-foreground">Share, discover, code.</p>
        </header>

        <main class="flex justify-center text-sm">
            <div class="border border-border rounded-lg bg-white w-full max-w-105">
                <div class="flex">
                    <a href="/login" class="py-4 inline-block flex-1 text-center bg-background rounded-tl-lg border-b border-b-border">Login</a>
                    <a href="/register"
                       class="py-4 inline-block text-primary capitalize flex-1 text-center font-medium border-b-2 border-b-primary rounded-tr-lg">
                        Sign up
                    </a>
                </div>

                <form method="POST" action="/register" class="flex flex-col p-12 gap-4">
                    @csrf

                    <label class="flex flex-col">
                        <span class="mb-1">Username</span>
                        <input type="text" name="username" class="px-4 pt-3 pb-3.5 border border-border rounded-sm @error('password') border-2 border-danger @enderror" value="{{old('username')}}" placeholder="JohnDoe" required/>
                    </label>

                    @error('username')
                    <p class="text-danger text-xs -mt-2">{{$message}}</p>
                    @enderror

                    <label class="flex flex-col mt-2">
                        <span class="mb-1">Email address</span>
                        <input type="email" name="email" class="px-4 pt-3 pb-3.5 border border-border rounded-sm @error('password') border-2 border-danger @enderror" value="{{old('email')}}" placeholder="dev@example.com" required/>
                    </label>

                    @error('email')
                    <p class="text-danger text-xs -mt-2">{{ $message }}</p>
                    @enderror

                    <label class="flex flex-col mt-2">
                        <span class="mb-1">Password</span>
                        <input type="password" name="password" class="px-4 pt-3 pb-3.5 border border-border rounded-sm @error('password') border-2 border-danger @enderror" placeholder="••••••••" required />
                    </label>
                    @if(count($errors) === 0)
                        <p class="-mt-2 text-xs text-muted-foreground">Must be at least 8 characters.</p>
                    @endif

                    @error('password')
                    <p class="text-danger text-xs -mt-2"> {{ $message }}</p>
                    @enderror

                    <button type="submit" data-test="register-button" class="text-[16px] font-medium flex gap-2.5 text-white bg-primary rounded-sm mt-6 w-full h-13 cursor-pointer  items-center justify-center">
                        Create account
                        <img src="{{ asset('icons/register_icon.svg') }}" alt="Register icon" />
                    </button>
                    <p class="text-center text-sm mt-4">By signing up, you agree to our <a href="#" class="hover:underline text-primary">Terms</a> and <br /> <a href="#" class="hover:underline text-primary">Privacy Policy</a>.</p>
                </form>
            </div>
        </main>
    </div>
</x-layout>
