<div x-data="torah()"
     x-init="loadSefer()">

    <?php // Sefarim list ?>
    <ul class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-6">
        <template x-for="(sefer, index) in sefarim" :key="sefer.id">
            <li :id="sefer.id"
                class="pb-4 mb-4 border-b border-slate-200 last:border-b-0 last:mb-0 last:pb-0">
                <button
                    :data-sefer="'sefer-' + sefer.id"
                    @click="loadSefer(sefarim[index].url); openSefer()"
                    class="group text-left">
                    <span class="block mb-1.5 font-serif text-lg font-medium text-slate-800" x-text="sefer.name"></span>
                    <span class="text-sm transition-colors group-hover:text-slate-400" x-text="sefer.resume"></span>
                </button>
            </li>
        </template>
    </ul>

    <?php // Sefer ?>
    <div x-show="open"
         x-ref="top"
         class="fixed top-14 bottom-0 inset-x-0 h-[calc(100%-theme(space.14))] overflow-y-auto bg-white">
         <?php // Close Sefer ?>
         <div class="flex justify-end w-screen max-w-[80ch] px-4 mx-auto mt-clamp">
            <button
                @click="closeSefer()"
                class="p-2 border border-slate-200 rounded text-slate-400 hover:border-slate-300 hover:text-slate-500 transition-colors"><svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M810.65984 170.65984q18.3296 0 30.49472 12.16512t12.16512 30.49472q0 18.00192-12.32896 30.33088l-268.67712 268.32896 268.67712 268.32896q12.32896 12.32896 12.32896 30.33088 0 18.3296-12.16512 30.49472t-30.49472 12.16512q-18.00192 0-30.33088-12.32896l-268.32896-268.67712-268.32896 268.67712q-12.32896 12.32896-30.33088 12.32896-18.3296 0-30.49472-12.16512t-12.16512-30.49472q0-18.00192 12.32896-30.33088l268.67712-268.32896-268.67712-268.32896q-12.32896-12.32896-12.32896-30.33088 0-18.3296 12.16512-30.49472t30.49472-12.16512q18.00192 0 30.33088 12.32896l268.32896 268.67712 268.32896-268.67712q12.32896-12.32896 30.33088-12.32896z"  /></svg></button>
         </div>
         <div class="w-screen max-w-[80ch] h-full px-4 mx-auto my-clamp">
            <?php // Sefer name ?>
            <h2 class="mb-6 font-serif text-2xl" x-text="title"></h2>

            <?php // Chapters list ?>
            <ol class="flex flex-wrap gap-2">
                <template x-for="(chapters, index) in text" :key="index">
                    <li class="w-10 h-10">
                        <button
                            @click="toggleChapter(index)"
                            class="grid place-content-center w-10 h-10 text-sm transition-colors hover:bg-slate-100"
                            :class="chapterActive(index) ? 'bg-slate-200' : 'bg-slate-50 text-inherit'"
                            x-text="index + 1"></button>
                    </li>
                </template>
            </ol>

            <?php // Chapters content ?>
            <template x-for="(chapters, index) in text" :key="index">
                <template x-if="chapterActive(index)">
                    <div class="my-6">
                        <h3 class="my-6 font-serif text-xl">Chapitre  <span x-text="index + 1"></span></h3>
                        <div class="verses-container">
                            <template x-for="(chapter, index) in chapters" :key="index">
                                <p x-text="chapter"
                                   class="verse mb-2"></p>
                            </template>
                        </div>
                        <div class="flex justify-center items-center pt-8 mt-8 border-t border-slate-200">
                            <button @click="prevHandler"
                                    :class="index == 0 ? 'opacity-0 pointer-events-none' : 'opacity-100 pointer-events-auto'"
                                    class="p-2 text-sm border border-slate-200 rounded">Précédent</button>
                            <span class="mx-auto"><span x-text="index+1"></span>/<span x-text="text.length"></span></span>
                            <button @click="nextHandler"
                                    :class="index == text.length - 1 ? 'opacity-0 pointer-events-none' : 'opacity-100'"
                                    class="p-2 text-sm border border-slate-200 rounded">Suivant</button>
                        </div>
                        <div class="flex justify-center pt-8 mt-8 border-t border-slate-200">
                            <button @click="$refs.top.scrollTo({top: 0, behavior: 'smooth'})"
                            class="py-2.5 px-4 border border-slate-200 rounded text-sm transition-colors hover:border-slate-400">Retour en haut de page</button>
                        </div>
                    </div>
                </template>
            </template>
        </div>
    </div>
</div>