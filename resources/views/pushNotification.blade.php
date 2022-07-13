<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Firebase Push Notification to Android and IOS App Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('notification') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Notification</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    // Import the functions you need from the SDKs you need
    import {initializeApp} from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
    import {getAnalytics} from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyD-P8oQ5fnwDIJsetrLmZItm55_pMCFxXg",
        authDomain: "push-notification-b5bac.firebaseapp.com",
        projectId: "push-notification-b5bac",
        storageBucket: "push-notification-b5bac.appspot.com",
        messagingSenderId: "75946099069",
        appId: "1:75946099069:web:3ac4b668675db393848c14",
        measurementId: "G-NE3DFY0G6W"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);

    //firebase.initializeApp(firebaseConfig);

    const messaging = app.messaging();

    function initFirebaseMessagingRegistration() {
        messaging.requestPermission().then(function () {
            return messaging.getToken()
        }).then(function (token) {

            axios.post("{{ route('fcmToken') }}", {
                _method: "PATCH",
                token
            }).then(({data}) => {
                console.log(data)
            }).catch(({response: {data}}) => {
                console.error(data)
            })

        }).catch(function (err) {
            console.log(`Token Error :: ${err}`);
        });
    }

    initFirebaseMessagingRegistration();

    messaging.onMessage(function ({data: {body, title}}) {
        new Notification(title, {body});
    });
</script>
</body>
</html>
