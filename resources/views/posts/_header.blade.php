@php
    use Illuminate\Support\Facades\Auth
@endphp

<x-layout>
   <header class="bg-background-secondary/90 w-full px-10 py-2">
       <nav class="flex justify-between items-center px-6">
           <div class="flex gap-2.5 items-center">
               <a href="{{route('posts.index')}}" class="font-bold leading-7 tracking-tighter text-[20px] text-primary">DevShare</a>
               <span class="inline-block px-2 py-0.5 text-[11px] text-primary font-display font-semibold -tracking-tight uppercase bg-demo-label rounded-full">Demo</span>
           </div>

           <div class="relative">
               <img src="{{asset('/icons/search_icon.svg')}}" alt="Search icon" class="absolute left-4 top-1/2 -translate-y-1/2" />
               <label>
                   <input type="search" placeholder="Search tips, tool, code..." class="bg-background-surface h-9.25 pl-10 text-sm pr-4 py-2.5 w-md rounded-lg" />
               </label>
           </div>

           <div class="flex items-center gap-4 h-9.25">
               @guest
                   <div class="flex items-center gap-2">
                       <a href="{{ route('login') }}" class="px-4 py-2 text-sm hover:text-primary">
                           Log in
                       </a>

                       <a href="{{ route('register.create') }}" class="px-4 py-2 rounded-sm bg-primary text-background-secondary text-sm">
                           Sign up
                       </a>
                   </div>
               @endguest

               @auth
                   <div class="flex items-center">
                       <a href="{{ route('posts.create') }}" class="flex items-center mr-4 gap-1 text-sm font-semibold px-4 py-2 rounded-lg text-white bg-primary">
                           <img src="{{ asset('/icons/add-post_icon.svg') }}" alt="Add post icon" />
                           Post a Tip
                       </a>
                       <div class="flex items-center gap-2 border-l border-l-border pl-2">
                            <div class="size-8 py-2 text-xs bg-background-profile text-primary uppercase flex items-center justify-center rounded-xl">
                                {{ substr(Auth::user()->username, 0, 2) }}
                            </div>

                           <span class="text-profile text-sm font-semibold">
                               {{ Auth::user()->username }}
                           </span>

                           <form method="POST" action="{{ route('logout') }}">
                               @csrf
                               @method('DELETE')

                               <button class="px-4 py-2 rounded-sm hover:text-danger hover:bg-background-surface flex items-center gap-1 text-foreground cursor-pointer text-sm">
                                   <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.5 13.5C1.0875 13.5 0.734375 13.3531 0.440625 13.0594C0.146875 12.7656 0 12.4125 0 12V1.5C0 1.0875 0.146875 0.734375 0.440625 0.440625C0.734375 0.146875 1.0875 0 1.5 0H6.75V1.5H1.5V12H6.75V13.5H1.5ZM9.75 10.5L8.71875 9.4125L10.6313 7.5H4.5V6H10.6313L8.71875 4.0875L9.75 3L13.5 6.75L9.75 10.5Z" fill="currentColor"/>
                                   </svg>

                                   Logout
                               </button>
                           </form>
                       </div>
                   </div>
               @endauth
           </div>
       </nav>
   </header>
</x-layout>
