<template>
</template>

<script>
    import {mapGetters} from 'vuex';
    import jwtToken from '../../helpers/jwt-token';

    export default {
        mounted() {
            jwtToken.removeToken();
            this.$store.dispatch('unsetAuthUser')
                .then(() => {
                    this.$noty.success('You are logged out');
                    this.$router.push({name: 'login'});
                });
        }
    }
</script>
