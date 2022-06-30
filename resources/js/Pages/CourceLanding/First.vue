<template>
    <div ref="content" class="content">
        <div class="background">
            <img src="/img/background_begin.webp" class="background-image">
            <div class="background-overlay"></div>
        </div>
        <div style="min-height: 100px">
        </div>
        <div class="show-animate">
            <div class="title">CHOCOLATIER</div>
            <div class="subtitle">Онлайн курс “Шоколадное дело” с нуля</div>
            <div class="subtitle" style="font-size: 1em; margin-top: 30px">Освой профессию Шоколатье за 8 недель</div>
            <div style="display: flex; justify-content: center;margin-top: 30px">
                <Button @click="scroll('form')">Приобрести курс</Button>
            </div>
        </div>
    </div>
</template>

<script>
import Button from './Components/Button'

export default {
    components: {
        Button
    },
    methods: {
        scrollTo()
        {
            const yOffset = 0; 
            const y = this.$refs.content.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        },
        scroll(name) {
            this.$emit('scrollTo', name);
        }
    }
}
</script>

<style scoped>

.content {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    flex-direction: column;
    font-family: 'Montserrat';
    color: white;
    text-align: center;
    position: relative;
}

.background {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
}

.background-image {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    object-fit: cover;
}

.background-overlay {
    position: absolute;
    background-color: black;
    opacity: .55;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.title {
    font-size: 5em;
    margin-bottom: 20px;
    margin: 0 10px;
    font-weight: 700;
}

.subtitle {
    font-size: 1.5em;
    margin-bottom: 20px;
    margin-left: 10px;
    margin-right: 10px;
    font-weight: 300;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .title {
        font-size: 4em;
    }
    .subtitle {
        font-size: 1.2em;
    }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .title {
        font-size: 3.5em;
    }
    .subtitle {
        font-size: 1.05em;
    }
}

@media only screen and (max-width: 575px) {
    .title {
        font-size: 3.25em;
    }
    .subtitle {
        font-size: 1.05em;
    }
}

</style>