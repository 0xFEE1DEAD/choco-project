<template>
    <div v-show="show" class="cookies-message">
        <div class="cookies-message-text">
            Оставаясь на Веб-сайте, вы соглашаетесь с размещением файлов cookie на вашем компьютере, с целью анализа использования Веб-сайта. Если вы не хотите принимать файлы cookie, вы должны прекратить использование Вебсайта. 
            Для большей информации можете прочитать <a style="color: #bb457e" href="#">политику конфиденциальности</a>
        </div>
        <div class="cookies-message-btn">
            <Button @click="acceptAll">Закрыть</Button>
        </div>
    </div>
</template>

<script>
import Button from './Button'

export default {
    components: {
        Button
    },
    data() {
        return {
            show: true
        }
    },
    methods: {
        acceptAll() {
            this.$inertia.post('/accept-cookies', {}, {
                preserveScroll: true,
                onSuccess: this.successSend
            });
        },
        successSend() {
            this.show = false;
        }
    }
}
</script>

<style scoped>
    .cookies-message {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        min-height: 100px;
        background: white;
        font-family: 'Montserrat';
        padding: 10px;
        z-index: 1000000;
    }
    .cookies-message-text {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px;
    }
    .cookies-message-btn {
        display: flex;
        justify-content: flex-end;
    }
</style>
