<template>
    <div ref="content" class="content">
        <div class="information">
            <div class="information-title">Программа курса</div>
            <div class="accordion-block">
                <AccordionItem>
                    Тариф «Шоколад для себя» <span style="white-space: nowrap">8 999 руб.</span>
                    <template v-slot:content>
                        <div class="accordion-content-accent">
                            Доступ бессрочный, обратная связь не ограничена по времени.
                        </div>
                        <div class="accordion-content-title">
                            Урок 1. Темперирование шоколада
                        </div>
                        <Image imageSrc="/img/prog/lesson1.webp"></Image>
                        <div class="description">
                            <div class="accordion-content-paragraph">
                            Темперирование – это важнейшая часть в работе с шоколадом. 
                            Благодаря нему, ваш шоколад не будет быстро таять в руках, 
                            а также будет иметь красивый глянцевый вид.
                            </div>
                            Я научу вас темперировать шоколад разными способами:
                            <div class="accordion-content-ul">
                                <li>классическим, на каменной плите</li>
                                <li>методом посева</li>
                                <li>при помощи какао-масла Микрио</li>
                                <li>а также как темперировать шоколад без кондиционера в помещении</li>
                            </div>
                        </div>
                        <div class="accordion-content-title">
                            Урок 2. Шоколадные буквы
                        </div>
                        <Image imageSrc="/img/prog/lesson2.webp"></Image>
                        <div class="description">
                            Приготовим конфеты с различными начинками в виде букв, из которых
                            можно выложить любую надпись.
                        </div>
                        <div class="accordion-content-title">
                            Урок 3. Медианты
                        </div>
                        <Image imageSrc="/img/prog/lesson3.webp"></Image>
                        <div class="description">
                            Приготовим ровные и красивые шоколадные диски без специальных форм с
                            различным дизайном.
                        </div>
                        <div class="accordion-content-title">
                            Урок 4. Ассорти конфеты: сердца, полусферы
                        </div>
                        <Image imageSrc="/img/prog/lesson4.webp"></Image>
                        <div class="description">
                            Приготовим конфетки из разного вида шоколада с различным орешками и сублимированной ягодкой.
                        </div>
                        <div class="accordion-content-title">
                            Урок 5. Авторские шоколадные плитки
                        </div>
                        <Image imageSrc="/img/prog/lesson5.webp"></Image>
                        <div class="description">
                            Покажу вам несколько техник дизайна, благодаря которым можно создавать
                            от 100 различных видов дизайнерских шоколадок.
                        </div>
                        <div class="accordion-content-title">
                            Урок 6. Сердце-сюрприз
                        </div>
                        <Image imageSrc="/img/prog/lesson6.webp"></Image>
                        <div class="description">
                            Приготовим корпус из шоколада для сердечка-сюрприза, задекорируем его и красиво упакуем.
                        </div>
                        <div class="accordion-content-title">
                            Урок 7. Упаковка
                        </div>
                        <Image imageSrc="/img/prog/lesson7.webp"></Image>
                        <div class="description">
                            Покажу вам как можно красиво упаковывать свою продукцию, 
                            чтобы она имела привлекательный подарочный вид.
                        </div>

                        <div class="accordion-content-title">
                            Бонусный урок. Трюфели
                        </div>
                        <Image imageSrc="/img/prog/lesson8.webp"></Image>
                        <div class="description">
                            Научу вас готовить всеми любимые классические трюфели.
                        </div>
                    </template>
                </AccordionItem>
                <AccordionItem>
                    Тариф «Бизнес на шоколаде» <span style="white-space: nowrap">13 500 руб.</span>
                    <template v-slot:content>
                        <div class="accordion-content-accent">
                            Доступ бессрочный, обратная связь не ограничена по времени.
                        </div>
                        <div class="accordion-content-title accordion-content-accent">
                            Все то же самое, что в тарифе “Шоколад для себя”
                        </div>
                        <div class="accordion-content-title">
                            + Урок по корпусным конфетам:
                        </div>
                        <Image imageSrc="/img/prog/lesson9.webp"></Image>
                        <div class="description">
                            <div class="accordion-content-paragraph">
                            Научимся делать корпусные конфеты с начинкой.
                            </div>
                            На уроке покажу как делать
                            дизайн при помощи ручной техники без аэрографа, зальем тонкий
                            шоколадный корпус, приготовим одну начинку и закроем донышки. Помимо
                            этого в pdf файле вы получите дополнительные рецепты начинок.
                        </div>
                        <div class="accordion-content-title">
                            + Модуль «Вкусные фото и видео»
                        </div>
                        <Image imageSrc="/img/prog/lesson10.webp"></Image>
                        <div class="description">
                            <div class="accordion-content-paragraph">
                            В этом модуле вы научитесь создавать эстетичный визуал для своего
                            аккаунта, ведь даже самые красивые конфеты, но плохо
                            сфотографированные, не вызовут никакого желания их купить. Поэтому этот
                            модуль очень важен для будущих продаж.
                            </div>
                            <div class="accordion-content-ul">
                                <li>урок по развитию насмотренности</li>
                                <li>урок по видам фотографий</li>
                                <li>урок по мобильной обработки фотографий</li>
                                <li>Урок по съемке и видеомонтажу эстетичных видео на телефон</li>
                            </div>
                        </div>
                        <div class="accordion-content-title">
                            + Модуль «Упаковка аккаунта»
                        </div>
                        <Image imageSrc="/img/prog/lesson11.webp"></Image>
                        <div class="description">
                            <div class="accordion-content-paragraph">
                                В этом модуле вы научитесь составлять свой профиль и ленту в инстаграме.
                            </div>
                            <div class="accordion-content-paragraph">
                                Ведь важна не только фотография по отдельности, а то как привлекательно
                                аккаунт смотрится в целом. Также поговорим о том, какие тексты писать под
                                фотографиями, чтобы вызывать еще больший интерес у клиентов.
                            </div>
                            <div class="accordion-content-ul">
                                <li>урок по созданию аккаунта</li>
                                <li>урок по планированию визуала</li>
                                <li>урок по написанию постов (текстов)</li>
                            </div>
                        </div>
                        <div class="accordion-content-title">
                            + Модуль «Выстраивание бизнеса»
                        </div>
                        <Image imageSrc="/img/prog/lesson12.webp"></Image>
                        <div class="description">
                            <div class="accordion-content-paragraph">
                            В этом модуле вы найдете все то, что необходимо знать по развитию своего дела. 
                            От расчета себестоимости и рекламе, до оформления соответствующих документов.
                            </div>

                            <div class="accordion-content-ul">
                                <li>урок по ценообразованию</li>
                                <li>урок по продвижению в соцсетях</li>
                                <li>урок по личному бренду</li>
                                <li>урок от приглашенного эксперта на тему «Страхи»</li>
                            </div>
                        </div>
                        <div class="accordion-content-title">
                            Бонусный урок. Оформление ИП или самозанятого, что выбрать?
                        </div>
                        <div>
                            Поговорим о сертификации на шоколад. А также поговорим о том, как договариваться о
                            реализации своей продукции в магазинах города.
                        </div>
                    </template>
                </AccordionItem>
            </div>
        </div>
    </div>
</template>

<script>
import AccordionItem from './Components/AccordionItem'
import Image from './Components/Image'

export default {
    components: {
        AccordionItem,
        Image
    },
    methods: {
        scrollTo()
        {
            const yOffset = 10; 
            const y = this.$refs.content.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        }
    },
}
</script>

<style scoped>
.content {
    font-family: 'Montserrat';
    margin-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 90px;
    padding-bottom: 100px;
    background: linear-gradient(180deg, #FFFFFF 0%, rgba(238, 79, 241, .25) 30% 70%, #FFFFFF 100%);
}
.information {
    max-width: 900px;
    margin: auto;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
}
.description
{
    margin-top: 15px;
}
.accordion-block {
    margin: 40px 0px;
    margin-bottom: 0;
}
.accordion-content-title {
    font-weight: 700;
    margin: 15px 0px;
}
.accordion-content-paragraph
{
    margin-bottom: 10px;
}
.accordion-content-ul
{
    margin-left: 15px;
}
.accordion-content-accent
{
    font-size: 1.1em;
}
</style>