@extends('layouts.app')

@section('titre')

        Sponski - Chat
    
@endsection
@include('layouts.navbar-noir')

@section('contenu')


    <div id="chat" class="min-w-full container">
      <div class="min-w-full border rounded lg:grid lg:grid-cols-3">
        <div class=" container border-r border-gray-300 lg:col-span-1">
          <div class="mx-3 my-3">
            <div class="recherche relative text-gray-600">
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="rgba(255,255,255,0)"/><path d="M266.138,2495.2l-3.026-3.026a5.685,5.685,0,1,0-.943.943l3.026,3.026a.667.667,0,1,0,.943-.943Zm-11.8-6.529a4.333,4.333,0,1,1,4.333,4.333A4.338,4.338,0,0,1,254.333,2488.667Z" transform="translate(-251.667 -2481.667)" fill="#b6b9c3"/></svg>
              </span>
              <input type="search" class="block w-full py-2 pl-10 bg-gray-100 rounded outline-none" name="search"
                placeholder="Trouver une discussion" required />
            </div>
          </div>

          <ul class="overflow-auto h-[32rem]">
            <li>
              <a
                class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                <div class="w-full pb-2">
                  <div class="flex justify-between">
                    <span class="block ml-2 font-semibold text-gray-600">Lucas Pavin</span>
                    <span class="block ml-2 text-sm text-gray-600">25 minutes</span>
                  </div>
                  <span class="block ml-2 text-sm text-gray-600">bye</span>
                </div>
              </a>
              <a
                class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out bg-gray-100 border-b border-gray-300 cursor-pointer focus:outline-none">
                <div class="w-full pb-2">
                  <div class="flex justify-between">
                    <span class="block ml-2 font-semibold text-gray-600">Same</span>
                    <span class="block ml-2 text-sm text-gray-600">50 minutes</span>
                  </div>
                  <span class="block ml-2 text-sm text-gray-600">Good night</span>
                </div>
              </a>
              <a
                class="flex items-center px-3 py-2 text-sm transition duration-150 ease-in-out border-b border-gray-300 cursor-pointer hover:bg-gray-100 focus:outline-none">
                <div class="w-full pb-2">
                  <div class="flex justify-center">
                    <span class="block ml-2 font-semibold text-gray-600">Emma</span>
                  </div>
                  <span class="block ml-2 text-sm text-gray-600">Good Morning</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class=" container hidden lg:col-span-2 lg:block">
          <div class="w-full">
            <div class="relative flex items-center p-3 border-b border-gray-300">
              <span id="nickname" class="block ml-2 font-bold text-gray-600">Emma</span>
              </span>
            </div>
            <div class="relative w-full p-6 overflow-y-auto h-[40rem]">
              <ul class="space-y-2">
                <li class="flex justify-start">
                  <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                    <span class="block">Hi</span>
                  </div>
                </li>
                <li class="flex justify-end">
                  <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                    <span class="block">Hiiii</span>
                  </div>
                </li>
                <li class="flex justify-end">
                  <div class="relative max-w-xl px-4 py-2 text-gray-700 bg-gray-100 rounded shadow">
                    <span class="block">how are you?</span>
                  </div>
                </li>
                <li class="flex justify-start">
                  <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                    <span class="block">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </button>
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                </svg>
              </button>

              <input id="message" type="text" placeholder="Message"
                class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                name="message" required />
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                </svg>
              </button>
              <button id="submit_button" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.998" height="18.998" viewBox="0 0 18.998 18.998"><path d="M608.42,2774.67l-3.28,13.12a3.529,3.529,0,0,1-3.47,2.71h-.02a3.525,3.525,0,0,1-3.46-2.76l-.86-3.65,5.38-5.38a1,1,0,1,0-1.42-1.42l-5.38,5.38-3.65-.86a3.575,3.575,0,0,1-.05-6.95l13.12-3.28a2.548,2.548,0,0,1,3.09,3.09Z" transform="translate(-589.5 -2771.502)" fill="#1649fc"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="bloc">
            <p><img src="" alt=""></p>
            <p>Lucas Pavin</p>
            <p>Lorem Ipsum is simply dummy text of the
              printing and typesetting industry. Lorem Ipsum
              has been the industry’s standard dummy.
              Lorem Ipsum is simply dummy text of the.</p>
          </div>
          <div class="block"><img src="./../../../public/images/pattern.svg" alt="image du projet"></div>
          <div class="block">
            <h3 class="border">Recherche de sponsors pour le Tour de France</h3>
            <div>
              <h2>Description</h2>
              <p class="border">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been
                the industry’s standard dummy. Lorem Ipsum is
                simply dummy text of the etting industry...</p>
            </div>
            <div class="border">
              <h4>Budget</h4>
              <p>≈ 8000€</p>
            </div>
            <div class="border categ">
              <div>
                <div>
                  <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="rgba(255,255,255,0)"/><path d="M416.5,2704.94a4.765,4.765,0,0,0-4.5-4.74v-.2a1,1,0,0,0-2,0v.17h-6V2700a1,1,0,0,0-2,0v.2a4.765,4.765,0,0,0-4.5,4.74v1.89a.293.293,0,0,0,.02.09.189.189,0,0,0-.02.08v7a4.507,4.507,0,0,0,4.5,4.5h10a4.507,4.507,0,0,0,4.5-4.5v-7a.189.189,0,0,0-.02-.08.292.292,0,0,0,.02-.09ZM403,2715a1,1,0,1,1,1-1A1,1,0,0,1,403,2715Zm0-4a1,1,0,1,1,1-1A1,1,0,0,1,403,2711Zm4,4a1,1,0,1,1,1-1A1,1,0,0,1,407,2715Zm0-4a1,1,0,1,1,1-1A1,1,0,0,1,407,2711Zm4,4a1,1,0,1,1,1-1A1,1,0,0,1,411,2715Zm0-4a1,1,0,1,1,1-1A1,1,0,0,1,411,2711Zm3.5-4.5h-15v-1.56a2.766,2.766,0,0,1,2.54-2.75.985.985,0,0,0,.96.81,1,1,0,0,0,.97-.83h6.06a1,1,0,0,0,.97.83.985.985,0,0,0,.96-.81,2.773,2.773,0,0,1,2.54,2.75Z" transform="translate(-395 -2697)" fill="#1649fc"/></svg></div>
                  <div>22 Avril, 20:17</div>
                </div>                
                <div>
                  <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="rgba(255,255,255,0)"/><path d="M415.18,2635.35l-6.53-6.53a4.53,4.53,0,0,0-3.18-1.32H401a3.5,3.5,0,0,0-3.5,3.5v4.47a4.471,4.471,0,0,0,1.32,3.18l6.53,6.53a4.5,4.5,0,0,0,6.37,0l3.46-3.46A4.5,4.5,0,0,0,415.18,2635.35ZM402.5,2634a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,402.5,2634Z" transform="translate(-395 -2625)" fill="#1649fc"/></svg></div>
                  <div>Automobile</div>
                </div>                
              </div>
              <div>
                <div>
                  <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="rgba(255,255,255,0)"/><path d="M217,2779a2,2,0,1,1-2-2A2.006,2.006,0,0,1,217,2779Zm5.5,0c0,6.08-4.67,9.89-6.67,11.24a1.407,1.407,0,0,1-.83.26,1.459,1.459,0,0,1-.84-.26c-2-1.35-6.66-5.15-6.66-11.24a7.5,7.5,0,0,1,15,0Zm-3.5,0a4,4,0,1,0-4,4A4,4,0,0,0,219,2779Z" transform="translate(-203 -2769)" fill="#1649fc"/></svg></div>
                  <div>Marseille, France</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  @endsection
