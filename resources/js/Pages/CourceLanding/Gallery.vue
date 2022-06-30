<template>
    <div ref="content" class="content">
        <div class="information">
            <div class="information-title">Работы наших учеников</div>
            <div style="display: flex">
                <div style="display: flex; align-items: center; margin-right: -20px; z-index: 2; justify-content: center; align-items: center;">
                    <div @click="swipe(-1)" class="arrow-btn">
                        <ArrowIcon fill="black"  :size="20"></ArrowIcon>
                    </div>
                </div>
                <div 
                    :style="wrapStyle"
                    @touchstart="handleTouchstart"
                    @touchmove="handleTouchmove"
                    @touchend="handleTouchend"
                ref="galleryWrap"  class="gallery-wrap">
                    <div ref="galleryElement" class="gallery">
                        <img src="img/studentswork/1.webp">
                        <img src="img/studentswork/2.webp">
                        <img src="img/studentswork/3.webp">
                        <img src="img/studentswork/4.webp">
                        <img src="img/studentswork/5.webp">
                        <img src="img/studentswork/6.webp">
                        <img src="img/studentswork/7.webp">
                        <img src="img/studentswork/8.webp">
                        <img src="img/studentswork/9.webp">
                    </div>
                </div>
                <div style="display: flex; align-items: center; margin-left: -20px; z-index: 2; justify-content: center; align-items: center;">
                    <div @click="swipe(1)"  class="arrow-btn" style="transform: rotate(180deg)">
                        <ArrowIcon fill="black"  :size="20"></ArrowIcon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AboutGroup from './Components/AboutGroup'
import ArrowIcon from '../../Icons/arrow.vue'

export default {
    components: {
        AboutGroup,
        ArrowIcon
    },
    data() {
        return {
            wrapElement: null,
            touchmoveX: false,
            touchmoveStartX: 0,
            movedX: 0,
            imageIndex: 0,
            galleryElement: null,
            touchmoveDirection: 0,
            swipeCoef: 80,
            wrapStyle: {
                scrollBehavior: 'smooth'
            },
            scrolled: false
        }
    },
    mounted() {
        this.wrapElement = this.$refs.galleryWrap;
        this.galleryElement = this.$refs.galleryElement;
    },
    methods: {
        scrollBy(deltaX) {
            if(!isNaN(deltaX)) {
                this.wrapElement.scrollBy(deltaX, 0);
                this.movedX += deltaX;
                

                const maxScroll = this.wrapElement.scrollWidth - this.wrapElement.clientWidth;
                if(this.movedX < 0)
                {
                    this.movedX = 0;
                }
                
                if(this.movedX > maxScroll)
                {
                    this.movedX = maxScroll;
                }

                this.scrolled = this.movedX > maxScroll - 60;
            }
        },
        handleTouchstart(e)
        {
            if(e)
            {
                const touches = e.touches;
                if(touches && touches.length > 0) {
                    const firstTouch = touches[0];
                    this.touchmoveStartX = firstTouch.clientX;
                    this.wrapStyle.scrollBehavior = 'auto';
                }
            }
        },
        handleTouchmove(e)
        {
            if(e)
            {
                const touches = e.touches;
                if(touches && touches.length > 0) {
                    const firstTouch = touches[0];
                    if(this.touchmoveX !== false)
                    {
                        this.touchmoveDirection = this.touchmoveStartX - firstTouch.clientX;
                        this.scrollBy(this.touchmoveX - firstTouch.clientX);
                    }
                    this.touchmoveX = firstTouch.clientX;
                }
            }
        },
        handleTouchend()
        {
            if(this.galleryElement) {
                if(this.touchmoveDirection > 0)
                {
                    if(this.touchmoveDirection > this.swipeCoef)
                    {
                        this.swipe(1);
                    }
                    else
                    {
                        this.swipe(0);
                    }
                }
                else
                {
                    if(this.touchmoveDirection < this.swipeCoef)
                    {
                        this.swipe(-1);
                    }
                    else
                    {
                        this.swipe(0);
                    }
                }
            }
            this.touchmoveX = false;
            this.touchmoveDirection = 0;
            this.touchmoveStartX = 0;
        },
        swipe(direction)
        {
            const imgs = this.galleryElement.getElementsByTagName('img');

            if(!(imgs && imgs.length > 0)) {
                return;
            }

            if(direction > 0)
            {
                if((this.imageIndex >= imgs.length) || this.scrolled) {
                    return;
                }

                this.imageIndex++;
            }
            else if (direction < 0)
            {
                if(this.imageIndex <= 0) {
                    return;
                }

                this.imageIndex--;
            }

            let scrollWidth = 0;
            for(let i = 0; i < this.imageIndex; i++)
            {
                scrollWidth += imgs[i].scrollWidth;
            }

            let canScroll = false;
            if(direction > 0)
            {
                if(scrollWidth < this.movedX)
                {
                    this.swipe(1);
                }
                else
                {
                    canScroll = true;
                }
            }
            else
            {
                if(scrollWidth > this.movedX)
                {
                    this.swipe(-1);
                }
                else
                {
                    canScroll = true;
                }
            }

            if(canScroll)
            {
                this.wrapStyle.scrollBehavior = 'smooth';                
                let self = this;

                setTimeout(function() {
                    self.scrollBy(scrollWidth - self.movedX);
                    self.wrapElement.scroll(scrollWidth, 0);
                }, 1);
            }
        },
        scrollTo()
        {
            const yOffset = -70; 
            const y = this.$refs.content.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        }
    }
}
</script>

<style scoped>
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

.gallery-wrap
{
    margin-top: 20px;
    overflow-x: hidden;
    overflow-y: hidden;
    user-select: none;
}

.gallery {
    display: flex;
    user-select: none;
}

.gallery > img {
    width: 80vw;
    height: 70vh;
    object-fit: cover;
    padding: 10px;
    border-radius: 30px;
}
.arrow-btn
{
    border-radius: 50%;
    cursor: pointer;
    background: white;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 0 10px rgb(0 0 0 / 30%);
}
</style>