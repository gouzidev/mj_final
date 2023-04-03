@php
    require_once(resource_path("imports/limitString.php"))
@endphp

<div class="glide__slide h-full relative rounded-lg" >
    <div>
        <img src="{{$data["image"]}}" class=" h-full object-cover duration-200 w-full" />
        <div class="absolute p-6 bottom-0 w-full bg-gradient-to-b from-transparent via-black/50 to-black/70">

            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{
                        $data["title"]
                    }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-300 flex h-24 overflow-hidden">
                {{
                    limitString( $data["discription"], 300 )
                }}
        </div>
            </p>
    </div>
</div>