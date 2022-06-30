<template>
    <div :class="buttonClasslist" @click="click" :style="{'background-color': backgroundColor, color: color}">
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        backgroundColor: {
            type: String,
            default: '#9E024D'
        },
        color: {
            type: String,
            default: "white"
        },
        disabled: {
            type:Boolean,
            default: false
        }
    },
    emits: ['click'],
    data() {
        return {
            buttonClasslist: {
                'button': true,
                'disabled': false
            }
        }
    },
    watch: {
        disabled() {
            this.buttonClasslist.disabled = this.disabled;
        }
    },
    methods: {
        click() {
            if(!this.disabled) {
                this.$emit('click');
            }
        }
    }
}
</script>

<style scoped>
.button {
    padding: 14px 25px;
    font-family: 'Montserrat';
    font-size: .9em;
    font-weight: 600;
    border-radius: 7px;
    cursor: pointer;
}

.button:hover {
    filter: brightness(.8);
}

.button:active {
    filter: brightness(.5);
}

.disabled {
    filter: brightness(.8);
    opacity: .6;
}

</style>