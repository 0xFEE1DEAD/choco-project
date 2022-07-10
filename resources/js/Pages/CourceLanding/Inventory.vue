<template>
    <div class="content">
        <div class="information">
            <div class="information-title">Необходимый инвентарь</div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/plate.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Шпатель, каменная плита или гастроемкость</span> для классического метода
                        темперирования (можно не приобретать если будете темперировать другим методом)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/pirometer.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Бесконтактный пирометр</span> (прибор для бесконтактного изменения температуры)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/bake.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Микроволновая печь</span> (любая самая простая модель, в ней мы будем растапливать шоколад)
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/scales.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Электронные весы</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/mold.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Формы для шоколада</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/chocolate.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Сам шоколад и декор для украшения</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <img v-lazy="'/img/inventory/box.webp'">
                </div>
                <div class="item-description">
                    <div>
                        <span>Упаковка</span> (коробочки, ленты)
                    </div>
                </div>
            </div>
            <div class="information-subtitle">
                Ссылки на всех поставщиков и подробное описание необходимого инвентаря 
                я отправлю вам уже на курсе. Заранее ничего покупать не нужно
            </div>
        </div>
    </div>
</template>

<script>
import AboutGroup from './Components/AboutGroup'
export default {
    components: {
        AboutGroup,
    },
}
</script>

<style scoped>
.content {
    margin-top: 100px;
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Montserrat';
}
.information {
    max-width: 900px;
    margin: auto;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
    margin-bottom: 50px;
}
.information-subtitle
{
    font-weight: 700;
}
.item
{
    display: flex;
    margin: 0 40px;
    margin-top: 20px;
    margin-bottom: 20px;

}

.item-image 
{
    min-width: 200px;
    max-width: 200px;
    min-height: 200px;
    max-height: 200px;
    aspect-ratio: 1;
    width: 200px;
    height: 200px;

    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.item-image > img
{
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.item-description
{
    display: flex;
    align-items: center;
    margin-left: 20px;
}

.item-description > div > span
{
    font-weight: 700;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .item {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
}

@media only screen and (max-width: 575px) {
    .item {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
}
</style>