<template>
    <div class="content">
        <div class="information">
            <div class="information-title">FAQ</div>
            <div class="accordion-block">
                <AccordionItem>
                    У меня есть вопрос по курсу, с кем я могу связаться?
                    <template v-slot:content>
                        ответ
                    </template>
                </AccordionItem>
                <AccordionItem>
                    Можно ли приобрести курс в рассрочку?
                    <template v-slot:content>
                        ответ
                    </template>
                </AccordionItem>
                <AccordionItem>
                    Что входит в стоимость курса?
                    <template v-slot:content>
                        ответ
                    </template>
                </AccordionItem>
            </div>
        </div>
    </div>
</template>

<script>
import AccordionItem from './Components/AccordionItem'
export default {
    components: {
        AccordionItem,
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
}
.information {
    max-width: 900px;
    margin: auto;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
}
.accordion-block {
    margin: 40px 0px;
    margin-bottom: 0;
}
</style>