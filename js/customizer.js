jQuery(document).ready(function($){

    /* Comment Display */

    // add multiple select styling
    $('#comment-display-control').multipleSelect({
        selectAll: false
    });

    // hide the display none option
    $.each($('.ms-drop.bottom').find('li'), function () {

        if ($(this).find('input').val() == 'none') {
            $(this).hide();
        }
    });

    // Don't show the "do not show" text
    function ctHideNoneText() {

        // hide the "Do not show" text from the list of selected options
        $('.ms-choice span:contains("Do not show")').each(function () {

            // remove the text
            $(this).html($(this).html().split("Do not show").join(""));

            // remove trailing commas left over
            if ($(this).html().trim().slice(-1) == ',') {
                $(this).html($(this).html().trim().slice(0, -1));
            }
            // text to display instead if empty
            if (!$(this).text().trim().length) {
                $(this).text("Comments not displaying");
            }
        });
    }
    ctHideNoneText();

    $('.ms-drop.bottom').find('li').bind('click', ctHideNoneText);

    /* Avatar Options */

    var panel = $('html', window.parent.document);
    var avatarSection = panel.find('#accordion-section-ct_author_avatar');

    function hideAvatarUpload() {
        var imageOption = avatarSection.find('input[value="upload"]');

        if( ! imageOption.prop('checked') ) {
            avatarSection.find('#customize-control-avatar').addClass('hide');
        }
        avatarSection.on('click', 'input', displayAvatarUpload);
    }
    hideAvatarUpload();

    function displayAvatarUpload() {

        if( $(this).val() === 'upload' ) {
            avatarSection.find('#customize-control-avatar').removeClass('hide');
        } else {
            avatarSection.find('#customize-control-avatar').addClass('hide');
        }
    }


});