// Funktionen für Zustimmung und Ablehnung von Cookies
function acceptCookies() {
    document.getElementById('cookiePopup').style.display = 'none';
    // Hier kannst du den Code einfügen, der die Zustimmung speichert (z.B., Setzen eines Cookies)
  }
  
  function rejectCookies() {
    document.getElementById('cookiePopup').style.display = 'none';
    // Hier kannst du den Code einfügen, um bestimmte Cookies zu blockieren oder die Verwendung zu beschränken
  }
  
  // Prüfen, ob das Popup bereits angezeigt wurde
  document.addEventListener('DOMContentLoaded', function() {
    var cookiePopup = document.getElementById('cookiePopup');
    if (!getCookie('cookieAccepted')) {
      cookiePopup.style.display = 'block';
    }
  });
  
  // Funktion zum Setzen von Cookies (vereinfacht)
  function setCookie(name, value, days) {
    var expires = '';
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
  }
  
  // Funktion zum Abrufen von Cookies (vereinfacht)
  function getCookie(name) {
    var nameEQ = name + '=';
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      while (cookie.charAt(0) === ' ') {
        cookie = cookie.substring(1, cookie.length);
      }
      if (cookie.indexOf(nameEQ) === 0) {
        return cookie.substring(nameEQ.length, cookie.length);
      }
    }
    return null;
  }
  