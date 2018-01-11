import Home from './components/home/Home.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';

export default [
	{
		path: '/',
		name: 'index',
		component: Home,
		meta: {}
	},
	{
		path: '/login',
		name: 'login',
		component: Login,
		meta: {requiresGuest: true}
	},
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {requiresGuest: true}
    },
];