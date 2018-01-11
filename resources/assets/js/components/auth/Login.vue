<template>
	<div class="container">
		<div class="row">

			<div class="col-lg-8 m-auto">
				<div class="page-header">
					<h1 class="display-4">Login</h1>
				</div>
				<div class="card">
					<div class="card-body">
						<login-form @loginSuccess="loginSuccess"></login-form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import LoginForm from './LoginForm.vue'
	import jwtToken from "../../helpers/jwt-token";
	import {mapActions} from "vuex";

	export default {
		components: {
			'login-form': LoginForm
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
