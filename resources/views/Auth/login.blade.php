<x-layout>
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
                <a href="/login" class="py-4 inline-block flex-1 text-center rounded-tl-lg border-b-2 border-b-primary text-primary font-medium">Login</a>
                <a href="/register"
                   class="py-4 inline-block capitalize flex-1 text-center border-b border-b-border rounded-tr-lg bg-background">
                    Sign up
                </a>
            </div>

            <form method="POST" action="/login" class="flex flex-col p-12 gap-4">
               @csrf

                <label class="flex flex-col mt-2">
                    <span class="mb-1">Email address</span>
                    <input type="email" name="email" class="px-4 pt-3 pb-3.5 border border-border rounded-sm" placeholder="dev@example.com" required/>
                </label>

                <label class="flex flex-col mt-2">
                    <span class="mb-1">Password</span>
                    <input type="password" name="password" class="px-4 pt-3 pb-3.5 border border-border rounded-sm" placeholder="••••••••" required />
                </label>

                <button type="submit" data-test="register-button" class="text-[16px] font-medium flex gap-2.5 text-white bg-primary rounded-sm mt-6 w-full h-13 cursor-pointer  items-center justify-center">
                    Login
                    <img src="{{ asset('icons/login_icon.svg') }}" alt="Login icon" />
                </button>
            </form>
        </div>
    </main>

</x-layout>
