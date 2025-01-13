<!-- Profile dropdown -->
              <div x-data="{ open: false }" x-init="" @keydown.escape.stop="open = false;" @click.away="open = false;" class="relative ml-3">
                <div class="flex items-center px-4">
                  <div class="flex-shrink-0">
                    <!-- avatar -->
                    <span class="relative inline-block">
                      @if (!empty(session('profiles.person.avatar')))
                      <img class="h-10 w-10 rounded-full ring-2 ring-gray-300" src="{{session('profiles.person.avatar')}}" @click="open = ! open" @keyup.space.prevent="open = ! open" @keydown.enter.prevent="open = ! open" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" alt="">
                      @else 
                      <span class="inline-block h-10 w-10 overflow-hidden rounded-full ring-2 ring-gray-300 bg-gray-100" @keydown.enter.prevent="open = ! open" @click="open = ! open">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                      </span>
                      @endif

                      <span class="absolute bottom-1 right-0 block h-2.5 w-2.5 rounded-full bg-gray-200 ring-2 ring-white" @click="open = ! open" @keyup.space.prevent="open = ! open" @keydown.enter.prevent="open = ! open" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()">
                        <svg class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                    </span>
                  </div>
                  <div class="ml-3">
                    <div class="text-base font-medium text-white cursor-pointer" @click="open = ! open">
                      {{session('profiles.person.ovog')}} {{session('profiles.person.ner')}}
                    </div>
                    <div class="text-sm font-medium text-gray-300 cursor-pointer" @click="open = ! open">
                      {{session('profiles.person.turul')}}
                    </div>
                  </div>
                </div>
                  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"  @keydown.tab="open = false" @keydown.enter.prevent="open = false" @keyup.space.prevent="open = false" style="display: none;">
                      <a href="{{route('profile.view',['username'=>session('profiles.person.username')])}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                        Миний профайл
                      </a>
                      <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" @click="open = false">
                        Профайлаа засах
                      </a>
                      @if (session('profiles.person.verified') < 3) 
                      <a href="{{route('profile.view',['username'=>session('profiles.person.username')])}}#verify" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                        Про профайл
                      </a>
                      @endif

                      @if(!empty(session('firm_profiles.firm.id')) )
                      <a href="{{route('firm.profile.show',['firm_id'=>session('firm_profiles.firm.id')])}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" @click="open = false">
                        {{session('firm_profiles.firm.ner')}} профайл засах
                      </a>
                      @endif
                      
                      
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" onclick="event.preventDefault(); this.closest('form').submit();">
                            Гарах
                        </a>
                      </form>
                    
                  </div>
                
              </div>