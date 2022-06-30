<template>
    <div ref="content" class="content">
        <div class="information">
            <div class="information-title">О курсе</div>
            <div class="information-text">
                <p>
                    На курсе есть два тарифа «Шоколад для себя» и «Бизнес на шоколаде».
                </p>
                <p>
                    Обучение проходит по видео-урокам и с личной, не ограниченной по времени поддержкой от меня в чате Телеграмма.
                </p> 
            </div>
            <div class="information-subheader">
                Вы научитесь:
            </div>
            <div class="information-grid">
                <AboutGroup imageSrc="/img/groups/1.webp">
                    Темперировать шоколад
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/2.webp">
                    Готовить различные конфеты и медианты
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/3.webp">
                    Готовить шокобуквы
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/4.webp">
                    Создавать красивые дизайнерские плитки
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/5.webp">
                    Делать эстетичные снимки и видео
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/6.webp">
                    Упаковывать продукцию
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/7.webp">
                    Создавать свою Инстаграм компанию
                </AboutGroup>
                <AboutGroup imageSrc="/img/groups/8.webp">
                    Продвигать аккаунт в соц. сетях
                </AboutGroup>
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
    methods: {
        scrollTo()
        {
            const yOffset = -10; 
            const y = this.$refs.content.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        }
    }
}
</script>

<style scoped>
.content {
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Montserrat';
    margin-top: 30px;
    background-image: linear-gradient(180deg, #F4D5F5, white);
}
.information {
    max-width: 900px;
    margin: auto;
    margin-top: 30px;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
}
.information-text {
    margin-top: 30px;
}
.information-subheader
{
    font-weight: 700;
    margin-top: 50px;
    margin-bottom: 25px;
}
.information-grid 
{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
}
</style>