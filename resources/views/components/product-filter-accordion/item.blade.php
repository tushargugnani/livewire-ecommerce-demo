<div x-id="['accordion-item']" @if($attributes->has('open')) x-init="defaultOpen($id('accordion-item'))" @endif class="bg-white dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 border-t">
    <div class="mb-0 font-sm">
    <button
         x-on:click="toggle"
         type="button"
         :aria-expanded="isAccordionOpen($id('accordion-item'))"
         :aria-controls="$id('accordion-item')"
         class="flex items-center justify-between text-left p-3 w-full focus:ring-2 focus:ring-gray-200"
         :class="isAccordionOpen($id('accordion-item')) && 'bg-gray-100 text-gray-800'"
         @keydown.space.prevent.stop="toggle"
         :id="$id('accordion-item')+'button'"
         >
         <span class="text-sm">{{$heading}}</span>
         <span>
            <svg class="rotate-0 h-5 w-5 transform font-light" :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </button>
    </div>
    <div :id="$id('accordion-item')"
         x-show="isAccordionOpen($id('accordion-item'))"
         x-cloack
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="scale-y-0"
         x-transition:enter-end="scale-y-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="scale-y-100"
        x-transition:leave-end="scale-y-0"
        class="transition-transform ease-out overflow-hidden origin-top transform p-3"
    >{{$slot}}</div>
  </div>