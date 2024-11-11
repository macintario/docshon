<span
    x-data="{ tooltip: false }"
    x-on:mouseover="tooltip = true"
    x-on:mouseleave="tooltip = false"
    class="w-5 h-5 ml-2 cursor-pointer">
  <!-- SVG Goes Here -->
  <div x-show="tooltip"
    class="absolute p-2 text-sm text-white transform translate-x-8 -translate-y-8 bg-blue-400 rounded-lg"
  >
     {{$slot}}
  </div>
</span>
