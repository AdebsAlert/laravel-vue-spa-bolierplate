<template>
</template>

<script>
    import {mapGetters} from 'vuex';
    import jwtToken from '../../helpers/jwt-token';
    import {api} from "../../config";

    export default {
        mounted() {
            axios.get(api.logout+'?token='+jwtToken.getToken());
            jwtToken.removeToken();
            this.$store.dispatch('unsetAuthUser')
                .then(() => {
                    this.$noty.success('You are logged out');
                    this.$router.push({name: 'login'});
                });
        }
    }
</script>
