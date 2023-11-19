$(function() {

    const baseUrl = window.location.origin+window.location.pathname;

    $(document).on('click', '.navigation a', function(){
        const selector = this.getAttribute('href');
        const selectorCleaned = selector.replace('#', '');

        $('#custom').empty();

        $('#content').empty();
        $('#content').load(`./tehilims/${selectorCleaned}.php`);

        $('.navigation a').removeClass('active');
        $(this).addClass('active');
        $(selector).addClass('active');


        $('.sub-navigation').addClass('active');

        $('.sublink-psaume').addClass('active');
        $('.sublink-traduction').removeClass('active');
    });


    $('.sublink').each(function(){
        $(this).on('click', function(){
            const selector = this.getAttribute('href');

            $('.sublink').removeClass('active');
            $(this).addClass('active');
            $('.tehilim-block.active').removeClass('active');
            $(`.tehilim ${selector}`).addClass('active');
        });
    });


    $('select').on('change', function() {

        const selectedValue = this.value;

        $('#select').empty();
        $('#content').empty();

        if(selectedValue === 'custom') {
            $('.sub-navigation').removeClass('active');
            $('#custom').load(`./navigation.php`);
        } else if (selectedValue === 'select') {
            $('#custom').empty();
            $('#select').load(`./select.php`);
        } else {
            $('#custom').empty();
            $('#content').load(`./tehilims/${selectedValue}.php`);
            $('.sub-navigation').addClass('active');
        }

        $('.sublink-psaume').addClass('active');
        $('.sublink-traduction').removeClass('active');
    })
});

document.addEventListener('', function() {
    
})