<template>
    <div :style="modalMessageStyle" class="modal-message">
        <div class="modal-message-body">
            <div class="modal-message-body-title">
                <slot name="title"></slot>
                <div @click="closeModal" class="modal-message-body-title-closebtn">
                    <CloseIcon fill="black" :size="24"></CloseIcon>
                </div>
            </div>
            <div class="modal-message-body-content">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
import CloseIcon from '../../../Icons/close.vue'

export default {
    props: {
        modelValue: Boolean
    },
    components: {
        CloseIcon
    },
    computed: {
        modalMessageStyle: {
            get() {
                let retval = {
                    display: 'none'
                };

                if(this.modelValue) {
                    retval.display = 'flex';
                } else {
                    retval.display = 'none';
                }

                return retval;
            },
            set(value) {}
        }
    },
    methods: {
        closeModal() {
            this.$emit('update:modelValue', false);
        }
    }
}
</script>

<style scoped>
    .modal-message {
        z-index: 99999999;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,.3);
        display: none;
        position: fixed;
        justify-content: center;
        align-items: center;
        font-family: 'Montserrat';
    }
    .modal-message-body
    {
        background: white;
        border-radius: 20px;
    }
    .modal-message-body-title
    {
        display: flex;
        padding: 0px 20px;
        align-items: center;
        font-weight: 600;
        justify-content: space-between;
        padding-top: 20px;
    }
    .modal-message-body-content
    {
        padding: 20px;
        padding-top: 10px;
        padding-bottom: 25px;
    }
    .modal-message-body-title-closebtn
    {
        cursor: pointer;
    }
</style>
