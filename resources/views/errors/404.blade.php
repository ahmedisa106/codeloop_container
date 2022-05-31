<style>

@font-face {
    font-family: 'Bahij_Plain';
    src: url({{asset('default')}}/Bahij_Plain.ttf);
}

* {
    font-family: 'Bahij_Plain';
}

    .error-page {
        position: relative;
        display: block;
        padding: 71px 0 120px;
    }

    .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .error-page__inner {
    position: relative;
    display: block;
    text-align: center;
}

.float-bob-y-2 {
    -webkit-animation-name: float-bob-y-2;
    animation-name: float-bob-y-2;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
}

.error-page-shape {
    position: absolute;
    top: 128px;
    left: 52.5%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}

.float-bob-y-2 {
  -webkit-animation-name: float-bob-y-2;
  animation-name: float-bob-y-2;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
}

@-webkit-keyframes float-bob-y-2 {
  0% {
    -webkit-transform: translateY(-20px) translateX(-50%);
            transform: translateY(-20px) translateX(-50%);
  }
  50% {
    -webkit-transform: translateY(-10px) translateX(-50%);
            transform: translateY(-10px) translateX(-50%);
  }
  100% {
    -webkit-transform: translateY(-20px) translateX(-50%);
            transform: translateY(-20px) translateX(-50%);
  }
}

@keyframes  float-bob-y-2 {
  0% {
    -webkit-transform: translateY(-20px) translateX(-50%);
            transform: translateY(-20px) translateX(-50%);
  }
  50% {
    -webkit-transform: translateY(-10px) translateX(-50%);
            transform: translateY(-10px) translateX(-50%);
  }
  100% {
    -webkit-transform: translateY(-20px) translateX(-50%);
            transform: translateY(-20px) translateX(-50%);
  }
}

.error-page-shape img {
    width: auto;
}

.error-page__title {
    position: relative;
    display: inline-block;
    font-size: 350px;
    line-height: 350px;
    font-weight: 700;
    color: #404a3d;
    margin: 0;
    margin-bottom: 95px;
}

.error-page__tagline {
    font-size: 40px;
    line-height: 49px;
    margin-bottom: 19px;
    font-weight: 400;
    color: #558e4c;
}

.error-page__text {
    font-size: 20px;
    font-weight: 400;
}

.thm-btn {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    outline: none !important;
    background-color: #ecdd5e;
    color: #404a3d;
    font-size: 16px;
    font-weight: 700;
    padding: 17px 50px 16px;
    -webkit-transition: all 0.5s linear;
    transition: all 0.5s linear;
    overflow: hidden;
    z-index: 1;
    margin-top: 25px;
    text-decoration: none;
}

.thm-btn:after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #558e4c;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
    opacity: 1;
    z-index: -1;
}

</style>

<section class="error-page">
    <div class="container">
        <div class="error-page__inner">
            <div class="error-page-shape float-bob-y-2">
                <img src="{{asset('default/error-page-shape.png')}}" alt="">
            </div>
            <h2 class="error-page__title">404</h2>
            <h3 class="error-page__tagline">
                نأسف لك ، لم نتمكن من العثور على تلك الصفحة</h3>
            <p class="error-page__text">تستطيع الرجوع للصفحة السابقة عبر الضغط علي الزر التالي</p>

            <a href="{{url()->previous()}}" class="thm-btn error-page__btn">عودة للصفحة السابقة</a>
        </div>
    </div>
</section>
