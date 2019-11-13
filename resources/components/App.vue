<template>
    <!-- <div id="app">
    <router-view/>-->
    <!-- </div> -->
    <div class="app">
        <button v-scroll:top="30">English</button>

        <h3>{{test}}</h3>
        <contact></contact>
        <button>Click me</button>

    </div>
</template>

<script>
    import Contact from './Contact';

    export default {
        name: "App",
        data: function() {
            return {
                test: "hello các bạn",
                currentPage: "contact"
            };
        },
        components: {
            contact: Contact
        }
    };
</script>

<style>
    #app {
        font-family: "Avenir", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>
