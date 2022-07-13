importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyD-P8oQ5fnwDIJsetrLmZItm55_pMCFxXg",
    projectId: "push-notification-b5bac",
    messagingSenderId: "75946099069",
    appId: "1:75946099069:web:3ac4b668675db393848c14",
});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function ({data: {title, body, icon}}) {
    return self.registration.showNotification(title, {body, icon});
});
