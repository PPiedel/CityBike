/**
 * Created by pawelpiedel on 22.11.16.
 */
var submit_btn = document.getElementById("submit-btn");
var reset_btn = document.getElementById("clear-btn");


var autoFocusedElementId = "surname";

focusOnElement(autoFocusedElementId);


function focusOnElement(autofocusedElement) {
    document.getElementById(autofocusedElement).focus();
}

submit_btn.onclick = function () {
    document.getElementById("contactForm").submit();
};

reset_btn.onclick = function () {
    document.getElementById("contactForm").reset();
};


