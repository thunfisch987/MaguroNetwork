function setcookie() {
  document.cookie = "hideCookieNotice=1; SameSite=Lax; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
  jQuery('#cookieNotice').slideUp();
}

if(document.cookie.indexOf('hideCookieNotice=1') != -1){
  jQuery('#cookieNotice').hide();
}
else{
  jQuery('#cookieNotice').prependTo('body');
  jQuery('#cookieNoticeCloser').show();
}
