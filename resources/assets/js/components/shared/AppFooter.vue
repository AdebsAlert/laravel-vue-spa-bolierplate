<template>
	<footer>
		<hr>
		<div class="container">
			<span v-once>{{ siteName }}</span> &copy; <span v-once>{{ currentYear }}</span>
		</div>
	</footer>
</template>

<script>
	import {siteName} from '../../config';

	export default {
		data() {
			return {
				siteName: siteName,
				currentYear: (new Date).getFullYear()
			}
		}
	}
</script>
