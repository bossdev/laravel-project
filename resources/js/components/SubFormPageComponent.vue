<template>
    <div>
        <input type="hidden" name="_token" :value="csrf_token" />
        <input type="text" name="firstname" data-vv-validate-on="blur" v-model="firstname" :data-valid="validateRule['firstname']" v-validate="validateRule['firstname']" data-vv-as="ชื่อจริง" class="form-control" placeholder="firstname" />
        <p class="text-danger" v-if="errors.has('firstname')">{{ errors.first('firstname') }}</p>
        <input type="text" name="favourite" data-vv-validate-on="blur" v-model="favourite" v-validate="validateRule['favourite']" data-vv-as="สิ่งที่ชอบ" class="form-control" placeholder="favourite" />
        <p class="text-danger" v-if="errors.has('favourite')">{{ errors.first('favourite') }}</p>
    </div>
</template>

<script>
import validateRule from '../validate/form';
import formMixins from '../mixins/form'
export default {
    mixins: [formMixins],
    props: [
        'csrf_token'
    ],
    data(){
        return {
            favourite:"",
            firstname:"",
            validateRule:validateRule,
            dataObj:{
                accountInfo:{
                    name:'bossza',
                    age:25,
                    maxz:null,
                    contact_address:{
                        house_no:12232,
                        district:'mung',
                        max:[
                            'sa','fff','we','hggd'
                        ]
                    }
                },
                province:'bk'
            }
        }
    },
    methods:{
        dataGetda:function(){
            console.log('dataaa');
        }
    },
    mounted: function () {
        // let dataObj = {
        //     accountInfo:{
        //         name:'bossza',
        //         age:25,
        //         maxz:null,
        //         contact_address:{
        //             house_no:12232,
        //             district:'mung',
        //             max:[
        //                 'sa','fff','we','hggd'
        //             ]
        //         }
        //     },
        //     province:'bk'
        // }
        // let dd = 'house_no';
        // console.log('data is',this.objNestedGet(dataObj,'accountInfo.contact_address.'+dd));
    },
    watch: {
        favourite: function(val){
            // console.log('fav',val);
            // if(val=='yyy'){
            //     // this.validateRule.firstname.min = 8;
            //     let ruleFirstname = this.validateRule.firstname;
            //     ruleFirstname['min'] = 10;
            //     this.validateRule.firstname = ruleFirstname;
            // }
        }
    },
    inject: ['$validator'],
}
</script>

<style>
    #formPageTest input{
        margin-bottom: 10px;
    }
</style>
