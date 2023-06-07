$(document).ready(function() {
    $('.pageform').each(function() {
        var url = window.location.href;
        var slug = url.substring(0, url.lastIndexOf("/")).substring(url.substring(0, url.lastIndexOf("/")).lastIndexOf("/") + 1);
        var decodedString = decodeURIComponent(slug);
        console.log(decodedString);
        var action = $(this).find('button').text().toLowerCase();;
        this.setAttribute('action', `/admin/${decodedString}/${action}`);
    });
});
