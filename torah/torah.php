<div x-data="{
    sefarim: [
        {
            id: 'berechit',
            name: 'Berechit - Genèse',
            url: './torah/berechit.json'
        },
        {
            id: 'chemot',
            name: 'Chemot - Exode',
            url: './torah/chemot.json'
        },
        {
            id: 'vayiqra',
            name: 'Vayiqra - Lévithique',
            url: './torah/vayiqra.json'
        },
        {
            id: 'bamidbar',
            name: 'Bamidbar - Nombres',
            url: './torah/bamidbar.json'
        },
        {
            id: 'devarim',
            name: 'Devarim - Deutéronome',
            url: './torah/devarim.json'
        }
    ]
}">
    <?php include 'sefer.php' ?>
</div>