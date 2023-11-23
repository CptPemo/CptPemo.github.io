
function checkCookiesAndLoad() {
  if (getCookie('cookieAccepted')) {
    loadGoogleAnalytics();
  } else if (getCookie('cookieRejected')) {
    // Falls das Cookie für die Ablehnung vorhanden ist, führe hier entsprechende Aktionen aus
    // Zum Beispiel: Hier könntest du entscheiden, Analytics nicht zu laden oder andere Maßnahmen ergreifen
  } else {
    // Falls keine Cookie-Zustimmung vorhanden ist, zeige das Popup
    var cookiePopup = document.getElementById('cookiePopup');
    if (cookiePopup) {
      cookiePopup.style.display = 'block';
    }
  }
}

function acceptCookies() {
  document.getElementById('cookiePopup').style.display = 'none';
  setCookie('cookieAccepted', 'true', 365); // Setze das Cookie für die Zustimmung
  loadGoogleAnalytics();
}

function rejectCookies() {
  document.getElementById('cookiePopup').style.display = 'none';
  setCookie('cookieRejected', 'true', 365); // Setze das Cookie für die Ablehnung
}

function loadGoogleAnalytics() {
  if (getCookie('cookieAccepted')) {
    var gaScript = document.createElement('script');
    gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-MD769R1DSS'; // Ersetze DEINE_ANALYTICS_ID durch deine eigene Tracking-ID
    gaScript.async = true;
    document.head.appendChild(gaScript);

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-MD769R1DSS'); // Ersetze DEINE_ANALYTICS_ID durch deine eigene Tracking-ID
  }
}

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

function setCookie(name, value, days) {
  var expires = '';
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = '; expires=' + date.toUTCString();
  }
  document.cookie = name + '=' + value + expires + '; path=/';
}

document.addEventListener('DOMContentLoaded', function() {
  checkCookiesAndLoad();
});

