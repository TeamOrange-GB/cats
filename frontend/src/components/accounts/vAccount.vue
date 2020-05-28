<template>
    <section>
        <div class="user-wrapper">
            <router-link :to="{name:'AddAnimal'}">
            <a href="#" id="account-owner" class="user-block">                           
                <h3>Стать Заводчиком</h3>
            </a>
            </router-link>
            <router-link :to="{name:'SponsorAccount'}">
            <a href="#" id="account-sponsor" class="user-block"> 
                <h3>Стать Спонсором</h3>
            </a>
            </router-link>
            <router-link :to="{name:'UserAccount'}">
            <a href="#" id="account-lk" class="user-block">
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
            ownerImg: "https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/Accounts/cat2.png",
        })
    }
</script>

<style lang="scss">
    .user-wrapper {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 600px;
        margin: 0 auto 20px;
        a:hover {
            border-color: $color-dark-gray;
            background-size: 110px;
        }
    }
    .user-block {
    cursor: pointer;
    width: 280px;
    height: 210px;
    border: 2px solid $color-smoke;
    border-radius: 5px;
    margin: 20px 10px 0;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: column;
    padding: 0 0 40px 0;
    transition: border-color 0.4s ease-in-out;
    box-sizing: border-box;
    background: url('https://raw.githubusercontent.com/annapuchkova/cats/dev/frontend/src/assets/image/Accounts/cat2.png') center 30px no-repeat;
    background-size: 100px;
    }
    a {
    color: #373232;
    text-decoration: none;
    background-color: transparent;
}
</style>