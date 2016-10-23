$( document ).ready(function() {
    var sections = $('.form-section');

    $("#next").click(function () {
        navigateTo(curIndex() + 1);
    });

    function curIndex() {
        var index = sections.index(sections.filter('.current'));
        console.log("Current section index : " + index);
        return index;
    }

    function navigateTo(index) {
        console.log("Next section index : " + index);
        sections.filter('.current').hide();
        sections.removeClass('current').eq(index).addClass('current');
        sections.filter('.current').show();

    }
});




