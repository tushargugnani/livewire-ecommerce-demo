<div x-data="{showMobileFilters : false}" class="bg-white">
    <!--
      Mobile filter dialog
  
      Off-canvas filters for mobile, show/hide based on off-canvas filters state.
    -->
    <div  class="relative z-40 sm:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div x-show="showMobileFilters" class="fixed inset-0 bg-black bg-opacity-25"></div>
  
      <div x-show="showMobileFilters" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform scale-x-0 translate-x-1/2" x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0" x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0" x-transition:leave-end="opacity-0 transform scale-x-0 translate-x-1/2"
          class="fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
        <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
          <div class="flex items-center justify-between px-4">
            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
            <button @click="showMobileFilters = false" type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Filters -->
          <form class="mt-4">
            <x-product-filter-accordion >
              <x-product-filter-accordion.item open="true">
              <x-slot:heading>
                {{$filterOptions['brand']['name']}}
              </x-slot>
              <!-- Accordion Content -->
              <div class="content-block">
                <div class="py-2" id="filter-section-0">
                  <div class="space-y-6">
                    @foreach($filterOptions['brand']['options'] as $key => $option)
                    <div class="flex items-center">
                      <input id="filter-mobile-category-{{$key}}" name="category[]" value="{{$key}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" wire:model.live.debounce.0ms="filters.brand" wire:loading.attr="disabled">
                      <label for="filter-mobile-category-{{$key}}" class="ml-3 text-sm text-gray-500">{{$option}}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              </x-product-filter-accordion.item>
           </x-product-filter-accordion>
  
            <x-product-filter-accordion>
              <x-product-filter-accordion.item open="true">
              <x-slot:heading>
                {{$filterOptions['colors']['name']}}
              </x-slot>
              <!-- Accordion Content -->
              <div class="content-block">
                <div class="py-2" id="filter-section-1">
                  <div class="space-y-6">
                    @foreach($filterOptions['colors']['options'] as $key => $option)
                    <div class="flex items-center">
                      <input id="filter-mobile-color-{{$key}}" name="color[]" value="{{$key}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" wire:model.live.debounce.0ms="filters.colors" wire:loading.attr="disabled">
                      <label for="filter-mobile-color-{{$key}}" class="ml-3 text-sm text-gray-500">{{$option}}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              </x-product-filter-accordion.item>
          </x-product-filter-accordion>
  
            <x-product-filter-accordion>
              <x-product-filter-accordion.item open="true">
              <x-slot:heading>
                {{$filterOptions['types']['name']}}
              </x-slot>
              <!-- Accordion Content -->
              <div class="content-block">
                <div class="py-2" id="filter-section-2">
                  <div class="space-y-6">
                    @foreach($filterOptions['types']['options'] as $key => $option)
                    <div class="flex items-center">
                      <input id="filter-mobile-color-0" name="color[]" value="{{$key}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" wire:model.live.debounce.0ms="filters.types" wire:loading.attr="disabled">
                      <label for="filter-mobile-color-0" class="ml-3 text-sm text-gray-500">{{$option}}</label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              </x-product-filter-accordion.item>
          </x-product-filter-accordion>
          </form>
        </div>
      </div>
    </div>
  
  
    <!-- Filters -->
    <section aria-labelledby="filter-heading">
      <h2 id="filter-heading" class="sr-only">Filters</h2>
  
      <div class="border-b border-gray-200 bg-white pb-4">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
  
          <div>
            <x-product-filter-dropdown name="Sort" :options=$sortByOptions type="link" livewire-click="setSortBy"/>
            @if(array_key_exists($orderBy['key'].'_'.$orderBy['direction'], $sortByOptions))
            <button wire:click="clearSort()" type="button" class="ml-1 inline-flex h-4 w-4 flex-shrink-0 rounded-full p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-500">
              <span class="sr-only">Remove Sort</span>
              <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
              </svg>
            </button>
            @endif
          </div>
  
          <!-- Mobile filter dialog toggle, controls the 'mobileFiltersOpen' state. -->
          <button @click="showMobileFilters = true" type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button>
  
          <div class="hidden sm:block">
            <div class="flow-root">
              <div class="-mx-4 flex items-center divide-x divide-gray-200">
                <x-product-filter-dropdown :name="$filterOptions['brand']['name']" :options="$filterOptions['brand']['options']" :selectedCount="count($filters['brand'])" wire:model.live.debounce.0ms="filters.brand" wire:loading.attr="disabled" type="checkbox"/>
                <x-product-filter-dropdown :name="$filterOptions['colors']['name']" :options="$filterOptions['colors']['options']" :selectedCount="count($filters['colors'])" wire:model.live.debounce.0ms="filters.colors" wire:loading.attr="disabled" type="checkbox"/>
                <x-product-filter-dropdown :name="$filterOptions['types']['name']" :options="$filterOptions['types']['options']" :selectedCount="count($filters['types'])" wire:model.live.debounce.0ms="filters.types" wire:loading.attr="disabled" type="checkbox"/>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Active filters -->
      <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 py-3 sm:flex sm:items-center sm:px-6 lg:px-8">
          <h3 class="text-sm font-medium text-gray-500">
            Filters
            <span class="sr-only">, active</span>
          </h3>
  
          <div aria-hidden="true" class="hidden h-5 w-px bg-gray-300 sm:ml-4 sm:block"></div>
  
          <div class="mt-2 sm:ml-4 sm:mt-0">
            <div class="-m-1 flex flex-wrap items-center">
              @foreach($filters as $filterName => $filterValues)
                @foreach ($filterValues as $key => $value)
                <span class="inline-flex items-center rounded-full border border-gray-200 bg-white py-1.5 pl-3 pr-2 text-sm font-medium text-gray-900">
                  <span>{{$filterOptions[$filterName]['options'][$value]}}</span>
                  <button wire:click="removeFilter('{{$filterName}}', '{{$key}}')" type="button" class="ml-1 inline-flex h-4 w-4 flex-shrink-0 rounded-full p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-500">
                    <span class="sr-only">Remove filter for Objects</span>
                    <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                      <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                    </svg>
                  </button>
                </span>
                @endforeach
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>