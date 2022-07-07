<template>
    <div ref="content" class="copyright">
        <div class="contacts">
            <a href="https://vk.com/chocolatier_irkutsk" target="__blank">
                <IconVk fill="white"  style="margin-right: 22px;" :size="50"></IconVk>
            </a>
            <a href="https://t.me/+V3jQ94E6bpU2MmI6" target="__blank">
                <IconTelegram fill="white" style="margin-right: 22px;" :size="50"></IconTelegram>
            </a>
            <a href="https://instagram.com/chocolatier_irk?igshid=YmMyMTA2M2Y=" target="__blank">
                <IconInstagramm fill="white" :size="50"></IconInstagramm>
            </a>
        </div>
        <div class="phone">
            <a href="tel:+79994236803">Менеджер по вопросам - Дила, +7 (999) 423-68-03</a>
        </div>
        <div>© 2022 Chocolatier</div>
    </div>
</template>

<script>
import IconInstagramm from '../../Icons/Socials/instagrammOutline'
import IconVk from '../../Icons/Socials/vkOutline'
import IconTelegram from '../../Icons/Socials/telegramOutline'

export default {
    components: {
        IconVk,
        IconInstagramm,
        IconTelegram
    },
    methods: {
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
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    flex-direction: column;
    font-family: 'Montserrat';
    color: white;
    text-align: center;
    position: relative;
    padding-bottom: 40px;
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

.contacts
{
    padding-top: 20px;
    padding-bottom: 10px;
}
.copyright
{
    background: #313131;
    padding-top: 20px;
    padding-bottom: 20px;
    font-family: 'Montserrat';
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
.copyright > div
{
    max-width: 900px;
    margin: auto;
    text-align: center;
}
.phone
{
    margin-bottom: 20px !important;
}
.phone > a
{
    color: white;
    text-decoration: none;
}
</style>