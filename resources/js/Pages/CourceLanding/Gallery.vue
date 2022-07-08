<template>
    <div ref="content" class="content">
        <div class="information">
            <div class="information-title">Работы наших учеников</div>
            <Carousel :wrap-around="true" :breakpoints="breakpoints">
                <Slide v-for="i in 44" :key="i">
                     <img v-lazy="'img/studentswork/' + (i + 1) + '.webp'" :key="'img-' + i">
                </Slide>

                <template #addons>
                    <Navigation />
                </template>
            </Carousel>
        </div>
    </div>
</template>

<script>
import AboutGroup from './Components/AboutGroup'
import ArrowIcon from '../../Icons/arrow.vue'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

export default {
    components: {
        AboutGroup,
        ArrowIcon,
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
    data() {
        return  {
            breakpoints: {
                500: {
                    itemsToShow: 1.2,
                    snapAlign: 'center',
                },
                700: {
                    itemsToShow: 2,
                    snapAlign: 'center',
                },
                1024: {
                    itemsToShow: 3,
                    snapAlign: 'start',
                },
            },
        }
    }
}
</script>

<style scoped lang="scss">
@import 'vue3-carousel/dist/carousel.css';

.content {
    font-family: 'Montserrat';
    margin-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
}
.information {
    max-width: 900px;
    margin: auto;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
}

.carousel__slide > img {
    width: 100%;
    height: 70vh;
    object-fit: cover;
    padding: 10px;
    border-radius: 30px;
    aspect-ratio: 3/4;
}
</style>