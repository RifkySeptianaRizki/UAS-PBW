<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
      <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        @forelse ($destinations as $destination)
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16 mb-20">
          <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
            <img class="w-full dark:hidden" src="{{ asset('uploads/' . $destination->image) }}" alt="" />
            <img class="w-full hidden dark:block" src="{{ asset('uploads/' . $destination->image) }}" alt="" />
          </div>
  
          <div class="mt-6 sm:mt-8 lg:mt-0">
            <h1
              class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white"
            >
              {{ $destination->name }} | {{ $destination->location }}
            </h1>
            <div class="mt-6 sm:mt-8 lg:mt-0">
              <p>{{ $destination->category }}</p>
            </div>
            <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
              <p
                class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
              >
                IDR {{ $destination->price }}
              </p>
  
              <div class="flex items-center gap-2 mt-2 sm:mt-0">
                <div class="flex items-center gap-1">
                  <svg
                    class="w-4 h-4 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                    />
                  </svg>
                  <svg
                    class="w-4 h-4 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                    />
                  </svg>
                  <svg
                    class="w-4 h-4 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                    />
                  </svg>
                  <svg
                    class="w-4 h-4 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                    />
                  </svg>
                  <svg
                    class="w-4 h-4 text-yellow-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"
                    />
                  </svg>
                </div>
                <p
                  class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400"
                >
                  (5.0)
                </p>
                <a
                  href="#"
                  class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white"
                >
                  345 Reviews
                </a>
              </div>
            </div>
  
            <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
  
              <a
                href="#"
                title=""
                class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                role="button"
              >
  
                Book Now !
              </a>
            </div>
  
            <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
  
            <p class="mb-6 text-gray-500 dark:text-gray-400">
              {{ $destination->description }}
            </p>
            <a href="{{ url('/destination/' . $destination->id) }}" class="hover:underline text-gray-500">
              Read More !
            </a>
          </div>
        </div>
        @empty
        <p class="font-semibold text-xl my-4">Destination Not Found!</p>
        @endforelse
        
      </div>
    </section>
  </x-layout>