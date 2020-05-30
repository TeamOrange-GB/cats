<template>
  <section>
    <h1 class="reg-title">Регистрация</h1>
    <form action="#">
      <div class="reg-form">
        <input class="reg-form__text" type="text" name="name" placeholder="Ваше имя" />
        <input class="reg-form__text" type="text" name="surname" placeholder="Ваша фамилия" />
        <input class="reg-form__text" type="text" name="email" placeholder="Ваша почта" />
        <input class="reg-form__text" type="text" name="login" placeholder="Придумайте логин" />
        <input class="reg-form__text" type="password" name="pass" placeholder="Придумайте пароль" />
        <input
          class="reg-form__text"
          type="password"
          name="confirmpass"
          placeholder="Повторите пароль"
        />
      </div>
      <div class="btn">
        <button class="btn__text">Зарегистрироваться</button>
      </div>
      <span class="or-text">Или войдите через:</span>
      <div class="social">
        <a href="#" class="social__text">
          <svg width="82" height="82" viewBox="0 0 400 400">
            <g transform="matrix(6.25 0 0 6.25 204.68 204.69)" id="vk_x2C__Vkontakte"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(128,216,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-16.75, -16.75)" d="M 21.64 4 H 12.36 C 5.219 4 4 5.219 4 12.36 v 9.28 c 0 3.106 0.313 5.228 1.196 6.664 C 6.632 29.187 8.754 29.5 11.86 29.5 h 8.279 c 7.561 0 9.36 -1.8 9.36 -9.36 v -8.28 c 0 -3.106 -0.313 -5.228 -1.196 -6.664 C 26.868 4.313 24.746 4 21.64 4 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(6.25 0 0 6.25 200 200)" id="vk_x2C__Vkontakte"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(69,90,100); fill-rule: nonzero; opacity: 1;"  transform=" translate(-16, -16)" d="M 20.14 30 H 11.86 C 4.027 30 2 27.973 2 20.14 v -8.28 C 2 4.027 4.027 2 11.86 2 h 8.279 C 27.973 2 30 4.027 30 11.86 v 8.28 C 30 27.973 27.973 30 20.14 30 z M 11.86 3 C 4.573 3 3 4.573 3 11.86 v 8.28 C 3 27.427 4.573 29 11.86 29 h 8.279 c 7.287 0 8.86 -1.573 8.86 -8.86 v -8.28 C 29 4.573 27.427 3 20.14 3 H 11.86 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(6.25 0 0 6.25 200.17 202.74)" id="vk_x2C__Vkontakte"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-16.03, -16.44)" d="M 25.568 11.303 c 0.139 -0.463 0 -0.804 -0.662 -0.804 h -2.188 c -0.557 0 -0.813 0.294 -0.952 0.619 c 0 0 -1.113 2.712 -2.689 4.474 c -0.51 0.51 -0.741 0.672 -1.02 0.672 c -0.139 0 -0.341 -0.163 -0.341 -0.626 v -4.335 c 0 -0.556 -0.161 -0.804 -0.625 -0.804 h -3.438 c -0.348 0 -0.557 0.258 -0.557 0.503 c 0 0.527 0.788 0.649 0.87 2.133 v 3.222 c 0 0.707 -0.128 0.835 -0.406 0.835 c -0.741 0 -2.546 -2.725 -3.616 -5.842 c -0.21 -0.606 -0.42 -0.851 -0.979 -0.851 H 6.777 c -0.625 0 -0.75 0.294 -0.75 0.619 c 0 0.58 0.741 3.454 3.453 7.256 c 1.809 2.596 4.355 4.003 6.674 4.003 c 1.391 0 1.563 -0.313 1.563 -0.851 v -1.962 c 0 -0.625 0.132 -0.75 0.572 -0.75 c 0.325 0 0.881 0.162 2.18 1.414 c 1.483 1.483 1.728 2.149 2.563 2.149 h 2.188 c 0.625 0 0.938 -0.313 0.758 -0.93 c -0.197 -0.615 -0.906 -1.506 -1.846 -2.564 c -0.51 -0.603 -1.274 -1.252 -1.507 -1.576 c -0.324 -0.417 -0.231 -0.603 0 -0.974 C 22.624 16.333 25.29 12.578 25.568 11.303 L 25.568 11.303 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(6.25 0 0 6.25 200.15 202.72)" id="vk_x2C__Vkontakte"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(69,90,100); fill-rule: nonzero; opacity: 1;"  transform=" translate(-16.02, -16.44)" d="M 25.219 22.876 h -2.188 c -0.81 0 -1.216 -0.453 -1.891 -1.203 c -0.266 -0.295 -0.592 -0.658 -1.025 -1.092 c -1.194 -1.151 -1.7 -1.267 -1.886 -1.267 c -0.007 0.049 -0.013 0.127 -0.013 0.249 v 1.962 c 0 1.121 -0.824 1.351 -2.063 1.351 c -2.596 0 -5.244 -1.577 -7.084 -4.218 c -2.65 -3.715 -3.543 -6.735 -3.543 -7.542 c 0 -0.711 0.456 -1.119 1.25 -1.119 h 2.188 c 0.96 0 1.253 0.613 1.452 1.187 c 0.985 2.871 2.437 5.01 3.041 5.437 c 0.005 -0.065 0.009 -0.151 0.009 -0.267 v -3.222 c -0.041 -0.729 -0.283 -1.029 -0.497 -1.293 c -0.175 -0.216 -0.373 -0.461 -0.373 -0.839 c 0 -0.482 0.404 -1.003 1.057 -1.003 h 3.438 c 0.514 0 1.125 0.226 1.125 1.304 v 4.335 c 0 0.02 0.001 0.038 0.002 0.055 c 0.113 -0.078 0.274 -0.225 0.505 -0.455 c 1.479 -1.655 2.569 -4.284 2.58 -4.311 c 0.261 -0.61 0.749 -0.929 1.415 -0.929 h 2.188 c 0.473 0 0.818 0.142 1.025 0.42 c 0.138 0.185 0.27 0.514 0.116 1.028 c -0.282 1.299 -2.737 4.783 -3.017 5.176 c -0.021 0.035 -0.106 0.173 -0.117 0.22 l 0 0 c 0.003 0 0.021 0.049 0.104 0.157 c 0.101 0.139 0.35 0.383 0.591 0.62 c 0.298 0.292 0.635 0.623 0.903 0.94 c 1.18 1.327 1.743 2.122 1.94 2.734 c 0.164 0.566 0.019 0.922 -0.133 1.123 C 26.163 22.626 25.845 22.876 25.219 22.876 z M 18.289 18.313 c 0.452 0 1.106 0.185 2.526 1.554 c 0.456 0.456 0.794 0.831 1.069 1.137 c 0.654 0.729 0.813 0.872 1.146 0.872 h 2.188 c 0.207 0 0.291 -0.047 0.302 -0.06 l 0 0 c 0 0 0.025 -0.061 -0.024 -0.23 c -0.184 -0.572 -1.026 -1.569 -1.739 -2.372 c -0.257 -0.304 -0.57 -0.61 -0.848 -0.881 c -0.309 -0.302 -0.552 -0.541 -0.691 -0.735 c -0.498 -0.641 -0.303 -1.072 -0.018 -1.53 c 0.741 -1.046 2.669 -3.909 2.88 -4.872 c 0.029 -0.102 0.036 -0.158 0.036 -0.185 c -0.018 0.002 -0.085 -0.013 -0.21 -0.013 h -2.188 c -0.299 0 -0.407 0.116 -0.492 0.315 c -0.044 0.107 -1.162 2.806 -2.776 4.611 c -0.514 0.515 -0.877 0.839 -1.393 0.839 c -0.405 0 -0.841 -0.353 -0.841 -1.126 v -4.335 c 0 -0.192 -0.023 -0.273 -0.034 -0.301 c -0.011 0.004 -0.038 -0.002 -0.091 -0.003 h -3.438 c -0.049 0.038 0.037 0.144 0.094 0.214 c 0.263 0.325 0.659 0.816 0.719 1.894 l 0.001 3.25 c 0 0.399 0 1.335 -0.906 1.335 c -1.283 0 -3.199 -3.589 -4.089 -6.179 c -0.178 -0.513 -0.261 -0.513 -0.507 -0.513 H 6.777 c -0.196 0 -0.253 0.038 -0.254 0.038 c 0.004 0.431 0.624 3.204 3.364 7.046 c 1.656 2.377 3.997 3.794 6.267 3.794 c 1.063 0 1.063 -0.147 1.063 -0.351 v -1.962 C 17.217 18.945 17.344 18.313 18.289 18.313 z" stroke-linecap="round" />
            </g>
          </svg>
        </a>
        <a href="#" class="social__text">
          <svg width="82" height="82" viewBox="0 0 400 400">
            <g transform="matrix(4 0 0 4 200 200)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-25, -25)" d="M 45 1 H 5 C 2.8 1 1 2.8 1 5 v 40 c 0 2.2 1.8 4 4 4 h 40 c 2.2 0 4 -1.8 4 -4 V 5 C 49 2.8 47.2 1 45 1 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(4 0 0 4 200.19 200.03)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-25.05, -25.01)" d="M 20.3 10.5 c -3.7 1.3 -6.9 4.1 -8.7 7.6 c -0.6 1.2 -1.1 2.5 -1.3 3.9 c -0.7 3.3 -0.2 6.9 1.3 9.9 c 1 2 2.4 3.7 4.2 5.1 c 1.6 1.3 3.5 2.3 5.6 2.8 c 2.6 0.7 5.3 0.7 7.8 0.1 c 2.3 -0.5 4.5 -1.6 6.3 -3.3 c 1.9 -1.7 3.2 -3.9 3.9 -6.4 c 0.8 -2.6 0.9 -5.4 0.4 -8.1 c -4.8 0 -9.6 0 -14.4 0 c 0 2 0 4 0 6 c 2.8 0 5.6 0 8.3 0 c -0.3 1.9 -1.5 3.7 -3.1 4.7 c -1 0.7 -2.2 1.1 -3.4 1.3 c -1.2 0.2 -2.5 0.2 -3.7 0 c -1.2 -0.2 -2.4 -0.8 -3.4 -1.5 c -1.6 -1.1 -2.9 -2.8 -3.5 -4.7 c -0.7 -1.9 -0.7 -4 0 -6 c 0.5 -1.3 1.2 -2.6 2.2 -3.6 c 1.2 -1.3 2.8 -2.2 4.6 -2.5 c 1.5 -0.3 3 -0.3 4.5 0.2 c 1.2 0.4 2.4 1.1 3.3 1.9 c 0.9 -0.9 1.9 -1.9 2.8 -2.8 c 0.5 -0.5 1 -1 1.5 -1.5 c -1.4 -1.3 -3.1 -2.4 -4.9 -3.1 C 27.3 9.4 23.6 9.4 20.3 10.5 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(4 0 0 4 194.2 163.37)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(234,67,53); fill-rule: nonzero; opacity: 1;"  transform=" translate(-23.55, -15.84)" d="M 20.3 10.5 c 3.3 -1.1 7 -1.1 10.3 0.1 c 1.8 0.7 3.5 1.7 4.9 3.1 c -0.5 0.5 -1 1 -1.5 1.5 c -0.9 0.9 -1.9 1.9 -2.8 2.8 c -0.9 -0.9 -2.1 -1.6 -3.3 -1.9 c -1.4 -0.4 -3 -0.5 -4.5 -0.2 c -1.7 0.4 -3.3 1.3 -4.6 2.5 c -1 1 -1.8 2.3 -2.2 3.6 c -1.7 -1.3 -3.3 -2.6 -5 -3.9 C 13.4 14.6 16.6 11.8 20.3 10.5 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(4 0 0 4 153.18 200)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(251,188,5); fill-rule: nonzero; opacity: 1;"  transform=" translate(-13.29, -25)" d="M 10.3 22 c 0.3 -1.3 0.7 -2.6 1.3 -3.9 c 1.7 1.3 3.3 2.6 5 3.9 c -0.7 1.9 -0.7 4 0 6 c -1.7 1.3 -3.3 2.6 -5 3.9 C 10.1 28.8 9.6 25.3 10.3 22 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(4 0 0 4 230.61 217.4)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(66,133,244); fill-rule: nonzero; opacity: 1;"  transform=" translate(-32.65, -29.35)" d="M 25.3 22.1 c 4.8 0 9.6 0 14.4 0 c 0.5 2.7 0.4 5.5 -0.4 8.1 c -0.7 2.4 -2 4.6 -3.9 6.4 c -1.6 -1.3 -3.2 -2.5 -4.9 -3.8 c 1.6 -1.1 2.7 -2.8 3.1 -4.7 c -2.8 0 -5.6 0 -8.3 0 C 25.3 26.1 25.3 24.1 25.3 22.1 z" stroke-linecap="round" />
            </g>
            <g transform="matrix(4 0 0 4 194.2 236.88)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(52,168,83); fill-rule: nonzero; opacity: 1;"  transform=" translate(-23.55, -34.22)" d="M 11.6 31.9 c 1.7 -1.3 3.3 -2.6 5 -3.9 c 0.6 1.9 1.9 3.6 3.5 4.7 c 1 0.7 2.2 1.2 3.4 1.5 c 1.2 0.2 2.4 0.2 3.7 0 c 1.2 -0.2 2.4 -0.7 3.4 -1.3 c 1.6 1.3 3.2 2.5 4.9 3.8 c -1.8 1.6 -3.9 2.7 -6.3 3.3 c -2.6 0.6 -5.3 0.6 -7.8 -0.1 c -2 -0.5 -3.9 -1.5 -5.6 -2.8 C 14.1 35.6 12.6 33.8 11.6 31.9 z" stroke-linecap="round" />
            </g>
          </svg>
        </a>
        <a href="#" class="social__text">
          <svg width="82" height="82" viewBox="0 0 400 400">
            <g transform="matrix(3.33 0 0 3.33 200 200)" id="Layer_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(73,188,171); fill-rule: evenodd; opacity: 1;"  transform=" translate(-34, -34)" d="M 43.527 41.34 c -0.278 0 -0.478 0.078 -0.6 0.244 c -0.121 0.156 -0.18 0.424 -0.18 0.796 v 0.896 h 1.543 V 42.38 c 0 -0.372 -0.062 -0.64 -0.185 -0.796 C 43.989 41.418 43.792 41.34 43.527 41.34 z M 37.509 41.309 c 0.234 0 0.417 0.076 0.544 0.23 c 0.123 0.154 0.185 0.383 0.185 0.682 v 4.584 c 0 0.286 -0.053 0.487 -0.153 0.611 c -0.1 0.127 -0.256 0.189 -0.47 0.189 c -0.148 0 -0.287 -0.033 -0.421 -0.096 c -0.135 -0.062 -0.274 -0.171 -0.415 -0.313 v -5.531 c 0.119 -0.122 0.239 -0.213 0.36 -0.271 C 37.26 41.335 37.383 41.309 37.509 41.309 z M 42.748 44.658 v 1.672 c 0 0.468 0.057 0.792 0.17 0.974 c 0.118 0.181 0.313 0.269 0.592 0.269 c 0.289 0 0.491 -0.076 0.606 -0.229 c 0.114 -0.153 0.175 -0.489 0.175 -1.013 v -0.405 h 1.795 v 0.456 c 0 0.911 -0.217 1.596 -0.657 2.059 c -0.435 0.459 -1.089 0.687 -1.958 0.687 c -0.781 0 -1.398 -0.242 -1.847 -0.731 c -0.448 -0.486 -0.676 -1.157 -0.676 -2.014 v -3.986 c 0 -0.768 0.249 -1.398 0.742 -1.882 c 0.493 -0.485 1.128 -0.727 1.911 -0.727 c 0.799 0 1.413 0.225 1.843 0.674 c 0.429 0.448 0.642 1.093 0.642 1.935 v 2.264 H 42.748 z M 39.623 48.495 c -0.271 0.336 -0.669 0.501 -1.187 0.501 c -0.343 0 -0.646 -0.062 -0.912 -0.192 c -0.267 -0.129 -0.519 -0.327 -0.746 -0.601 v 0.681 h -1.764 V 36.852 h 1.764 v 3.875 c 0.237 -0.27 0.485 -0.478 0.748 -0.617 c 0.267 -0.142 0.534 -0.211 0.805 -0.211 c 0.554 0 0.975 0.189 1.265 0.565 c 0.294 0.379 0.438 0.933 0.438 1.66 v 4.926 C 40.034 47.678 39.897 48.159 39.623 48.495 z M 31.958 48.884 v -0.976 c -0.325 0.361 -0.658 0.636 -1.009 0.822 c -0.349 0.191 -0.686 0.282 -1.014 0.282 c -0.405 0 -0.705 -0.129 -0.913 -0.396 c -0.201 -0.266 -0.305 -0.658 -0.305 -1.189 v -7.422 h 1.744 v 6.809 c 0 0.211 0.037 0.362 0.107 0.457 c 0.077 0.095 0.196 0.141 0.358 0.141 c 0.128 0 0.292 -0.062 0.488 -0.188 c 0.197 -0.125 0.375 -0.283 0.542 -0.475 v -6.744 h 1.744 v 8.878 H 31.958 z M 25.916 38.6 v 10.284 h -1.968 V 38.6 h -2.034 v -1.748 h 6.036 V 38.6 H 25.916 z M 33.994 32.978 c 0 -0.001 12.08 0.018 13.514 1.45 c 1.439 1.435 1.455 8.514 1.455 8.555 c 0 0 -0.012 7.117 -1.455 8.556 C 46.074 52.969 33.994 53 33.994 53 s -12.079 -0.031 -13.516 -1.462 c -1.438 -1.435 -1.441 -8.502 -1.441 -8.556 c 0 -0.041 0.004 -7.12 1.441 -8.555 C 21.916 32.996 33.994 32.977 33.994 32.978 z M 43.52 29.255 h -1.966 v -1.08 c -0.358 0.397 -0.736 0.703 -1.13 0.909 c -0.392 0.208 -0.771 0.312 -1.14 0.312 c -0.458 0 -0.797 -0.146 -1.027 -0.437 c -0.229 -0.291 -0.345 -0.727 -0.345 -1.311 v -8.172 h 1.962 v 7.497 c 0 0.231 0.045 0.399 0.127 0.502 c 0.08 0.104 0.216 0.156 0.399 0.156 c 0.143 0 0.327 -0.069 0.548 -0.206 c 0.22 -0.137 0.423 -0.312 0.605 -0.527 v -7.422 h 1.966 V 29.255 z M 32.847 27.588 c 0.139 0.147 0.339 0.219 0.6 0.219 c 0.266 0 0.476 -0.075 0.634 -0.223 c 0.157 -0.152 0.235 -0.358 0.235 -0.618 v -5.327 c 0 -0.214 -0.08 -0.387 -0.241 -0.519 c -0.16 -0.131 -0.37 -0.196 -0.628 -0.196 c -0.241 0 -0.435 0.065 -0.586 0.196 c -0.148 0.132 -0.225 0.305 -0.225 0.519 v 5.327 C 32.636 27.233 32.708 27.439 32.847 27.588 z M 31.408 19.903 c 0.528 -0.449 1.241 -0.674 2.132 -0.674 c 0.812 0 1.48 0.237 2.001 0.711 c 0.517 0.473 0.777 1.083 0.777 1.828 v 5.051 c 0 0.836 -0.255 1.491 -0.762 1.968 c -0.513 0.476 -1.212 0.714 -2.106 0.714 c -0.858 0 -1.547 -0.246 -2.064 -0.736 c -0.513 -0.492 -0.772 -1.153 -0.772 -1.984 v -5.068 C 30.613 20.954 30.877 20.351 31.408 19.903 z M 25.262 16 h -2.229 l 2.634 8.003 v 5.252 h 2.213 v -5.5 L 30.454 16 h -2.25 l -1.366 5.298 h -0.139 L 25.262 16 z M 34 64 C 17.432 64 4 50.568 4 34 C 4 17.431 17.432 4 34 4 s 30 13.431 30 30 C 64 50.568 50.568 64 34 64 z" stroke-linecap="round" />
            </g>
          </svg>
        </a>
        <a href="#" class="social__text">
          <svg width="82" height="82" viewBox="0 0 400 400">
            <g transform="matrix(2.08 0 0 2.08 200 200)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(199,28,28); fill-rule: nonzero; opacity: 1;"  transform=" translate(-48, -48)" d="M 92 48 v 0.13 A 44 44 0 1 1 47.87 4 H 48 c 1.06 0 2.11 0 3.16 0.12 a 42.89 42.89 0 0 1 5.12 0.67 a 43.39 43.39 0 0 1 8.1 2.37 A 44.13 44.13 0 0 1 88.79 31.47 a 43.22 43.22 0 0 1 2.43 8.24 h 0 a 44 44 0 0 1 0.67 5.17 C 92 45.92 92 47 92 48 Z" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 207.23 192.77)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(232,44,48); fill-rule: nonzero; opacity: 1;"  transform=" translate(-51.47, -44.53)" d="M 91 44.5 v 0.12 A 39.53 39.53 0 1 1 51.38 5 h 0.12 c 1 0 1.89 0 2.84 0.11 a 38.38 38.38 0 0 1 4.59 0.6 a 39.33 39.33 0 0 1 5.45 1.45 A 44.13 44.13 0 0 1 88.79 31.47 a 38.33 38.33 0 0 1 1.51 5.59 h 0 a 39.22 39.22 0 0 1 0.6 4.64 C 91 42.63 91 43.57 91 44.5 Z" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 258.67 149.35)" id="Слой_1"  >
              <path style="stroke: rgb(255,255,255); stroke-width: 3; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"  transform=" translate(-76.16, -23.69)" d="M 74.66 21.93 a 36.47 36.47 0 0 1 3 3.52" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 233.1 131)" id="Слой_1"  >
              <path style="stroke: rgb(255,255,255); stroke-width: 3; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"  transform=" translate(-63.89, -14.88)" d="M 58 12 a 38.11 38.11 0 0 1 11.78 5.76" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 200.01 199.98)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-48, -47.99)" d="M 53.38 28.36 C 49.9 28.24 40 28.93 40 40.87 c 0 7.06 3.21 10.15 6.49 11.47 L 38.85 66.72 a 0.52 0.52 0 0 0 0.45 0.75 l 3.79 0 a 0.53 0.53 0 0 0 0.46 -0.28 l 7.28 -14 a 15.52 15.52 0 0 0 2.42 -0.07 v 14 a 0.51 0.51 0 0 0 0.51 0.51 H 56.7 a 0.51 0.51 0 0 0 0.51 -0.51 V 28.87 a 0.51 0.51 0 0 0 -0.51 -0.51 Z M 44.25 41.05 c 0 -10.15 7.2 -9.7 9 -9.43 V 49.86 C 50.18 50.17 44.25 49.65 44.25 41.05 Z" stroke-linecap="round" />
            </g>
          </svg>
        </a>
        <a href="#" class="social__text">
          <svg width="82" height="82" viewBox="0 0 400 400">
            <g transform="matrix(2.08 0 0 2.08 200 200)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(217,93,11); fill-rule: nonzero; opacity: 1;"  transform=" translate(-48, -48)" d="M 92 48 v 0.13 A 44 44 0 1 1 47.87 4 H 48 c 1.06 0 2.11 0 3.16 0.12 a 42.89 42.89 0 0 1 5.12 0.67 a 43.39 43.39 0 0 1 8.1 2.37 A 44.13 44.13 0 0 1 88.79 31.47 a 43.22 43.22 0 0 1 2.43 8.24 h 0 a 44 44 0 0 1 0.67 5.17 C 92 45.92 92 47 92 48 Z" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 207.23 192.77)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(242,123,29); fill-rule: nonzero; opacity: 1;"  transform=" translate(-51.47, -44.53)" d="M 91 44.5 v 0.12 A 39.53 39.53 0 1 1 51.38 5 h 0.12 c 1 0 1.89 0 2.84 0.11 a 38.38 38.38 0 0 1 4.59 0.6 a 39.33 39.33 0 0 1 5.45 1.45 A 44.13 44.13 0 0 1 88.79 31.47 a 38.33 38.33 0 0 1 1.51 5.59 h 0 a 39.22 39.22 0 0 1 0.6 4.64 C 91 42.63 91 43.57 91 44.5 Z" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 258.67 149.35)" id="Слой_1"  >
              <path style="stroke: rgb(255,255,255); stroke-width: 3; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"  transform=" translate(-76.16, -23.69)" d="M 74.66 21.93 a 36.47 36.47 0 0 1 3 3.52" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 233.1 131)" id="Слой_1"  >
              <path style="stroke: rgb(255,255,255); stroke-width: 3; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"  transform=" translate(-63.89, -14.88)" d="M 58 12 a 38.11 38.11 0 0 1 11.78 5.76" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 199.73 177.92)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-47.87, -37.4)" d="M 47.87 46.68 a 9.28 9.28 0 1 1 9.28 -9.28 A 9.29 9.29 0 0 1 47.87 46.68 Z m 0 -14.06 a 4.78 4.78 0 1 0 4.78 4.78 A 4.79 4.79 0 0 0 47.87 32.62 Z" stroke-linecap="round" />
            </g>
            <g transform="matrix(2.08 0 0 2.08 200.07 220.47)" id="Слой_1"  >
              <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"  transform=" translate(-48.03, -57.82)" d="M 60.53 49 a 2.62 2.62 0 0 0 -3.59 -0.95 a 17.13 17.13 0 0 1 -9 2.72 a 18.3 18.3 0 0 1 -9 -2.7 a 2.63 2.63 0 0 0 -2.55 4.59 a 30 30 0 0 0 4.66 2.13 a 19.48 19.48 0 0 1 2.11 0.87 l 0.86 0.43 l -6.27 7.58 a 2.59 2.59 0 0 0 0 3.45 A 2.5 2.5 0 0 0 41.58 67 l 6.29 -7.6 l 6.3 7.6 a 2.5 2.5 0 0 0 3.46 0.37 a 2.63 2.63 0 0 0 0.28 -3.69 L 51.59 56 l 0.27 -0.13 a 13.52 13.52 0 0 1 2 -0.72 a 26.2 26.2 0 0 0 5.77 -2.57 A 2.63 2.63 0 0 0 60.8 51 A 2.57 2.57 0 0 0 60.53 49 Z" stroke-linecap="round" />
            </g>
          </svg>
        </a>
      </div>
    </form>
  </section>
