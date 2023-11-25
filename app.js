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
