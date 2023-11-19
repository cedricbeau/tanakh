<div x-data="{ currentSefer: 0 }">
    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <li><button @click="currentSefer = 1">Tehilim - Psaumes</button></li>
        <li><button @click="currentSefer = 2">Mishlei - Proverbes</button></li>
        <li><button @click="currentSefer = 3">Iyov - Job</button></li>
        <li><button @click="currentSefer = 4">Shir Hashirim - Cantique des cantiques</button></li>
        <li><button @click="currentSefer = 5">Routh - Ruth</button></li>
        <li><button @click="currentSefer = 6">Eikha - Lamentations</button></li>
        <li><button @click="currentSefer = 7">Qohelet - Ecclésiaste</button></li>
        <li><button @click="currentSefer = 8">Esther</button></li>
        <li><button @click="currentSefer = 9">Daniel</button></li>
        <li><button @click="currentSefer = 10">Ezra</button></li>
        <li><button @click="currentSefer = 11">Néhémie</button></li>
        <li><button @click="currentSefer = 12">Chroniques 1</button></li>
        <li><button @click="currentSefer = 13">Chroniques 2</button></li>
    </ul>
    <div x-show="currentSefer === 1">
        <h2>Tehilim - Psaumes</h2>
    </div>
    <div x-show="currentSefer === 2">
        <h2>Mishlei - Proverbes</h2>
    </div>
    <div x-show="currentSefer === 3">
        <h2>Iyov - Job</h2>
    </div>
    <div x-show="currentSefer === 4">
        <h2>Shir Hashirim - Cantique des cantiques</h2>
    </div>
    <div x-show="currentSefer === 5">
        <h2>Routh - Ruth</h2>
    </div>
    <div x-show="currentSefer === 6">
        <h2>Eikha - Lamentations</h2>
    </div>
    <div x-show="currentSefer === 7">
        <h2>Qohelet - Ecclésiaste</h2>
    </div>
    <div x-show="currentSefer === 8">
        <h2>Esther</h2>
    </div>
    <div x-show="currentSefer === 9">
        <h2>Daniel</h2>
    </div>
    <div x-show="currentSefer === 10">
        <h2>Ezra</h2>
    </div>
    <div x-show="currentSefer === 11">
        <h2>Néhémie</h2>
    </div>
    <div x-show="currentSefer === 12">
        <h2>Chroniques 1</h2>
    </div>
    <div x-show="currentSefer === 13">
        <h2>Chroniques 2</h2>
    </div>
</div>