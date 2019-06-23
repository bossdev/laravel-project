export default {
    methods:{
        objNestedGet: function(obj,keys,defaultVal){
            if(typeof defaultVal=='undefined'){
                defaultVal = null
            }
            if(typeof obj!='object'){
                return defaultVal;
            }
            if(obj[keys]){
                return obj[keys];
            }
            if(typeof obj=='object' && typeof keys=='string'){
                let keyNests = keys.split(".");
                for(var nest of keyNests){
                    if(typeof obj=='object' && typeof obj[nest]!='undefined'){
                        obj = obj[nest];
                    }else{
                        return defaultVal;
                    }
                }
            }
            return obj;
        }
    }
}