<template>
    <div>
        <div class="accordion-body" @click="toggle">
            <div class="accordion-body-border"></div>
            <div class="accordion-body-content">
                <slot></slot>
                <div :style="iconStyle" class="accordion-body-content-icon">
                    <ArrowIcon fill="black" :size="20"></ArrowIcon>
                </div>
            </div>
            <div class="accordion-body-border"></div>
        </div>
        <div :style="contentStyle" class="accordion-content">
            <slot name="content"></slot>
        </div>
    </div>
</template>

<script>
import ArrowIcon from '../../../Icons/arrow.vue'

export default {
    components: {
        ArrowIcon
    },
    data()
    {
        return {
            contentStyle: {
                display: 'none'
            },
            iconStyle: {
                transform: 'rotate(-90deg)'
            },
            opened: false
        }
    },
    methods:
    {
        toggle() {
            if(!this.opened)
            {
                this.contentStyle.display = 'block';
                this.iconStyle.transform = 'rotate(90deg)';
            }
            else
            {
                this.contentStyle.display = 'none';
                this.iconStyle.transform = 'rotate(-90deg)';
            }
            this.opened = !this.opened;
        }
    }
}
</script>

<style scoped>
    .accordion-body 
    {
        font-weight: 600;
        font-size: 1.2em;
        cursor: pointer;
        margin-bottom: -1px;
    }

    .accordion-body-border
    {
        height: 1px;
        background-color: black;
        width: 100%;
    }

    .accordion-body-content
    {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
        height: 60px;
    }

    .accordion-body-content-icon
    {
        transform: rotate(-90deg);
        display: flex;
        transition: 200ms;
    }
    .accordion-content
    {
        padding: 10px;
        display: none;
    }
</style>