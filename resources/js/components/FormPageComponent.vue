<template>
    <div class="wrapForm">
        <ul v-if="errors.any()" class="alert-danger">
            <li v-for="error in errors.all()" :key="error">
                {{ error }}
            </li>
        </ul>
        <form method="post" id="formPageTest" :action="postformurl" @submit="onSubmitFormPage">
            <SubFormPage :csrf_token="csrf_token"></SubFormPage>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</template>
<script>
    import VeeValidate,{ Validator } from 'vee-validate';
    import th from 'vee-validate/dist/locale/th';
    import SubFormPage from './SubFormPageComponent';
    Vue.use(VeeValidate);
    Validator.localize('th',th);
    export default {
        components: {
            SubFormPage
        },
        provide() {
            return {
                $validator: this.$validator,
            }
        },
        props: [
            'postformurl','csrf_token'
        ],
        data(){
            return {
            }
        },
        mounted() {
            console.log(this.postformurl);
        },
        methods:{
            onSubmitFormPage(e){
                console.log("submit frm ja");
                this.$validator.validateAll().then(valid => {
                    console.log("has error",this.errors.any());
                    if(!valid){ 
                        console.log(this.errors);
                        console.log(this.errors.all());
                        e.preventDefault();
                    }
                   e.preventDefault();
                })
            }
        }
    }
</script>
<style scoped>
    #formPageTest{
        width:400px;
    }
    #formPageTest input{
        margin-bottom: 10px;
    }
</style>
