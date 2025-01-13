<div class="space-y-1 pt-2 pb-3">
    <a href="/" class="text-white block py-2 pl-5 pr-4 text-base font-medium">Нүүр</a>
    
    <a href="/page/proger-gej-yu-ve" class="text-white block py-2 pl-5 pr-4 text-base font-medium">Прогэр гэж юу вэ?</a>
    
    <a href="/page/uilchilgee" class="text-white block py-2 pl-5 pr-4 text-base font-medium">Үйлчилгээ</a>
    
    <a href="/page/chansaa" class="text-white block py-2 pl-5 pr-4 text-base font-medium">Чансаа</a>
          
</div>
<div class="border-t border-gray-200 pt-4 pb-3">
    @auth
        @if (!empty(session('profiles.person.id')))
          @include('partials.nav.mobile.menu_profile')
        @else 
          @include('partials.nav.mobile.menu_account')
        @endif
    @else
      <a href="{{route('register')}}" class=" text-white hover:border-secondary_ld hover:text-secondary_ld inline-flex items-center px-2 pt-1 font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>
        Бүртгүүлэх
      </a>

      <a href="{{route('login')}}" class=" text-white hover:border-secondary_ld hover:text-secondary_ld inline-flex items-center px-1 pt-1 font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
        </svg>
        Нэвтрэх
      </a>
    @endauth
    
</div>