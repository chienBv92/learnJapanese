<template>
    <!-- <div id="app">
    <router-view/>-->
    <!-- </div> -->
    <div class="Contact">
        <div class="txtHeader">Thông tin liên hệ</div>
        <datacontact-component v-bind:address="address" v-bind:phone="phone">
            <p slot="title" class="txt-normal">chào các bạn tôi là chiến</p>
            <p slot="name" class="txt-normal">Tôi đến từ Hải dương</p>


        </datacontact-component>
        <p class="txt-normal">chào các bạn tôi là Minh</p>
        <p class="txt-normal">Tôi đến từ Hải phòng</p>
    </div>
</template>

<script>
    import DataContact from "./DataContact";
    export default {
        components: {
            "datacontact-component": DataContact
        },
        data: function(){
            return {
                address: '241 xuân thủy, dịch vọng hậu',
                phone: '09288273732'
            }
        }
    };
</script >

<style lang="scss" scoped>
    .Contact {
        width: 100%;
        background: silver;
        .txtHeader {
            font-size: 18px;
            color: red;
            text-align: center;
            font-weight: bold;
        }
        .txt-normal {
            font-size: 13px;
            font-weight: normal;
            text-align: left;
        }
    }
</style>
