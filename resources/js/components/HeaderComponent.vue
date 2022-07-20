<template>
    <div class="">
        <header class="header">
            <div class="header_inner">
                <router-link v-bind:to="{name: 'index'}" class="header_logo_img_wrap">
                    <img src="/images/logo.svg" alt="宅建Jobエージェント" class="header_logo_img">
                </router-link>
            </div>
        </header>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
