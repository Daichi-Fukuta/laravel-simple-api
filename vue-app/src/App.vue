<template>
    <div style="width: 1000px; margin: auto; padding-top: 100px;">
        <h1>ようこそ！</h1>
        <nav>
            <router-link
                to="/"
                class="link"
                active-class="active-link"
                exact>
                Home
            </router-link>
            <router-link
                to="/hello"
                class="link"
                active-class="active-link"
                exact>
                Hello
            </router-link>
            <router-link
                to="/bye"
                class="link"
                active-class="active-link"
                exact>
                Bye
            </router-link>
        </nav>
        <router-view></router-view>
    </div>
</template>

<style scoped>
    .link {
        padding: 5px;
    }
    .active-link {
        font-size: 20px;
    }
</style>