</template>

<script>
    import vUser from './vUser'
    export default {
        name: "vRegistration",
        components: {
            vUser
        }
    }

</script>

<style lang="scss">
.reg-title {
  font-size: $font-size;
  color: $color-cyan;
  font-family: $font-montserrat;
}

.reg-form {
  margin: 10px;
  display: flex;
  flex-flow: column wrap;
  align-items: center;
  &__text {
    width: 190px;
    height: 30px;
    margin-bottom: 10px;
    padding-left: 10px;
    font-size: 16px;
    font-family: $font-montserrat;
  }
}

.btn {
  display: flex;
  justify-content: center;
  padding: 10px;
  &__text {
    width: 200px;
    height: 60px;
    font-size: 16px;
    font-family: $font-montserrat;
    border: none;
    border-radius: 10px;
    color: $color-white;
    background-color: $color-cyan;
    &:hover {
      background-color: $color-light-grey;
    }
    &:active {
      color: $color-light-grey;
      background-color: $color-cyan;
    }
  }
}

.or-text {
  padding: 20px;
  display: block;
  text-align: center;
  font-size: $font-size;
  font-family: $font-montserrat;
  color: $color-cyan;
}

.social {
  display: flex;
  justify-content: center;
  &__text {
    padding: 20px;
    font-size: $font-size;
    font-family: $font-montserrat;
  }
}
</style>

