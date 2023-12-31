<div x-data="{
    sefarim: [
        {
            id: 'berechit',
            name: 'Berechit - Genèse',
            resume: 'La création, le début de l\'humanité et les histoires des patriarches et des matriarches.',
            url: './torah/berechit.json'
        },
        {
            id: 'chemot',
            name: 'Chemot - Exode',
            resume: 'L\'esclavage des Israélites en Égypte, la rédemption miraculeuse, le don de la Torah et la construction du Mishkan (Tabernacle).',
            url: './torah/chemot.json'
        },
        {
            id: 'vayiqra',
            name: 'Vayiqra - Lévithique',
            resume: 'Lois du culte sacrificiel dans le Mishkan (tabernacle), la pureté rituelle et d\'autres sujets comme l\'agriculture, l\'éthique et les vacances.',
            url: './torah/vayiqra.json'
        },
        {
            id: 'bamidbar',
            name: 'Bamidbar - Nombres',
            resume: 'Des errances des Israélites dans le désert, le recensement, la rébellion, les espions et la guerre, entrecoupés de lois.',
            url: './torah/bamidbar.json'
        },
        {
            id: 'devarim',
            name: 'Devarim - Deutéronome',
            resume: 'Derniers discours de Moïse, rappelant les événements du désert, examinant les anciennes lois, introduisant de nouvelles et appelant à la fidélité à Dieu.',
            url: './torah/devarim.json'
        }
    ]
}">
    <?php include 'sefer.php' ?>
</div>