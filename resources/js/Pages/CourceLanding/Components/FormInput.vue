<template>
    <div class="form-input-wrapper">
        <label :for="id" :class="labelClassList">{{placeholder}}</label>

        <input :type="type" v-model="propModel" :id="id" v-if="mask.length" v-maska="mask" @focus="focusHandler" @blur="blurHandler" :class="inputClassList">
        <input :type="type" v-model="propModel" :id="id" v-else @focus="focusHandler" @blur="blurHandler" :class="inputClassList">
        <div class="error-message">
            {{propError}}
        </div>
    </div>
</template>

<script>

export default {
    props: {
        placeholder: {
            type: String,
            default: ''
        },
        mask: {
            type: String,
            default: ''
        },
        id: {
            type: String,
            default: ''
        },
        type: {
            type: String,
            default: 'text'
        },
        error: {
            type: String,
            default: ''
        },
        modelValue: String
    },
    emits: ['update:modelValue'],
    data() {
        return {
            labelClassList: {
                'form-label': true,
                'form-label-opened': false,
                'form-label-error': this.error.length > 0
            },
            inputClassList: {
                'form-input': true,
                'form-input-error': this.error.length > 0
            }
        }
    },
    methods: {
        focusHandler() {
            this.labelClassList['form-label-opened'] = true;
        },
        blurHandler() {
            if(this.modelValue.length <= 0) {
                this.labelClassList['form-label-opened'] = false;
            }
        }
    },
    computed: {
        propModel: {
            get() {
                this.labelClassList['form-label-opened'] = this.modelValue.length;
                
                return this.modelValue
            },
            set(value) {
                this.$emit('update:modelValue', value) 
            }
        },
        propError: {
            get() {
                this.inputClassList['form-input-error'] = this.error.length > 0;
                this.labelClassList['form-label-error'] = this.error.length > 0;
                return this.error;
            }
        }
    },
}
</script>

<style scoped lang="scss">
$error-color: #c90000;

.form-input {
    background: none;
    border: none;
    outline: none;
    margin: 0;
    color: black;
    width: 100%;
    height: 25px;
    font-family: 'Montserrat';
    border: 1px solid black;
    padding: 24px;
    border-radius: 8px;
}
.form-input-wrapper {
    text-align: left;
}
.form-input:focus, .form-input:focus-visible {
    border: none;
    border: 1px solid black;
    margin: 0;
    outline: none;
}
.form-label {
    position: relative;
    bottom: -35px;
    transition-duration: 70ms;
    margin-left: 25px;
    transition-property: bottom, font-size, margin-left;
    transition-timing-function: ease-in;
    font-size: 1em;
    color: #9B9B9B;
    font-family: 'Montserrat';
}
.form-label-opened {
    bottom: -9px;
    margin-left: 10px;
    font-size: .9em;
    background: white;
    color: rgb(1, 1, 70);
    cursor: default;
}
.form-input-wrapper > label {
    cursor: text;
}

.form-input-error
{
    border: 1px solid $error-color;
}
.form-label-error, .error-message{
    color: $error-color;
}
.error-message {
    font-size: .8em;
}
</style>
