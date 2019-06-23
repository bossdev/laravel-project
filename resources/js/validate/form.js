export default {
    // firstname:"required|min:4",
    // favourite:"required|custom-fav:xxx,vfg"
    firstname:{
        required: true,
        min:4
    },
    favourite: {
        required: true,
        'custom-fav':'xxx'
    }
}
export const customRules = {
    'custom-fav':{
        getMessage(field, val) {
            console.log(field, val)
            return field+' ห้ามเป็น '+val;
        },
        validate(value, field) {
            console.log(value, field);
            // for(let x of field){
                if(value==field){
                    return false;
                }
            // }
            return true;
        }
    }
}