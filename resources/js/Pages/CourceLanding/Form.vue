<template>
    <ModalMessage v-model="modalMessage">
        <template v-slot:title>
            Спасибо за регистрацию! 
        </template>
        Ваша заявка принята, с вами свяжется наш менеджер.
    </ModalMessage>

    <div ref="content" class="content">
        <div class="background">
            <img v-lazy="'/img/cource_form.webp'" class="background-image">
            <div class="background-overlay"></div>
        </div>
        <div class="contact-form-wrap">
            <div class="contact-form">
                <div class="contcat-form-title">Приобрести курс</div>
                <form @submit.prevent="sendForm">
                    <Input v-model="form.name" id="name-input" placeholder="Имя" :error="form.errors.name"></Input>
                    <Input v-model="form.surname" id="surname-input" placeholder="Фамилия" :error="form.errors.surname"></Input>
                    <Input type="tel" v-model="form.phone" id="phone-input" placeholder="Номер телефона" mask="+7 (###) ###-##-##" :error="form.errors.phone"></Input>
                    <div class="form-plain">
                        <div class="form-plain-title">Тариф:</div>
                        <RadioInput v-model="form.plan" id="plan-1" value="plan1">
                            “Шоколад для себя” - 4 990 руб.
                        </RadioInput>
                        <RadioInput v-model="form.plan" id="plan-2" value="plan2">
                            “Бизнес на шоколаде” - 8 990 руб.
                        </RadioInput>
                        <div class="error-message">
                            {{form.errors.plan}}
                        </div>
                    </div>
                    <div style="margin-top: 20px;">
                        <RadioInput v-model="form.privacy_agree" id="privacy_agree" square>
                            <span>Согласен на обработку персональных данных в соответствии с <a style="color: #bb457e" href="/privacy" target="__blank">политикой в отношении обработки персональных данных</a></span>
                        </RadioInput>
                        <div class="error-message">
                            {{form.errors.privacy_agree}}
                        </div>
                    </div>
                    <div class="bottom">
                        <Button @click="sendForm" :disabled="form.processing">Купить</Button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Input from './Components/FormInput'
import RadioInput from './Components/FormRadio'
import Button from './Components/Button'
import ModalMessage from './Components/ModalMessage'
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Input,
        Button,
        RadioInput,
        ModalMessage
    },
    setup () {
        const form = useForm({
            name: '',
            surname: '',
            phone: '',
            plan: '',
            privacy_agree: ''
        });
        return { form }
    },
    data() {
        return {
            modalMessage: false
        }
    },
    methods: {
        sendForm() {
            this.form.post('/buy', {
                preserveScroll: true,
                onSuccess: this.successSend
            });
        },
        successSend()
        {
            this.form.reset('name');
            this.form.reset('surname');
            this.form.reset('phone');
            this.form.reset('plan');
            this.form.reset('privacy_agree');
            this.form.clearErrors();
            this.modalMessage = true;
        },
        scrollTo()
        {
            const yOffset = 0; 
            const y = this.$refs.content.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        }
    }
}
</script>

<style scoped>
.content {
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Montserrat';
    position: relative;
    padding-bottom: 40px;
    padding-top: 100px;
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

.contcat-form-title {
    font-size: 1.6em;
    font-weight: 600;
    text-align: center;
}
.contact-form-wrap
{
    max-width: 900px;
    margin: auto;
}
.contact-form {
    min-width: 200px;
    min-height: 200px;
    width: 40vw;
    padding: 50px;
    background: white;
    border-radius: 30px;
    margin: auto;
}
.form-plain
{
    margin-top: 20px;
}

.form-plain-title
{
    margin-bottom: 15px;
}
.bottom
{
    width: 200px;
    margin: auto;
    margin-top: 40px;
    text-align: center;
}

.error-message {
    font-size: .8em;
    color: #c90000;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .contact-form 
    {
        width: 50vw;
    }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .contact-form 
    {
        width: 70vw;
    }
}

@media only screen and (max-width: 575px) {
    .contact-form 
    {
        width: 90vw;
    }
}
</style>