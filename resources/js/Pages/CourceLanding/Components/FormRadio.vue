<template>
    <div :class="bodyClassList">
        <input :value="value" v-model="propModel" :id="id" :type="square ? 'checkbox' : 'radio'">
        <label :for="id">
            <slot>
            </slot>
        </label>
    </div>
</template>

<script>

export default {
    props: {
        id: {
            type: String,
            default: ''
        },
        square: {
            type: Boolean,
            default: false
        },
        value: String,
        modelValue: String
    },
    emits: ['update:modelValue'],
    data() {
        return {
            bodyClassList: {
                'radio-input': true,
                'square': this.square
            },

        }
    },
    computed: {
        propModel: {
            get() {
                return this.modelValue
            },
            set(value) {
                this.$emit('update:modelValue', value) 
            }
        }
    },
}
</script>

<style scoped lang="scss">
    $button-size: 15px;
    $inner-dot-size: $button-size - ($button-size / 3);

    .radio-input {
        margin-left: 15px;
        margin-bottom: 5px;
    }
    .radio-input > input
    {
        margin-right: 5px;
        display: none;
    }
    .radio-input > label
    {
        display: flex;
        align-items: center;
        position: relative;
    }

    .radio-input > label:before
    {
        margin-top: 0.1em;
        display: inline-flex;
        flex-shrink: 0;
        content: "";
        background-color: #fff;
        width: $button-size;
        height: $button-size;
        border-radius: 50%;
        margin-right: 0.375em;
        transition: 0.25s ease;
        box-shadow: inset 0 0 0 0.05em black;
        cursor: pointer;
    }

    .radio-input > label:after
    {
        position: absolute;
        display: inline-flex;
        flex-shrink: 0;
        content: "";
        background-color: #FF85C2;
        width: $inner-dot-size;
        height: $inner-dot-size;
        border-radius: 50%;
        transition: 0.25s ease;
        cursor: pointer;
        margin-top: 0.1em;
        margin-left: ($button-size - $inner-dot-size) / 2;
        opacity: 0;
    }

    .radio-input > input:checked + label::after
    {
        opacity: 1;
    }

    .square > label:before, .square > label:after
    {
        border-radius: 30%;
    }

</style>
