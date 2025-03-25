<x-index>
    <main class="text-center  h-full">
        <section class="bg-yellow-50">
            <h1>Em breve responsivo!</h1>
        </section>
        <section class="bg-[#ddd]">
            <div class="pb-20 ">
                <h1 class="pt-20 font-medium text-2xl">Olá, eu sou William</h1>
                <p class="mt-5 mb-10">Desenvolvedor Full Stack apaixonado por criar soluções web incríveis.</p>
                <a class="bg-[#333] text-sky-50 px-3 py-2 rounded-md" href="#">Ver Projetos</a>
                <img class="rounded-full m-auto pt-20" src="{{ asset('storage/images/william.png') }}" alt="Minha Imagem">
            </div>
        </section>
        <section class="bg-[#f4f4f4]">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-10 p-10">
                <img class="rounded-full m-50 pt-20" src="{{ asset('storage/images/barba.png') }}" alt="Minha Imagem">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-medium">Sobre Mim</h1>
                    <p class="mt-5 max-w-lg">
                        Sou gaúcho e moro em Santa Catarina. Comecei a praticar mesmo depois de um ano de curso, e então fui conhecer o Laravel. Desde então, estou codificando e sempre buscando aprender mais. Sigo praticando diariamente!
                    </p>
                </div>
            </div>
            <!--
                <div class="sm:pb-20 sm:flex flex-col">
                <img class="rounded-full m-50 pt-20 md:mr-auto md:ml-auto md:m-50"
                    src="{{ asset('storage/images/barba.png') }}" alt="Minha Imagem">
                <div class="pt-100 md:mr-auto md:ml-auto lg:pt-100 sm:pt-0">
                    <h1 class=" pt-20 font-medium text-2xl">Sobre Mim</h1>
                    <p class="mt-5 mb-10 w-lg md:mr-auto md:ml-auto">Sou gaucho e moro em santa catarina, começei a
                        praticar mesmo depois de
                        um ano de curso ai sim fui conhecer o laravel desde então estou codificando, espero ainda
                        aprender muito e assim sigo dia dia sempre praticando então acredito que seja quase uma
                        resimporna.</p>
                </div>
            </div>


            <div class="sm:flex sm:flex-row flex-col sm:pb-20">
                <img class="rounded-full sm:w-1/4 sm:mr-10 sm:mb-0 mb-10 mx-auto" src="{{ asset('storage/images/barba.png') }}" alt="Minha Imagem">
                <div class="pt-10 sm:pt-0 sm:w-3/4 text-center sm:text-left">
                    <h1 class="font-medium text-2xl">Sobre Mim</h1>
                    <p class="mt-5 mb-10">Sou gaucho e moro em Santa Catarina. Comecei a praticar desenvolvimento depois de um ano de curso e aí sim fui conhecer o Laravel. Desde então, estou codificando, espero ainda aprender muito e assim sigo, dia após dia, sempre praticando. Acredito que isso seja uma forma de evolução contínua.</p>
                </div>
            </div>
            -->
        </section>
        <section class="bg-[#eee]">
            <div>
                <h1 class="pt-20 font-medium text-2xl">Habilidades</h1>
                <div class="grid lg:grid-cols-5 gap-4 px-80 py-25 md:grid-cols-2">
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>HTML5</p>
                    </div>
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>CSS3</p>
                    </div>
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>Tailwind</p>
                    </div>
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>PHP</p>
                    </div>
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>Laravel</p>
                    </div>
                    <div class="bg-[#fff] p-5 rounded-lg">
                        <p>MySql</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-yellow-50">
            <h1>Projetos uso somente para teste!</h1>
        </section>
        <section class="bg-[#f4f4f4]">
            <div>
                <h1 class="pt-20 font-medium text-2xl">Projetos</h1>
                <div class="grid grid-cols-2 gap-4 px-50 py-25">
                    <div class="bg-[#fff] rounded-lg ">
                        <img class="rounded-t-md" src="{{ asset('storage/images/web01.png') }}" alt="Minha Imagem">
                        <h1 class=" mb-10">Projeto web 01</h1>
                        <p class="mb-5">Uma breve descrição do projeto.</p>
                        <a class="bg-[#333] text-sky-50 block px-3 py-2 rounded-b-md" href="#">Ver Projeto</a>
                    </div>
                    <div class="bg-[#fff] rounded-lg">
                        <img class="rounded-t-md" src="{{ asset('storage/images/web02.png') }}" alt="Minha Imagem">
                        <h1 class=" mb-10">Projeto web 02</h1>
                        <p class="mb-5">Uma breve descrição do projeto.</p>
                        <a class="bg-[#333] text-sky-50 block px-3 py-2 rounded-b-md" href="#">Ver Projeto</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-yellow-50">
            <h1>Formulario desativado!</h1>
        </section>
        <section class="bg-[#ddd] text-center">
            <div>
                <h1 class="pt-20 font-medium text-2xl">Contato</h1>
                <div class="w-2xl m-auto">
                    <form class="grid mt-20 pb-20" action="" method="post">
                        <label class="">Nome:</label>
                        <input class="bg-sky-50 border border-gray-50 w-full " type="text" />
                        <label class="mt-5">Email:</label>
                        <input class="bg-sky-50 border border-gray-50 w-full" type="text" />
                        <label class="mt-5">Mensagem:</label>
                        <textarea class="bg-sky-50 border border-gray-50 w-full" name="" id="" cols="30" rows="5"></textarea>
                        <a class="bg-[#333] text-sky-50 px-3 py-2 rounded-md w-24 mr-auto ml-auto mt-5"
                            href="">Enviar</a>

                    </form>
                </div>
            </div>
        </section>
    </main>
</x-index>
