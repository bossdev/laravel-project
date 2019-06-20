<template>
    <div>
        <input type="hidden" name="_token" :value="csrf_token" />
        <input type="text" name="firstname" v-validate="'required|min:3'" data-vv-as="ชื่อจริง" class="form-control" placeholder="firstname" />
        <p class="text-danger" v-if="errors.has('firstname')">{{ errors.first('firstname') }}</p>
        <input type="text" name="favourite" v-validate="'required'" data-vv-as="สิ่งที่ชอบ" class="form-control" placeholder="favourite" />
        <p class="text-danger" v-if="errors.has('favourite')">{{ errors.first('favourite') }}</p>
    </div>
</template>

<script>
export default {
    props: [
        'csrf_token'
    ],
    inject: ['$validator']
}
</script>

<style>

</style>
