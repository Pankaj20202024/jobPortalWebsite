@props(['listing'])

<x-card>
  <div class="flex">
    <img class="hidden w-24 h-24 mr-6 md:block"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/job_portal.png')}}" alt="" />
    <div>
      <h3 class="text-2xl text-[#002336]">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <div class="text-xl font-bold mb-4 text-[#002336]">{{$listing->company}}</div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot text-[#002336]"></i> {{$listing->location}}
      </div>
    </div>
  </div>
</x-card>