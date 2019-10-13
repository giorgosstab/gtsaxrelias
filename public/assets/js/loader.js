$(function() {
    prettyPrint();
    function resetToDefaults() {
        topbar.config({
            autoRun      : true,
            barThickness : 3,
            barColors    : {
                // '0'      : 'rgba(26,  188, 156, .9)',
                // '.25'    : 'rgba(52,  152, 219, .9)',
                // '.50'    : 'rgba(241, 196, 15,  .9)',
                // '.75'    : 'rgba(230, 126, 34,  .9)',
                // '1.0'    : 'rgba(211, 84,  0,   .9)'
                '0'      : 'rgba(255,  81, 47, .9)',
                '.25'    : 'rgba(221,  36, 118, .9)',
                '.50'    : 'rgba(255,  81, 47, .9)',
                '.75'    : 'rgba(221,  36, 118, .9)',
                '1.0'    : 'rgba(255,  81, 47, .9)'
            },
            shadowBlur   : 10,
            shadowColor  : 'rgba(0,   0,   0,   .6)'
        })
    }

    // Page load
    resetToDefaults();
    topbar.show();
    setTimeout(function() {
        $('#main_content').fadeIn('slow');
        topbar.hide()
    }, 1500);
});
