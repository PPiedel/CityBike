
$( document ).ready(function() {
    var sections = $('.form-section');
    var step_wizards = $('.stepwizard-step-button');
    console.log("Sections length : "+sections.length);
    console.log("Steps length : "+step_wizards.length);


    $("#next").click(function () {
        navigateTo(curIndex() + 1);
    });

    $("#previous").click(function () {
        navigateTo(curIndex() - 1);
    });

    function curIndex() {
        return index = sections.index(sections.filter('.current'));
    }

    function navigateTo(index) {
        var previous = $('#previous');

        console.log("index : " + index);
        if (index==0){
            if(! previous.hasClass( "disabled" )){
                previous.addClass('disabled');
                console.log("Previous disabled");
            }
            switchFromCurrentSectionTo(index)
            makeStepWizardPrimary(index);
        }
        else if (index<sections.length){
            previous.removeClass('disabled');
            console.log("Previous enabled");
            switchFromCurrentSectionTo(index);
            makeStepWizardPrimary(index);
        }
    }

    function switchFromCurrentSectionTo(index) {
        sections.filter('.current').hide();
        sections.removeClass('current').eq(index).addClass('current');
        sections.filter('.current').show();
    }

    function makeStepWizardPrimary(index) {
        step_wizards.removeClass('btn-primary').eq(index).addClass('btn-primary');
    }

});



