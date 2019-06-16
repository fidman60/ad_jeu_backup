
/*
document.getElementById("parentPopup").addEventListener('click',function (e) {
    e.preventDefault();
    e.stopPropagation();
    if (e.target === e.currentTarget)
        document.getElementById("parentPopup").style.display = "none";
});
*/

const parentRegle = document.getElementById('parentRegle');
if (parentRegle){
    parentRegle.addEventListener('click',function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (e.target === e.currentTarget)
            document.getElementById("parentRegle").style.display = "none";
    });
}

const regelementLink = document.getElementById("regelementLink");
if (regelementLink) {
    regelementLink.addEventListener('click',function (e) {
        e.preventDefault();
        document.getElementById("parentRegle").style.display = "block";
    });
}

const parentMentionLegal = document.getElementById('parentMentionLegal');
if (parentMentionLegal){
    parentMentionLegal.addEventListener('click',function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (e.target === e.currentTarget)
            document.getElementById("parentMentionLegal").style.display = "none";
    });
}

const mentionLegalLink = document.getElementById("mentionLegalLink");
if (mentionLegalLink) {
    mentionLegalLink.addEventListener('click',function (e) {
        e.preventDefault();
        document.getElementById("parentMentionLegal").style.display = "block";
    });
}

$(document).ready(function(){
    $("input").click(function(){
        $(this).next().show();
        $(this).next().hide();
    });
});