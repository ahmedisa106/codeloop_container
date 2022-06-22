<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/dashboard')}}/images/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/dashboard')}}/images/favicon-icon.png" type="image/x-icon">
    <title>Dashboard</title>
    @include('admin.includes.css')
</head>

<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>
<!-- page-wrapper Start-->
<section class="bg-login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="login-card">
                    <form data-role="validator" data-on-error-input="notifyOnErrorInput"
                          data-show-error-hint="false" action="{{route('company.login')}}" method="post"
                          class="theme-form login-form">
                        @csrf
                        <h4>تسجيل الدخول</h4>
                        <div class="form-group">
                            <label>تسجيل الدخول كـ</label>
                            <div class="input-group flex-select">
                                        <span class="input-group-text">
                                            <i class="icon-list"></i>
                                        </span>
                                <select data-validate-func="required" required="" data-validatehint="النوع مطلوب"
                                        name="type" class="form-control" id="">
                                    <option value="company">مؤسسة</option>
                                    <option value="moderator">مشرف</option>
                                    <option value="employee">مندوب</option>
                                    <option value="employee">سائق</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>رقم الهاتف</label>
                            <div class="input-group">
                            <span class="input-group-text">
                                <i class="icon-mobile"></i>
                            </span>

                                <input data-validate-func="required" data-validatehint="رقم الهاتف مطلوب" name="phone"
                                       class="form-control" type="number" required="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>كلمة المرور</label>
                            <div class="input-group">
                            <span class="input-group-text">
                                <i class="icon-lock"></i>
                            </span>
                                <input data-validate-func="required" data-validatehint="كلمه المرور مطلوبه"
                                       class="form-control" type="password" name="password" required="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">تسجيل دخول</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <style>
                    svg#freepik_stories-computer-login:not(.animated) .animable {
                        opacity: 0;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Character--inject-10 {
                        animation: 3s Infinite linear wind;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Device--inject-10 {
                        animation: 3s Infinite linear floating;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Screen--inject-10 {
                        animation: 3s Infinite linear floating;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--window--inject-10 {
                        animation: 3s Infinite linear floating;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Padlock--inject-10 {
                        animation: 3s Infinite linear floating;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Asterisks--inject-10 {
                        animation: 3s Infinite linear wind;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Key--inject-10 {
                        animation: 3s Infinite linear wind;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-computer-login.animated #freepik--Pen--inject-10 {
                        animation: 3s Infinite linear wind;
                        animation-delay: 0s;
                    }

                    @keyframes wind {
                        0% {
                            transform: rotate(0deg);
                        }

                        25% {
                            transform: rotate(1deg);
                        }

                        75% {
                            transform: rotate(-1deg);
                        }
                    }

                    @keyframes floating {
                        0% {
                            opacity: 1;
                            transform: translateY(0px);
                        }

                        50% {
                            transform: translateY(-10px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0px);
                        }
                    }

                </style>
                <svg class="animated svg-login" id="freepik_stories-computer-login" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 500 500" version="1.1">
                    <!-- <g id="freepik--Floor--inject-10" class="animable" style="transform-origin: 249.995px 349.719px;">
                        <path id="freepik--floor--inject-10"
                            d="M77.66,250.21c-95.18,55-95.17,144,0,199s249.49,55,344.67,0,95.17-144,0-199S172.84,195.26,77.66,250.21Z"
                            style="fill: rgb(250, 250, 250); transform-origin: 249.995px 349.719px;" class="animable">
                        </path>
                    </g> -->
                    <g id="freepik--Shadows--inject-10" class="animable" style="transform-origin: 247.3px 359.035px;">
                        <path id="freepik--Shadow--inject-10"
                              d="M45.51,385.36l154.15,89a14.55,14.55,0,0,0,13.17,0L445,340.32c3.64-2.1,3.64-5.51,0-7.61l-154.15-89a14.55,14.55,0,0,0-13.17,0l-232.17,134C41.87,379.85,41.87,383.26,45.51,385.36Z"
                              style="fill: rgb(213 227 242); transform-origin: 245.255px 359.035px;" class="animable">
                        </path>
                        <path id="freepik--shadow--inject-10"
                              d="M115.58,473.9l-8.41-4.9.41-3.09-2.84-1.6-6.67-.61L93.44,461l-.25-5.94-2.47-1.44-7.2,1.6-9.35-5.44a49.93,49.93,0,0,1-10,1h0c-8,0-15.59-1.84-21.32-5.18-6.21-3.61-9.62-8.58-9.6-14s3.46-10.35,9.7-13.92c5.66-3.24,13.12-5,21-5s15.6,1.84,21.34,5.18c5.43,3.16,8.79,7.49,9.46,12.18a13,13,0,0,1-1.84,8.57l50.23,29.24L132.43,474ZM51.91,427.27a2.47,2.47,0,0,0,.77.62,9.33,9.33,0,0,0,8.14,0,2.23,2.23,0,0,0,.77-.62,2.26,2.26,0,0,0-.76-.62,9.35,9.35,0,0,0-8.15,0A2.47,2.47,0,0,0,51.91,427.27Z"
                              style="fill: rgb(213 227 242); transform-origin: 88.195px 443.34px;" class="animable">
                        </path>
                        <ellipse id="freepik--shadow--inject-10" cx="414.88" cy="297.47" rx="46.47" ry="26.83"
                                 style="fill: rgb(213 227 242); transform-origin: 414.88px 297.47px;" class="animable">
                        </ellipse>
                    </g>
                    <g id="freepik--Character--inject-10" class="animable"
                       style="transform-origin: 397.388px 187.793px;">
                        <g id="freepik--character--inject-10" class="animable"
                           style="transform-origin: 397.388px 187.793px;">
                            <g id="freepik--Bottom--inject-10" class="animable"
                               style="transform-origin: 409.966px 231.482px;">
                                <path
                                    d="M443.72,286c-.73-9.82.4-17.35-.44-32.68h0c-.07-3.93-.22-8.14-.49-11.88-.92-12.58-2.92-16.88-3.11-19.31,0,0-.35-26.3-1.2-53.83-.4-12.95-4.28-16.88-7.38-23.75H394.28c-4.12,17-5.29,54-5.17,71.44.07,8.92,3.08,55.87,3.15,57,.26,3.89-.09,5.43-1.66,7.06-3.3,3.43-8.09,6.69-12.22,9.68.6,1.53,6.28,2.2,8.74,1A62.18,62.18,0,0,0,396.3,285c3.39-2.43,7.74-4.38,7.79-8.09a3,3,0,0,1,.12-.66c.06-2.16,5.27-34.06,5.7-41.46a169.53,169.53,0,0,0-.42-17.17l4.24-27s2.62,22.66,5.27,33.54c2.15,8.85,5.7,24,8.13,34.86h0c2.33,12.56,5.75,21.5,6.34,27.78.18,1.5,1.93,16.23,2.66,19.61s8.32,3.46,8.8-2.34C445.26,300.27,443.86,287.8,443.72,286Z"
                                    style="fill: rgb(255, 189, 167); transform-origin: 411.68px 226.643px;"
                                    id="eluhyh4m819l8" class="animable"></path>
                                <path
                                    d="M413.73,190.68l-3.1-19.44s-12-1.38-16.35-5.44c0,0,5.49,7.51,13.63,8.74l3.42,16.12-1.81,26.75Z"
                                    style="fill: rgb(240, 153, 122); transform-origin: 404.005px 191.605px;"
                                    id="elfyx3wnaqv48" class="animable"></path>
                                <path
                                    d="M372.05,294.29a3.11,3.11,0,0,0,.58,3.21c1.31,1.11,5.16,3,10.28,2.37s7.9-2.09,10-3.73,4.95-3.94,7.27-4.41a14.22,14.22,0,0,0,5.19-2c.7-.63.63-3.49.63-3.49Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 388.919px 293.118px;"
                                    id="el33894u0wdv2" class="animable"></path>
                                <path
                                    d="M404.31,275.22s.39,0,.51.68.3,3.08.62,4.38a22.62,22.62,0,0,1,.43,7c-.3,1.46-3.82,2.44-6.06,3.24a28.56,28.56,0,0,0-7.3,4.36,21.65,21.65,0,0,1-10.83,3.78c-5.09,0-8.37-1.35-9.37-3.13-1.23-2.21-.94-4.19,4.94-6.76,1.11-.48,5-2.67,6.35-3.46a29.57,29.57,0,0,0,4-2.83,22.21,22.21,0,0,0,1.81-1.69,7.82,7.82,0,0,0,1.5-1.81c.06-.15.11-.32.17-.48a7.71,7.71,0,0,0,.4-1.32c.1-.47.16-1.16.63-1.43a4,4,0,0,1,2.09-.22,26,26,0,0,1,3.16.63,3,3,0,0,1,2.16,1.5,4,4,0,0,1,.45,2.05c0,.33,0,.67,0,1,0,.14-.06.39.14.34s.42-.55.5-.72c.16-.37.27-.76.45-1.12a5.54,5.54,0,0,1,1.68-2.1,11.27,11.27,0,0,0,1-.61A2.22,2.22,0,0,0,404.31,275.22Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 388.847px 286.94px;"
                                    id="el6asx6jh1yi3" class="animable"></path>
                                <path
                                    d="M376.3,289.15c7.36.56,10.34,5.72,10.62,8.45a18.27,18.27,0,0,1-5.24,1c-5.09,0-8.58-1.35-9.58-3.13C370.94,293.4,371.06,291,376.3,289.15Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 379.212px 293.875px;"
                                    id="el5oeasbpt8ll" class="animable"></path>
                                <path
                                    d="M388,290.06a.37.37,0,0,0,.23-.07.34.34,0,0,0,.06-.49c-1-1.23-4.66-3.6-7.34-3.34a.34.34,0,0,0-.32.38.35.35,0,0,0,.39.31c2.5-.23,5.91,2.11,6.71,3.08A.34.34,0,0,0,388,290.06Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 384.498px 288.1px;"
                                    id="ellgczwjigrqh" class="animable"></path>
                                <path
                                    d="M391.24,288.31a.35.35,0,0,0,.22-.08.34.34,0,0,0,.06-.49c-1-1.23-4.66-3.6-7.34-3.34a.35.35,0,1,0,.07.69c2.5-.23,5.91,2.11,6.71,3.09A.37.37,0,0,0,391.24,288.31Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 387.708px 286.345px;"
                                    id="elww7yogi5wp" class="animable"></path>
                                <path
                                    d="M394.2,286.29a.33.33,0,0,0,.23-.07.34.34,0,0,0,.05-.49c-1-1.23-4.67-3.6-7.34-3.34a.36.36,0,0,0-.32.38.35.35,0,0,0,.39.31c2.5-.23,5.91,2.11,6.71,3.08A.34.34,0,0,0,394.2,286.29Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 390.691px 284.331px;"
                                    id="el3qrj9v0pcib" class="animable"></path>
                                <path
                                    d="M397.1,284.28a.35.35,0,0,0,.29-.56c-1.39-1.74-5.28-3.64-7.95-3.38a.36.36,0,0,0-.33.38.36.36,0,0,0,.4.31,10.43,10.43,0,0,1,7.31,3.12A.37.37,0,0,0,397.1,284.28Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 393.285px 282.298px;"
                                    id="eld50uyv5dbzq" class="animable"></path>
                                <path
                                    d="M433.74,309.1c.2,3.36.74,5.59,2,7.56s3.56,2.59,5.92,2,5.37-2.13,6-5a17.77,17.77,0,0,0,.54-8Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 441.084px 312.267px;"
                                    id="elemna1v5z60p" class="animable"></path>
                                <path
                                    d="M443.64,284.75c1,.07,1.26,4.59,1.82,9.11.6,4.84,2.09,6.85,2.63,10.82.61,4.54-.17,6.57-1.81,9.31s-7.46,5.44-10.33,1.51c-2.33-3.21-2.43-6.76-2.22-11.29a97.36,97.36,0,0,0-.31-11.49c-.19-3.4-1-6.82-.12-7.2.06.5.12,1.13.19,1.62a7.9,7.9,0,0,0,.32,1.81c.1.25.31.52.4.11a2.69,2.69,0,0,0,0-.85c-.14-1.25.51-1.35.86-1.45a41.83,41.83,0,0,1,4.5-.61c.74,0,3.3-.16,3.63.25a2.66,2.66,0,0,1,.33,1.31c.08.68.25,1.18.27,1,0-.49-.05-1.76-.07-2.07s-.06-.7-.06-1S443.66,285,443.64,284.75Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 440.597px 301.112px;"
                                    id="elno47aaq88wl" class="animable"></path>
                                <path
                                    d="M448.35,307.31a11,11,0,0,1-1.81,6.9c-1.64,2.74-7.93,5.44-10.79,1.51a12.58,12.58,0,0,1-2-6.62C435.46,306.07,445.64,304.73,448.35,307.31Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 441.065px 311.819px;"
                                    id="elnymglrw2j2" class="animable"></path>
                                <path
                                    d="M435.86,304.16l.12,0a17,17,0,0,1,8.9-.84.36.36,0,0,0,.43-.26.36.36,0,0,0-.27-.42,17.42,17.42,0,0,0-9.37.89.34.34,0,0,0-.17.46A.36.36,0,0,0,435.86,304.16Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 440.391px 303.263px;"
                                    id="elfo7970frd3p" class="animable"></path>
                                <path
                                    d="M444.66,299.91a.34.34,0,0,0,.3-.24.34.34,0,0,0-.22-.44c-4.35-1.42-9.18.72-9.36.81a.34.34,0,0,0-.15.47.37.37,0,0,0,.48.15s4.75-2.1,8.8-.77A.39.39,0,0,0,444.66,299.91Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 440.084px 299.72px;"
                                    id="elaofo1us1wdi" class="animable"></path>
                                <path
                                    d="M444.51,296.72a.36.36,0,0,0,.3-.23.35.35,0,0,0-.22-.45,13.16,13.16,0,0,0-9.54.78.35.35,0,0,0-.12.48.37.37,0,0,0,.5.12s4.46-2.26,8.92-.72A.41.41,0,0,0,444.51,296.72Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 439.855px 296.48px;"
                                    id="elae5uva3x4ui" class="animable"></path>
                                <path
                                    d="M444.27,293.58a.36.36,0,0,0,.3-.23.34.34,0,0,0-.21-.44c-4.48-1.63-9.42.77-9.6.87a.35.35,0,0,0-.13.48.35.35,0,0,0,.49.13s4.82-2.34,9-.83A.41.41,0,0,0,444.27,293.58Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 439.587px 293.393px;"
                                    id="el7hfn9o5jrzp" class="animable"></path>
                                <path
                                    d="M433.67,144.5c4.36,7.7,6.71,14,7.16,36.9s-.32,36.14-.23,38.9,1.76,7.7,3.21,21.3-.26,29.81-.26,29.81-1,2.18-6.38,2.65c-5,.43-7.41-1.37-7.41-1.37S423,246.2,421.08,238s-7.35-41.85-7.35-41.85L410.49,218s1.51,7.51,0,19.43-4.18,24.15-4.18,24.15a22.82,22.82,0,0,1-7.61,1.2,17.24,17.24,0,0,1-7.43-1.84s-3.46-35.33-3.46-48.85,1-48,4.2-68Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 416.102px 209.108px;"
                                    id="elnng0qx3z5k" class="animable"></path>
                                <path
                                    d="M394.77,164.27c2.11,5.58,9.77,9.49,13.14,10.27l3.95,21.33L410.49,218l3.24-21.85-4.43-26S400,169.52,394.77,164.27Zm32-2.73c.55,2.2,1,4.4,1.58,6.61s1.05,4.42,1.61,6.64a43.44,43.44,0,0,0-.46-6.84c-.31-2.27-.75-4.51-1.28-6.74a58.74,58.74,0,0,0-2-6.58,32.11,32.11,0,0,0-3-6.2c.71,2.18,1.34,4.35,1.93,6.54S426.19,159.34,426.72,161.54Zm4-4.22c.76,1.32,1.48,2.66,2.21,4l2.15,4.1a17.88,17.88,0,0,0-1.09-4.55,28.09,28.09,0,0,0-2-4.24,33.93,33.93,0,0,0-2.59-3.91,25,25,0,0,0-3.2-3.47c.7,1.41,1.46,2.75,2.22,4.08S430,156,430.69,157.32Zm-3.5,68.45c-1.35-7-2.32-20.8-3.26-27.89s-1.84-14.18-2.86-21.27c.45,7.14,1,14.28,1.71,21.4s1.62,21,3,28,2.85,14,4.37,21,3.09,14,4.78,21q-1.68-10.62-3.64-21.17C430,239.82,428.57,232.77,427.19,225.77Zm-33.62-30.51,1.2-18.65c-1,6.16-1.76,12.35-2.36,18.56s-1.12,12.41-1.14,18.71c.21,6.28.71,12.47,1.23,18.68s1.17,12.42,1.93,18.61q-.27-9.34-.77-18.68l-.48-9.33c-.17-3.1-.36-6.22-.43-9.3s.14-6.18.29-9.29S393.39,198.36,393.57,195.26Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 413.24px 208.22px;"
                                    id="elf1kk0uc6umo" class="animable"></path>
                            </g>
                            <g id="freepik--Top--inject-10" class="animable"
                               style="transform-origin: 397.388px 117.506px;">
                                <path id="freepik--Arm--inject-10"
                                      d="M402.5,101.09c-5.83.91-9,2.83-11.63,10.41-1.81,5.18-7.48,20.65-7.48,20.65l-22.83,18.29,8.92,7.44s17.21-9.49,21.79-12.92c2.07-1.55,3.28-3.37,5.34-8.05s5.71-12.33,7.39-17.31Z"
                                      style="fill: rgb(255, 189, 167); transform-origin: 382.28px 129.485px;"
                                      class="animable"></path>
                                <path id="freepik--Chest--inject-10"
                                      d="M438.58,155.7c-1.6-7.32-3.43-13.17-3.42-14.79.08-7,1.92-16.25,2.53-20.33,1.33-8.88-.74-16.07-2.81-17.82,0,0-2.91-.71-8.2-2.46-1.5-.49-.58-.21-2.93-.54a53.06,53.06,0,0,0-11.86-.33c-1,.1-5.52.89-5.52.89-1.38.32-3.87.77-3.87.77a28.85,28.85,0,0,0-6.14,7.86c-2.25,4-3.53,7.39-3.93,16-.51,11-2.37,24.19-2.37,31.85C399.15,162.4,426.85,162.54,438.58,155.7Z"
                                      style="fill: rgb(69, 90, 100); transform-origin: 414.32px 130.082px;"
                                      class="animable"></path>
                                <g id="freepik--Head--inject-10" class="animable"
                                   style="transform-origin: 414.041px 81.1334px;">
                                    <path id="freepik--Hair--inject-10"
                                          d="M426.41,65.91c.37-6.17-11.4-13.35-22.94-6.25s-7.72,14.48-7,16.71a23.18,23.18,0,0,1,1.21,5.76,8.22,8.22,0,0,1-1.24,5.11,3.58,3.58,0,0,1-4.34,1.26c.44,2.76,2.17,4.84,6.44,6.38a11.22,11.22,0,0,0,5.47.26c-.6.46-1.48,1.18-4.21,1.21,1.82,2.05,8.35,3.87,14-.17a1.55,1.55,0,0,1,.93-.18,3.39,3.39,0,0,1,1.1.36c2.74,1.18,6.17.73,9,0a12.54,12.54,0,0,0,4.4-1.91,6.66,6.66,0,0,0,2.64-3.91,6.17,6.17,0,0,1-.36,4.21,8,8,0,0,0,2.81-1.56,6.38,6.38,0,0,0,1.55-5.49,21.17,21.17,0,0,0-2-5.57,14.39,14.39,0,0,1-1.62-6.23,22.08,22.08,0,0,0-.24-4.45C431.44,68.45,429.66,66.1,426.41,65.91Z"
                                          style="fill: rgb(38, 50, 56); transform-origin: 414.041px 77.6506px;"
                                          class="animable"></path>
                                    <path
                                        d="M423.29,97.05c0-1.46.19-8.76.19-8.76.06.55,2.71,2,5.07-.79s2.52-5.8,1.09-7.7c-1.57-2.11-5.06-2-6.44,1.46-1,1.24-2.81-.19-2-3.55-.22-2.35-3.61-4.89-1.8-8.87-6.71-4.43-14.34-4.11-18.42-.59a39.63,39.63,0,0,0-1.59,12.88c.29,7.75,2.37,11.48,4.85,12.78,1.66.87,3.17,1.07,6.07.82l-.13,2.44h0c-.06,1.21.05,2.12-1.13,2.52-.79.26-2.68.63-2.68.63s-2.75,4.76,4.84,5.18c12.11.68,15.47-5.2,15.47-5.2l-1.36-.54C423.41,99,423.31,98.5,423.29,97.05Z"
                                        style="fill: rgb(255, 189, 167); transform-origin: 414.955px 85.5588px;"
                                        id="el0k3v54kwq1w" class="animable"></path>
                                    <path
                                        d="M410.31,94.73c5.2-.53,10.17-2.25,11.34-4.62a4.69,4.69,0,0,1-2.09,3.83c-2.95,1.75-9.35,2.63-9.35,2.63Z"
                                        style="fill: rgb(240, 153, 122); transform-origin: 415.93px 93.34px;"
                                        id="el1k0r5wlq73i" class="animable"></path>
                                    <path d="M412.7,85.56,408.12,87a2.37,2.37,0,0,0,3,1.64A2.53,2.53,0,0,0,412.7,85.56Z"
                                          style="fill: rgb(177, 102, 104); transform-origin: 410.459px 87.1548px;"
                                          id="el0np2g3k6wrv" class="animable"></path>
                                    <path
                                        d="M412.41,86.62a2.64,2.64,0,0,0-2.64,2.07,2.32,2.32,0,0,0,1.33,0,2.46,2.46,0,0,0,1.66-2C412.64,86.65,412.53,86.62,412.41,86.62Z"
                                        style="fill: rgb(242, 143, 143); transform-origin: 411.265px 87.7033px;"
                                        id="el7puq6vtx0zm" class="animable"></path>
                                    <path
                                        d="M401.78,72.58l3.18-.8A1.57,1.57,0,0,0,403,70.56,1.72,1.72,0,0,0,401.78,72.58Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 403.351px 71.5417px;"
                                        id="el1g0pvs6bzzw" class="animable"></path>
                                    <path d="M415.73,73.1,412.6,72a1.59,1.59,0,0,1,2.07-1A1.74,1.74,0,0,1,415.73,73.1Z"
                                          style="fill: rgb(38, 50, 56); transform-origin: 414.198px 71.9996px;"
                                          id="elut9b7rt5tlp" class="animable"></path>
                                    <path
                                        d="M405,77.21a1.4,1.4,0,0,1-1.26,1.49,1.32,1.32,0,0,1-1.47-1.2,1.41,1.41,0,0,1,1.26-1.5A1.32,1.32,0,0,1,405,77.21Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 403.635px 77.35px;"
                                        id="elm748r3ycw9e" class="animable"></path>
                                    <path
                                        d="M414.88,77.43a1.41,1.41,0,0,1-1.26,1.49,1.32,1.32,0,0,1-1.47-1.2,1.41,1.41,0,0,1,1.26-1.5A1.32,1.32,0,0,1,414.88,77.43Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 413.515px 77.57px;"
                                        id="el98cf7ccynuv" class="animable"></path>
                                    <path d="M419.23,74l8.24,4.48a3.43,3.43,0,0,0-2.56.56L419,75.85Z"
                                          style="fill: rgb(69, 90, 100); transform-origin: 423.235px 76.52px;"
                                          id="elj2tc0azgqnk" class="animable"></path>
                                    <path
                                        d="M397.69,76c.59,1,.51,2.8,1.08,3.92.65,2.28,4.79,3.53,6.93,1.23a4.7,4.7,0,0,0,.81-1.33c.53-1.21.38-2.92,1.26-3.12,2.44-.33.38,6.15,7,5.73,3.23-.16,3.83-3.25,4.13-5.72.13-.71.71-.85.77-1.74s-.68-1.15-1.38-1.16a21,21,0,0,0-6.55.06c-2,.58-2.7,1.23-3.83,1.22s-1.74-.68-3.66-1.28a18,18,0,0,0-6.55-.18C396.71,73.85,397.17,75.52,397.69,76Zm12.7-.14c1.38-1.62,6.15-1.73,7.16-.68.56.63.2,2.83-.07,3.87,0,.12-.08.25-.13.38a3.16,3.16,0,0,1-3.22,2.09,3.63,3.63,0,0,1-2.76-1.07,4,4,0,0,1-1-1.83A4.11,4.11,0,0,1,410.39,75.82Zm-8.8-1.5c3.69.35,5.14,1.2,4.08,4.91C405.31,81,402.79,82,401,81a4.14,4.14,0,0,1-1.92-2.94C398.39,75.12,398.55,74.34,401.59,74.32Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 408.395px 77.9311px;"
                                        id="elfkol3j3f71l" class="animable"></path>
                                    <path d="M404,82.34l4.33,2,.69-6.67a1.78,1.78,0,0,0-.51-.84Z"
                                          style="fill: rgb(240, 153, 122); transform-origin: 406.51px 80.585px;"
                                          id="elsk1xk8l05e" class="animable"></path>
                                </g>
                                <g id="freepik--Laptop--inject-10" class="animable"
                                   style="transform-origin: 378.391px 150.87px;">
                                    <path
                                        d="M414.57,162.68v.81a2.27,2.27,0,0,1-1.13,2L391.71,178a2.35,2.35,0,0,1-1.15.3,2.28,2.28,0,0,1-1.13-.3l-39.88-23a2.28,2.28,0,0,1-1.14-2v-.55l42.15,24.32Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 381.49px 165.375px;"
                                        id="el7sd1q7y57jm" class="animable"></path>
                                    <path
                                        d="M348.41,152.45,372,138.79a1.37,1.37,0,0,1,1.36,0l41,23.67a.3.3,0,0,1,0,.52l-23.86,13.79Z"
                                        style="fill: rgb(55, 71, 79); transform-origin: 381.46px 157.69px;"
                                        id="ele2u4dk76dmh" class="animable"></path>
                                    <polygon
                                        points="390.78 174.76 403.53 167.4 366.24 145.89 353.42 153.21 390.78 174.76"
                                        style="fill: rgb(38, 50, 56); transform-origin: 378.475px 160.325px;"
                                        id="el55yuq84elbc" class="animable"></polygon>
                                    <polygon
                                        points="397.04 154.3 396.81 154.44 390.56 158.05 379.44 151.63 379.21 151.5 385.69 147.76 397.04 154.3"
                                        id="elj2qz72qnubr" class="animable"
                                        style="transform-origin: 388.125px 152.905px;"></polygon>
                                    <polygon
                                        points="396.81 154.44 390.56 158.05 379.44 151.63 385.69 148.02 396.81 154.44"
                                        style="fill: rgb(38, 50, 56); transform-origin: 388.125px 153.035px;"
                                        id="elacbmm9ejak5" class="animable"></polygon>
                                    <path
                                        d="M390.56,176.77v1.51a2.28,2.28,0,0,1-1.13-.3l-39.88-23a2.28,2.28,0,0,1-1.14-2v-.55Z"
                                        id="elgj98nepln6l" class="animable"
                                        style="transform-origin: 369.485px 165.355px;"></path>
                                    <path
                                        d="M389.92,177.1a2.67,2.67,0,0,1-2.32-.18L347.89,154a2.66,2.66,0,0,1-1.31-1.89l-4.36-25.91a3.25,3.25,0,0,1,0-.44,2.66,2.66,0,0,1,.8-1.92l41.25,23.8a2,2,0,0,1,1,1.4Z"
                                        style="fill: rgb(55, 71, 79); transform-origin: 366.066px 150.562px;"
                                        id="elzcobv1g7fgf" class="animable"></path>
                                    <path
                                        d="M390.56,176.77l-.27.15a2.53,2.53,0,0,1-.37.18l-4.71-28a2,2,0,0,0-1-1.4L343,123.86a2.35,2.35,0,0,1,.55-.42l41.34,23.85a2,2,0,0,1,1,1.39Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 366.78px 150.27px;"
                                        id="eljmv994lipal" class="animable"></path>
                                    <path
                                        d="M367.56,153.19a8.77,8.77,0,0,0-4-5.15c-1.92-1.1-3.23-.6-2.94,1.14a8.79,8.79,0,0,0,4,5.15C366.53,155.43,367.85,154.92,367.56,153.19Z"
                                        style="fill: rgb(16, 83, 156); transform-origin: 364.09px 151.184px;"
                                        id="elrxg9n1i1pp" class="animable"></path>
                                </g>
                                <g id="freepik--arm--inject-10" class="animable"
                                   style="transform-origin: 420.987px 132.67px;">
                                    <path
                                        d="M452.34,139.49a198.66,198.66,0,0,0-4.9-26.27c-1.53-6.59-3.68-8.08-12.56-10.46-2.34,3.73-1.88,18.88-.42,23.77l2.67,12.84a116,116,0,0,1-11.6,6.07c-5,2.18-8.06,3.2-13.23,2.67s-7.17-1.14-10.05-.58c-1.53.3-5,1-6.25,1.31s-3.59,1.85-5.69,2.77-.05,2.2,1.36,2.11a17.27,17.27,0,0,0,4.38-1.05,24.51,24.51,0,0,1,3.69-.54,20.4,20.4,0,0,0-1.6,3.8c-.17.73-.52,1.57,0,2.24a5.51,5.51,0,0,0,1.38,1,1.12,1.12,0,0,0,.14.77,1.88,1.88,0,0,0,1.22.62,5.93,5.93,0,0,0,.76,0,1.38,1.38,0,0,0,.58,1.23,6,6,0,0,0,3.07.79c.16,0,1.45-.39,1.82-.5a3,3,0,0,0,1.3-.46c.33-.32-.18-1.35-.75-1.57a6,6,0,0,0-2-.31,7.09,7.09,0,0,0,1-1.57c.72-.74,4.4,1,8,1.16,2.69.13,5.12-1.92,6.4-2.18,8.21-1.71,14.43-2.8,23-5.67C451.76,148.87,453.21,147,452.34,139.49Z"
                                        style="fill: rgb(255, 189, 167); transform-origin: 420.987px 132.67px;"
                                        id="el2h45j95zgkv" class="animable"></path>
                                    <path d="M399,152.21c.61-.89,1.48-1.92,2.29-2a8.85,8.85,0,0,0-1.57,1.94Z"
                                          style="fill: rgb(242, 143, 143); transform-origin: 400.145px 151.21px;"
                                          id="el77096cfavtj" class="animable"></path>
                                    <path
                                        d="M399.51,159.13a8.33,8.33,0,0,1,.4-2.15,20.9,20.9,0,0,1,.75-2,9.64,9.64,0,0,1,1-2,4,4,0,0,1,1.66-1.42,3,3,0,0,0-.78.73,6.48,6.48,0,0,0-.61.87,14.25,14.25,0,0,0-.92,1.93c-.29.66-.56,1.33-.83,2A18.22,18.22,0,0,0,399.51,159.13Z"
                                        style="fill: rgb(242, 143, 143); transform-origin: 401.415px 155.345px;"
                                        id="eltjfd897rg9p" class="animable"></path>
                                    <path
                                        d="M401.63,160.57a10,10,0,0,1,.46-2.1,18,18,0,0,1,.78-2,13.89,13.89,0,0,1,1-1.9,4.16,4.16,0,0,1,1.47-1.56,2.58,2.58,0,0,0-.67.8c-.19.3-.36.61-.52.92-.32.63-.63,1.26-.92,1.91C402.66,157.93,402.1,159.22,401.63,160.57Z"
                                        style="fill: rgb(242, 143, 143); transform-origin: 403.485px 156.79px;"
                                        id="elei2a7wvxlbh" class="animable"></path>
                                    <path
                                        d="M407.65,160.06a3.52,3.52,0,0,0-.9-.07c-.29,0-.52.1-.89.13l.19-.19a1,1,0,0,1-.15.4,1,1,0,0,1-.27.28,1.23,1.23,0,0,1-.68.25,3,3,0,0,0,.48-.46c.06-.08.1-.17.15-.25a.93.93,0,0,0,.06-.24v-.16l.18,0a2.49,2.49,0,0,1,.86,0A1.7,1.7,0,0,1,407.65,160.06Z"
                                        style="fill: rgb(242, 143, 143); transform-origin: 406.3px 160.286px;"
                                        id="elaenpncggj19" class="animable"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--speech-bubble--inject-10" class="animable"
                       style="transform-origin: 363.055px 84.9498px;">
                        <g id="freepik--speech-bubble--inject-10" class="animable"
                           style="transform-origin: 363.055px 84.9498px;">
                            <g id="freepik--speech-bubble--inject-10" class="animable"
                               style="transform-origin: 363.055px 84.9498px;">
                                <path
                                    d="M347.09,58.09l27.34,15.82c.54.31,1,1.07,1,2.53v33.23c0,.46-.19.57-.52.76l-2.43,1.39a2.16,2.16,0,0,1-1.95,0L343.16,96a2.16,2.16,0,0,1-1-1.69V60.89a2.13,2.13,0,0,1,1-1.68l2-1.13A2.21,2.21,0,0,1,347.09,58.09Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 358.795px 84.9579px;"
                                    id="elvdlsrke3hi" class="animable"></path>
                                <g id="el02ey1owb61l1">
                                    <path
                                        d="M347.09,58.09l27.34,15.82c.54.31,1,1.07,1,2.53v33.23c0,.46-.19.57-.52.76l-2.43,1.39a2.16,2.16,0,0,1-1.95,0L343.16,96a2.16,2.16,0,0,1-1-1.69V60.89a2.13,2.13,0,0,1,1-1.68l2-1.13A2.21,2.21,0,0,1,347.09,58.09Z"
                                        style="opacity: 0.2; transform-origin: 358.795px 84.9579px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M342.2,60.71c.08-.49.48-.67,1-.39L370.5,76.14a2,2,0,0,1,.69.73l3.91-2.27a1.93,1.93,0,0,0-.67-.69L347.09,58.09a2.18,2.18,0,0,0-2,0l-2,1.13A2.16,2.16,0,0,0,342.2,60.71Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 358.65px 67.3586px;"
                                    id="el290xllgkqna" class="animable"></path>
                                <g id="elo8cmvxudqaj">
                                    <path
                                        d="M342.2,60.71c.08-.49.48-.67,1-.39L370.5,76.14a2,2,0,0,1,.69.73l3.91-2.27a1.93,1.93,0,0,0-.67-.69L347.09,58.09a2.18,2.18,0,0,0-2,0l-2,1.13A2.16,2.16,0,0,0,342.2,60.71Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 358.65px 67.3586px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M380,99.3c.62-.37,3.37-1.92,3.52-2a.92.92,0,0,0,.19-1.4l-8.3-9.52-3.93,2.27,8.69,9.28A.93.93,0,0,1,380,99.3Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 377.715px 92.84px;"
                                    id="elqpg96kbxo9" class="animable"></path>
                                <g id="el2etaaqj1b9z">
                                    <path
                                        d="M380,99.3c.62-.37,3.37-1.92,3.52-2a.92.92,0,0,0,.19-1.4l-8.3-9.52-3.93,2.27,8.69,9.28A.93.93,0,0,1,380,99.3Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 377.715px 92.84px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M343.16,60.32l27.35,15.82a2.18,2.18,0,0,1,1,1.69V88.65l8.69,9.28a.88.88,0,0,1-.56,1.5l-8.13-.6h0v12.42c0,.62-.44.87-1,.56L343.16,96a2.16,2.16,0,0,1-1-1.69V60.89C342.19,60.27,342.62,60,343.16,60.32Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 361.309px 86.0638px;"
                                    id="elpz1fe1gri8" class="animable"></path>
                            </g>
                            <g id="freepik--Check--inject-10" class="animable"
                               style="transform-origin: 357.799px 86.7269px;">
                                <path
                                    d="M353.69,95.55l-.28,0a2.11,2.11,0,0,1-1.62-1.19l-3.37-7.1a2.1,2.1,0,0,1,3.8-1.78l2,4.17,9.63-11.22A2.1,2.1,0,0,1,367,81.15L355.28,94.82A2.11,2.11,0,0,1,353.69,95.55Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 357.799px 86.7269px;"
                                    id="el9sqpeavr1zw" class="animable"></path>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--Plants--inject-10" class="animable" style="transform-origin: 455.798px 297.733px;">
                        <g id="freepik--plants--inject-10" class="animable"
                           style="transform-origin: 455.798px 297.733px;">
                            <path
                                d="M443.41,331.71l-8.61-5s-5.13-21.31-3.09-40.48c2.87-26.95,20.62-37.09,27.36-34.77s8.7,10.17-2.46,26.22C450,287.18,441.93,306.91,443.41,331.71Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 447.892px 291.425px;"
                                id="elqbv0yyxf51k" class="animable"></path>
                            <g id="eljsb93havhq">
                                <g style="opacity: 0.65; transform-origin: 447.892px 291.425px;" class="animable">
                                    <path
                                        d="M443.41,331.71l-8.61-5s-5.13-21.31-3.09-40.48c2.87-26.95,20.62-37.09,27.36-34.77s8.7,10.17-2.46,26.22C450,287.18,441.93,306.91,443.41,331.71Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 447.892px 291.425px;"
                                        id="ell10vhnoivx" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M439.84,321.25h.08a.6.6,0,0,0,.48-.7c-4.72-24.86,4-52.79,14.71-64.42a.59.59,0,0,0,0-.84.6.6,0,0,0-.84,0c-10.95,11.84-19.81,40.23-15,65.45A.59.59,0,0,0,439.84,321.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 446.607px 288.184px;"
                                id="elzf3cf054u2s" class="animable"></path>
                            <path
                                d="M465.09,344.23c1.29.66,4.71-2.27,5.66-3a11.75,11.75,0,0,0,3.74-4.75,11.14,11.14,0,0,0,.66-6.77,25.88,25.88,0,0,0-1-3.53L473,322.77a8.7,8.7,0,0,1-.69-3.47c.19-2.38,2.21-4.15,4.05-5.68,2-1.69,4.13-3.9,4-6.75a10.08,10.08,0,0,0-2.82-5.85c-1.45-1.66-3.15-3.11-4.47-4.87a7,7,0,0,1-1.66-4.36,7.39,7.39,0,0,1,.82-2.82c.92-1.91,2.16-3.68,2.75-5.71s.38-4.52-1.26-5.87c-1.33-1.1-3.24-1.17-5-1a11.38,11.38,0,0,0-4.49,1.84c-4.4,2.75-6.72,8.25-11.43,10.43A47,47,0,0,1,447,290.4c-1.91.61-3.83,1.7-4.64,3.53-1.58,3.62,1.91,7.8.86,11.6-.93,3.37-4.09,4.8-5.74,7.88a7.09,7.09,0,0,0-.63,4.38,20.91,20.91,0,0,0,2.2,7.23,64.77,64.77,0,0,0,4.35,6.69S464.89,344.13,465.09,344.23Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 458.554px 310.323px;"
                                id="elev6ywwcbwyw" class="animable"></path>
                            <g id="el8qo8au9x4mw">
                                <g style="opacity: 0.3; transform-origin: 458.554px 310.323px;" class="animable">
                                    <path
                                        d="M465.09,344.23c1.29.66,4.71-2.27,5.66-3a11.75,11.75,0,0,0,3.74-4.75,11.14,11.14,0,0,0,.66-6.77,25.88,25.88,0,0,0-1-3.53L473,322.77a8.7,8.7,0,0,1-.69-3.47c.19-2.38,2.21-4.15,4.05-5.68,2-1.69,4.13-3.9,4-6.75a10.08,10.08,0,0,0-2.82-5.85c-1.45-1.66-3.15-3.11-4.47-4.87a7,7,0,0,1-1.66-4.36,7.39,7.39,0,0,1,.82-2.82c.92-1.91,2.16-3.68,2.75-5.71s.38-4.52-1.26-5.87c-1.33-1.1-3.24-1.17-5-1a11.38,11.38,0,0,0-4.49,1.84c-4.4,2.75-6.72,8.25-11.43,10.43A47,47,0,0,1,447,290.4c-1.91.61-3.83,1.7-4.64,3.53-1.58,3.62,1.91,7.8.86,11.6-.93,3.37-4.09,4.8-5.74,7.88a7.09,7.09,0,0,0-.63,4.38,20.91,20.91,0,0,0,2.2,7.23,64.77,64.77,0,0,0,4.35,6.69S464.89,344.13,465.09,344.23Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 458.554px 310.323px;"
                                        id="eld73e2efot3w" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M452.62,337.73h0a.57.57,0,0,0,.52-.61c-2.07-22.36,7.24-47.63,14.56-55.21a.56.56,0,0,0,0-.79.57.57,0,0,0-.8,0c-7.46,7.73-17,33.42-14.87,56.09A.56.56,0,0,0,452.62,337.73Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 459.795px 309.343px;"
                                id="eljw14tvkeoin" class="animable"></path>
                            <path
                                d="M454.84,310.16a.51.51,0,0,0,.17,0,75.79,75.79,0,0,1,16.13-3.44.57.57,0,0,0,.51-.62.55.55,0,0,0-.62-.51,77.43,77.43,0,0,0-16.41,3.51.57.57,0,0,0-.34.72A.56.56,0,0,0,454.84,310.16Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 462.951px 307.876px;"
                                id="elhazsdrgptik" class="animable"></path>
                        </g>
                    </g>
                    <g id="freepik--Device--inject-10" class="animable" style="transform-origin: 242.04px 253.378px;">
                        <g id="freepik--laptop--inject-10" class="animable"
                           style="transform-origin: 242.04px 253.378px;">
                            <path
                                d="M50.22,374c0,3.68,2.75,8.24,6.14,10.2l143.69,83a13.56,13.56,0,0,0,12.28,0L436.48,337.71c3.39-2,6.14-6.52,6.14-10.19s-2.75-8.24-6.14-10.2l-143.69-83a13.56,13.56,0,0,0-12.28,0L56.36,363.77C53,365.73,50.22,370.29,50.22,374Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 246.42px 350.76px;" id="elk9r46iji6ln"
                                class="animable"></path>
                            <path
                                d="M54.74,371.39l143.69,83a13.56,13.56,0,0,0,12.28,0L434.86,325c3.39-2,3.39-5.13,0-7.09l-143.7-83a13.54,13.54,0,0,0-12.27,0L54.74,364.31C51.35,366.26,51.35,369.44,54.74,371.39Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 244.8px 344.65px;" id="el7k8opt88exd"
                                class="animable"></path>
                            <path
                                d="M206.2,455.3v13.29a12.58,12.58,0,0,1-6.14-1.46l-143.7-83c-3.39-2-6.14-6.52-6.14-10.19,0-3.45,2.43-7.67,5.52-9.8-2.75,2-2.54,4.86.62,6.69l143.7,83A12.48,12.48,0,0,0,206.2,455.3Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 128.21px 416.366px;" id="el6g9a054g9fr"
                                class="animable"></path>
                            <path
                                d="M282.94,39.87c-2.87-2.29-7.81-2.27-11.2-.32L47.6,169a13.58,13.58,0,0,0-6.14,10.64V355.14h0v0c0,3.91,2.44,8.22,5.87,9.54,3.62,1.39,5.67,1,9.06-.94h0L280.51,234.36a13.58,13.58,0,0,0,6.14-10.63V48.18C286.65,44.27,285.94,42.26,282.94,39.87Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 164.055px 201.813px;" id="elw4sgb6o5mdh"
                                class="animable"></path>
                            <path
                                d="M286.65,48.18c0-3.91-2.75-5.49-6.14-3.54L56.36,174.05A12.49,12.49,0,0,0,52,178.64l-8.76-5.09h0A12.51,12.51,0,0,1,47.6,169L271.74,39.55c3.39-2,8.34-2,11.19.31C286,42.3,286.65,44.27,286.65,48.18Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 164.945px 108.363px;"
                                id="elb25gp1s8ajn" class="animable"></path>
                            <path
                                d="M50.25,360.21l0-175.53a12.53,12.53,0,0,1,1.8-6h0l-8.76-5.08a12.43,12.43,0,0,0-1.8,6V355.16c0,3.91,2.44,8.22,5.87,9.54,3.62,1.39,5.67,1,9.06-.94C53,365.71,50.25,364.12,50.25,360.21Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 48.955px 269.564px;" id="elimdgqo8w2in"
                                class="animable"></path>
                            <path
                                d="M59.66,181.13,275.37,56.63c2-1.18,3.68-.22,3.68,2.13V222a8.13,8.13,0,0,1-3.68,6.38L59.66,352.89c-2,1.17-3.68.22-3.68-2.13V187.51A8.16,8.16,0,0,1,59.66,181.13Z"
                                id="eljx584kvrz5q" class="animable" style="transform-origin: 167.515px 204.758px;">
                            </path>
                            <path
                                d="M59.66,181.13A8.16,8.16,0,0,0,56,187.51V347.92L269.22,224.84a8.14,8.14,0,0,0,3.69-6.38V58.05Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 164.455px 202.985px;"
                                id="elwqljd6u6ijj" class="animable"></path>
                            <path
                                d="M75.32,364.81l206-118.92a6.42,6.42,0,0,1,5.79,0l7.51,4.21c1.59.92,1.59,2.42,0,3.34l-206,118.9a6.36,6.36,0,0,1-5.79,0l-7.47-4.19C73.72,367.23,73.72,365.74,75.32,364.81Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 184.969px 309.119px;" id="elctlgdk2odkt"
                                class="animable"></path>
                            <path
                                d="M95.55,376.74l206-118.92a5.93,5.93,0,0,1,5.29-.29l53.61,31c1.33.76,1.1,2.13-.5,3.05L154.19,410.3a5.9,5.9,0,0,1-5.29.3L95.06,379.79C93.73,379,94,377.67,95.55,376.74Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 227.761px 334.065px;" id="eljrun6ku98yo"
                                class="animable"></path>
                            <path
                                d="M274,307.77l6.44-3.72c.28-.16.3-.4.06-.54l-6.17-3.57a1,1,0,0,0-.94,0L267,303.7c-.27.16-.29.4-.05.54l6.17,3.56A1,1,0,0,0,274,307.77Zm-9.42-12.88-6.45,3.72c-.27.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,264.62,294.89Zm-20.84,12-10.91,6.3c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l10.91-6.3c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,243.78,306.92Zm11.41-6.59-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.94,0l6.44-3.72c.28-.16.3-.4.06-.54l-6.17-3.56A1,1,0,0,0,255.19,300.33Zm-25.3,14.61-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,229.89,314.94Zm-9.42,5.44L214,324.1c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4,0-.54l-6.17-3.56A1,1,0,0,0,220.47,320.38Zm24.18,14.53,6.45-3.72c.27-.16.3-.4.05-.54L245,327.09a1,1,0,0,0-.94,0l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.57A1,1,0,0,0,244.65,334.91Zm-9.43,5.45,6.45-3.73c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.41,0,.55l6.17,3.56A1.05,1.05,0,0,0,235.22,340.36Zm-9.42,5.44,6.45-3.73c.27-.15.3-.4.05-.54L226.13,338a1.05,1.05,0,0,0-.93,0l-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,225.8,345.8Zm-9.43,5.44,6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4,0,.54l6.17,3.56A1,1,0,0,0,216.37,351.24Zm48.24-38,6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,264.61,313.21Zm-10.53,16.26,14.38-8.3c.28-.16.3-.41.06-.55l-15-8.65a1,1,0,0,0-.93,0l-7.44,4.29c-.28.16-.3.4-.06.54l7.93,4.58c.25.14.22.39-.05.54l-6,3.44c-.27.16-.29.4-.05.54l6.17,3.56A1,1,0,0,0,254.08,329.47Zm-43-3.65-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.57a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54L212,325.79A1,1,0,0,0,211,325.82Zm-9.43,5.44L195.16,335c-.27.15-.29.4,0,.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.29-.4.05-.54l-6.17-3.56A1,1,0,0,0,201.61,331.26Zm-52.16,58.11a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.06.54ZM126.21,374.8l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56A1,1,0,0,0,126.21,374.8Zm12,10.91a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.29-.4,0-.54l-6.17-3.56a1,1,0,0,0-.94,0L132,381.61c-.27.16-.29.4,0,.54Zm26,5.85,6.45-3.72c.27-.16.29-.4,0-.55l-6.17-3.56a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.16-.29.4-.05.54l6.17,3.56A1,1,0,0,0,164.17,391.56ZM153.8,397a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54l-6.18-3.57a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54Zm-18.17-27.67-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,135.63,369.36Zm47.13-27.21-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,182.76,342.15Zm-37.7,21.76-6.45,3.73c-.27.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.55L146,363.88A1.07,1.07,0,0,0,145.06,363.91Zm47.13-27.21-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.55l-6.17-3.56A1.07,1.07,0,0,0,192.19,336.7Zm-18.85,10.89-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56A1,1,0,0,0,173.34,347.59ZM163.91,353l-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.57a1.05,1.05,0,0,0,.93,0L171,357.1c.28-.16.3-.4.06-.54L164.85,353A1,1,0,0,0,163.91,353Zm-9.43,5.44L148,362.2c-.28.15-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.29-.4.05-.54l-6.17-3.56A1,1,0,0,0,154.48,358.47Zm43,3.65L204,358.4c.27-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.57A1,1,0,0,0,197.52,362.12Zm87.94-79.26L279,286.58c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.57A1,1,0,0,0,285.46,282.86Zm-11.41,6.58-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4,0-.55L275,289.41A1.05,1.05,0,0,0,274.05,289.44Zm20.83-12-6.45,3.73c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.55l-6.17-3.56A1.07,1.07,0,0,0,294.88,277.41Zm-52.1,48.4,6.45-3.72c.27-.16.3-.4.06-.54L243.12,318a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.06.54l6.17,3.57A1,1,0,0,0,242.78,325.81Zm62.46-53.87a1,1,0,0,0-.93,0l-6.45,3.73c-.28.15-.3.4-.06.54L304,279.8a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.3-.4.05-.54ZM207,356.68,213.4,353c.27-.16.29-.4,0-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.29.4,0,.54l6.17,3.56A1,1,0,0,0,207,356.68Zm115.59-66.74,6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54L321.6,290A1,1,0,0,0,322.54,289.94Zm-18.24.36,6.45-3.73c.27-.15.3-.4.05-.54l-6.17-3.56a1.05,1.05,0,0,0-.93,0l-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,304.3,290.3ZM314.06,277a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.41-.05.55l6.17,3.56a1.05,1.05,0,0,0,.93,0l6.45-3.73c.28-.16.3-.4.06-.54Zm2-1.15,15,8.66a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-15-8.65a1,1,0,0,0-.93,0l-6.45,3.72C315.82,275.5,315.8,275.74,316,275.88ZM294.27,288l-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,294.27,288ZM223.33,328.9l-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.55l-6.17-3.56A1.05,1.05,0,0,0,223.33,328.9Zm88.85-33.48a1.05,1.05,0,0,0,.93,0l6.45-3.73c.28-.15.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.73c-.27.15-.3.4-.05.54Zm-79.43,28-6.45,3.73c-.27.15-.29.4-.05.54l6.17,3.56a1.07,1.07,0,0,0,.94,0l6.44-3.73c.28-.15.3-.4.06-.54l-6.17-3.56A1,1,0,0,0,232.75,323.46Zm-73.87,60.46a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.29-.4,0-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.44,3.72c-.28.16-.3.4-.06.54Zm-11-11.48-6.45,3.72c-.27.16-.3.4-.05.55l6.16,3.56a1.07,1.07,0,0,0,.94,0l6.45-3.73c.28-.16.3-.4.06-.54l-6.17-3.56A1,1,0,0,0,147.92,372.44Zm21.32,6,6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.56A1,1,0,0,0,169.24,378.45Zm9.43-5.44,6.45-3.73c.27-.15.3-.4,0-.54L179,365.18a1.05,1.05,0,0,0-.93,0l-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,178.67,373Zm9.42-5.44,6.45-3.73c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0L181,363.49c-.27.16-.3.41,0,.55l6.17,3.56A1.05,1.05,0,0,0,188.09,367.57ZM157.35,367l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4,0-.54L158.28,367A1,1,0,0,0,157.35,367Zm9.42-5.44-6.45,3.72c-.27.16-.3.4,0,.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,166.77,361.56Zm37.71-21.77L198,343.51c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56A1,1,0,0,0,204.48,339.79Zm-9.43,5.44L188.6,349c-.27.16-.3.4-.06.54l6.17,3.57a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54L196,345.2A1,1,0,0,0,195.05,345.23Zm18.85-10.88-6.45,3.72c-.27.16-.3.4,0,.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.57A1,1,0,0,0,213.9,334.35Zm-37.7,21.76-6.45,3.73c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.55l-6.17-3.56A1.05,1.05,0,0,0,176.2,356.11Zm9.42-5.44-6.45,3.73c-.27.15-.3.4,0,.54l6.17,3.56a1,1,0,0,0,.94,0l6.44-3.73c.28-.15.3-.4.06-.54l-6.17-3.56A1,1,0,0,0,185.62,350.67Zm-12,35.45,6.45-3.73c.28-.15.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.73c-.27.15-.3.4,0,.54l6.17,3.56A1,1,0,0,0,173.59,386.12Zm-49.7-2.35-6.17-3.56a1,1,0,0,0-.94,0L110.33,384c-.27.16-.3.4,0,.55l6.17,3.56a1.05,1.05,0,0,0,.93,0l6.45-3.73C124.11,384.15,124.13,383.91,123.89,383.77Zm12.28,3.09L130,383.29a1.05,1.05,0,0,0-.93,0l-9.92,5.73c-.28.16-.3.4-.06.54l6.17,3.57a1,1,0,0,0,.94,0l9.92-5.72C136.39,387.24,136.42,387,136.17,386.86Zm-21.49-10.12-6.17-3.57a1,1,0,0,0-.94,0l-7.94,4.58c-.27.16-.3.4,0,.54l6.17,3.56a1,1,0,0,0,.93,0l7.94-4.58C114.9,377.12,114.92,376.88,114.68,376.74Zm6.08-3.52a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54L122,365.36a1,1,0,0,0-.94,0l-6.45,3.72c-.28.16-.3.4-.06.54Zm26.71,17.29L141.3,387a1,1,0,0,0-.94,0L128,394.14c-.27.16-.3.4-.06.54l6.17,3.57a1,1,0,0,0,.94,0l12.4-7.16C147.69,390.89,147.71,390.65,147.47,390.51Zm4.35,7.67-6.17-3.56a1,1,0,0,0-.94,0l-7.94,4.58c-.27.16-.29.4-.05.54l6.17,3.56a1,1,0,0,0,.94,0l7.93-4.58C152,398.56,152.06,398.32,151.82,398.18Zm39-65.42a1,1,0,0,0,.93,0l6.45-3.73c.28-.15.3-.4.06-.54l-6.17-3.56a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.16-.3.4,0,.54ZM172,343.64a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.06.54Zm-41.8,24.14a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.29-.4,0-.54l-6.17-3.56a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.16-.29.4,0,.54Zm51.23-29.58a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.57a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54Zm-18.85,10.89a1,1,0,0,0,.94,0l6.44-3.72c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0L156.45,345c-.27.16-.29.4,0,.54Zm-6.12,49.47a1,1,0,0,0-.94,0l-9.92,5.73c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l9.92-5.73c.28-.16.3-.4.06-.54ZM149,356.9a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4,0-.54L150.31,349a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54Zm-9.42,5.44a1.05,1.05,0,0,0,.93,0l6.45-3.73c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.41-.05.55Zm191.46-64.6a1,1,0,0,0-.94,0l-15.88,9.17c-.27.15-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.94,0l15.87-9.17c.27-.16.3-.4.06-.54Zm-20.84,12a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.05.54l6.17,3.57a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54ZM183,380.68l6.45-3.73c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0L176,376.6c-.28.16-.3.4-.06.54l6.17,3.57A1.07,1.07,0,0,0,183,380.68Zm108.37-60a1.07,1.07,0,0,0-.94,0L284,324.41c-.27.16-.3.4-.05.54l6.17,3.56a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.41.06-.55ZM340.5,292.3a1,1,0,0,0-.94,0l-6.44,3.72c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.29-.4.05-.54Zm15.6-1.88-15-8.65a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54l15,8.65a1,1,0,0,0,.93,0L356,291C356.32,290.8,356.34,290.56,356.1,290.42ZM256.16,341a1,1,0,0,0-.93,0l-7.94,4.58c-.27.16-.3.4-.06.54l6.17,3.57a1,1,0,0,0,.94,0l7.94-4.58c.27-.16.3-.4.05-.54ZM280,327.24a1,1,0,0,0-.94,0L269.12,333c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l9.92-5.73c.28-.15.3-.4.06-.54Zm-45.64,26.35a1,1,0,0,0-.94,0l-53.08,30.65c-.28.16-.3.4-.06.54l6.17,3.56a1,1,0,0,0,.94,0l53.08-30.65c.27-.15.3-.4.06-.54ZM178.28,386a1,1,0,0,0-.94,0l-7.94,4.58c-.27.16-.3.4-.05.54l6.17,3.57a1,1,0,0,0,.93,0l7.94-4.58c.27-.16.3-.4.06-.54Zm67-38.67a1,1,0,0,0-.94,0l-7.93,4.58c-.28.16-.3.41-.06.55l6.17,3.56a1.07,1.07,0,0,0,.94,0l7.93-4.59c.28-.16.3-.4.06-.54Zm-77.89,45a1,1,0,0,0-.93,0l-7.94,4.58c-.28.16-.3.4-.06.54L164.6,401a1,1,0,0,0,.94,0l7.94-4.58c.27-.16.3-.4.05-.54Zm99.72-57.57a1,1,0,0,0-.94,0l-7.94,4.58c-.27.16-.29.4-.05.54l6.17,3.56a1,1,0,0,0,.94,0l7.93-4.58c.28-.16.3-.4.06-.54Zm33.73-19.48a1,1,0,0,0-.93,0L293.43,319c-.28.15-.3.4-.06.54l6.17,3.56a1.07,1.07,0,0,0,.94,0l6.45-3.73c.27-.16.3-.4.05-.54Zm21.12-14.73,6.45-3.73c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.29.41-.05.55l6.17,3.56A1.07,1.07,0,0,0,321.93,300.48Zm-38.47,1.85,6.45-3.73c.27-.15.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.73c-.27.16-.3.4-.05.54l6.16,3.56A1,1,0,0,0,283.46,302.33Zm-25,34.81,18.85-10.89c.27-.15.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0l-18.86,10.89c-.27.16-.29.4-.05.54l6.17,3.56A1,1,0,0,0,258.43,337.14ZM311.56,306a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.3-.4.06-.54l-6.17-3.56a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.15-.3.4-.06.54Zm-7.87-5.12,6.45-3.72c.27-.16.29-.41.05-.54L304,293a1.07,1.07,0,0,0-.94,0l-6.44,3.73c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,303.69,300.83ZM249,342.58l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.57a1,1,0,0,0-.93,0L242,338.51c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,249,342.58ZM290.73,318a1,1,0,0,0,.93,0l6.45-3.73c.28-.15.3-.4.06-.54L292,310.12a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.16-.3.4-.05.54Zm-88.86,51.81,6.45-3.72c.27-.16.3-.4.05-.54L202.2,362a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.56A1,1,0,0,0,201.87,369.79Zm9.43-5.44,6.45-3.72c.27-.16.29-.41.05-.55l-6.17-3.56a1.07,1.07,0,0,0-.94,0l-6.45,3.73c-.27.16-.29.4-.05.54l6.17,3.56A1,1,0,0,0,211.3,364.35Zm-18.86,10.88,6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4,0,.54l6.17,3.57A1,1,0,0,0,192.44,375.23Zm37.71-21.77,6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54l6.17,3.57A1,1,0,0,0,230.15,353.46Zm-9.43,5.45,6.45-3.73c.27-.15.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.73c-.27.15-.3.4-.06.54l6.18,3.56A1.05,1.05,0,0,0,220.72,358.91ZM239.57,348,246,344.3c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0L232.52,344c-.27.16-.3.4-.05.54l6.17,3.57A1.05,1.05,0,0,0,239.57,348ZM291,272.32a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-1.64-.95a1,1,0,0,0-.94,0l-6.45,3.73c-.27.15-.29.4-.05.54ZM244.16,302a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.3-.4,0-.54l-6.17-3.56a1,1,0,0,0-.93,0l-6.45,3.73c-.28.15-.3.4-.06.54ZM263,291.09a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.56a1,1,0,0,0-.93,0L256.9,287c-.28.16-.3.4-.06.54Zm-30.36,17.53a1,1,0,0,0,.94,0l6.45-3.72c.27-.16.3-.4.05-.54l-6.17-3.57a1,1,0,0,0-.93,0l-6.45,3.72c-.28.16-.3.4-.06.54Zm20.94-12.08a1.05,1.05,0,0,0,.93,0l6.45-3.73c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.05.54Zm-39.79,23a1.07,1.07,0,0,0,.94,0l6.45-3.73c.27-.16.29-.4.05-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.29.41-.05.55Zm9.43-5.44a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0L217.11,310c-.27.16-.3.4-.05.54Zm48.93-30.87a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.29-.4.05-.54L278,278a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4-.05.54Zm28.28-16.33a1,1,0,0,0,.93,0l6.45-3.72c.28-.16.3-.4.06-.54l-1.64-.95a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.41-.06.55Zm13,7.49a1.07,1.07,0,0,0,.94,0l6.44-3.73c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0l-6.45,3.72c-.27.16-.3.4,0,.54Zm18,20.67,6.45-3.72c.28-.16.3-.4.06-.54l-6.17-3.56a1,1,0,0,0-.94,0L324.3,291c-.27.16-.3.4-.05.54l6.17,3.57A1,1,0,0,0,331.35,295Zm-49.76-17.27a1.05,1.05,0,0,0,.93,0L289,274c.28-.16.3-.4.06-.54l-1.65-.95a1,1,0,0,0-.93,0L280,276.27c-.28.16-.3.4-.06.54ZM204.37,325a1,1,0,0,0,.94,0l6.45-3.73c.27-.15.3-.4.06-.54l-6.18-3.56a1.05,1.05,0,0,0-.93,0l-6.45,3.73c-.27.16-.3.4-.06.54Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 227.854px 335.04px;" id="elzuwwsqhas7"
                                class="animable"></path>
                            <polygon
                                points="231.37 378.59 232.77 379.4 270.02 400.9 336.26 362.65 337.64 361.87 298.99 339.56 231.37 378.59"
                                style="fill: rgb(38, 50, 56); transform-origin: 284.505px 370.23px;" id="elcfx6kmd1ca"
                                class="animable"></polygon>
                            <polygon points="335.41 363.15 298.99 342.13 233.62 379.89 270.02 400.9 335.41 363.15"
                                     style="fill: rgb(55, 71, 79); transform-origin: 284.515px 371.515px;" id="eld3twa8wdi5k"
                                     class="animable"></polygon>
                        </g>
                    </g>
                    <g id="freepik--Screen--inject-10" class="animable" style="transform-origin: 171.403px 208.987px;">
                        <g id="freepik--Window--inject-10" class="animable"
                           style="transform-origin: 171.403px 208.987px;">
                            <path
                                d="M67.21,355.84a4.15,4.15,0,0,1-1.85.56,4.66,4.66,0,0,1-2.71-.48,5,5,0,0,1-2.22-4V214.44L64.86,217V354.47c0,1.07.53,1.69,1.31,1.69A2.4,2.4,0,0,0,67.21,355.84Z"
                                style="fill: rgb(230, 230, 230); transform-origin: 63.82px 285.438px;" id="elwtkfwyu1pa"
                                class="animable"></path>
                            <path
                                d="M66.06,355.6c-.67,0-.75-.79-.75-1.13V204.64L281.73,79.69V228.88a4.68,4.68,0,0,1-2.07,3.61L66.83,355.35A1.61,1.61,0,0,1,66.06,355.6Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 173.52px 217.645px;"
                                id="el5voc4w5zl0e" class="animable"></path>
                            <path
                                d="M281.28,80.66V228.88a4.1,4.1,0,0,1-1.8,3.13L66.65,354.87a1,1,0,0,1-.49.18c-.19,0-.19-.57-.19-.58V205L281.28,80.66m1.11-1.93L64.86,204.32V354.47c0,1.07.53,1.69,1.3,1.69a2.18,2.18,0,0,0,1-.32L280,233a5.19,5.19,0,0,0,2.36-4.09V78.73Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 173.625px 217.445px;"
                                id="el7x4e5yephjw" class="animable"></path>
                            <path
                                d="M282.36,65.75c-.16-1.22-1.15-1.67-2.33-1L67.21,187.63a5.1,5.1,0,0,0-1.67,1.77l-4.42-2.56a4.89,4.89,0,0,1,1.67-1.76L275.61,62.22a4.4,4.4,0,0,1,6.75,3.53Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 171.74px 125.469px;" id="elu2515bi7o5"
                                class="animable"></path>
                            <g id="elwqyawvf9vnn">
                                <path
                                    d="M282.36,65.75c-.16-1.22-1.15-1.67-2.33-1L67.21,187.63a5.1,5.1,0,0,0-1.67,1.77l-4.42-2.56a4.89,4.89,0,0,1,1.67-1.76L275.61,62.22a4.4,4.4,0,0,1,6.75,3.53Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 171.74px 125.469px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M65.54,189.4a4.84,4.84,0,0,0-.68,2.32v12.61l-4.44-2.56v-12.6a2.81,2.81,0,0,1,0-.29,4.71,4.71,0,0,1,.09-.58,5.39,5.39,0,0,1,.59-1.46Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 62.9781px 195.585px;" id="elegw53btgf2"
                                class="animable"></path>
                            <g id="elxlauxjd47z">
                                <path
                                    d="M65.54,189.4a4.84,4.84,0,0,0-.68,2.32v12.61l-4.44-2.56v-12.6a2.81,2.81,0,0,1,0-.29,4.71,4.71,0,0,1,.09-.58,5.39,5.39,0,0,1,.59-1.46Z"
                                    style="opacity: 0.2; transform-origin: 62.9781px 195.585px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M282.38,66.13v12.6l-148.77,86c-1.3.75-2.36.14-2.36-1.36v-4.77c0-1.51-1-2.12-2.36-1.36L76.07,187.63c-1.13.59-1.2,2.07-1.52,4.09l-.85,4.77c-.34,2-1,3.33-2.35,4.08l-6.49,3.75v-12.6a5.21,5.21,0,0,1,2.35-4.09L280,64.77C281.33,64,282.38,64.63,282.38,66.13Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 173.62px 134.38px;" id="elppk05rkmrfs"
                                class="animable"></path>
                            <path
                                d="M275.63,72.89c1-.58,1.81-.11,1.81,1a4,4,0,0,1-1.81,3.14c-1,.57-1.81.11-1.81-1A4,4,0,0,1,275.63,72.89Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 275.63px 74.9578px;"
                                id="el2fdtl75twy" class="animable"></path>
                            <path
                                d="M269.11,76.64c1-.57,1.81-.11,1.81,1a4,4,0,0,1-1.81,3.13c-1,.58-1.8.11-1.8-1A4,4,0,0,1,269.11,76.64Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 269.115px 78.7072px;"
                                id="eld0rw7u2etba" class="animable"></path>
                            <path
                                d="M262.6,80.4c1-.58,1.81-.11,1.81,1a4,4,0,0,1-1.81,3.14c-1,.57-1.81.11-1.81-1A4,4,0,0,1,262.6,80.4Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 262.6px 82.4678px;"
                                id="elb0vp4u818u9" class="animable"></path>
                            <path
                                d="M282.39,78.73V91.42L64.86,217V204.32l4.85-2.81c1.29-.75,1.73-1.89,2.35-4.08l1.64-5.71c.52-2,1.06-3.34,2.37-4.09l54.78-31.55c1.31-.75,2.33-.83,3.32.81l2,3.66c.74,1.28,1.11,2,2.41,1.28Z"
                                style="fill: rgb(213 227 242); transform-origin: 173.625px 147.865px;"
                                id="elv4neg4uu7i" class="animable"></path>
                            <polygon points="64.86 204.32 64.86 217 60.42 214.44 60.42 201.77 64.86 204.32"
                                     style="fill: rgb(213 227 242); transform-origin: 62.64px 209.385px;"
                                     id="el27pl8ka7jqe" class="animable"></polygon>
                            <g id="eldfdkh5dyjxs">
                                <polygon points="64.86 204.32 64.86 217 60.42 214.44 60.42 201.77 64.86 204.32"
                                         style="opacity: 0.15; transform-origin: 62.64px 209.385px;" class="animable">
                                </polygon>
                            </g>
                            <g id="elt8j58n1txbg">
                                <path
                                    d="M70.66,207.05,68,208.59l1-2a.49.49,0,0,0,0-.48c-.08-.09-.21,0-.3.14l-1.45,2.78v0a.3.3,0,0,0,0,.1s0,0,0,0a.77.77,0,0,0,0,.15.5.5,0,0,0,0,.12s0,0,0,0l0,.06h0l1.45,1.11a.12.12,0,0,0,.14,0,.37.37,0,0,0,.16-.2c.08-.19.07-.39,0-.46l-1-.78,2.66-1.54a.56.56,0,0,0,.22-.45C70.88,207.08,70.78,207,70.66,207.05Z"
                                    style="opacity: 0.2; transform-origin: 69.0629px 208.333px;" class="animable">
                                </path>
                            </g>
                            <g id="elq5lcsai0ehg">
                                <path
                                    d="M72.89,205.77l2.66-1.54-1-.78c-.09-.07-.1-.27,0-.46s.21-.27.3-.2l1.44,1.11h0l0,.05v0a.51.51,0,0,1,0,.13.78.78,0,0,1,0,.14v0s0,.07,0,.11h0l-1.44,2.78a.38.38,0,0,1-.14.16.11.11,0,0,1-.16,0,.49.49,0,0,1,0-.48l1-2-2.66,1.54c-.12.07-.22,0-.22-.21A.56.56,0,0,1,72.89,205.77Z"
                                    style="opacity: 0.2; transform-origin: 74.4821px 205.035px;" class="animable">
                                </path>
                            </g>
                            <g id="ellq9m1ok5t1f">
                                <path
                                    d="M81.63,198.09c0-.16-.16-.14-.23,0L81,199c-.62-.07-1.38.54-1.89,1.62-.66,1.4-.66,3.05,0,3.68a.94.94,0,0,0,1.2.08,3.31,3.31,0,0,0,1.2-1.46.46.46,0,0,0,0-.46c-.09-.08-.22,0-.31.17-.49,1-1.29,1.51-1.79,1s-.49-1.71,0-2.75c.36-.74.86-1.18,1.3-1.21l-.28.67c-.07.18,0,.34.11.27l1.09-.71a.38.38,0,0,0,.12-.3Z"
                                    style="opacity: 0.2; transform-origin: 80.1828px 201.268px;" class="animable">
                                </path>
                            </g>
                            <g id="elfdu5tko1lh5">
                                <path
                                    d="M131.53,161.36l1-2.19a.63.63,0,0,0,0-.68c-.12-.12-.32,0-.44.26l-1,2.19-1-1c-.12-.12-.32,0-.44.26a.68.68,0,0,0,0,.68l1,1-1,2.19a.67.67,0,0,0,0,.68.18.18,0,0,0,.22,0,.62.62,0,0,0,.22-.27l1-2.19,1,1a.18.18,0,0,0,.22,0,.62.62,0,0,0,.22-.27c.13-.26.13-.57,0-.68Z"
                                    style="opacity: 0.2; transform-origin: 131.093px 161.615px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M85.17,200.62v-3.43a3.75,3.75,0,0,1,1.69-2.94L269.52,88.87c.94-.54,1.7-.1,1.7,1v3.44a3.77,3.77,0,0,1-1.7,2.94L86.86,201.6C85.93,202.14,85.17,201.7,85.17,200.62Z"
                                style="fill: rgb(250, 250, 250); transform-origin: 178.195px 145.235px;"
                                id="elgve95bs6cph" class="animable"></path>
                            <path
                                d="M267.21,96.49a.37.37,0,0,1-.15,0,.46.46,0,0,1-.26-.51l.17-1.4-.65-.47a.44.44,0,0,1-.18-.38.72.72,0,0,1,.28-.59l1-.77,0-.08.44-1.46a.61.61,0,0,1,.51-.47.4.4,0,0,1,.39.23l.37.8L270,91a.4.4,0,0,1,.45.11.58.58,0,0,1,0,.68l-.72,1.36a.15.15,0,0,0,0,.08l.17,1.22a.81.81,0,0,1-.21.62.48.48,0,0,1-.4.15l-.81-.1-.88,1.12A.51.51,0,0,1,267.21,96.49Zm-.48-2.84.65.47a.5.5,0,0,1,.18.47l-.11.93.59-.75a.45.45,0,0,1,.44-.21l.82.1a.19.19,0,0,0,0-.09l-.17-1.23a.77.77,0,0,1,.08-.44l.64-1.18-.65.24a.4.4,0,0,1-.52-.2l-.29-.63-.4,1.3a.79.79,0,0,1-.25.38l-1,.76A.22.22,0,0,0,266.73,93.65ZM269,91.41h0Z"
                                style="fill: rgb(213 227 242); transform-origin: 268.35px 93.4284px;"
                                id="elt6wkpca2vj" class="animable"></path>
                            <g id="elnf539n6cwki">
                                <g style="opacity: 0.2; transform-origin: 275.608px 89.2594px;" class="animable">
                                    <path
                                        d="M273.22,88.45a.59.59,0,0,1-.51-.29.6.6,0,0,1,.21-.81l4.78-2.75a.58.58,0,1,1,.59,1l-4.78,2.76A.51.51,0,0,1,273.22,88.45Z"
                                        id="elcvg79zta8u6" class="animable"
                                        style="transform-origin: 275.604px 86.4844px;"></path>
                                    <path
                                        d="M273.22,91.21a.59.59,0,0,1-.51-.29.6.6,0,0,1,.21-.81l4.78-2.76a.6.6,0,0,1,.81.22.59.59,0,0,1-.22.8l-4.78,2.76A.51.51,0,0,1,273.22,91.21Z"
                                        id="elm3rzhh9hkq" class="animable"
                                        style="transform-origin: 275.608px 89.242px;"></path>
                                    <path
                                        d="M273.22,94a.61.61,0,0,1-.51-.29.6.6,0,0,1,.21-.81l4.78-2.76a.6.6,0,0,1,.81.22.59.59,0,0,1-.22.8l-4.78,2.76A.6.6,0,0,1,273.22,94Z"
                                        id="eluinsd9ivsq9" class="animable"
                                        style="transform-origin: 275.608px 92.0319px;"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--window--inject-10" class="animable" style="transform-origin: 240.03px 213.47px;">
                        <g id="freepik--window--inject-10" class="animable"
                           style="transform-origin: 240.03px 213.47px;">
                            <g id="freepik--Box--inject-10" class="animable"
                               style="transform-origin: 240.03px 213.47px;">
                                <g id="el7a0o3dh6zpi">
                                    <g style="opacity: 0.2; transform-origin: 236.475px 211.47px;" class="animable">
                                        <path
                                            d="M168.4,171.47,304.54,92.89c.6-.35,1.09-.07,1.09.63V249.59a2.39,2.39,0,0,1-1.09,1.88L168.4,330.05c-.6.35-1.08.07-1.08-.63V173.35A2.39,2.39,0,0,1,168.4,171.47Z"
                                            id="elnzb8z88dwi" class="animable"
                                            style="transform-origin: 236.475px 211.47px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M312.1,97.39a1.43,1.43,0,0,0-1.28.17L176.33,175.19a4.26,4.26,0,0,0-1.91,3.33V332.83a1.37,1.37,0,0,0,.52,1.22c-.33-.21-3.23-1.85-3.58-2.07a1.35,1.35,0,0,1-.55-1.23V176.44a4.27,4.27,0,0,1,1.92-3.33L307.21,95.48a1.35,1.35,0,0,1,1.38-.12C308.9,95.54,311.42,97,312.1,97.39Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 241.451px 214.637px;"
                                    id="eluvvhwt7kb9c" class="animable"></path>
                                <g id="elhjzr7ogwhjt">
                                    <g style="opacity: 0.2; transform-origin: 241.735px 135.942px;" class="animable">
                                        <path
                                            d="M312.1,97.39c-.68-.42-3.2-1.85-3.51-2a1.35,1.35,0,0,0-1.38.12L172.73,173.11a4,4,0,0,0-1.36,1.43l3.61,2.09a3.84,3.84,0,0,1,1.35-1.44L310.82,97.56A1.43,1.43,0,0,1,312.1,97.39Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 241.735px 135.942px;"
                                            id="el5xpfhof44s" class="animable"></path>
                                    </g>
                                </g>
                                <path
                                    d="M176.33,175.19,310.82,97.56c1.06-.61,1.92-.11,1.92,1.11V253a4.24,4.24,0,0,1-1.92,3.33L176.33,333.94c-1.06.61-1.92.11-1.92-1.11V178.52A4.24,4.24,0,0,1,176.33,175.19Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 243.575px 215.75px;"
                                    id="elo4fj0bax1rg" class="animable"></path>
                                <g id="el7sb5a24u04m">
                                    <g style="opacity: 0.7; transform-origin: 243.575px 215.75px;" class="animable">
                                        <path
                                            d="M176.33,175.19,310.82,97.56c1.06-.61,1.92-.11,1.92,1.11V253a4.24,4.24,0,0,1-1.92,3.33L176.33,333.94c-1.06.61-1.92.11-1.92-1.11V178.52A4.24,4.24,0,0,1,176.33,175.19Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 243.575px 215.75px;"
                                            id="el76c05fb5mh5" class="animable"></path>
                                    </g>
                                </g>
                                <path
                                    d="M175,176.63l-3.61-2.09a4,4,0,0,0-.56,1.9V330.75a1.35,1.35,0,0,0,.55,1.23c.35.22,3.25,1.86,3.58,2.07a1.37,1.37,0,0,1-.52-1.22V178.52A3.86,3.86,0,0,1,175,176.63Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 172.911px 254.295px;"
                                    id="el8byxq34zx3j" class="animable"></path>
                                <g id="elyyu5v7zmdae">
                                    <path
                                        d="M175,176.63l-3.61-2.09a4,4,0,0,0-.56,1.9V330.75a1.35,1.35,0,0,0,.55,1.23c.35.22,3.25,1.86,3.58,2.07a1.37,1.37,0,0,1-.52-1.22V178.52A3.86,3.86,0,0,1,175,176.63Z"
                                        style="opacity: 0.15; transform-origin: 172.911px 254.295px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M311.68,98.19c.17,0,.17.43.17.48V253a3.38,3.38,0,0,1-1.47,2.56L175.89,333.17a.82.82,0,0,1-.41.14c-.18,0-.18-.43-.18-.48V178.52a3.36,3.36,0,0,1,1.48-2.56L311.26,98.33a.87.87,0,0,1,.42-.14m0-.89a1.83,1.83,0,0,0-.86.26L176.33,175.19a4.24,4.24,0,0,0-1.92,3.33V332.83c0,.87.44,1.37,1.07,1.37a1.83,1.83,0,0,0,.85-.26l134.49-77.63a4.24,4.24,0,0,0,1.92-3.33V98.67c0-.87-.43-1.37-1.06-1.37Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 243.575px 215.75px;"
                                    id="eljnnr9gshjqf" class="animable"></path>
                            </g>
                            <g id="freepik--Button--inject-10" class="animable"
                               style="transform-origin: 245.54px 254.178px;">
                                <g id="elg6q0kz469gw">
                                    <g style="opacity: 0.2; transform-origin: 244.21px 252.962px;" class="animable">
                                        <path
                                            d="M186.94,277.7l114.54-66.11c.48-.28.86-.06.86.49v14.67a1.89,1.89,0,0,1-.85,1.48L186.94,294.34c-.48.27-.86.05-.86-.49V279.18A1.86,1.86,0,0,1,186.94,277.7Z"
                                            id="el6qg2cwvroe8" class="animable"
                                            style="transform-origin: 244.21px 252.962px;"></path>
                                    </g>
                                </g>
                                <g id="freepik--speech-bubble--inject-10" class="animable"
                                   style="transform-origin: 246.665px 256.009px;">
                                    <path
                                        d="M300.27,215.34l-111,64a2.08,2.08,0,0,0-.94,1.63v13a2,2,0,0,0,.95,1.63l1.79,1a2.15,2.15,0,0,0,1.9,0l111-64.05a2.09,2.09,0,0,0,1-1.63V218a2.09,2.09,0,0,0-1-1.63l-1.8-1A2.13,2.13,0,0,0,300.27,215.34Z"
                                        style="fill: rgb(16, 83, 156); transform-origin: 246.65px 255.976px;"
                                        id="elqwxzwt353p" class="animable"></path>
                                    <g id="el7xphyk14et2">
                                        <path
                                            d="M193,296.67a2.18,2.18,0,0,1-1.9,0l-1.79-1a2.06,2.06,0,0,1-.95-1.63V281a2,2,0,0,1,.3-1l3.67,2.13a1.89,1.89,0,0,0-.28.92v13C192,296.67,192.42,297,193,296.67Z"
                                            style="opacity: 0.2; transform-origin: 190.68px 288.444px;"
                                            class="animable"></path>
                                    </g>
                                    <g id="elokd54tufp8n">
                                        <g style="opacity: 0.2; transform-origin: 246.77px 248.679px;" class="animable">
                                            <path
                                                d="M304.89,217.81c-.07-.48-.46-.65-.93-.38L193,281.48a1.92,1.92,0,0,0-.67.71l-3.68-2.13a1.9,1.9,0,0,1,.65-.67l111-64a2.13,2.13,0,0,1,1.89,0l1.8,1A2.06,2.06,0,0,1,304.89,217.81Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 246.77px 248.679px;"
                                                id="eln8ywgn7677n" class="animable"></path>
                                        </g>
                                    </g>
                                    <path
                                        d="M304,217.43,193,281.48a2.06,2.06,0,0,0-.95,1.63v13c0,.6.42.85.95.55l111-64.05a2.09,2.09,0,0,0,1-1.63V218C304.91,217.38,304.48,217.13,304,217.43Z"
                                        style="fill: rgb(16, 83, 156); transform-origin: 248.525px 257.045px;"
                                        id="elfszxf0ht99o" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M235,158.41a2.31,2.31,0,0,1,.92-.35,1.13,1.13,0,0,1,.66.09.84.84,0,0,1,.41.38,1.37,1.37,0,0,1,.15.56.46.46,0,0,1-.06.23.36.36,0,0,1-.15.17l-.55.32a.23.23,0,0,1-.2,0,.3.3,0,0,1-.12-.11.56.56,0,0,0-.35-.25,1.16,1.16,0,0,0-.71.22,2.14,2.14,0,0,0-.39.28,2.11,2.11,0,0,0-.32.35,1.86,1.86,0,0,0-.21.39,1.14,1.14,0,0,0-.08.4.66.66,0,0,0,.07.35.3.3,0,0,0,.25.11,1.47,1.47,0,0,0,.47-.06l.72-.2a3.54,3.54,0,0,1,.8-.15,1,1,0,0,1,.56.12.81.81,0,0,1,.32.4,2,2,0,0,1,.1.7,3.3,3.3,0,0,1-.15,1,4.11,4.11,0,0,1-.45.95,4.92,4.92,0,0,1-1.65,1.57,2.91,2.91,0,0,1-.84.34,1.55,1.55,0,0,1-.71,0,.88.88,0,0,1-.49-.36,1.25,1.25,0,0,1-.21-.71.36.36,0,0,1,.06-.24.39.39,0,0,1,.15-.16l.55-.32a.24.24,0,0,1,.2-.05c.05,0,.08.05.12.12a.8.8,0,0,0,.13.19.37.37,0,0,0,.21.12.77.77,0,0,0,.33,0,2.18,2.18,0,0,0,.5-.22,4,4,0,0,0,.45-.31,2.23,2.23,0,0,0,.38-.37,2.2,2.2,0,0,0,.27-.43,1.06,1.06,0,0,0,.1-.46.37.37,0,0,0-.11-.31.41.41,0,0,0-.33-.06,4.33,4.33,0,0,0-.55.12l-.76.2a2.66,2.66,0,0,1-.68.1.84.84,0,0,1-.49-.15.82.82,0,0,1-.28-.42,2.52,2.52,0,0,1-.1-.75,3.27,3.27,0,0,1,.16-1,4.05,4.05,0,0,1,.43-.92,4.59,4.59,0,0,1,.65-.82A3.74,3.74,0,0,1,235,158.41Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 235.04px 162.153px;" id="el5lvb9o180d7"
                                class="animable"></path>
                            <path
                                d="M239,156.12a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.81a.53.53,0,0,1-.06.24.34.34,0,0,1-.15.16l-.67.39q-.09.06-.15,0a.18.18,0,0,1-.06-.16v-.81a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17Zm.17,7a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.59.34a.14.14,0,0,1-.15,0,.19.19,0,0,1-.07-.16v-4.85a.55.55,0,0,1,.07-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 238.665px 159.995px;" id="elezrp8sd5iu"
                                class="animable"></path>
                            <path
                                d="M242,162.81a1.81,1.81,0,0,0,.34-.26,1.84,1.84,0,0,0,.31-.4,2.3,2.3,0,0,0,.23-.5,1.85,1.85,0,0,0,.09-.58v-.38c0,.09-.1.18-.16.3a3.25,3.25,0,0,1-.25.34,2.79,2.79,0,0,1-.34.35,2.4,2.4,0,0,1-.43.32,1.29,1.29,0,0,1-.71.2.83.83,0,0,1-.54-.23,1.55,1.55,0,0,1-.35-.58,3,3,0,0,1-.14-.84c0-.1,0-.22,0-.36s0-.26,0-.37a5.12,5.12,0,0,1,.14-1,6.44,6.44,0,0,1,.35-1,4.38,4.38,0,0,1,.54-.85,2.68,2.68,0,0,1,.71-.61,1.89,1.89,0,0,1,.43-.19,1,1,0,0,1,.34,0,.49.49,0,0,1,.25.06.64.64,0,0,1,.16.11v-.25a.53.53,0,0,1,.06-.23.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.17.17,0,0,1,.07.16v4.88a4.49,4.49,0,0,1-.53,2.21,3.84,3.84,0,0,1-1.46,1.48,2.31,2.31,0,0,1-.74.29,1.26,1.26,0,0,1-.59,0,.78.78,0,0,1-.39-.3.94.94,0,0,1-.17-.51.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.53-.3c.08,0,.14,0,.19,0l.13.1a.39.39,0,0,0,.28.13A1.14,1.14,0,0,0,242,162.81Zm-.94-3.5a5.61,5.61,0,0,0,0,.58c0,.44.14.7.32.8a.64.64,0,0,0,.64-.08,1.75,1.75,0,0,0,.65-.67,2.52,2.52,0,0,0,.3-1c0-.11,0-.25,0-.41a3.47,3.47,0,0,0,0-.38.83.83,0,0,0-.3-.68.61.61,0,0,0-.65.06,1.73,1.73,0,0,0-.64.67A2.52,2.52,0,0,0,241.08,159.31Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 242.021px 159.867px;"
                                id="el176qkz1bow5" class="animable"></path>
                            <path
                                d="M248.89,157.52a.49.49,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-2.65a1.28,1.28,0,0,0-.22-.87c-.14-.17-.37-.16-.67,0a1.56,1.56,0,0,0-.65.75,2.64,2.64,0,0,0-.24,1.14v2.64a.53.53,0,0,1-.06.24.65.65,0,0,1-.15.17l-.6.34a.12.12,0,0,1-.14,0,.17.17,0,0,1-.07-.16v-4.85a.44.44,0,0,1,.07-.24.49.49,0,0,1,.14-.17l.6-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.24a3.88,3.88,0,0,1,.47-.72,2.27,2.27,0,0,1,.65-.55,1.63,1.63,0,0,1,.8-.27.69.69,0,0,1,.51.24,1.24,1.24,0,0,1,.28.61,4.09,4.09,0,0,1,.08.89Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 246.985px 156.431px;" id="elsx5j7yow4w"
                                class="animable"></path>
                            <path
                                d="M252.56,148.29a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.81a.53.53,0,0,1-.06.24.65.65,0,0,1-.15.17l-.67.38a.12.12,0,0,1-.15,0,.22.22,0,0,1-.06-.17v-.81a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17Zm.17,7a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34c-.06,0-.11,0-.15,0a.19.19,0,0,1-.07-.16V151a.55.55,0,0,1,.07-.24.39.39,0,0,1,.15-.16l.59-.35a.14.14,0,0,1,.15,0,.2.2,0,0,1,.06.16Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 252.225px 152.149px;" id="elnmojy90dtk"
                                class="animable"></path>
                            <path
                                d="M257.62,152.48a.53.53,0,0,1-.06.24.51.51,0,0,1-.15.17l-.6.34a.12.12,0,0,1-.14,0,.18.18,0,0,1-.07-.16v-2.65a1.32,1.32,0,0,0-.22-.87c-.14-.17-.36-.16-.67,0a1.67,1.67,0,0,0-.65.75,2.71,2.71,0,0,0-.24,1.14v2.65a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.22.22,0,0,1-.06-.17v-4.85a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.35a.14.14,0,0,1,.15,0,.2.2,0,0,1,.06.16v.24a4.51,4.51,0,0,1,.48-.72,2.29,2.29,0,0,1,.65-.55,1.54,1.54,0,0,1,.79-.26.69.69,0,0,1,.52.23,1.37,1.37,0,0,1,.28.62,4.63,4.63,0,0,1,.08.88Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 255.715px 151.393px;" id="elwow9taocmr"
                                class="animable"></path>
                            <path
                                d="M218.17,245.42c.65-.37,1.15-.46,1.48-.25s.51.67.51,1.38a4.14,4.14,0,0,1-.26,1.45,3.74,3.74,0,0,1-.77,1.24l1.08,1.95a.44.44,0,0,1,0,.1.34.34,0,0,1,0,.19.28.28,0,0,1-.12.14l-.66.38c-.11.07-.18.08-.23,0a.4.4,0,0,1-.11-.12l-1-1.84-1,.6v2.43a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.63.37a.14.14,0,0,1-.15,0,.2.2,0,0,1-.07-.16V247a.55.55,0,0,1,.07-.24.39.39,0,0,1,.15-.16Zm-1.17,4,1.13-.65a2.29,2.29,0,0,0,.71-.62,1.55,1.55,0,0,0,.27-1q0-.58-.27-.63a1.27,1.27,0,0,0-.71.22l-1.13.65Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 218.127px 249.46px;" id="els8ow17azmg"
                                class="animable"></path>
                            <path
                                d="M220.84,248.46a5.2,5.2,0,0,1,.14-1.17,4.62,4.62,0,0,1,.38-1.12,4.79,4.79,0,0,1,.6-.95,2.8,2.8,0,0,1,.8-.67,1.57,1.57,0,0,1,.79-.25,1,1,0,0,1,.6.22,1.41,1.41,0,0,1,.39.63,2.93,2.93,0,0,1,.14.93v.47a.59.59,0,0,1-.21.4l-2.61,1.51a.81.81,0,0,0,.07.38.41.41,0,0,0,.2.19.46.46,0,0,0,.29,0,1,1,0,0,0,.34-.13,2.31,2.31,0,0,0,.4-.3,1.83,1.83,0,0,0,.26-.32,1.58,1.58,0,0,1,.14-.2l.15-.12.62-.36a.15.15,0,0,1,.16,0,.16.16,0,0,1,0,.16,1.36,1.36,0,0,1-.12.45,3.36,3.36,0,0,1-.34.64,4.8,4.8,0,0,1-.55.7,3.79,3.79,0,0,1-.77.6,1.63,1.63,0,0,1-.8.25.83.83,0,0,1-.6-.22,1.41,1.41,0,0,1-.38-.67A3.7,3.7,0,0,1,220.84,248.46Zm1.92-2.66a1.34,1.34,0,0,0-.39.31,1.89,1.89,0,0,0-.27.38,2.37,2.37,0,0,0-.17.41,2,2,0,0,0-.07.37l1.76-1a1.5,1.5,0,0,0-.06-.29.36.36,0,0,0-.14-.23.34.34,0,0,0-.25-.08A.83.83,0,0,0,222.76,245.8Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 222.757px 247.35px;" id="els7njlav061d"
                                class="animable"></path>
                            <path
                                d="M227.74,245.64a.18.18,0,0,0-.06-.16.22.22,0,0,0-.19,0,2.74,2.74,0,0,0-.36.08l-.58.17a1.83,1.83,0,0,1-.57.07.6.6,0,0,1-.36-.16.66.66,0,0,1-.19-.36,2.26,2.26,0,0,1-.06-.55,2.53,2.53,0,0,1,.11-.68,3,3,0,0,1,.32-.71,4,4,0,0,1,.5-.68,2.9,2.9,0,0,1,.68-.53,2.28,2.28,0,0,1,.68-.28,1.13,1.13,0,0,1,.52,0,.58.58,0,0,1,.32.25.77.77,0,0,1,.14.41.57.57,0,0,1-.06.24.65.65,0,0,1-.15.17l-.61.34a.22.22,0,0,1-.17,0l-.13-.06a.37.37,0,0,0-.19,0,1.11,1.11,0,0,0-.35.15,1.65,1.65,0,0,0-.41.33.64.64,0,0,0-.18.44.24.24,0,0,0,0,.16s.08.05.16.05a1.88,1.88,0,0,0,.34-.06l.56-.16c.46-.14.79-.12,1,0a1.13,1.13,0,0,1,.28.88,2.19,2.19,0,0,1-.11.68,3.66,3.66,0,0,1-.34.73,3.87,3.87,0,0,1-.55.69,4,4,0,0,1-.73.56,2.39,2.39,0,0,1-.73.29,1.18,1.18,0,0,1-.54,0,.64.64,0,0,1-.33-.28.87.87,0,0,1-.13-.43.49.49,0,0,1,.06-.23.48.48,0,0,1,.16-.18l.6-.34c.07,0,.13-.06.17,0a.51.51,0,0,1,.13.09.33.33,0,0,0,.21,0,1,1,0,0,0,.4-.15l.24-.16.23-.2a1.81,1.81,0,0,0,.18-.23A.43.43,0,0,0,227.74,245.64Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 227.004px 244.895px;" id="elnvzhlj71xd"
                                class="animable"></path>
                            <path
                                d="M229.39,243.53a5.33,5.33,0,0,1,.13-1.18,5.81,5.81,0,0,1,.38-1.11,4.41,4.41,0,0,1,.61-1,3.14,3.14,0,0,1,.79-.68,1.48,1.48,0,0,1,.79-.24.93.93,0,0,1,.61.22,1.41,1.41,0,0,1,.39.62,3,3,0,0,1,.13.94v.47a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-2.61,1.51a.75.75,0,0,0,.08.37.39.39,0,0,0,.2.2.55.55,0,0,0,.29,0,1.25,1.25,0,0,0,.33-.13,2,2,0,0,0,.41-.31,1.92,1.92,0,0,0,.26-.32.84.84,0,0,1,.14-.19.58.58,0,0,1,.14-.12l.63-.36a.14.14,0,0,1,.15,0,.14.14,0,0,1,.06.16,2,2,0,0,1-.12.44,3.72,3.72,0,0,1-.34.65,5.53,5.53,0,0,1-.56.7,3.53,3.53,0,0,1-.77.6,1.68,1.68,0,0,1-.79.25.84.84,0,0,1-.61-.23,1.48,1.48,0,0,1-.38-.67A3.61,3.61,0,0,1,229.39,243.53Zm1.91-2.67a1.72,1.72,0,0,0-.39.31,2,2,0,0,0-.26.39,1.62,1.62,0,0,0-.17.41,1.9,1.9,0,0,0-.08.37l1.77-1a1.36,1.36,0,0,0-.06-.29.57.57,0,0,0-.14-.24.42.42,0,0,0-.26-.08A1.15,1.15,0,0,0,231.3,240.86Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 231.305px 242.37px;" id="elim2ougqldho"
                                class="animable"></path>
                            <path
                                d="M235.44,240.78a.59.59,0,0,0,.13.45c.08.07.25.05.48-.09l.48-.27a.12.12,0,0,1,.15,0,.21.21,0,0,1,.06.16v.69a.53.53,0,0,1-.06.24.65.65,0,0,1-.15.17l-.58.33c-.49.28-.87.34-1.13.18s-.39-.58-.39-1.23v-2.24l-.52.3a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-.69a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.52-.3v-1.7a.53.53,0,0,1,.06-.23.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v1.7l1-.58a.12.12,0,0,1,.15,0,.2.2,0,0,1,.06.16v.69a.53.53,0,0,1-.06.24.34.34,0,0,1-.15.16l-1,.59Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 235.219px 239.093px;"
                                id="elbhlt9yejp9c" class="animable"></path>
                            <path
                                d="M241.66,231.86c.63-.36,1.12-.45,1.47-.25s.52.67.52,1.44a4,4,0,0,1-.52,2,3.94,3.94,0,0,1-1.47,1.45l-1.25.72v2.32a.53.53,0,0,1-.06.24.51.51,0,0,1-.15.17l-.63.36c-.06,0-.11,0-.15,0a.17.17,0,0,1-.07-.16v-6.73a.43.43,0,0,1,.07-.23.36.36,0,0,1,.15-.17ZM240.41,236l1.21-.7a2.12,2.12,0,0,0,.71-.65,1.64,1.64,0,0,0,.27-1c0-.38-.09-.6-.27-.65a1,1,0,0,0-.71.19l-1.21.7Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 241.499px 235.908px;"
                                id="el9r2ja6cvptw" class="animable"></path>
                            <path
                                d="M244.35,233.52a2.34,2.34,0,0,1,.14-.55,4,4,0,0,1,.32-.66,4.27,4.27,0,0,1,.51-.65,2.9,2.9,0,0,1,.7-.54,1.87,1.87,0,0,1,.72-.28.79.79,0,0,1,.55.1.88.88,0,0,1,.35.47,2.66,2.66,0,0,1,.13.87v3.06a.44.44,0,0,1-.07.24.49.49,0,0,1-.14.17l-.6.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-.34a3.91,3.91,0,0,1-.47.79,2.7,2.7,0,0,1-.79.66,1.56,1.56,0,0,1-.6.23.63.63,0,0,1-.44-.08.74.74,0,0,1-.28-.36,1.49,1.49,0,0,1-.1-.59,2.6,2.6,0,0,1,.38-1.35,4.41,4.41,0,0,1,1-1.14l1.27-1q0-.42-.21-.48a.7.7,0,0,0-.52.13,1,1,0,0,0-.31.24c-.07.1-.14.2-.21.32a.87.87,0,0,1-.13.19.45.45,0,0,1-.13.11l-.72.42a.14.14,0,0,1-.14,0A.12.12,0,0,1,244.35,233.52Zm1.3,2.18a1.87,1.87,0,0,0,.47-.37,2,2,0,0,0,.35-.47,2.58,2.58,0,0,0,.21-.49,1.62,1.62,0,0,0,.07-.47v-.1l-1.06.86a2,2,0,0,0-.46.48.8.8,0,0,0-.14.46c0,.15,0,.22.16.23A.78.78,0,0,0,245.65,235.7Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 245.92px 234.054px;" id="el3beqch5mzgo"
                                class="animable"></path>
                            <path
                                d="M251,232.2A.18.18,0,0,0,251,232a.27.27,0,0,0-.19,0,2.74,2.74,0,0,0-.36.08l-.58.17a1.57,1.57,0,0,1-.57.07.66.66,0,0,1-.37-.16.69.69,0,0,1-.19-.36,3,3,0,0,1,0-.55,2.46,2.46,0,0,1,.11-.67,3.26,3.26,0,0,1,.31-.72,3.6,3.6,0,0,1,.51-.67,2.75,2.75,0,0,1,.68-.54,2.18,2.18,0,0,1,.68-.28,1.09,1.09,0,0,1,.51,0,.64.64,0,0,1,.33.25.8.8,0,0,1,.13.42.4.4,0,0,1,0,.23.44.44,0,0,1-.16.17l-.6.35c-.08,0-.14.06-.17,0a.75.75,0,0,1-.13-.06.37.37,0,0,0-.19,0,1,1,0,0,0-.35.15,1.7,1.7,0,0,0-.42.33.64.64,0,0,0-.18.44.23.23,0,0,0,.05.16.16.16,0,0,0,.16.05,2.23,2.23,0,0,0,.34-.06l.56-.16c.46-.14.79-.12,1,0a1.1,1.1,0,0,1,.29.88,2.17,2.17,0,0,1-.12.68,3.17,3.17,0,0,1-.34.73,3.8,3.8,0,0,1-.54.69,3.63,3.63,0,0,1-.73.56,2.16,2.16,0,0,1-.73.29,1,1,0,0,1-.54,0,.59.59,0,0,1-.33-.27.94.94,0,0,1-.13-.44.4.4,0,0,1,.06-.23.45.45,0,0,1,.15-.18l.6-.34q.12-.07.18,0l.13.09a.41.41,0,0,0,.21.05,1.19,1.19,0,0,0,.4-.16l.24-.16.23-.2a.91.91,0,0,0,.17-.23A.46.46,0,0,0,251,232.2Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 250.467px 231.423px;"
                                id="el2qlk6caos7t" class="animable"></path>
                            <path
                                d="M255.08,229.85a.18.18,0,0,0-.06-.15.25.25,0,0,0-.19,0,1.86,1.86,0,0,0-.36.09l-.58.16a1.38,1.38,0,0,1-.57.07.59.59,0,0,1-.36-.15.71.71,0,0,1-.2-.36,3,3,0,0,1,0-.55,2.47,2.47,0,0,1,.11-.68,3.24,3.24,0,0,1,.32-.72,3.43,3.43,0,0,1,.5-.67,3,3,0,0,1,.68-.54A2.45,2.45,0,0,1,255,226a1.08,1.08,0,0,1,.51,0,.57.57,0,0,1,.33.24.83.83,0,0,1,.13.42.4.4,0,0,1-.05.23.44.44,0,0,1-.16.17l-.6.35c-.08,0-.13.06-.17,0l-.13-.05a.37.37,0,0,0-.19,0,.85.85,0,0,0-.35.14,1.36,1.36,0,0,0-.41.34.57.57,0,0,0-.18.43.25.25,0,0,0,0,.17s.08.05.16.05l.34-.07.56-.16c.46-.13.79-.12,1,.06a1.13,1.13,0,0,1,.28.88,2.11,2.11,0,0,1-.12.67,2.83,2.83,0,0,1-.34.73,3.8,3.8,0,0,1-.54.69,3.3,3.3,0,0,1-.73.56,2.45,2.45,0,0,1-.73.3,1.18,1.18,0,0,1-.54,0,.65.65,0,0,1-.33-.28.91.91,0,0,1-.13-.44.53.53,0,0,1,.06-.23.52.52,0,0,1,.15-.17l.6-.35a.21.21,0,0,1,.18,0l.13.1a.33.33,0,0,0,.21,0,.87.87,0,0,0,.4-.16,1.11,1.11,0,0,0,.24-.16l.23-.2a1.24,1.24,0,0,0,.18-.22A.55.55,0,0,0,255.08,229.85Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 254.344px 229.075px;"
                                id="el3tdc81csefo" class="animable"></path>
                            <path
                                d="M260.79,225.92l.71-3.39c0-.06,0-.13.06-.2a.33.33,0,0,1,.16-.17l.59-.35a.14.14,0,0,1,.15,0,.26.26,0,0,1,.05.24l-1.18,5.48a.94.94,0,0,1-.07.22.35.35,0,0,1-.15.17l-.6.35q-.11.06-.15,0a.54.54,0,0,1-.07-.13l-.76-2.35-.76,3.22a1.42,1.42,0,0,1-.07.22.33.33,0,0,1-.16.17l-.59.35c-.07,0-.12,0-.16,0a.54.54,0,0,1-.07-.13l-1.17-4.12a.15.15,0,0,1,0-.07.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34c.07,0,.13,0,.15,0a.33.33,0,0,1,.07.13l.7,2.57L259,224a.8.8,0,0,1,.08-.21.35.35,0,0,1,.14-.17l.6-.34c.05,0,.1,0,.14,0a.19.19,0,0,1,.07.12Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 259.533px 225.769px;"
                                id="el3br7oblu4sd" class="animable"></path>
                            <path
                                d="M265,220.17a1.73,1.73,0,0,1,.78-.27.93.93,0,0,1,.6.14,1.19,1.19,0,0,1,.41.49,2.1,2.1,0,0,1,.17.8,1.48,1.48,0,0,1,0,.23v.58a1.77,1.77,0,0,1,0,.24,4.48,4.48,0,0,1-.18,1,4.66,4.66,0,0,1-.4,1,4.58,4.58,0,0,1-.6.84,3.09,3.09,0,0,1-.78.62,1.7,1.7,0,0,1-.78.27,1,1,0,0,1-.6-.13,1.08,1.08,0,0,1-.4-.5,2.24,2.24,0,0,1-.18-.79c0-.06,0-.13,0-.23v-.57c0-.1,0-.18,0-.25a4.48,4.48,0,0,1,.18-1,5,5,0,0,1,.4-1,4.26,4.26,0,0,1,.6-.84A3.28,3.28,0,0,1,265,220.17Zm.95,1.79a1.28,1.28,0,0,0-.12-.47.49.49,0,0,0-.22-.21.48.48,0,0,0-.29,0,1.25,1.25,0,0,0-.32.14,2.13,2.13,0,0,0-.32.23,1.66,1.66,0,0,0-.29.34,2,2,0,0,0-.22.46,2.21,2.21,0,0,0-.11.61c0,.05,0,.13,0,.21v.53c0,.08,0,.15,0,.19a1,1,0,0,0,.11.47.4.4,0,0,0,.22.21.41.41,0,0,0,.29,0,1.48,1.48,0,0,0,.32-.14,1.72,1.72,0,0,0,.32-.23,1.62,1.62,0,0,0,.29-.34,1.86,1.86,0,0,0,.22-.47,2.45,2.45,0,0,0,.12-.6V222Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 265.002px 223.005px;"
                                id="el3jh9yhh0z26" class="animable"></path>
                            <path
                                d="M269.74,218.77a1.82,1.82,0,0,0-.68.67,2.15,2.15,0,0,0-.2,1v2.71a.51.51,0,0,1-.07.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.2.2,0,0,1-.06-.16V218.9a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34a.12.12,0,0,1,.15,0,.22.22,0,0,1,.07.17v.24a3.56,3.56,0,0,1,.43-.64,2.11,2.11,0,0,1,.6-.48l.36-.21a.12.12,0,0,1,.14,0,.18.18,0,0,1,.07.16v.69a.59.59,0,0,1-.21.4Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 269.15px 220.567px;" id="el9h7a7eyyir5"
                                class="animable"></path>
                            <path
                                d="M272.6,215.77a1.57,1.57,0,0,1,.44-.19,1.05,1.05,0,0,1,.33,0,.83.83,0,0,1,.25.06.5.5,0,0,1,.16.11v-2.22a.43.43,0,0,1,.07-.23.41.41,0,0,1,.14-.17l.6-.34a.12.12,0,0,1,.15,0,.21.21,0,0,1,.06.16v6.84a.53.53,0,0,1-.06.23.43.43,0,0,1-.15.17l-.6.34a.11.11,0,0,1-.14,0,.19.19,0,0,1-.07-.17v-.24a2.25,2.25,0,0,1-.16.3,3.31,3.31,0,0,1-.25.35,2.65,2.65,0,0,1-.33.35,2.46,2.46,0,0,1-.44.31,1.2,1.2,0,0,1-.7.2.83.83,0,0,1-.54-.23,1.35,1.35,0,0,1-.35-.57,2.73,2.73,0,0,1-.15-.84v-.73a4.57,4.57,0,0,1,.15-1,4.76,4.76,0,0,1,.35-1,4.1,4.1,0,0,1,.54-.85A2.5,2.5,0,0,1,272.6,215.77Zm-.72,2.94a2.81,2.81,0,0,0,0,.58c0,.43.13.7.31.79a.64.64,0,0,0,.65-.08,1.73,1.73,0,0,0,.64-.67,2.22,2.22,0,0,0,.3-1c0-.11,0-.24,0-.4a3.84,3.84,0,0,0,0-.39.79.79,0,0,0-.3-.68.59.59,0,0,0-.64.06,1.82,1.82,0,0,0-.65.67A2.57,2.57,0,0,0,271.88,218.71Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 272.83px 217.197px;" id="elthkp8rvctcj"
                                class="animable"></path>
                            <path
                                d="M225,285.09a2.37,2.37,0,0,1,.92-.35,1.18,1.18,0,0,1,.67.09.87.87,0,0,1,.4.38,1.37,1.37,0,0,1,.15.56.32.32,0,0,1-.06.23.36.36,0,0,1-.15.17l-.55.31a.21.21,0,0,1-.2,0,.3.3,0,0,1-.12-.11.51.51,0,0,0-.35-.25,1.16,1.16,0,0,0-.71.22,3.16,3.16,0,0,0-.39.28,2.66,2.66,0,0,0-.32.35,1.64,1.64,0,0,0-.21.39,1.14,1.14,0,0,0-.08.4.65.65,0,0,0,.08.35.27.27,0,0,0,.25.11,1.44,1.44,0,0,0,.46-.06l.72-.2a3.52,3.52,0,0,1,.81-.15.94.94,0,0,1,.55.12.76.76,0,0,1,.32.4,2,2,0,0,1,.11.7,3,3,0,0,1-.16,1,4.07,4.07,0,0,1-.44.95,4.83,4.83,0,0,1-1.66,1.57,2.91,2.91,0,0,1-.84.34,1.51,1.51,0,0,1-.7,0,.9.9,0,0,1-.5-.36,1.42,1.42,0,0,1-.21-.71.53.53,0,0,1,.06-.24.34.34,0,0,1,.15-.16l.55-.32c.09-.05.15-.07.2-.05a.18.18,0,0,1,.12.12.8.8,0,0,0,.13.19.37.37,0,0,0,.21.12.77.77,0,0,0,.33,0,2,2,0,0,0,.5-.22,2.77,2.77,0,0,0,.45-.31,2,2,0,0,0,.39-.38,1.83,1.83,0,0,0,.26-.42,1.06,1.06,0,0,0,.1-.46c0-.15,0-.26-.11-.31a.41.41,0,0,0-.33-.06,4.33,4.33,0,0,0-.55.12l-.76.2a2.66,2.66,0,0,1-.68.1.78.78,0,0,1-.77-.57,2.56,2.56,0,0,1-.09-.75,3.25,3.25,0,0,1,.15-1,4.53,4.53,0,0,1,.43-.92,4.26,4.26,0,0,1,.65-.82A4,4,0,0,1,225,285.09Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 225.045px 288.828px;"
                                id="elxhc2rqn0ybl" class="animable"></path>
                            <path
                                d="M228.93,282.8a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.81a.53.53,0,0,1-.06.24.39.39,0,0,1-.15.16l-.67.39c-.06,0-.11,0-.15,0a.22.22,0,0,1-.06-.17v-.81a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17Zm.17,7a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.59.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-4.85a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 228.595px 286.675px;" id="el8ot61mxq7w"
                                class="animable"></path>
                            <path
                                d="M232,289.49a1.81,1.81,0,0,0,.34-.26,1.84,1.84,0,0,0,.31-.4,1.91,1.91,0,0,0,.23-.5,1.85,1.85,0,0,0,.09-.58v-.38a3.1,3.1,0,0,1-.16.3,3.25,3.25,0,0,1-.25.34,2.69,2.69,0,0,1-.33.35,2.32,2.32,0,0,1-.44.31,1.3,1.3,0,0,1-.7.21.81.81,0,0,1-.54-.23,1.33,1.33,0,0,1-.35-.58,2.68,2.68,0,0,1-.15-.84c0-.1,0-.22,0-.36s0-.26,0-.37a4.49,4.49,0,0,1,.15-1,4.85,4.85,0,0,1,.35-1,4,4,0,0,1,.54-.85,2.5,2.5,0,0,1,.7-.61,2.25,2.25,0,0,1,.44-.19,1.4,1.4,0,0,1,.33,0,.61.61,0,0,1,.25.07.74.74,0,0,1,.16.1v-.24a.43.43,0,0,1,.07-.23.49.49,0,0,1,.14-.17l.6-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v4.88a4.49,4.49,0,0,1-.53,2.21,3.84,3.84,0,0,1-1.46,1.48,2.09,2.09,0,0,1-.73.28,1.14,1.14,0,0,1-.59,0,.81.81,0,0,1-.4-.3.94.94,0,0,1-.17-.51.48.48,0,0,1,.22-.41l.53-.3a.14.14,0,0,1,.18,0l.14.1a.37.37,0,0,0,.27.13A1.14,1.14,0,0,0,232,289.49ZM231,286a2.81,2.81,0,0,0,0,.58c0,.44.13.7.31.8a.66.66,0,0,0,.65-.08,1.8,1.8,0,0,0,.64-.67,2.25,2.25,0,0,0,.3-1c0-.11,0-.25,0-.41a3.47,3.47,0,0,0,0-.38.77.77,0,0,0-.3-.68.59.59,0,0,0-.64.06,1.75,1.75,0,0,0-.65.67A2.52,2.52,0,0,0,231,286Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 232.021px 286.554px;"
                                id="elcyk2oy52hz6" class="animable"></path>
                            <path
                                d="M238.83,284.2a.59.59,0,0,1-.21.4l-.6.34a.12.12,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-2.65a1.28,1.28,0,0,0-.22-.87c-.14-.17-.37-.16-.67,0a1.61,1.61,0,0,0-.65.75,2.64,2.64,0,0,0-.24,1.14v2.64a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.59.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-4.85a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.24a3.92,3.92,0,0,1,.48-.72,2,2,0,0,1,.65-.55,1.57,1.57,0,0,1,.79-.27.69.69,0,0,1,.52.24,1.23,1.23,0,0,1,.27.61,4.06,4.06,0,0,1,.09.89Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 236.924px 283.101px;"
                                id="el9t4vtedxldt" class="animable"></path>
                            <path
                                d="M241.61,277.74a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34a.12.12,0,0,1,.15,0,.2.2,0,0,1,.06.16v2.65a1.48,1.48,0,0,0,.2.88c.13.18.35.18.65,0a1.52,1.52,0,0,0,.64-.74,2.87,2.87,0,0,0,.22-1.12v-2.65a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34a.12.12,0,0,1,.15,0,.21.21,0,0,1,.06.16v4.86a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.22.22,0,0,1-.06-.17v-.23a5,5,0,0,1-.45.68,2.17,2.17,0,0,1-.64.57,1.45,1.45,0,0,1-.79.25.67.67,0,0,1-.5-.24,1.42,1.42,0,0,1-.26-.62,4.09,4.09,0,0,1-.08-.89Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 243.475px 278.857px;"
                                id="el3ynfbk56tf8" class="animable"></path>
                            <path
                                d="M248.61,278.93a1.42,1.42,0,0,1-.43.19,1.08,1.08,0,0,1-.34,0,.84.84,0,0,1-.24-.06.71.71,0,0,1-.17-.11v2.22a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.22.22,0,0,1-.06-.17V275a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34q.09-.06.15,0a.18.18,0,0,1,.06.16v.24c0-.09.1-.19.17-.3s.15-.23.24-.35a3.69,3.69,0,0,1,.34-.35,2.78,2.78,0,0,1,.43-.31,1.23,1.23,0,0,1,.71-.2.87.87,0,0,1,.54.22,1.45,1.45,0,0,1,.35.58,2.73,2.73,0,0,1,.15.84v.73a4.57,4.57,0,0,1-.15,1,4.76,4.76,0,0,1-.35,1,4.1,4.1,0,0,1-.54.85A2.54,2.54,0,0,1,248.61,278.93Zm.73-2.94a2.81,2.81,0,0,0,0-.58c0-.43-.14-.7-.31-.79a.63.63,0,0,0-.65.08,1.66,1.66,0,0,0-.64.67,2.35,2.35,0,0,0-.31,1c0,.11,0,.24,0,.4s0,.29,0,.39a.83.83,0,0,0,.31.68.59.59,0,0,0,.64-.06,1.9,1.9,0,0,0,.65-.67A2.7,2.7,0,0,0,249.34,276Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 248.39px 277.543px;" id="elkgwq486gee"
                                class="animable"></path>
                            <path
                                d="M256.85,273.8a.43.43,0,0,1-.07.23.49.49,0,0,1-.14.17l-.6.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-2.64a1.33,1.33,0,0,0-.22-.88c-.14-.16-.37-.16-.67,0a1.61,1.61,0,0,0-.65.75,2.63,2.63,0,0,0-.24,1.13v2.65a.46.46,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0A.2.2,0,0,1,253,276v-4.86a.55.55,0,0,1,.07-.23.36.36,0,0,1,.15-.17l.59-.34q.09-.06.15,0a.18.18,0,0,1,.06.16v.24a5.11,5.11,0,0,1,.48-.73,2.47,2.47,0,0,1,.65-.55,1.54,1.54,0,0,1,.79-.26.72.72,0,0,1,.52.23,1.31,1.31,0,0,1,.27.62,4,4,0,0,1,.09.88Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 254.925px 272.708px;" id="elnnzglm0zob"
                                class="animable"></path>
                            <path
                                d="M259.67,266.92a2,2,0,0,1,.78-.27.93.93,0,0,1,.6.15,1.12,1.12,0,0,1,.41.49,2,2,0,0,1,.17.79,1.63,1.63,0,0,1,0,.24v.58a1.77,1.77,0,0,1,0,.24,4.48,4.48,0,0,1-.18,1,4.16,4.16,0,0,1-.4.95,4.5,4.5,0,0,1-.6.83,3.37,3.37,0,0,1-.78.63,1.93,1.93,0,0,1-.77.27.9.9,0,0,1-.6-.14,1.06,1.06,0,0,1-.41-.49,2.49,2.49,0,0,1-.18-.79c0-.06,0-.14,0-.23v-.58c0-.09,0-.18,0-.24a4.48,4.48,0,0,1,.18-1,4.55,4.55,0,0,1,.41-1,3.84,3.84,0,0,1,1.37-1.47Zm.95,1.8a1.3,1.3,0,0,0-.11-.47.42.42,0,0,0-.23-.21.48.48,0,0,0-.29,0,1.66,1.66,0,0,0-.32.13l-.32.24a1.52,1.52,0,0,0-.28.33,2.28,2.28,0,0,0-.23.47,2.21,2.21,0,0,0-.11.6,1.41,1.41,0,0,0,0,.22,3.38,3.38,0,0,0,0,.52,1,1,0,0,0,0,.2,1.08,1.08,0,0,0,.11.47.42.42,0,0,0,.23.21.44.44,0,0,0,.28,0,1.3,1.3,0,0,0,.32-.14,2.35,2.35,0,0,0,.32-.23,1.62,1.62,0,0,0,.29-.34,2.06,2.06,0,0,0,.23-.47,2.67,2.67,0,0,0,.11-.6c0-.05,0-.12,0-.21v-.52C260.63,268.84,260.62,268.77,260.62,268.72Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 259.672px 269.736px;"
                                id="elcg8qvvlken9" class="animable"></path>
                            <path
                                d="M266.38,266.38l.71-3.38a1.15,1.15,0,0,1,.06-.21.37.37,0,0,1,.16-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16.22.22,0,0,1,0,.08L266.92,268a1.11,1.11,0,0,1-.07.22.33.33,0,0,1-.16.17l-.59.34c-.07,0-.12,0-.15,0a.61.61,0,0,1-.07-.14l-.76-2.34-.76,3.22-.07.22a.33.33,0,0,1-.16.17l-.59.34c-.07,0-.13.05-.16,0a.46.46,0,0,1-.07-.14L262.13,266v-.07a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34c.07,0,.12,0,.15,0a.83.83,0,0,1,.07.13l.7,2.57.75-3.41a.8.8,0,0,1,.08-.21.37.37,0,0,1,.14-.16l.59-.34a.12.12,0,0,1,.15,0,.24.24,0,0,1,.07.13Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 265.122px 266.24px;" id="el1lzcc46uxuy"
                                class="animable"></path>
                            <path
                                d="M301,152.25,189.51,216.61c-.63.37-1.14,0-1.14-.86V202.9a2.74,2.74,0,0,1,1.14-2.18L301,136.36c.63-.36,1.14,0,1.14.86v12.85A2.73,2.73,0,0,1,301,152.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 245.255px 176.487px;"
                                id="el4yht8l19gfb" class="animable"></path>
                            <path
                                d="M196.35,206.72a.14.14,0,0,1,.15,0,.2.2,0,0,1,.06.16v.74a.53.53,0,0,1-.06.24.34.34,0,0,1-.15.16l-3.43,2a.12.12,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-6.73a.53.53,0,0,1,.06-.24.51.51,0,0,1,.15-.17l3.37-1.94a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.74a.49.49,0,0,1-.06.23.36.36,0,0,1-.15.17l-2.52,1.46v1.66l2.35-1.36a.11.11,0,0,1,.15,0,.18.18,0,0,1,.06.16v.74a.53.53,0,0,1-.06.23.52.52,0,0,1-.15.17l-2.35,1.36v1.73Z"
                                style="fill: rgb(213 227 242); transform-origin: 194.635px 205.402px;"
                                id="eli7phll3s41" class="animable"></path>
                            <path
                                d="M197.52,204.85a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16V204a.53.53,0,0,1,.06-.23.52.52,0,0,1,.15-.17l2.38-1.38a.14.14,0,0,1,.15,0,.18.18,0,0,1,.07.16v.69a.41.41,0,0,1-.07.23.36.36,0,0,1-.15.17Z"
                                style="fill: rgb(213 227 242); transform-origin: 198.715px 203.535px;"
                                id="eld6ezv8ks0lq" class="animable"></path>
                            <path
                                d="M202.16,199.78a3.13,3.13,0,0,1,.46-.73,2,2,0,0,1,.55-.48,1.24,1.24,0,0,1,.81-.22.73.73,0,0,1,.49.36,2.49,2.49,0,0,1,.25-.52,4.25,4.25,0,0,1,.31-.47,3.11,3.11,0,0,1,.35-.37,2.42,2.42,0,0,1,.35-.26,1.34,1.34,0,0,1,.74-.23.67.67,0,0,1,.48.25,1.31,1.31,0,0,1,.26.63,4.82,4.82,0,0,1,.08.89v2.8a.39.39,0,0,1-.07.23.36.36,0,0,1-.15.17l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-2.75c0-.48-.07-.77-.2-.87s-.33-.1-.57,0a1.52,1.52,0,0,0-.54.58,2.35,2.35,0,0,0-.24,1.09v2.8a.49.49,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-2.75c0-.48-.07-.77-.2-.87s-.33-.1-.57,0a1.53,1.53,0,0,0-.55.6,2.36,2.36,0,0,0-.23,1.12v2.75a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-4.86a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34a.12.12,0,0,1,.15,0,.22.22,0,0,1,.06.17Z"
                                style="fill: rgb(213 227 242); transform-origin: 204.22px 200.968px;"
                                id="elo1oxi0ledh" class="animable"></path>
                            <path
                                d="M208.32,197a3.07,3.07,0,0,1,.15-.55,4,4,0,0,1,.32-.66,4.27,4.27,0,0,1,.51-.65,2.9,2.9,0,0,1,.7-.54,1.87,1.87,0,0,1,.72-.28.79.79,0,0,1,.55.1.88.88,0,0,1,.35.47,2.66,2.66,0,0,1,.13.87v3.07a.43.43,0,0,1-.07.23.41.41,0,0,1-.14.17l-.6.34c-.06,0-.1,0-.15,0a.18.18,0,0,1-.06-.16v-.34a3.91,3.91,0,0,1-.47.79,2.7,2.7,0,0,1-.79.66,1.56,1.56,0,0,1-.6.23.63.63,0,0,1-.44-.08.74.74,0,0,1-.28-.36,1.45,1.45,0,0,1-.1-.59,2.52,2.52,0,0,1,.39-1.35,4.34,4.34,0,0,1,1-1.14l1.27-1q0-.42-.21-.48a.7.7,0,0,0-.52.13,1.13,1.13,0,0,0-.31.25,2.22,2.22,0,0,0-.21.32.7.7,0,0,1-.13.18.45.45,0,0,1-.13.11l-.72.42a.14.14,0,0,1-.14,0S208.32,197.1,208.32,197Zm1.31,2.18a1.87,1.87,0,0,0,.47-.37,2.15,2.15,0,0,0,.35-.46,3,3,0,0,0,.21-.5,1.62,1.62,0,0,0,.07-.47v-.1l-1.06.86a1.83,1.83,0,0,0-.46.48.8.8,0,0,0-.14.46c0,.15.05.22.17.23A.78.78,0,0,0,209.63,199.21Z"
                                style="fill: rgb(213 227 242); transform-origin: 209.9px 197.534px;"
                                id="elkng0e50b5hi" class="animable"></path>
                            <path
                                d="M213.63,190.66a.12.12,0,0,1,.15,0,.22.22,0,0,1,.06.17v.81a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.67.39a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-.81a.53.53,0,0,1,.06-.24A.42.42,0,0,1,213,191Zm.17,7a.49.49,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.07-.16V193.4a.55.55,0,0,1,.07-.23A.36.36,0,0,1,213,193l.59-.34a.12.12,0,0,1,.15,0,.22.22,0,0,1,.06.17Z"
                                style="fill: rgb(213 227 242); transform-origin: 213.295px 194.533px;"
                                id="eltpgnnauuhx" class="animable"></path>
                            <path
                                d="M215.89,196.46a.53.53,0,0,1-.06.24.39.39,0,0,1-.15.16l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-6.83a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16Z"
                                style="fill: rgb(213 227 242); transform-origin: 215.385px 193.34px;"
                                id="el9b4g28vcv1e" class="animable"></path>
                            <path
                                d="M301,187.51,189.51,251.88c-.63.36-1.14,0-1.14-.87V238.16a2.72,2.72,0,0,1,1.14-2.17L301,171.62c.63-.36,1.14,0,1.14.87v12.84A2.73,2.73,0,0,1,301,187.51Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 245.255px 211.75px;"
                                id="eluld2jtq8zu" class="animable"></path>
                            <path
                                d="M195,236.77c.63-.37,1.11-.45,1.46-.26s.53.68.53,1.44a4,4,0,0,1-.53,2.05,3.91,3.91,0,0,1-1.46,1.45l-1.25.72v2.33a.55.55,0,0,1-.07.23.36.36,0,0,1-.15.17l-.63.36a.12.12,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-6.73a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17Zm-1.25,4.1,1.21-.7a2.19,2.19,0,0,0,.71-.64,1.73,1.73,0,0,0,.26-1c0-.39-.09-.61-.26-.66a1,1,0,0,0-.71.19l-1.21.7Z"
                                style="fill: rgb(213 227 242); transform-origin: 194.84px 240.848px;"
                                id="el60t9nrt19jw" class="animable"></path>
                            <path
                                d="M197.7,238.42a2.41,2.41,0,0,1,.15-.55,3,3,0,0,1,.32-.65,3.83,3.83,0,0,1,.5-.66,3.11,3.11,0,0,1,.7-.54,2.16,2.16,0,0,1,.72-.27.82.82,0,0,1,.55.09.88.88,0,0,1,.36.48,2.6,2.6,0,0,1,.12.87v3.06a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34a.12.12,0,0,1-.15,0,.21.21,0,0,1-.06-.17v-.34a3.65,3.65,0,0,1-.47.79,2.89,2.89,0,0,1-.79.67,1.53,1.53,0,0,1-.6.22.61.61,0,0,1-.45-.08.65.65,0,0,1-.27-.35,1.51,1.51,0,0,1-.1-.6,2.54,2.54,0,0,1,.38-1.34,4.77,4.77,0,0,1,1-1.15l1.28-1q0-.44-.21-.48a.71.71,0,0,0-.53.12,1.11,1.11,0,0,0-.3.25,3,3,0,0,0-.21.32l-.13.19a.41.41,0,0,1-.13.1l-.73.42a.13.13,0,0,1-.13,0S197.69,238.5,197.7,238.42Zm1.31,2.19a2.45,2.45,0,0,0,.47-.38,2.54,2.54,0,0,0,.35-.46,2.66,2.66,0,0,0,.21-.5,2,2,0,0,0,.07-.47v-.1l-1.06.86a2.3,2.3,0,0,0-.47.48.88.88,0,0,0-.14.46c0,.15.06.22.17.23A.89.89,0,0,0,199,240.61Z"
                                style="fill: rgb(213 227 242); transform-origin: 199.275px 238.955px;"
                                id="elit30lspqlch" class="animable"></path>
                            <path
                                d="M204.37,237.1a.19.19,0,0,0-.05-.15.26.26,0,0,0-.19,0,1.77,1.77,0,0,0-.37.09l-.57.16a1.41,1.41,0,0,1-.58.07.59.59,0,0,1-.36-.15.76.76,0,0,1-.19-.37,2.16,2.16,0,0,1-.05-.54,2.43,2.43,0,0,1,.1-.68,3.78,3.78,0,0,1,.32-.72,4,4,0,0,1,.51-.67,2.94,2.94,0,0,1,.67-.54,2.32,2.32,0,0,1,.69-.28,1,1,0,0,1,.51,0,.57.57,0,0,1,.33.24.83.83,0,0,1,.13.42.35.35,0,0,1-.06.23.36.36,0,0,1-.15.17l-.6.35c-.08,0-.14.06-.18,0l-.13-.05a.33.33,0,0,0-.18,0,.88.88,0,0,0-.36.14,1.86,1.86,0,0,0-.41.33.66.66,0,0,0-.18.44.27.27,0,0,0,0,.17.21.21,0,0,0,.17,0,1.29,1.29,0,0,0,.33-.06l.56-.16c.47-.14.79-.12,1,0a1.17,1.17,0,0,1,.29.89,2.16,2.16,0,0,1-.12.67,3.21,3.21,0,0,1-.34.73,3.87,3.87,0,0,1-.55.69,3.08,3.08,0,0,1-.73.56,2.08,2.08,0,0,1-.73.29,1,1,0,0,1-.53,0,.67.67,0,0,1-.34-.28.81.81,0,0,1-.12-.44.35.35,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.6-.35c.08,0,.14-.05.17,0l.14.09a.33.33,0,0,0,.21.05.85.85,0,0,0,.39-.16,2.56,2.56,0,0,0,.25-.16l.23-.2a1.18,1.18,0,0,0,.17-.22A.44.44,0,0,0,204.37,237.1Z"
                                style="fill: rgb(213 227 242); transform-origin: 203.642px 236.346px;"
                                id="elmsar9iua7k" class="animable"></path>
                            <path
                                d="M208.43,234.76c0-.08,0-.13-.05-.16a.27.27,0,0,0-.19,0,2.74,2.74,0,0,0-.36.08l-.58.17a1.83,1.83,0,0,1-.57.07.63.63,0,0,1-.37-.16.73.73,0,0,1-.19-.36,3,3,0,0,1-.05-.55,2.19,2.19,0,0,1,.11-.68,3.4,3.4,0,0,1,.31-.71,4,4,0,0,1,.51-.68,2.54,2.54,0,0,1,.68-.53,2.18,2.18,0,0,1,.68-.28,1.09,1.09,0,0,1,.51,0,.64.64,0,0,1,.33.25.77.77,0,0,1,.13.41.37.37,0,0,1-.06.24.42.42,0,0,1-.15.17l-.6.34a.24.24,0,0,1-.18,0l-.12-.06a.37.37,0,0,0-.19,0,1,1,0,0,0-.35.15,1.7,1.7,0,0,0-.42.33.64.64,0,0,0-.18.44.23.23,0,0,0,0,.16s.08.05.16.05a2.23,2.23,0,0,0,.34-.06l.55-.16c.47-.14.8-.12,1,0a1.13,1.13,0,0,1,.29.88,2.22,2.22,0,0,1-.12.68,3.66,3.66,0,0,1-.34.73,4.31,4.31,0,0,1-.54.69,4,4,0,0,1-.73.56,2.39,2.39,0,0,1-.73.29,1.17,1.17,0,0,1-.54,0,.66.66,0,0,1-.34-.27.93.93,0,0,1-.12-.44.33.33,0,0,1,.06-.23.39.39,0,0,1,.15-.18l.6-.34q.12-.07.18,0l.13.09a.33.33,0,0,0,.21,0,1,1,0,0,0,.4-.15l.24-.16.23-.2a1.13,1.13,0,0,0,.17-.23A.43.43,0,0,0,208.43,234.76Z"
                                style="fill: rgb(213 227 242); transform-origin: 207.692px 234.016px;"
                                id="elt54bws5q9m" class="animable"></path>
                            <path
                                d="M214.15,230.82l.7-3.38a1.72,1.72,0,0,1,.07-.21.35.35,0,0,1,.15-.17l.6-.34a.12.12,0,0,1,.15,0,.18.18,0,0,1,.06.16s0,.05,0,.07l-1.18,5.49a.86.86,0,0,1-.07.21.31.31,0,0,1-.16.18l-.59.34c-.07,0-.12,0-.15,0a.64.64,0,0,1-.08-.14l-.75-2.34-.76,3.22c0,.07,0,.14-.08.22a.35.35,0,0,1-.15.17l-.59.34c-.07,0-.13,0-.16,0a.61.61,0,0,1-.07-.14l-1.18-4.12v-.07a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.34c.07-.05.12-.05.15,0a.54.54,0,0,1,.07.13l.7,2.57.75-3.41a1.28,1.28,0,0,1,.07-.21.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.21.21,0,0,1,.07.13Z"
                                style="fill: rgb(213 227 242); transform-origin: 212.896px 230.667px;"
                                id="elhf3roabv3rr" class="animable"></path>
                            <path
                                d="M218.34,225.07a1.93,1.93,0,0,1,.77-.27.94.94,0,0,1,.61.14,1.13,1.13,0,0,1,.4.5,2.19,2.19,0,0,1,.18.79c0,.06,0,.14,0,.23V227c0,.1,0,.18,0,.24a4.39,4.39,0,0,1-.18,1,4.52,4.52,0,0,1-.4,1,4.13,4.13,0,0,1-.61.83,3.54,3.54,0,0,1-.77.63,2,2,0,0,1-.78.27,1,1,0,0,1-.6-.14,1.1,1.1,0,0,1-.4-.49,2.3,2.3,0,0,1-.18-.79,1.55,1.55,0,0,1,0-.23,2.71,2.71,0,0,1,0-.29c0-.09,0-.19,0-.29a1.85,1.85,0,0,1,0-.25,3.88,3.88,0,0,1,.17-1,4.87,4.87,0,0,1,.41-1,4.5,4.5,0,0,1,.6-.83A3.13,3.13,0,0,1,218.34,225.07Zm.94,1.8a1.08,1.08,0,0,0-.11-.47.4.4,0,0,0-.22-.21.48.48,0,0,0-.29,0,1.48,1.48,0,0,0-.32.14,1.72,1.72,0,0,0-.32.23,1.62,1.62,0,0,0-.29.34,2,2,0,0,0-.22.47,2.66,2.66,0,0,0-.12.6c0,.06,0,.13,0,.22v.52c0,.09,0,.15,0,.2a1.28,1.28,0,0,0,.12.47.4.4,0,0,0,.22.21.48.48,0,0,0,.29,0,1.66,1.66,0,0,0,.32-.13,3.33,3.33,0,0,0,.32-.24,1.66,1.66,0,0,0,.29-.34,2,2,0,0,0,.22-.46,2.21,2.21,0,0,0,.11-.6,1.28,1.28,0,0,0,0-.21v-.53A1.15,1.15,0,0,0,219.28,226.87Z"
                                style="fill: rgb(213 227 242); transform-origin: 218.338px 227.884px;"
                                id="elchv0cy6qkig" class="animable"></path>
                            <path
                                d="M223.1,223.68a1.67,1.67,0,0,0-.68.66,2.2,2.2,0,0,0-.21,1v2.71a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.59.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16v-4.85a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v.24a3.59,3.59,0,0,1,.44-.64,2.3,2.3,0,0,1,.6-.48l.35-.2a.12.12,0,0,1,.15,0,.21.21,0,0,1,.06.16V223a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17Z"
                                style="fill: rgb(213 227 242); transform-origin: 222.504px 225.458px;"
                                id="eldt03c0h267c" class="animable"></path>
                            <path
                                d="M226,220.67a1.77,1.77,0,0,1,.44-.19,1.35,1.35,0,0,1,.33,0,.61.61,0,0,1,.25.07l.16.1V218.4a.53.53,0,0,1,.06-.24.42.42,0,0,1,.15-.17l.59-.34a.14.14,0,0,1,.15,0,.17.17,0,0,1,.07.16v6.83a.44.44,0,0,1-.07.24.34.34,0,0,1-.15.16l-.59.35a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16V225l-.16.3a3.25,3.25,0,0,1-.25.34,3.61,3.61,0,0,1-.33.35,2.32,2.32,0,0,1-.44.31,1.3,1.3,0,0,1-.7.21.84.84,0,0,1-.54-.23,1.44,1.44,0,0,1-.36-.58,3,3,0,0,1-.14-.84c0-.1,0-.22,0-.36s0-.26,0-.37a5.12,5.12,0,0,1,.14-1,5.56,5.56,0,0,1,.36-1,3.6,3.6,0,0,1,.54-.85A2.5,2.5,0,0,1,226,220.67Zm-.72,2.94a2.81,2.81,0,0,0,0,.58c0,.44.13.7.31.8a.66.66,0,0,0,.65-.08,1.76,1.76,0,0,0,.64-.68,2.3,2.3,0,0,0,.3-1c0-.11,0-.25,0-.41a3.84,3.84,0,0,0,0-.39c0-.34-.12-.57-.3-.67a.6.6,0,0,0-.64.05,1.78,1.78,0,0,0-.65.68A2.49,2.49,0,0,0,225.24,223.61Z"
                                style="fill: rgb(213 227 242); transform-origin: 226.231px 222.069px;"
                                id="el4jbkcof8pu" class="animable"></path>
                            <g id="freepik--Eye--inject-10" class="animable"
                               style="transform-origin: 293.78px 183.748px;">
                                <path
                                    d="M293.78,187.76a3.87,3.87,0,0,1-5.12-.91l-.06-.09.06-.17c0-.05,2-5.1,5.12-6.88a3.85,3.85,0,0,1,5.11,1l.07.1-.07.17C298.87,181,296.86,186,293.78,187.76Zm-4.84-1.2a3.69,3.69,0,0,0,4.84.78c2.63-1.51,4.45-5.49,4.83-6.37a3.66,3.66,0,0,0-4.83-.84C291.14,181.65,289.32,185.67,288.94,186.56Z"
                                    style="fill: rgb(213 227 242); transform-origin: 293.78px 183.748px;"
                                    id="elzt9cw8dqhg" class="animable"></path>
                                <path
                                    d="M293.78,180.65a5.55,5.55,0,0,0-2.32,4.42c0,1.7,1,2.48,2.32,1.74a5.53,5.53,0,0,0,2.31-4.41C296.09,180.7,295.05,179.92,293.78,180.65Zm0,4.58c-.62.35-1.12,0-1.12-.85a2.66,2.66,0,0,1,1.12-2.13c.61-.36,1.11,0,1.11.84A2.71,2.71,0,0,1,293.78,185.23Z"
                                    style="fill: rgb(213 227 242); transform-origin: 293.775px 183.733px;"
                                    id="elw466gd8fas" class="animable"></path>
                            </g>
                            <path
                                d="M242.28,262.47a.14.14,0,0,1,.15,0,.17.17,0,0,1,.07.16v.74a.41.41,0,0,1-.07.23.36.36,0,0,1-.15.17l-3.42,2a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-6.73a.49.49,0,0,1,.06-.23.52.52,0,0,1,.15-.17l.64-.37a.12.12,0,0,1,.14,0,.18.18,0,0,1,.07.16V264Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 240.575px 261.94px;"
                                id="eln52yoslju8i" class="animable"></path>
                            <path
                                d="M245,256.71a1.9,1.9,0,0,1,.78-.28,1,1,0,0,1,.6.15,1.12,1.12,0,0,1,.41.49,2,2,0,0,1,.17.79,1.63,1.63,0,0,1,0,.24v.58a1.77,1.77,0,0,1,0,.24,4.48,4.48,0,0,1-.18,1,4.16,4.16,0,0,1-.4.95,4.5,4.5,0,0,1-.6.83,3.13,3.13,0,0,1-.78.63,1.93,1.93,0,0,1-.77.27.9.9,0,0,1-.6-.14,1.06,1.06,0,0,1-.41-.49,2.49,2.49,0,0,1-.18-.79c0-.06,0-.13,0-.23v-.58c0-.09,0-.18,0-.24a4.48,4.48,0,0,1,.18-1,4.78,4.78,0,0,1,.41-1,3.57,3.57,0,0,1,.6-.84A3.23,3.23,0,0,1,245,256.71Zm.95,1.79a1.3,1.3,0,0,0-.11-.47.42.42,0,0,0-.23-.21.48.48,0,0,0-.29,0,1.25,1.25,0,0,0-.32.14,2.79,2.79,0,0,0-.32.23,1.38,1.38,0,0,0-.28.34,2,2,0,0,0-.23.46,2.21,2.21,0,0,0-.11.6,1.41,1.41,0,0,0,0,.22c0,.08,0,.17,0,.26s0,.18,0,.26a1.9,1.9,0,0,0,.12.67.42.42,0,0,0,.23.21.44.44,0,0,0,.28,0,1.3,1.3,0,0,0,.32-.14,1.72,1.72,0,0,0,.32-.23,1.37,1.37,0,0,0,.29-.34,1.87,1.87,0,0,0,.23-.47,2.57,2.57,0,0,0,.11-.6c0-.05,0-.12,0-.21v-.52C245.92,258.62,245.91,258.56,245.91,258.5Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 245.002px 259.517px;"
                                id="el5m6n7whbcza" class="animable"></path>
                            <path
                                d="M249.6,260.59a1.5,1.5,0,0,0,.33-.26,1.72,1.72,0,0,0,.31-.39,2.4,2.4,0,0,0,.24-.51,2.12,2.12,0,0,0,.08-.57v-.39a2.25,2.25,0,0,1-.16.3,2.46,2.46,0,0,1-.25.34,2.15,2.15,0,0,1-.33.35,2.49,2.49,0,0,1-.44.32,1.28,1.28,0,0,1-.7.2.83.83,0,0,1-.54-.23,1.33,1.33,0,0,1-.35-.58,2.61,2.61,0,0,1-.15-.83v-.73a4.57,4.57,0,0,1,.15-1,4.76,4.76,0,0,1,.35-1,4.46,4.46,0,0,1,.54-.86,2.67,2.67,0,0,1,.7-.61,1.86,1.86,0,0,1,.44-.18.82.82,0,0,1,.33,0,.61.61,0,0,1,.25.06.5.5,0,0,1,.16.11v-.24a.44.44,0,0,1,.07-.24.34.34,0,0,1,.15-.16l.59-.35a.14.14,0,0,1,.15,0,.18.18,0,0,1,.06.16v4.88a4.49,4.49,0,0,1-.53,2.21,3.82,3.82,0,0,1-1.45,1.48,2.5,2.5,0,0,1-.74.29,1.25,1.25,0,0,1-.59,0,.81.81,0,0,1-.4-.3.94.94,0,0,1-.16-.51.39.39,0,0,1,0-.23.44.44,0,0,1,.16-.17l.53-.31a.17.17,0,0,1,.19,0l.13.1a.4.4,0,0,0,.28.14A1.23,1.23,0,0,0,249.6,260.59Zm-.94-3.5a2.91,2.91,0,0,0,0,.59c0,.43.13.69.31.79a.64.64,0,0,0,.65-.08,1.8,1.8,0,0,0,.64-.67,2.22,2.22,0,0,0,.3-1c0-.11,0-.24,0-.41a3.79,3.79,0,0,0,0-.38.79.79,0,0,0-.3-.68.59.59,0,0,0-.64.06,1.75,1.75,0,0,0-.65.67A2.52,2.52,0,0,0,248.66,257.09Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 249.611px 257.657px;"
                                id="eljai8l674muj" class="animable"></path>
                            <path
                                d="M253.5,249.9a.14.14,0,0,1,.15,0,.2.2,0,0,1,.06.16v.81a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.67.39a.14.14,0,0,1-.15,0,.2.2,0,0,1-.06-.16v-.82a.53.53,0,0,1,.06-.23.36.36,0,0,1,.15-.17Zm.17,7a.53.53,0,0,1-.06.23.36.36,0,0,1-.15.17l-.59.34c-.06,0-.11,0-.15,0a.18.18,0,0,1-.06-.16v-4.85a.49.49,0,0,1,.06-.23.36.36,0,0,1,.15-.17l.59-.35a.14.14,0,0,1,.15,0,.2.2,0,0,1,.06.16Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 253.165px 253.759px;"
                                id="eln4mfvlabbom" class="animable"></path>
                            <path
                                d="M258.56,254.09a.53.53,0,0,1-.06.24.42.42,0,0,1-.15.17l-.59.34a.14.14,0,0,1-.15,0,.18.18,0,0,1-.06-.16V252a1.38,1.38,0,0,0-.22-.87c-.15-.16-.37-.16-.67,0a1.61,1.61,0,0,0-.66.76,2.78,2.78,0,0,0-.23,1.13v2.65a.55.55,0,0,1-.07.23.41.41,0,0,1-.14.17l-.6.34a.12.12,0,0,1-.15,0,.22.22,0,0,1-.06-.17v-4.85a.49.49,0,0,1,.06-.23A.36.36,0,0,1,255,251l.6-.34a.11.11,0,0,1,.14,0,.22.22,0,0,1,.07.16v.24a4.24,4.24,0,0,1,.47-.72,2.29,2.29,0,0,1,.65-.55,1.57,1.57,0,0,1,.8-.26.68.68,0,0,1,.51.23,1.28,1.28,0,0,1,.28.62,4.71,4.71,0,0,1,.08.88Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 256.675px 252.983px;"
                                id="eli1kvuf1v078" class="animable"></path>
                        </g>
                    </g>
                    <g id="freepik--Padlock--inject-10" class="animable" style="transform-origin: 114.833px 260.183px;">
                        <g id="freepik--padlock--inject-10" class="animable"
                           style="transform-origin: 114.833px 260.183px;">
                            <path
                                d="M144.21,238.24a3.75,3.75,0,0,0-2.21-3.07l-4.34-2.5a11.76,11.76,0,0,0-10.65,0L87.69,255.36a3.74,3.74,0,0,0-2.2,3.08h0v51.93h0a3.71,3.71,0,0,0,2.2,3.08L92,316a11.76,11.76,0,0,0,10.65,0L142,293.26a3.75,3.75,0,0,0,2.21-3.08h0V238.24Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 114.85px 274.335px;" id="elbxql8z2x2vb"
                                class="animable"></path>
                            <g id="eln06b9dpma4l">
                                <path
                                    d="M144.21,238.24a3.75,3.75,0,0,0-2.21-3.07l-4.34-2.5a11.76,11.76,0,0,0-10.65,0L87.69,255.36a3.74,3.74,0,0,0-2.2,3.08h0v51.93h0a3.71,3.71,0,0,0,2.2,3.08L92,316a11.76,11.76,0,0,0,10.65,0L142,293.26a3.75,3.75,0,0,0,2.21-3.08h0V238.24Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 114.85px 274.335px;"
                                    class="animable"></path>
                            </g>
                            <g id="elnqsgqvkopsk">
                                <path
                                    d="M92,264l-4.34-2.5c-2.94-1.7-2.94-4.46,0-6.16L127,232.67a11.76,11.76,0,0,1,10.65,0l4.34,2.5c2.94,1.7,2.94,4.45,0,6.15L102.68,264A11.76,11.76,0,0,1,92,264Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 114.825px 248.339px;"
                                    class="animable"></path>
                            </g>
                            <g id="elws0b11ascz">
                                <path
                                    d="M97.36,265.29v51.94A10.88,10.88,0,0,1,92,316l-4.34-2.51a3.73,3.73,0,0,1-2.2-3.08V258.44a3.71,3.71,0,0,0,2.2,3.07L92,264A10.88,10.88,0,0,0,97.36,265.29Z"
                                    style="fill: rgb(16, 83, 156); opacity: 0.3; transform-origin: 91.41px 287.837px;"
                                    class="animable"></path>
                            </g>
                            <path
                                d="M126,291l-9.39,5.42,1.46-17c-1.12-.59-1.84-2.05-1.84-4.15,0-3.74,2.27-8.08,5.08-9.7s5.08.1,5.08,3.84a12.79,12.79,0,0,1-1.84,6.27Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 121.31px 280.69px;" id="el0grsyve96pmi"
                                class="animable"></path>
                            <polygon points="125.97 290.98 117.47 286.07 116.58 296.4 125.97 290.98"
                                     style="fill: rgb(55, 71, 79); transform-origin: 121.275px 291.235px;" id="ela70u0jbpisi"
                                     class="animable"></polygon>
                            <path
                                d="M121.28,265.57a11,11,0,0,0-4.33,5.74l7.57,4.37h0a12.79,12.79,0,0,0,1.84-6.27C126.36,265.67,124.08,264,121.28,265.57Z"
                                style="fill: rgb(55, 71, 79); transform-origin: 121.655px 270.331px;" id="eljrjf8emblqp"
                                class="animable"></path>
                            <path
                                d="M133.58,239.4h0V218.63c0-6.43-2.43-11.52-6.67-14-4-2.33-9-2-14.08.89-9.26,5.35-16.51,18.39-16.51,29.69v20.88h0a2.11,2.11,0,0,0,1.25,1.73,6.61,6.61,0,0,0,6,0,2.11,2.11,0,0,0,1.25-1.73h0V235.24c0-8.27,5.61-18.49,12.26-22.33,2.26-1.31,4.3-1.63,5.58-.89,1.52.88,2.42,3.35,2.42,6.61V239.4h0a2.1,2.1,0,0,0,1.24,1.72,6.61,6.61,0,0,0,6,0,2.12,2.12,0,0,0,1.25-1.72h0Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 114.95px 230.815px;" id="el6nf9r9gv0pe"
                                class="animable"></path>
                        </g>
                    </g>
                    <g id="freepik--Asterisks--inject-10" class="animable"
                       style="transform-origin: 110.925px 90.6455px;">
                        <g id="freepik--Password--inject-10" class="animable"
                           style="transform-origin: 110.925px 90.6455px;">
                            <path id="freepik--shadow--inject-10"
                                  d="M45.47,108.88,169.1,37.5c2.2-1.27,4-.23,4,2.31V63.92a3.61,3.61,0,0,1-1.62,2.81l-126,72.75c-.9.52-1.63.1-1.63-.94V111.69A3.59,3.59,0,0,1,45.47,108.88Z"
                                  style="fill: rgb(213 227 242); transform-origin: 108.475px 88.3306px;"
                                  class="animable"></path>
                            <g id="freepik--speech-bubble--inject-10" class="animable"
                               style="transform-origin: 113.06px 93.0962px;">
                                <path
                                    d="M169.18,42.3,49.91,111.14a4,4,0,0,0-1.79,3.1V138.9a3.91,3.91,0,0,0,1.8,3.08l3.41,1.93a4,4,0,0,0,3.58,0L176.18,75.05A4,4,0,0,0,178,72V47.3a3.91,3.91,0,0,0-1.8-3.08l-3.41-1.94A4,4,0,0,0,169.18,42.3Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 113.06px 93.0962px;"
                                    id="elzdgx4wl5ey8" class="animable"></path>
                                <g id="elhq412veddag">
                                    <g style="opacity: 0.3; transform-origin: 52.515px 128.356px;" class="animable">
                                        <path
                                            d="M56.91,143.89a4.11,4.11,0,0,1-3.59,0L49.92,142a3.88,3.88,0,0,1-1.8-3.07V114.24a3.66,3.66,0,0,1,.57-1.83l7,4a3.56,3.56,0,0,0-.53,1.76v24.65C55.12,143.9,55.86,144.5,56.91,143.89Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 52.515px 128.356px;"
                                            id="el8afzsl3qgx9" class="animable"></path>
                                    </g>
                                </g>
                                <g id="elgezpwoisrei">
                                    <g style="opacity: 0.5; transform-origin: 113.295px 79.1586px;" class="animable">
                                        <path
                                            d="M177.94,47c-.14-.9-.87-1.22-1.77-.71L56.92,115.1a3.65,3.65,0,0,0-1.27,1.34l-7-4a3.66,3.66,0,0,1,1.23-1.27L169.18,42.3a4,4,0,0,1,3.58,0l3.41,1.93A4,4,0,0,1,177.94,47Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 113.295px 79.1586px;"
                                            id="el5cqstkrrbep" class="animable"></path>
                                    </g>
                                </g>
                                <path
                                    d="M176.18,46.26,56.91,115.1a4,4,0,0,0-1.79,3.1v24.66c0,1.14.8,1.6,1.79,1L176.18,75.05A4,4,0,0,0,178,72V47.3C178,46.16,177.17,45.69,176.18,46.26Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 116.56px 95.0708px;"
                                    id="elvxbqxwi7le" class="animable"></path>
                                <g id="el366gnxj54xu">
                                    <path
                                        d="M176.18,46.26,56.91,115.1a4,4,0,0,0-1.79,3.1v24.66c0,1.14.8,1.6,1.79,1L176.18,75.05A4,4,0,0,0,178,72V47.3C178,46.16,177.17,45.69,176.18,46.26Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 116.56px 95.0708px;"
                                        class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M67.58,122.39l1.9-2.57a.65.65,0,0,1,.09-.13l.06-.08a.53.53,0,0,1,.36-.15c.12,0,.2.09.25.24l.39,1.43a.77.77,0,0,1,0,.49,1.17,1.17,0,0,1-.27.47l-.18.16L68,123.8l1.64,1a.12.12,0,0,1,.08,0l0,.05a.52.52,0,0,1,.08.41,1,1,0,0,1-.19.55l-1.07,1.64a.68.68,0,0,1-.35.29.3.3,0,0,1-.3-.06l-.09-.15L67,125.43l-.88,3.12-.08.26a1.39,1.39,0,0,1-.31.41.35.35,0,0,1-.35.11l-1.06-.4c-.12,0-.19-.14-.2-.32a.91.91,0,0,1,.09-.52l0-.1a.71.71,0,0,1,.09-.15L65.9,125l-2.16,1c-.12,0-.17.06-.17,0a.22.22,0,0,1-.27-.15.64.64,0,0,1,0-.46l.39-1.88a1.26,1.26,0,0,1,.26-.53.75.75,0,0,1,.36-.26h0a.24.24,0,0,1,.1,0l1.87.4-.46-2.59c0-.09,0-.16,0-.22a1.27,1.27,0,0,1,.14-.52.89.89,0,0,1,.34-.39l1.31-.76a.27.27,0,0,1,.34,0,.45.45,0,0,1,.14.35c0,.06,0,.14,0,.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 66.9636px 123.96px;"
                                id="elf1ihgxf5ofm" class="animable"></path>
                            <path
                                d="M81.62,114.29l1.9-2.58a.53.53,0,0,1,.1-.13l0-.07a.48.48,0,0,1,.36-.15c.12,0,.21.08.25.23l.39,1.43a.74.74,0,0,1,0,.5,1.08,1.08,0,0,1-.27.46,1.13,1.13,0,0,1-.18.16L82,115.69l1.64,1,.09,0a.07.07,0,0,0,0,.05.58.58,0,0,1,.09.42,1.11,1.11,0,0,1-.2.55l-1.07,1.63a.63.63,0,0,1-.35.29.26.26,0,0,1-.3-.06l-.09-.15L81,117.33l-.87,3.12-.09.25a1,1,0,0,1-.31.41.35.35,0,0,1-.35.11l-1.06-.4c-.12,0-.19-.13-.2-.32a1,1,0,0,1,.09-.52l0-.09a.54.54,0,0,1,.09-.16l1.61-2.85-2.16,1c-.11,0-.17.06-.17,0a.22.22,0,0,1-.27-.15.64.64,0,0,1,0-.46l.39-1.88a1.22,1.22,0,0,1,.26-.52.71.71,0,0,1,.36-.27,0,0,0,0,0,0,0l.1,0,1.87.4-.45-2.58a1,1,0,0,1,0-.22,1.1,1.1,0,0,1,.14-.52.85.85,0,0,1,.33-.4l1.31-.76a.28.28,0,0,1,.34,0,.46.46,0,0,1,.14.36s0,.14,0,.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 80.9654px 115.847px;"
                                id="el46o4bc6rmg1" class="animable"></path>
                            <path
                                d="M95.66,106.18l1.9-2.58.1-.13a.18.18,0,0,0,0-.07.48.48,0,0,1,.36-.15.27.27,0,0,1,.25.23l.39,1.43a.74.74,0,0,1,0,.5.94.94,0,0,1-.27.46.6.6,0,0,1-.18.16l-2.18,1.55,1.64,1a.19.19,0,0,1,.09,0l0,0a.55.55,0,0,1,.09.41,1.08,1.08,0,0,1-.2.55l-1.07,1.63a.59.59,0,0,1-.35.29.28.28,0,0,1-.3-.05l-.09-.16L95,109.22l-.87,3.12-.09.25a1,1,0,0,1-.31.41c-.13.12-.24.16-.34.12l-1.07-.4c-.12,0-.18-.14-.2-.33a1.1,1.1,0,0,1,.09-.51,1,1,0,0,0,0-.1l.09-.15L94,108.78l-2.16,1c-.11,0-.17.07-.17,0a.22.22,0,0,1-.27-.15.64.64,0,0,1,0-.46l.4-1.89a1.1,1.1,0,0,1,.25-.52.63.63,0,0,1,.36-.26h.05a.19.19,0,0,1,.1,0l1.87.4-.45-2.58a.94.94,0,0,1,0-.22,1.1,1.1,0,0,1,.14-.52.9.9,0,0,1,.33-.4l1.31-.75a.27.27,0,0,1,.34,0,.44.44,0,0,1,.14.36c0,.06,0,.14,0,.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 95.0304px 107.752px;"
                                id="elynm9kw6h41" class="animable"></path>
                            <path
                                d="M109.7,98.07l1.9-2.57a.58.58,0,0,1,.1-.13.35.35,0,0,0,0-.08.56.56,0,0,1,.36-.15c.13,0,.21.09.25.24l.39,1.43a.71.71,0,0,1,0,.49,1,1,0,0,1-.27.47.9.9,0,0,1-.17.16l-2.18,1.54,1.63,1a.19.19,0,0,1,.09,0l0,0a.55.55,0,0,1,.09.41,1,1,0,0,1-.2.55l-1.07,1.64a.66.66,0,0,1-.34.29.32.32,0,0,1-.31-.06l-.09-.15-.87-2.12-.87,3.12-.09.26a1.21,1.21,0,0,1-.3.41c-.14.11-.25.15-.35.11l-1.07-.4c-.12,0-.18-.14-.2-.32a1.12,1.12,0,0,1,.09-.52,1,1,0,0,0,0-.1l.09-.15,1.61-2.85-2.15,1c-.12.05-.18.06-.18,0a.22.22,0,0,1-.27-.15.6.6,0,0,1,0-.46l.39-1.88a1.24,1.24,0,0,1,.25-.53.75.75,0,0,1,.36-.26h0a.2.2,0,0,1,.1,0l1.88.4L108,96.23a.94.94,0,0,1,0-.22,1.13,1.13,0,0,1,.14-.52.83.83,0,0,1,.34-.39l1.3-.76a.27.27,0,0,1,.34,0,.42.42,0,0,1,.14.35,1.29,1.29,0,0,1,0,.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 109.009px 99.6125px;"
                                id="elx3qbdygt589" class="animable"></path>
                            <path
                                d="M123.74,90l1.9-2.58.1-.13.05-.07a.48.48,0,0,1,.36-.15c.13,0,.21.08.25.23l.4,1.43a.81.81,0,0,1,0,.5.94.94,0,0,1-.27.46s-.07.08-.17.16l-2.18,1.55,1.63,1,.09,0a.11.11,0,0,0,0,0,.58.58,0,0,1,.09.42,1.11,1.11,0,0,1-.2.55L124.72,95a.62.62,0,0,1-.34.29.28.28,0,0,1-.31-.06l-.09-.15L123.11,93l-.87,3.12-.09.25a1.12,1.12,0,0,1-.3.41.35.35,0,0,1-.35.11l-1.07-.4c-.12,0-.18-.13-.2-.32a1.08,1.08,0,0,1,.09-.51l0-.1.09-.16,1.61-2.85-2.15,1c-.12,0-.18.06-.18,0a.22.22,0,0,1-.27-.15.59.59,0,0,1,0-.46l.39-1.88a1.2,1.2,0,0,1,.25-.52.71.71,0,0,1,.36-.27,0,0,0,0,0,0,0l.1,0,1.88.4L122,88.13a1,1,0,0,1,0-.22,1.1,1.1,0,0,1,.14-.52.86.86,0,0,1,.34-.4l1.31-.76a.27.27,0,0,1,.33,0,.43.43,0,0,1,.15.36,1.39,1.39,0,0,1,0,.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 123.106px 91.5372px;"
                                id="elcr1i1t8ewd8" class="animable"></path>
                            <path
                                d="M137.78,81.86l1.9-2.58.1-.13a.18.18,0,0,0,.05-.07.48.48,0,0,1,.36-.15c.13,0,.21.08.26.23l.39,1.43a.81.81,0,0,1,0,.5.94.94,0,0,1-.27.46.52.52,0,0,1-.17.16l-2.18,1.55,1.63,1a.15.15,0,0,1,.09.05l0,0c.08.07.1.21.09.41a1,1,0,0,1-.2.55l-1.06,1.63a.62.62,0,0,1-.35.29.3.3,0,0,1-.31,0L138,87l-.87-2.11L136.28,88l-.09.25a1.12,1.12,0,0,1-.3.41c-.13.12-.25.16-.35.12l-1.07-.4c-.12,0-.18-.14-.2-.33a1.1,1.1,0,0,1,.09-.51l0-.1a.56.56,0,0,1,.08-.15l1.62-2.85-2.16,1c-.12,0-.18.06-.18,0s-.2,0-.27-.15a.6.6,0,0,1,0-.46l.39-1.89a1.2,1.2,0,0,1,.25-.52.63.63,0,0,1,.36-.26h.06s.05,0,.09,0l1.88.4L136,80c0-.09,0-.16,0-.22a1.23,1.23,0,0,1,.14-.52.92.92,0,0,1,.34-.4l1.31-.75a.26.26,0,0,1,.33,0,.45.45,0,0,1,.15.36,1.29,1.29,0,0,1,0,.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 137.142px 83.423px;"
                                id="eluk5nm1xvk2r" class="animable"></path>
                            <path
                                d="M151.83,73.75l1.89-2.57.1-.13.06-.08a.53.53,0,0,1,.36-.15c.12,0,.2.09.25.24l.39,1.43a.85.85,0,0,1,0,.49,1.07,1.07,0,0,1-.28.47.9.9,0,0,1-.17.16l-2.18,1.55,1.63,1a.13.13,0,0,1,.09.05l0,0a.48.48,0,0,1,.09.41,1,1,0,0,1-.19.55l-1.07,1.64a.72.72,0,0,1-.35.29.33.33,0,0,1-.31-.06l-.08-.15-.88-2.12-.87,3.12-.09.26a1.21,1.21,0,0,1-.3.41.35.35,0,0,1-.35.11l-1.07-.4c-.11,0-.18-.14-.19-.32a1,1,0,0,1,.08-.52l0-.1a1.2,1.2,0,0,1,.08-.15l1.62-2.85-2.16,1c-.12,0-.18.06-.18,0s-.2,0-.27-.15a.64.64,0,0,1,0-.46l.39-1.88a1.24,1.24,0,0,1,.25-.53.85.85,0,0,1,.36-.26h.06a.18.18,0,0,1,.09,0l1.88.4-.46-2.59c0-.09,0-.16,0-.22a1.27,1.27,0,0,1,.14-.52.89.89,0,0,1,.34-.39l1.31-.76a.27.27,0,0,1,.34,0,.45.45,0,0,1,.14.35,1.49,1.49,0,0,1,0,.25Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 151.177px 75.2952px;"
                                id="elffx0zicro6q" class="animable"></path>
                            <path
                                d="M165.87,65.65l1.89-2.58.1-.13.06-.07a.45.45,0,0,1,.36-.15c.12,0,.2.08.25.23l.39,1.43a.88.88,0,0,1,0,.5,1.09,1.09,0,0,1-.28.46s-.07.08-.17.16l-2.18,1.55,1.63,1c.05,0,.08,0,.09,0a.12.12,0,0,0,.05.05.54.54,0,0,1,.08.42,1.1,1.1,0,0,1-.19.55l-1.07,1.63a.63.63,0,0,1-.35.29.28.28,0,0,1-.31-.06l-.08-.15-.87-2.11-.88,3.12-.08.25a1.27,1.27,0,0,1-.31.41.35.35,0,0,1-.35.11l-1.07-.4c-.11,0-.18-.13-.19-.32a1,1,0,0,1,.08-.52.73.73,0,0,0,.05-.09.54.54,0,0,1,.09-.16l1.61-2.85-2.16,1c-.12,0-.17.06-.17,0a.23.23,0,0,1-.28-.15.7.7,0,0,1,0-.46l.39-1.88a1.32,1.32,0,0,1,.25-.52.8.8,0,0,1,.36-.27.07.07,0,0,0,.06,0l.1,0,1.87.4-.46-2.58c0-.09,0-.17,0-.22a1.23,1.23,0,0,1,.14-.52.92.92,0,0,1,.34-.4l1.31-.76a.28.28,0,0,1,.34,0,.46.46,0,0,1,.14.36s0,.14,0,.24Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 165.264px 67.1866px;"
                                id="ele2jjzp0qw5m" class="animable"></path>
                        </g>
                    </g>
                    <g id="freepik--Key--inject-10" class="animable" style="transform-origin: 86.6837px 441.4px;">
                        <g id="freepik--key--inject-10" class="animable" style="transform-origin: 86.6837px 441.4px;">
                            <path
                                d="M36.23,428v3.51c0,4.12,2.67,8.25,8.1,11.42,8.19,4.76,20.23,6,30.33,3.58L84,451.91l7.2-1.6,4.91,2.85.24,5.94L99,460.64l6.65.6,4.77,2.69v3.34l6,3.49,15.25.05,5.47-3.13,0-3.54L88.44,439.35a11.21,11.21,0,0,0,3.41-7.65v-3.55c-.72-3.42-3.57-5.2-8.11-7.85-10.84-6.31-28.46-6.37-39.34-.14C39.51,423,36.73,424.26,36.23,428Zm15-4a12.29,12.29,0,0,1,11.14,0c3.08,1.78,3.07,4.67,0,6.43a12.29,12.29,0,0,1-11.14,0C48.08,428.55,48.09,425.67,51.18,423.91Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 86.685px 443.169px;" id="elpdme0juzd7"
                                class="animable"></path>
                            <g id="eldfcznjl2spw">
                                <path
                                    d="M36.23,428v3.51c0,4.12,2.67,8.25,8.1,11.42,8.19,4.76,20.23,6,30.33,3.58L84,451.91l7.2-1.6,4.91,2.85.24,5.94L99,460.64l6.65.6,4.77,2.69v3.34l6,3.49,15.25.05,5.47-3.13,0-3.54L88.44,439.35a11.21,11.21,0,0,0,3.41-7.65v-3.55c-.72-3.42-3.57-5.2-8.11-7.85-10.84-6.31-28.46-6.37-39.34-.14C39.51,423,36.73,424.26,36.23,428Zm15-4a12.29,12.29,0,0,1,11.14,0c3.08,1.78,3.07,4.67,0,6.43a12.29,12.29,0,0,1-11.14,0C48.08,428.55,48.09,425.67,51.18,423.91Z"
                                    style="opacity: 0.2; transform-origin: 86.685px 443.169px;" class="animable">
                                </path>
                            </g>
                            <path
                                d="M44.34,439.34c8.18,4.76,20.23,6,30.32,3.58L84,448.37l7.21-1.61,4.9,2.86.25,5.94L99,457.1l6.64.6,5.18,2.91-.42,3.12,6,3.49,15.25,0,5.48-3.13L88.45,435.81c5.77-6.07,4.22-13.86-4.69-19.05-10.84-6.31-28.45-6.37-39.34-.14S33.49,433,44.34,439.34Zm6.85-19a12.31,12.31,0,0,1,11.15,0c3.07,1.78,3.06,4.67,0,6.43a12.29,12.29,0,0,1-11.14,0C48.1,425,48.11,422.13,51.19,420.37Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 86.6787px 439.604px;"
                                id="el79y99rptea7" class="animable"></path>
                            <g id="eli03xy0sss98">
                                <path
                                    d="M44.34,439.34c8.18,4.76,20.23,6,30.32,3.58L84,448.37l7.21-1.61,4.9,2.86.25,5.94L99,457.1l6.64.6,5.18,2.91-.42,3.12,6,3.49,15.25,0,5.48-3.13L88.45,435.81c5.77-6.07,4.22-13.86-4.69-19.05-10.84-6.31-28.45-6.37-39.34-.14S33.49,433,44.34,439.34Zm6.85-19a12.31,12.31,0,0,1,11.15,0c3.07,1.78,3.06,4.67,0,6.43a12.29,12.29,0,0,1-11.14,0C48.1,425,48.11,422.13,51.19,420.37Z"
                                    style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 86.6787px 439.604px;"
                                    class="animable"></path>
                            </g>
                            <g id="elxlvq6v7q9th">
                                <g style="opacity: 0.2; transform-origin: 68.786px 429.71px;" class="animable">
                                    <path
                                        d="M91.78,429.18l-27.44-4.33c.74-1.53.07-3.23-2-4.44a12.31,12.31,0,0,0-11.15,0,4.71,4.71,0,0,0-2.06,2.08l-10-1.58a20.06,20.06,0,0,1,5.31-4.25c.31-.18.65-.34,1-.51l45.14,7.12A9.88,9.88,0,0,1,91.78,429.18Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 65.4848px 422.665px;"
                                        id="elg9x9vv0k3op" class="animable"></path>
                                    <path
                                        d="M37.78,433.28a9.79,9.79,0,0,1-.08-10.44l11.39,1.8a4.68,4.68,0,0,0,2.08,2.16,12.29,12.29,0,0,0,11.14,0l.15-.09,28.83,4.54a12.48,12.48,0,0,1-2.84,4.52l12.89,7.5Z"
                                        style="fill: rgb(255, 255, 255); transform-origin: 68.786px 433.055px;"
                                        id="elzh33ffhz26r" class="animable"></path>
                                </g>
                            </g>
                            <path
                                d="M46,436.57c-4.16-2.42-6.53-5.55-6.52-8.61s2.41-6.17,6.58-8.56c4.79-2.74,11.21-4.24,18.09-4.21s13.29,1.56,18.05,4.34c4.16,2.42,6.53,5.56,6.52,8.61s-2.41,6.18-6.58,8.56c-4.79,2.74-11.21,4.24-18.09,4.21S50.71,439.35,46,436.57Zm.55-16.3c-3.85,2.2-6.06,5-6.07,7.7s2.18,5.51,6,7.74c4.62,2.69,10.85,4.18,17.56,4.2s12.95-1.42,17.58-4.07c3.86-2.21,6.07-5,6.08-7.7s-2.18-5.51-6-7.75c-4.62-2.68-10.85-4.18-17.56-4.2S51.14,417.61,46.5,420.27Z"
                                style="fill: rgb(16, 83, 156); transform-origin: 64.1px 428.05px;" id="elk6jw810cy6s"
                                class="animable"></path>
                            <g id="elo2vvbj5wblp">
                                <path d="M54,443v3.54a47.16,47.16,0,0,0,20.68-.08v-3.54A47.16,47.16,0,0,1,54,443Z"
                                      style="opacity: 0.1; transform-origin: 64.34px 445.284px;" class="animable">
                                </path>
                            </g>
                            <g id="elx5e96kj7oym">
                                <polygon points="84.01 448.37 84 451.91 91.2 450.31 91.22 446.76 84.01 448.37"
                                         style="opacity: 0.1; transform-origin: 87.61px 449.335px;" class="animable">
                                </polygon>
                            </g>
                            <g id="elpujfl86lpyc">
                                <polygon points="96.12 449.62 96.11 453.16 96.35 459.1 96.37 455.56 96.12 449.62"
                                         style="opacity: 0.1; transform-origin: 96.24px 454.36px;" class="animable">
                                </polygon>
                            </g>
                            <g id="eldmydw1z04zq">
                                <polygon points="99.01 457.1 99 460.64 105.64 461.25 105.65 457.7 99.01 457.1"
                                         style="opacity: 0.1; transform-origin: 102.325px 459.175px;" class="animable">
                                </polygon>
                            </g>
                            <g id="elj3ffhwdttsb">
                                <rect x="122.24" y="461.39" width="3.54" height="15.25"
                                      style="opacity: 0.1; transform-origin: 124.01px 469.015px; transform: rotate(-89.79deg);"
                                      class="animable"></rect>
                            </g>
                            <g id="el84vg9xks07k">
                                <polygon
                                    points="137.12 464.14 137.1 467.68 131.63 470.81 131.64 467.27 134.04 465.9 134.03 467.43 135.36 466.67 135.36 465.12 137.12 464.14"
                                    style="opacity: 0.15; transform-origin: 134.375px 467.475px;" class="animable">
                                </polygon>
                            </g>
                            <polygon points="135.36 465.12 134.04 465.9 134.03 467.43 135.36 466.67 135.36 465.12"
                                     style="fill: rgb(16, 83, 156); transform-origin: 134.695px 466.275px;" id="elxp4zxyjo8j"
                                     class="animable"></polygon>
                            <g id="eltgrjygf5ooe">
                                <polygon points="135.36 465.12 134.04 465.9 134.03 467.43 135.36 466.67 135.36 465.12"
                                         style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 134.695px 466.275px;"
                                         class="animable"></polygon>
                            </g>
                            <polygon points="135.36 465.12 135.36 466.67 85.45 437.61 86.78 436.84 135.36 465.12"
                                     style="fill: rgb(16, 83, 156); transform-origin: 110.405px 451.755px;"
                                     id="elruy9u58qlpl" class="animable"></polygon>
                            <g id="elnahc3jyz3oc">
                                <polygon points="86.78 436.84 86.78 438.38 85.45 437.61 86.78 436.84"
                                         style="opacity: 0.15; transform-origin: 86.115px 437.61px;" class="animable">
                                </polygon>
                            </g>
                        </g>
                    </g>
                    <g id="freepik--Pen--inject-10" class="animable" style="transform-origin: 362.738px 420.676px;">
                        <g id="freepik--pen--inject-10" class="animable" style="transform-origin: 362.738px 420.676px;">
                            <path
                                d="M449.94,386.86l-149.7,86.55-23.13,4.71a.71.71,0,0,1-.76-1l7.24-13.28,149.72-86.57C437.87,374.6,453.51,384.8,449.94,386.86Z"
                                style="fill: rgb(213 227 242); transform-origin: 363.374px 427.479px;"
                                id="el3rgio6lpvvg" class="animable"></path>
                            <g id="freepik--pen--inject-10" class="animable"
                               style="transform-origin: 360.65px 415.212px;">
                                <path
                                    d="M433.88,367.66a13.71,13.71,0,0,0,6.21,10.74,5,5,0,0,0,3.56.76,3,3,0,0,1-.67.52l1.49-.85a3.09,3.09,0,0,0,.92-.82,4.06,4.06,0,0,0,.51-.92c0-.1.07-.2.1-.3a.44.44,0,0,0,.05-.15,2.86,2.86,0,0,0,.07-.28,6.6,6.6,0,0,0,.17-1.54,13.73,13.73,0,0,0-6.2-10.74,5.6,5.6,0,0,0-2.78-.85h0a2.34,2.34,0,0,0-.38,0l-.36.06a1.41,1.41,0,0,0-.22.06l-.13,0-.25.1-.05,0-.24.12-1.3.74a2.62,2.62,0,0,1,.68-.24A4.91,4.91,0,0,0,433.88,367.66Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 440.078px 371.451px;"
                                    id="ele40t5u6r7bc" class="animable"></path>
                                <path
                                    d="M290.73,447.39l8.75,15.2,1.48-.85,142-82.06a3,3,0,0,0,.67-.52,5,5,0,0,0,1.15-3.49,13.68,13.68,0,0,0-6.21-10.74,5.57,5.57,0,0,0-2.77-.85,3.33,3.33,0,0,0-.78.09,2.62,2.62,0,0,0-.68.24l-.1,0,0,0h0Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 367.759px 413.335px;"
                                    id="el5psfocggpw2" class="animable"></path>
                                <path
                                    d="M295.11,447.82c-3.42-2-6.2-.37-6.2,3.58a13.7,13.7,0,0,0,6.2,10.74c3.43,2,6.21.38,6.21-3.58A13.71,13.71,0,0,0,295.11,447.82Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 295.115px 454.981px;"
                                    id="elq6xaaj082pa" class="animable"></path>
                                <path
                                    d="M281.78,457l.16-.18,7.91-8.7s0,0,0,0l.06-.07.14-.15.09-.09h0c1.13-1.08,2.93-1.18,4.95,0a13.71,13.71,0,0,1,6.21,10.74c0,2.3-.94,3.79-2.4,4.26h0l-.1,0a3,3,0,0,1-.45.1l-.09,0h0l-11.47,2.5a2.81,2.81,0,0,1-2-.44,7.82,7.82,0,0,1-3.55-6.13A2.91,2.91,0,0,1,281.78,457Z"
                                    style="fill: rgb(213 227 242); transform-origin: 291.268px 456.203px;"
                                    id="elcp4vrjasleo" class="animable"></path>
                                <path
                                    d="M397.5,392.22a.05.05,0,0,1,0,0l.2-.12a1.61,1.61,0,0,1,1.45.2,4.9,4.9,0,0,1,2.2,3.83,1.66,1.66,0,0,1-.51,1.33h0l-.26.16L292,460.35l-6.2-3.58Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 343.577px 426.18px;"
                                    id="elwau8cz3xfa" class="animable"></path>
                                <path d="M300.76,455.3,292,460.35l-6.2-3.58,11.85-6.84A14.9,14.9,0,0,1,300.76,455.3Z"
                                      style="fill: rgb(55, 71, 79); transform-origin: 293.28px 455.14px;"
                                      id="el1in7m849en7" class="animable"></path>
                                <path
                                    d="M278.67,461.17h0l7.18-7.9a1.9,1.9,0,0,1,.19-.21c.8-.8,2.08-.86,3.54,0a9.72,9.72,0,0,1,4.38,7.59c0,1.62-.65,2.68-1.67,3l-.07,0-.29.06L281.4,466h0a1.61,1.61,0,0,1-1.13-.24,4.43,4.43,0,0,1-2-3.46A1.54,1.54,0,0,1,278.67,461.17Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 286.114px 459.229px;"
                                    id="elm2jy41vhpxi" class="animable"></path>
                                <g id="elg1yde2ucwr">
                                    <path
                                        d="M278.67,461.17h0l7.18-7.9a1.9,1.9,0,0,1,.19-.21c.8-.8,2.08-.86,3.54,0a9.72,9.72,0,0,1,4.38,7.59c0,1.62-.65,2.68-1.67,3l-.07,0-.29.06L281.4,466h0a1.61,1.61,0,0,1-1.13-.24,4.43,4.43,0,0,1-2-3.46A1.54,1.54,0,0,1,278.67,461.17Z"
                                        style="opacity: 0.1; transform-origin: 286.114px 459.229px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M278.27,462.31a4.41,4.41,0,0,0,2,3.46,1.59,1.59,0,0,0,1.12.24h0l5.32-1.17c.83-.17,1.38-1,1.38-2.23a7.09,7.09,0,0,0-3.18-5.53,2.07,2.07,0,0,0-2.56,0l-.14.16-3.56,3.91h0A1.54,1.54,0,0,0,278.27,462.31Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 283.177px 461.333px;"
                                    id="elzxbl3kch7e8" class="animable"></path>
                                <g id="el31xdei53w94">
                                    <path
                                        d="M280.26,461.16c-1.1-.64-2-.12-2,1.15a4.43,4.43,0,0,0,2,3.46c1.1.63,2,.12,2-1.15A4.42,4.42,0,0,0,280.26,461.16Z"
                                        style="opacity: 0.1; transform-origin: 280.26px 463.463px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M421,378.67a1.53,1.53,0,0,1,1.56.15,4.85,4.85,0,0,1,2.19,3.8,1.53,1.53,0,0,1-.65,1.43h0l-23.19,13.39a1.66,1.66,0,0,0,.51-1.33,4.9,4.9,0,0,0-2.2-3.83,1.61,1.61,0,0,0-1.45-.2Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 411.265px 387.982px;"
                                    id="elniwlltz8o3p" class="animable"></path>
                                <path
                                    d="M420.33,380.09a4.86,4.86,0,0,0,2.2,3.8,1.34,1.34,0,0,0,2.19-1.27,4.85,4.85,0,0,0-2.19-3.8,1.34,1.34,0,0,0-2.2,1.27Z"
                                    style="fill: rgb(245, 245, 245); transform-origin: 422.524px 381.35px;"
                                    id="elzru2iwqlgr" class="animable"></path>
                                <path
                                    d="M425.24,370.7h0l.07,0,.1,0,9.15-5.28.21-.12.05,0h0a4,4,0,0,1,3.78.47,12.33,12.33,0,0,1,5.59,9.67,3.91,3.91,0,0,1-1.66,3.62h0l-9.26,5.34-.05,0,0,0h0a4,4,0,0,1-3.87-.43,12.35,12.35,0,0,1-5.58-9.67A4,4,0,0,1,425.24,370.7Z"
                                    style="fill: rgb(16, 83, 156); transform-origin: 433.976px 374.869px;"
                                    id="ele7r6hs3c6mi" class="animable"></path>
                                <g id="el7stwfkg6m74">
                                    <path
                                        d="M425.24,370.7h0l.07,0,.1,0,9.15-5.28.21-.12.05,0h0a4,4,0,0,1,3.78.47,12.33,12.33,0,0,1,5.59,9.67,3.91,3.91,0,0,1-1.66,3.62h0l-9.26,5.34-.05,0,0,0h0a4,4,0,0,1-3.87-.43,12.35,12.35,0,0,1-5.58-9.67A4,4,0,0,1,425.24,370.7Z"
                                        style="opacity: 0.05; transform-origin: 433.976px 374.869px;" class="animable">
                                    </path>
                                </g>
                                <g id="elasdycabh06q">
                                    <path
                                        d="M429.29,371c-3.08-1.78-5.58-.34-5.58,3.22a12.35,12.35,0,0,0,5.58,9.67c3.09,1.78,5.59.34,5.59-3.22A12.33,12.33,0,0,0,429.29,371Z"
                                        style="opacity: 0.1; transform-origin: 429.295px 377.445px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M275.73,464.5h0l3.79-2.28h0a.69.69,0,0,1,.74,0,2.25,2.25,0,0,1,1,1.77.74.74,0,0,1-.29.67h0L277.21,467h0a1.45,1.45,0,0,1-1.48-2.5Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 278.141px 464.658px;"
                                    id="el71ukpsl6c7e" class="animable"></path>
                                <path
                                    d="M275.51,464.67h0l.2-.16h0a.81.81,0,0,1,.66.12,2.26,2.26,0,0,1,1,1.77.71.71,0,0,1-.29.65l-.08,0-.07,0a1.22,1.22,0,0,1-.47.08,1.46,1.46,0,0,1-1.45-1.46A1.42,1.42,0,0,1,275.51,464.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 276.192px 465.808px;"
                                    id="elzd8h10lx8sj" class="animable"></path>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <filter id="active" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                            </feMorphology>
                            <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        <filter id="hover" height="200%">
                            <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                            </feMorphology>
                            <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                            <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                            <feMerge>
                                <feMergeNode in="OUTLINE"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                            <feColorMatrix type="matrix"
                                           values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                            </feColorMatrix>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>
@include('admin.includes.js')
</body>

</html>
