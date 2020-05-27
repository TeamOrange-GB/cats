<template>
    <section class="main">
        <div class="user-wrapper">
            <router-link :to="{name:'UserAccount'}">
            <a href="#" id="account-owner" class="user-block user-block__owner">
                <img :src="ownerImg" alt="titul" tabindex="0">
                
                <h3>Стать Заводчиком</h3>
            </a>
            </router-link>
            <a href="#" id="account_login__link" class="user-block user-block__login">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 16C15.6 16 12 12.4 12 8C12 3.6 15.6 0 20 0C24.4 0 28 3.6 28 8C28 12.4 24.4 16 20 16ZM20 2C16.7 2 14 4.7 14 8C14 11.3 16.7 14 20 14C23.3 14 26 11.3 26 8C26 4.7 23.3 2 20 2Z"></path>
                    <path d="M40 40H0V39C0.299252 34.1 2.39401 29.3 5.88529 25.8C9.67581 22.1 14.6633 20 19.9501 20C25.2369 20 30.3242 22.1 34.015 25.9C37.5062 29.4 39.8005 34 40 39V40ZM2.09476 38H37.8055C37.3067 33.9 35.5112 30.2 32.6185 27.3C29.3267 23.9 24.7382 22 19.9501 22C15.1621 22 10.6733 23.9 7.2818 27.3C4.38903 30.2 2.59352 33.9 2.09476 38Z"></path>
                </svg>
                <h3>Стать Спонсором</h3>
            </a>
            </router-link>
            <a href="#" id="account_login__link" class="user-block user-block__login">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 16C15.6 16 12 12.4 12 8C12 3.6 15.6 0 20 0C24.4 0 28 3.6 28 8C28 12.4 24.4 16 20 16ZM20 2C16.7 2 14 4.7 14 8C14 11.3 16.7 14 20 14C23.3 14 26 11.3 26 8C26 4.7 23.3 2 20 2Z"></path>
                    <path d="M40 40H0V39C0.299252 34.1 2.39401 29.3 5.88529 25.8C9.67581 22.1 14.6633 20 19.9501 20C25.2369 20 30.3242 22.1 34.015 25.9C37.5062 29.4 39.8005 34 40 39V40ZM2.09476 38H37.8055C37.3067 33.9 35.5112 30.2 32.6185 27.3C29.3267 23.9 24.7382 22 19.9501 22C15.1621 22 10.6733 23.9 7.2818 27.3C4.38903 30.2 2.59352 33.9 2.09476 38Z"></path>
                </svg>
                <h3>Личный кабинет</h3>
            </a>
            </router-link>
        </div>
        
    </section>
    
</template>

<script>
    export default{
        name: 'vAccount',
        data: () => ({
            ownerImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/maineCoons/coon.jpg",
        }),
    }
</script>

<style lang="scss">
.main {
max-width: 800px;
    }
    .user-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 670px;
        margin-left: auto;
        margin-right: auto;
        a:hover {
    border-color: #222;
}
    }
    .user-block {
    width: 280px;
    height: 210px;
    border: 2px solid #f5f5f5;
    border-radius: 5px;
    margin: 20px 10px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 15px 15px;
    transition: border-color 0.4s ease-in-out;
    backface-visibility: hidden;
    }
    a {
    color: #373232;
    text-decoration: none;
    background-color: transparent;
}
</style>