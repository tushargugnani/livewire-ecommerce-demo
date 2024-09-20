<div x-data="{
    open: false,
    toggle() {
        if (this.open) {
            return this.close()
        }

        this.open = true
    },
    close(focusAfter) {
        this.open = false

        focusAfter && focusAfter.focus()
    }
}" x-on:keydown.escape.prevent.stop="close($refs.button)" x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']"
class="relative inline-block px-4 text-left">
    <button type="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
      <span>{{$name}}</span>
      @if(isset($selectedCount) && $selectedCount > 0)
        <span class="ml-1.5 rounded bg-gray-200 px-1.5 py-0.5 text-xs font-semibold tabular-nums text-gray-700">{{$selectedCount}}</span>
      @endisset
      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" :class="open && 'rotate-180'" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
      </svg>
    </button>

    <div x-ref="panel" x-show="open" x-transition.origin.top.left="" x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" style="display: none;" class="absolute right-5 z-10 mt-2 origin-top-right rounded-md bg-white p-4 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none">
      <form class="space-y-4">
        @foreach($options as $key => $option)
         <div class="flex items-center">
            @if($type == 'checkbox')
                <input id="filter-{{$option}}-{{$loop->index}}" {{ $attributes->whereStartsWith('wire:model.live') }} {{ $attributes->whereStartsWith('wire:loading') }} name="{{$name}}-{{$key}}" value="{{$key}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            @endif
            <label @if($attributes->has('livewire-click')) wire:click="{{$attributes->get('livewire-click')}}('{{$key}}')" x-on:click="close($refs.button)" @endif for="filter-{{$option}}-{{$loop->index}}" class="ml-3 whitespace-nowrap pr-6 text-sm font-medium text-gray-900 cursor-pointer">{{$option}}</label>
          </div>
        @endforeach
      </form>
    </div>
</div>