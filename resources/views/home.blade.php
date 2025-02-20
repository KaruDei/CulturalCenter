<x-layout>
    <div class="flex flex-col">
        <div class="flex justify-center w-screen h-[600px] relative mt-[-80px]">
            <div id="next_btn" class="w-40 h-full bg-black absolute left-0 opacity-20 hover:opacity-50 cursor-pointer"></div>
            <div id="slider-item-1" class="bg-gray-500 w-full h-full flex justify-between gap-14"></div>
            <div id="slider-item-2" class=" bg-red-500 w-full h-full hidden"></div>
            <div id="slider-item-3" class=" bg-blue-500 w-full h-full hidden "></div>
            <div id="prev_btn" class="w-40 h-full bg-black absolute right-0 opacity-20 hover:opacity-50 cursor-pointer"></div>
        </div>

        <div class="flex flex-col container items-stretch ml-auto mr-auto">
                <h1 class="text-5xl font-medium text-teal-800 mb-10 mt-10 mx-auto ">Ближайшие мероприятия</h1>


                <div class="grid grid-cols-4 gap-5">

                    <a href="events/1" class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] text-center overflow-hidden group transition-transform duration-150">                     
                        <div  class="w-full h-[540px] bg-gray-500 relative group hover:top[200px] transition-transform duration-150"></div> <!-- этот див вместо картинки  -->
                        <div class=" z-50 relative top-0 bg-white">
                            <h2 class="mt-3 mb-3">Название</h2>
                            <p class="ml-5 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa earum nobis modi, beatae dolorum placeat consequuntur, dolore itaque consequatur, amet quas iste libero non obcaecati facere odit labore. Id.</p>      
                        </div>
                    </a>

                    <div class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] text-center overflow-hidden asdd">                     
                        <div  class="w-full h-[540px] bg-gray-500 relative"></div> <!-- этот див вместо картинки  -->
                        <div class="asd relative bg-white">
                            <h2 class="mt-3 mb-3">Название</h2>
                            <p class="ml-5 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa earum nobis modi, beatae dolorum placeat consequuntur, dolore itaque consequatur, amet quas iste libero non obcaecati facere odit labore. Id.</p>      
                        </div>
                    </div>

                    <div class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] text-center overflow-hidden asdd">                     
                        <div  class="w-full h-[540px] bg-gray-500 relative"></div> <!-- этот див вместо картинки  -->
                        <div class="asd relative bg-white">
                            <h2 class="mt-3 mb-3">Название</h2>
                            <p class="ml-5 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa earum nobis modi, beatae dolorum placeat consequuntur, dolore itaque consequatur, amet quas iste libero non obcaecati facere odit labore. Id.</p>      
                        </div>
                    </div>

                    <div class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] text-center overflow-hidden asdd">                     
                        <div  class="w-full h-[540px] bg-gray-500 relative"></div> <!-- этот див вместо картинки  -->
                        <div class="asd relative bg-white">
                            <h2 class="mt-3 mb-3">Название</h2>
                            <p class="ml-5 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa earum nobis modi, beatae dolorum placeat consequuntur, dolore itaque consequatur, amet quas iste libero non obcaecati facere odit labore. Id.</p>      
                        </div>
                    </div>

                    <div class=" bg-floral-white rounded-xl shadow-2xl max-w-4xl border border-amber-100  w-[400fr] h-[600px] text-center overflow-hidden asdd">                     
                        <div  class="w-full h-[540px] bg-gray-500 relative"></div> <!-- этот див вместо картинки  -->
                        <div class="asd relative bg-white">
                            <h2 class="mt-3 mb-3">Название</h2>
                            <p class="ml-5 mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi culpa earum nobis modi, beatae dolorum placeat consequuntur, dolore itaque consequatur, amet quas iste libero non obcaecati facere odit labore. Id.</p>      
                        </div>
                    </div>

                       
                </div>
        </div>

        <div class="flex justify-center h-[1000px] mt-20">
            <div class="h-full w-1/2 pt-64 md:pl-48 ">
                <h1 class="text-5xl text-center text-teal-700 md:text-7xl md:text-left">Станьте автором собственного мероприятия</h1>
                <button class=" text-4xl text-teal-700 shadow-2xl border-[5px] rounded-xl border-amber-300  w-[350px] h-[80px] flex flex-col items-center pt-3 mt-10 cursor-pointer hover:border-amber-200 hover:text-teal-400  transition-colors duration-300 ">
                    Создать
                </button>
            </div>
            <div class="h-full w-1/2 bg-gray-200 hidden md:block">
                <!-- этот див вместо картинки  -->
            </div>
        </div>

        <div class="flex flex-col container items-stretch mx-auto">

            <h1 class="text-5xl text-teal-700 mx-auto mt-20 mb-20">Наши Актеры</h1>

            <div class=""> 
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[300px] flex flex-row overflow-hidden mt-10 mb-10">
                        <div  class="w-1/3 h-full bg-gray-500"></div> <!-- этот див вместо картинки  -->
                        <div class="flex flex-col px-5 pt-5">
                            <h2 class="text-teal-700">Имя</h2>
                            <p class="text-teal-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odit numquam cupiditate rem, facilis porro aperiam, vel modi fuga suscipit repellat ipsam ut fugit totam! Mollitia harum nisi perferendis ad?</p>
                        </div>
                    </div>
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[300px] flex flex-row overflow-hidden mt-10 mb-10">
                        <div  class="w-1/3 h-full bg-gray-500"></div> <!-- этот див вместо картинки  -->
                        <div class="flex flex-col px-5 pt-5">
                            <h2 class="text-teal-700">Имя</h2>
                            <p class="text-teal-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odit numquam cupiditate rem, facilis porro aperiam, vel modi fuga suscipit repellat ipsam ut fugit totam! Mollitia harum nisi perferendis ad?</p>
                        </div>
                    </div>
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[300px] flex flex-row overflow-hidden mt-10 mb-10">
                        <div  class="w-1/3 h-full bg-gray-500"></div> <!-- этот див вместо картинки  -->
                        <div class="flex flex-col px-5 pt-5">
                            <h2 class="text-teal-700">Имя</h2>
                            <p class="text-teal-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odit numquam cupiditate rem, facilis porro aperiam, vel modi fuga suscipit repellat ipsam ut fugit totam! Mollitia harum nisi perferendis ad?</p>
                        </div>
                    </div>
                    <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[300px] flex flex-row overflow-hidden mt-10 mb-10">
                        <div  class="w-1/3 h-full bg-gray-500"></div> <!-- этот див вместо картинки  -->
                        <div class="flex flex-col px-5 pt-5">
                            <h2 class="text-teal-700">Имя</h2>
                            <p class="text-teal-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odit numquam cupiditate rem, facilis porro aperiam, vel modi fuga suscipit repellat ipsam ut fugit totam! Mollitia harum nisi perferendis ad?</p>
                        </div>
                    </div>

            </div>

        </div>

        <div class="flex flex-col container items-stretch mx-auto">

            <h1 class="text-5xl text-teal-700 mx-auto mt-20 mb-20"> Новости </h1>

            <div class="">

                <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[600px] grid grid-cols-2  overflow-hidden mt-10 mb-10 ">
                    <div  class="h-full bg-gray-500 overflow-hidden"></div> <!-- этот див вместо картинки  -->
                    <div class="flex flex-col px-5 pt-5 overflow-y-auto">
                        <h2 class="text-teal-700">Название новости</h2>
                        <p class="text-teal-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus odit numquam cupiditate rem, facilis porro aperiam, vel modi fuga suscipit repellat ipsam ut fugit totam! Mollitia harum nisi perferendis ad?
                        </p>
                    </div>
                </div>

            

                <div class="bg-floral-white rounded-xl shadow-2xl border border-amber-100 w-full h-[600px] grid grid-cols-2  overflow-hidden mt-10 mb-10 ">
                    <div  class="h-full bg-gray-500 overflow-hidden"></div> <!-- этот див вместо картинки  -->
                    <div class="flex flex-col px-5 pt-5 overflow-y-auto">
                        <h2 class="text-teal-700">Название новости</h2>
                        <p class="text-teal-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur error repellat tempore corrupti! Odit cumque facere nam adipisci, suscipit atque ducimus sunt beatae. Reiciendis, veniam corporis. Veniam, id      
                        </p>
                    </div>
                </div>
              

            </div>

        </div>
    </div>    

</x-layout> 