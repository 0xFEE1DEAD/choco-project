<template>
    <div class="header">
        <div :style="headerBackgroundCss" class="header-background">
        </div>
        <div class="header-content">
            <div class="header-content-logo">
                <span>
                    Chocolatier
                </span>
            </div>
            <div class="header-content-menu">
                <div @click="scrollTo('courceInfromation')" 
                    class="header-content-menu-item xs-none">
                    О курсе
                </div>
                <div @click="scrollTo('gallery')" 
                 class="header-content-menu-item xs-none">Галерея</div>
                <div 
                    @click="scrollTo('program')" 
                 class="header-content-menu-item xs-none">Программа курса</div>
                <div
                    @click="scrollTo('contacts')"  
                class="header-content-menu-item xs-none">Контакты</div>
                <div @click="showMobileMenu" class="burger-menu xs-show">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div v-show="mobileMenu" class="mobile-menu">
            <div class="close-btn-wrap">
                <IconClose style="cursor: pointer" @click="closeMobileMenu" :size="27" fill="black"></IconClose>
            </div>
            <div class="mobile-menu-buttons">
                <div @click="scrollTo('courceInfromation')">О курсе</div>
                <div @click="scrollTo('gallery')">Галерея</div>
                <div @click="scrollTo('program')">Программа курса</div>
                <div @click="scrollTo('contacts')">Контакты</div>
            </div>
        </div>
    </div>
</template>

<script>
import IconClose from '../../Icons/close'

export default {
    props: {
        contactUsOffsetTop: {
            type: Number,
            default: 99999
        }
    },
    components: {
        IconClose
    },
    data() {
        return {
            headerBackgroundCss: {
                opacity: 0
            },
            mobileMenu: false
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
            let opacity = topX / 100;
            if(topX > 100) {
                opacity = 1;
            }

            if(topX > this.contactUsOffsetTop - 45) {
                opacity = (this.contactUsOffsetTop - topX) / 45;
                if(opacity < 0) {
                    opacity = 0;
                }
            }

            this.headerBackgroundCss.opacity = opacity;         
        },
        scrollTo(name)
        {
            this.mobileMenu = false;
            this.$emit('scrollTo', name);
        },
        showMobileMenu()
        {
            this.mobileMenu = true;
        },
        closeMobileMenu()
        {
            this.mobileMenu = false;
        }
    }
}
</script>

<style scoped>
.header {
    height: 60px;
    font-family: 'Montserrat';
    color: white;
    position: fixed;
    width: 100%;
    display: flex;
    justify-content: center;
    z-index: 999;
}
.header-content {
    height: 100%;
    display: flex;
    width: 100%;
    max-width: 1080px;
    justify-content: space-between;
    z-index: 999999;
}

.header-content-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 20px;
    font-weight: 600;
}

.header-content-menu {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-right: 20px;
}

.header-content-menu-item {
    margin-right: 20px;
    position: relative;
    cursor: pointer;
}
.header-content-menu-item:last-child {
    margin-right: 0;
}

.header-background {
    background-color: #bb457e;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.burger-menu {
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 25px;
    height: 25px;
    cursor: pointer;
}

.burger-menu > div {
    background: white;
    height: 4px;
    width: 100%;
    margin: 2px 0px;
    border-radius: 1px;
}

.xs-show {
    display: none;
}

.mobile-menu {
    height: 100%;
    width: 100%;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    background: white;
    z-index: 9999999999;
}

.close-btn-wrap {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px;
}

.mobile-menu-buttons {
    color: black;
    text-align: center;
}

.mobile-menu-buttons > div {
    font-size: 1.2em;
    margin: 10px 0;
    cursor: pointer;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .header-content-menu-item {
        font-size: 0.95em;
        margin-right: 18px;
    }
    
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .header-content-menu-item {
        font-size: 0.85em;
        margin-right: 16px;
    }
    .xs-none {
        display: none;
    }
    .xs-show {
        display: flex;
    }
}

@media only screen and (max-width: 575px) {
    .header-content-menu-item {
        font-size: 0.80em;
        margin-right: 14px;
    }
    .xs-none {
        display: none;
    }
    .xs-show {
        display: flex;
    }
}
</style>