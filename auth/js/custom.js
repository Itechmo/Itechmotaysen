var url = window.location;
$('ul.nav a').filter(function (){
    return this.href == url;
}).parent().addclass('active');r