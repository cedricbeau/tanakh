<div x-data="torah()"
     x-init="loadSefer()">

    <?php // Sefarim list ?>
    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <template x-for="(sefer, index) in sefarim" :key="sefer.id">
            <li :id="sefer.id">
                <button
                    :data-sefer="'sefer-' + sefer.id"
                    @click="loadSefer(sefarim[index].url); openSefer()"
                    x-text="sefer.name"></button>
            </li>
        </template>
    </ul>

    <?php // Sefer ?>
    <div x-show="open"
         class="fixed top-14 bottom-0 inset-x-0 h-[calc(100%-theme(space.14))] overflow-y-auto bg-white">
         <div class="flex justify-end w-screen max-w-[80ch] px-4 mx-auto mt-clamp">
            <button
                @click="closeSefer()"
                class="p-2 border border-slate-200 rounded text-slate-400"><svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M810.65984 170.65984q18.3296 0 30.49472 12.16512t12.16512 30.49472q0 18.00192-12.32896 30.33088l-268.67712 268.32896 268.67712 268.32896q12.32896 12.32896 12.32896 30.33088 0 18.3296-12.16512 30.49472t-30.49472 12.16512q-18.00192 0-30.33088-12.32896l-268.32896-268.67712-268.32896 268.67712q-12.32896 12.32896-30.33088 12.32896-18.3296 0-30.49472-12.16512t-12.16512-30.49472q0-18.00192 12.32896-30.33088l268.67712-268.32896-268.67712-268.32896q-12.32896-12.32896-12.32896-30.33088 0-18.3296 12.16512-30.49472t30.49472-12.16512q18.00192 0 30.33088 12.32896l268.32896 268.67712 268.32896-268.67712q12.32896-12.32896 30.33088-12.32896z"  /></svg></button>
         </div>
         <div class="w-screen max-w-[80ch] h-full px-4 mx-auto my-clamp">
            <?php // Sefer name ?>
            <h2 class="mb-4 text-2xl" x-text="title"></h2>

            <?php // Chapters list ?>
            <ol class="flex flex-wrap gap-2">
                <template x-for="(chapters, index) in text" :key="index">
                    <li class="w-10 h-10">
                        <button
                            :data-chapter="'chapter-' + index"
                            @click="toggleChapter"
                            class="grid place-content-center w-10 h-10 text-clampSm"
                            :class="chapterActive('chapter-' + index) ? 'bg-blueIsrael text-white' : 'bg-slate-50 text-inherit'"
                            x-text="index + 1"></button>
                    </li>
                </template>
            </ol>

            <?php // Chapters content ?>
            <template x-for="(chapters, index) in text" :key="index">
                <template x-if="chapterActive('chapter-' + index)">
                    <div class="chapter-container my-4">
                        <h3 class="chapter-title my-4 text-xl">Chapitre  <span x-text="index + 1"></span></h3>
                        <div class="verses-container">
                            <template x-for="(chapter, index) in chapters" :key="index">
                                <p x-text="chapter"
                                    class="verse mb-2"></p>
                            </template>
                        </div>
                    </div>
                </template>
            </template>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {

        Alpine.data('torah', () => ({

            title: '',
            text: [],
            chapter: '',
            open: false,

            loadSefer(defaultSefer) {
                fetch(defaultSefer)
                .then(response => response.json())
                .then(json => {
                    this.title = json.title;
                    this.text = json.text;
                })
            },

            openSefer() {
                this.open = true;
                document.body.classList.add('overflow-y-hidden');
            },

            closeSefer() {
                this.open = false;
                this.text = [];
                this.chapter = '';
                document.body.classList.remove('overflow-y-hidden');
            },

            toggleChapter (e) {
                this.chapter = e.target.dataset.chapter;
            },

            chapterActive (chapter) {
                return chapter === this.chapter;
            }
        }));
    });
</script>