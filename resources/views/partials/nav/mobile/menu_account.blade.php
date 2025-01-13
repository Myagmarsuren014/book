<div class="flex items-center px-4">
  <div class="flex-shrink-0">
    <span class="inline-block h-10 w-10 overflow-hidden rounded-full bg-gray-100">
      <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
    </span>
  </div>
  <div class="ml-3">
    <div class="text-base font-medium text-white">
        {{auth()->user()->last_name}} {{auth()->user()->first_name}}
    </div>
    <div class="text-sm font-medium text-gray-100"></div>
  </div>
        <!-- sonorduulga iin tovch baival end baih -->
</div>
<div class="mt-3 space-y-1">
  <a href="{{route('profile.create')}}" class="block pl-5 pr-4 py-2 text-base font-medium text-white">
    Профайл үүсгэх
  </a>
  @if(!empty(session('firm_profiles.firm.id')) )
    <a href="{{route('firm.profile.show',['firm_id'=>session('firm_profiles.firm.id')])}}" class="block pl-5 pr-4 py-2 text-base font-medium text-white" @click="open = false">
      {{session('firm_profiles.firm.ner')}} профайл засах
    </a>
  @endif
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="route('logout')" class="block pl-5 pr-4 py-2 text-base font-medium text-white" onclick="event.preventDefault(); this.closest('form').submit();">
        Гарах
    </a>
  </form>
</div>