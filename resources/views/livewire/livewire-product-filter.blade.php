<div class="container max-w-5xl mx-auto">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">

          <!--Filter -->
          <div class="mb-6">
            @include('livewire.product-filter-dropdowns')
          </div>

          <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-3">
            @foreach($products as $product)
            <!-- product - start -->
            <div>
              <a href="#" class="group relative mb-2 block h-64 overflow-hidden rounded-lg bg-gray-100 lg:mb-3">
                <img src="{{ $product->getFirstMediaUrl('images') }}"" loading="lazy" alt="{{ $product->title }}" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
              </a>

              <div>
                <a href="#" class="hover:gray-800 mb-1 text-gray-500 transition duration-100 lg:text-lg">{{ $product->title }}</a>

                <div class="flex items-end gap-2">
                  <span class="font-bold text-gray-800 lg:text-lg">${{ $product->price }}</span>
                </div>
              </div>
            </div>
            <!-- product - end -->
            @endforeach

          </div>
        </div>
      </div>
</div>
<script type="text/javascript">
  window.onscroll = function(ev) {
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
  window.livewire.emit('load-more');
  }
  };
</script>