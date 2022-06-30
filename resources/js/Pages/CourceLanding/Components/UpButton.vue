<template>
    <div @click="$emit('scrollTo', 'first')" :style="style" class="up-button">
        <ArrowIcon fill="black" :size="20" style="transform: rotate(90deg)"></ArrowIcon>
    </div>
</template>

<script>
import ArrowIcon from '../../../Icons/arrow.vue'

export default {
    components: {
        ArrowIcon
    },
    data() {
        return {
            style: {
                opacity: 0
            }
        }
    },
    mounted() {
        window.addEventListener('scroll', () => {
            let x = document.documentElement.scrollTop;
            this.scrollEventListener(x);
        })
    },
    methods: {
        scrollEventListener(topX=0) {
            let opacity = 0;

            if(topX > 400) {
                opacity = 1;
            }

            this.style.opacity = opacity;         
        },
    }
}
</script>

<style scoped>
    .up-button {
        z-index: 999;
        position: fixed;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        right: 30px;
        bottom: 30px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 0 20px rgba(0,0,0,.45);
        transition: opacity .2s;
        cursor: pointer;
    }
</style>
