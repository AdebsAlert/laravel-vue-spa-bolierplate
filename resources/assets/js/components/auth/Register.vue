<template>
    <div class="container">
        <div class="row">

            <div class="col-lg-8 m-auto">
                <div class="page-header">
                    <h1 class="display-4">Register</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <register-form @loginSuccess="loginSuccess"></register-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import RegisterForm from './RegisterForm.vue'
    import jwtToken from "../../helpers/jwt-token";
    import {mapActions} from "vuex";

    export default {
        components: {
            'register-form': RegisterForm
        },
        methods: {
            ...mapActions([
                'setAuthUser'
            ]),
            loginSuccess(data) {
                jwtToken.setToken(data.token);
                this.setAuthUser(data.user);
                this.$router.push({name: 'profile'});
            }
        }
    }
</script>
