<template>
    <div>
        <input type="hidden" name="_token" :value="csrf_token" />
        <input type="text" name="firstname" :data-valid="validateform['firstname']" v-validate="validateform['firstname']" data-vv-as="ชื่อจริง" class="form-control" placeholder="firstname" />
        <p class="text-danger" v-if="errors.has('firstname')">{{ errors.first('firstname') }}</p>
        <input type="text" name="favourite" v-model="favourite" v-validate="'required'" data-vv-as="สิ่งที่ชอบ" class="form-control" placeholder="favourite" />
        <p class="text-danger" v-if="errors.has('favourite')">{{ errors.first('favourite') }}</p>
    </div>
</template>

<script>
export default {
    props: [
        'csrf_token','validateform'
    ],
    data(){
        return {
            favourite:"",
            validateformStatic:{}
        }
    },
    mounted: function () {
        this.validateformStatic = this.validateform
        console.log("this.validateformStatic",this.validateformStatic)
    },
    inject: ['$validator'],
    watch: {
        favourite:function(val){
            if(val=="xxx"){
                this.validateform['firstname'] = 'required|min:5';
            }else{
                this.validateform['firstname'] = this.validateformStatic['firstname'];
            }
            console.log(this.validateformStatic['firstname']);
            console.log(this.validateform['firstname']);
        }
    }
}
</script>

<style>

</style>
