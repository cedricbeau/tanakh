const DateTime = luxon.DateTime;

const dtHb = DateTime.now().reconfigure({ outputCalendar: "hebrew" }).toLocaleString({month: 'long', day: 'numeric', year: 'numeric'});
const cleanDtHb = dtHb.replace('A. M.', '')
document.getElementById('dtHb').innerText = cleanDtHb;

const dtFr = DateTime.now().setLocale('fr').toLocaleString(DateTime.DATE_FULL);
document.getElementById('dtFr').innerText = dtFr;

///
/*
const options = {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
};

const currentDate = new Date().toLocaleDateString('fr', options);
console.log('currentDate :', currentDate);
*/

document.addEventListener('alpine:init', () => {
    Alpine.data('torah', () => ({
        title: '',
        text: [],
        chapter: 0,
        open: false,

        /**
         *
         */
        loadSefer(defaultSefer) {
            fetch(defaultSefer)
            .then(response => response.json())
            .then(json => {
                this.title = json.title;
                this.text = json.text;
            })
        },

        /**
         *
         */
        openSefer() {
            this.open = true;
            document.body.classList.add('overflow-y-hidden');
        },

        /**
         *
         */
        closeSefer() {
            this.open = false;
            this.text = [];
            this.chapter = 0;
            document.body.classList.remove('overflow-y-hidden');
        },

        /**
         *
         */
        toggleChapter (index) {
            this.chapter = index;
        },

        /**
         *
         */
        chapterActive (chapter) {
            return chapter === this.chapter;
        },

        /**
         *
         */
        prevHandler: function(e) {
            if (this.chapter == 0) {
                this.toggleChapter(this.text.length - 1);
            } else {
                this.toggleChapter(this.chapter - 1);
            }
        },

        /**
         *
         */
        nextHandler: function(e) {
            if (this.chapter == this.text.length - 1) {
                this.toggleChapter(1);
            } else {
                this.toggleChapter(this.chapter + 1);
            }
        }
    }));
});