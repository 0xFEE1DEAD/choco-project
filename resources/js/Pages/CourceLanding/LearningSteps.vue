<template>
    <div class="content">
        <div class="information">
            <div class="information-title">Как будет проходить обучение</div>
            <div class="step">
                <div class="step-number">
                    <span>1</span>
                </div>
                <div class="step-description">
                    Обучение идет без потоков: вы оплачиваете и мы открываем вам доступ к 
                    курсу. Для этого заполните форму ниже, выбрав нужный вам тариф и мы 
                    отправим вам форму на оплату.
                </div>
            </div>
            <div class="step">
                <div class="step-number"><span>2</span></div>
                <div class="step-description">
                    После каждого урока вам будет дано домашнее задание, которое
                    необходимо будет выполнить и отправить мне на проверку.<br><br>

                    В тарифе «Шоколад для себя» все уроки открываются сразу.<br><br>

                    В тарифе «Бизнес на шоколаде» вам сразу откроется первый модуль по
                    шоколаду и модуль по вкусным фото и видео. Остальные модули будут
                    открываться после сдачи домашних заданий по предыдущим модулям. Это
                    нужно для того чтобы вы не бежали вперед поровоза и качественно
                    проходили все уроки))
                </div>
            </div>
            <div class="step">
                <div class="step-number"><span>3</span></div>
                <div class="step-description">
                    Также нужно будет подготовить место для работы: необходимо будет
                    выделить полочку в морозильной или холодильной камере. Помыть ее и
                    положить поглотители запаха (3-4шт).<br><br>

                    Выделить место в шкафу для хранения
                    шоколада и готовых изделий. В этом шкафу не должно быть вещей и
                    продуктов с резким запахом, шоколад его может впитать, а также на шкаф не
                    должны попадать солнечные лучи.
                </div>
            </div>
            <div class="step">
                <div class="step-number"><span>4</span></div>
                <div class="step-description">
                    Необходимо следить за температурой и влажностью в помещении во
                    время работы с шоколадом. Идеальная рабочая температура 16-20 градусов.<br><br>

                    (о том, что делать, если пока нет возможности обеспечить такую
                    температуру я расскажу на первом уроке)
                </div>
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
.step
{
    display: flex;
    margin: 0 40px;
    margin-top: 20px;
    margin-bottom: 40px;
}

.step-number 
{
    font-size: 90px;
    font-weight: 900;
    min-width: 80px;
    position: relative;
    height: 90px
}
.step-number > span 
{
    position: absolute;
    top: -20px;
}
.step-description
{
    display: flex;
    min-height: 100px;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .step{
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
}

@media only screen and (max-width: 575px) {
    .step {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
}
</style>