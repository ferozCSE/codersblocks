<div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition p-6 md:p-8 md:w-1/2 flex flex-col justify-between">
  <img src="{{ $logo }}" alt="logo" class="w-24 h-24 object-contain mx-auto mb-4" />
  <p class="text-gray-600 italic text-center mb-4 text-sm md:text-base">"{{ $feedback }}"</p>
  <div class="flex flex-col items-center space-y-2 mt-4">
    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-indigo-500 text-white flex items-center justify-center text-xl font-semibold shadow-md">
      {{ $initial }}
    </div>
    <h3 class="text-base font-bold text-gray-800">{{ $name }}</h3>
    <p class="text-sm text-gray-500">{{ $role }}</p>
  </div>
</div>
