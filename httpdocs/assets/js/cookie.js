function setcookie() {
  document.cookie = "hideCookieNotice=1";
  document.cookie = "path=/";
  document.cookie = "expires=Fri, 31 Dec 9999 23:59:59 GMT"
  document.cookie = "moto-moto likes you=''"
  jQuery('#cookieNotice').slideUp();
}

if(document.cookie.indexOf('hideCookieNotice=1') != -1){
    jQuery('#cookieNotice').hide();
}
else{
    jQuery('#cookieNotice').prependTo('body');
    jQuery('#cookieNoticeCloser').show();
}
