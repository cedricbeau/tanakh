<header
    x-data="{ pages: [
        {
            name: 'Home',
            url: './index.php'
        },
        {
            name: 'Tehilim',
            url: './tehilim.php'
        }
    ]}"
    class="flex justify-center items-center h-14 py-2.5 px-4 bg-blueIsrael">
    <ul class="flex gap-4">
        <template x-for="(page, index) in pages" :key="index">
            <li>
                <a
                    :href="page.url"
                    :title="page.name"
                    class="py-1 px-4 text-clampSm text-white border border-white rounded hover:bg-white hover:text-blueIsrael hover:border-white"
                    x-text="page.name"></a>
            </li>
        </template>
    </ul>
</header>