<template>
    <section>
        <form action="#">
            <div class="reg-form">
                <input class="reg-form__text" type="text" name="name" placeholder="Ваше имя">
                <input class="reg-form__text" type="text" name="surname" placeholder="Ваша фамилия">
                <input class="reg-form__text" type="text" name="email" placeholder="Ваша почта">
                <input class="reg-form__text" type="text" name="login" placeholder="Придумайте логин">
                <input class="reg-form__text" type="password" name="pass" placeholder="Придумайте пароль">
                <input class="reg-form__text" type="password" name="confirmpass" placeholder="Повторите пароль">
            </div>
            <div class="btn">    
                <button class="btn__text">Зарегистрироваться
		        </button>
            </div>
		    <span class="or-text">Или войдите через:
		    </span>
		    <div class="social">
                <a href="#" class="social__text">
                    <svg enable-background="new 0 0 24 24" height="32" viewBox="0 0 24 24" width="32">
                        <path d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"/>
                    </svg>
			    </a>
		    	<a href="#" class="social__text">
			    	<svg enable-background="new 0 0 512 512" width="32" height="32" viewBox="0 0 512 512" >
                        <g>
                            <path d="m147.682 173.862c24.86-32.704 64.162-53.862 108.318-53.862 36.326 0 70.479 14.146 96.167 39.833l10.606 10.606 84.853-84.852-10.606-10.606c-48.352-48.352-112.639-74.981-181.02-74.981-68.38 0-132.667 26.629-181.02 74.98-4.389 4.39-8.594 8.914-12.622 13.557z"/><path d="m423.462 449.642c4.643-4.028 9.168-8.233 13.558-12.622 48.351-48.353 74.98-112.64 74.98-181.02 0-15.575-1.41-31.179-4.192-46.377l-2.251-12.299h-264.557v120h136.452c-9.437 18.773-22.936 34.779-39.199 47.109z"/><path d="m311.602 380.208c-17.091 7.623-35.947 11.792-55.602 11.792-44.156 0-83.458-21.158-108.318-53.862l-85.324 85.324c4.028 4.643 8.233 9.168 12.622 13.557 48.353 48.352 112.64 74.981 181.02 74.981 51.916 0 101.464-15.363 143.479-43.915z"/><path d="m131.863 311.531c-7.619-16.965-11.863-35.761-11.863-55.531s4.244-38.566 11.863-55.531l-87.948-87.948c-28.552 42.015-43.915 91.563-43.915 143.479s15.363 101.464 43.915 143.479z"/>
                        </g>
                    </svg>
			    </a>
            </div>
        </form>
    </section>
</template>

<style lang="scss">

.reg-form{
    margin: 10px;
    display: flex;
    flex-flow: column wrap;
    align-items: center;
        &__text{
            width: 190px;
            height: 30px;
            margin-bottom: 10px;
            padding-left: 10px;
            font-size: 16px;
            font-family: $font-montserrat;  
        }
}

.remember-check{
    display: flex;
    justify-content: center;
        &__check{
            width: 20px;
            height: 20px;
        }
            &__text{
                padding: 5px;
                font-size: $font-size;
                font-family: $font-montserrat;
                color: $color-cyan;    
            }
}

.btn{
    display: flex;
    justify-content: center;
    padding: 10px;
        &__text{
            width: 200px;
            height: 60px;
            font-size: 16px;
            font-family: $font-montserrat;
            border: 2px solid $color-light-grey;
            border-radius: 10px;
            color: $color-light-grey;
            background-color: $color-cyan;
                &:hover{
                    background-color: $color-light-grey;
                    color: $color-cyan;
                    border: 2px solid $color-cyan;
                }
                &:active{
                    color: $color-light-grey;
                    background-color: $color-cyan;
                    border: 2px solid $color-light-grey;
                    }
        }
}

.or-text{
    padding: 20px;
    display: block;
    text-align: center;
    font-size: $font-size;
    font-family: $font-montserrat;
    color: $color-cyan;
}

.social{
    display: flex;
    justify-content: center;
        &__text{
            padding: 20px;
            font-size: $font-size;
            font-family: $font-montserrat;
        }
}

</style>