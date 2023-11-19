<div x-data="{ currentSefer: 0 }">
<ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <li><button @click="currentSefer = 1">Yehoshoua - Josué</button></li>
        <li><button @click="currentSefer = 2">Shoftim - Juges</button></li>
        <li><button @click="currentSefer = 3">Shemouel 1 - Samuel 1</button></li>
        <li><button @click="currentSefer = 4">Shemouel 2 - Samuel 2</button></li>
        <li><button @click="currentSefer = 5">Melakhim 1 - Rois 1</button></li>
        <li><button @click="currentSefer = 6">Melakhim 2 - Rois 2</button></li>
        <li><button @click="currentSefer = 7">Yeshayahou - Isaïe</button></li>
        <li><button @click="currentSefer = 8">Yrmeyahou - Jérémie</button></li>
        <li><button @click="currentSefer = 9">Yehezqel - Ézéchiel</button></li>
        <li><button @click="currentSefer = 10">Hoshéa - Osée</button></li>
        <li><button @click="currentSefer = 11">Yoël - Joël</button></li>
        <li><button @click="currentSefer = 12">Amos</button></li>
        <li><button @click="currentSefer = 13">Ovadia - Abdias</button></li>
        <li><button @click="currentSefer = 14">Yona - Jonas</button></li>
        <li><button @click="currentSefer = 15">Mikha - Michée</button></li>
        <li><button @click="currentSefer = 16">Nahoum - Nahum</button></li>
        <li><button @click="currentSefer = 17">'Havaqouq - Habacuc</button></li>
        <li><button @click="currentSefer = 18">Tsephania - Sophonie</button></li>
        <li><button @click="currentSefer = 19">Haggaï - Aggée</button></li>
        <li><button @click="currentSefer = 20">Zekharia - Zacharie</button></li>
        <li><button @click="currentSefer = 21">Malakhi - Malachie</button></li>
    </ul>
    <div x-show="currentSefer === 1">
        <h2>Yehoshoua - Josué</h2>
    </div>
    <div x-show="currentSefer === 2">
        <h2>Shoftim - Juges</h2>
    </div>
    <div x-show="currentSefer === 3">
        <h2>Shemouel 1 - Samuel 1</h2>
    </div>
    <div x-show="currentSefer === 4">
        <h2>Shemouel 2 - Samuel 2</h2>
    </div>
    <div x-show="currentSefer === 5">
        <h2>Melakhim 1 - Rois 1</h2>
    </div>
    <div x-show="currentSefer === 6">
        <h2>Melakhim 2 - Rois 2</h2>
    </div>
    <div x-show="currentSefer === 7">
        <h2>Yeshayahou - Isaïe</h2>
    </div>
    <div x-show="currentSefer === 8">
        <h2>Yrmeyahou - Jérémie</h2>
    </div>
    <div x-show="currentSefer === 9">
        <h2>Yehezqel - Ézéchiel</h2>
    </div>
    <div x-show="currentSefer === 10">
        <h2>Hoshéa - Osée</h2>
    </div>
    <div x-show="currentSefer === 11">
        <h2>Yoël - Joël</h2>
    </div>
    <div x-show="currentSefer === 12">
        <h2>Amos</h2>
    </div>
    <div x-show="currentSefer === 13">
        <h2>Ovadia - Abdias</h2>
    </div>
    <div x-show="currentSefer === 14">
        <h2>Yona - Jonas</h2>
    </div>
    <div x-show="currentSefer === 15">
        <h2>Mikha - Michée</h2>
    </div>
    <div x-show="currentSefer === 16">
        <h2>Nahoum - Nahum</h2>
    </div>
    <div x-show="currentSefer === 17">
        <h2>'Havaqouq - Habacuc</h2>
    </div>
    <div x-show="currentSefer === 18">
        <h2>Tsephania - Sophonie</h2>
    </div>
    <div x-show="currentSefer === 19">
        <h2>Haggaï - Aggée</h2>
    </div>
    <div x-show="currentSefer === 20">
        <h2>Zekharia - Zacharie</h2>
    </div>
    <div x-show="currentSefer === 21">
        <h2>Malakhi - Malachie</h2>
    </div>
</div>